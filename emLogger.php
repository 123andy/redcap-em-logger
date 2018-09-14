<?php
namespace Stanford\emLogger;


class emLogger extends \ExternalModules\AbstractExternalModule
{
    private $log_json;
    private $log_tsv;
    private $base_server_path;
    private $ts_start;

    function __construct()
    {
        parent::__construct();
        $this->log_json = $this->getSystemSetting('log-json');
        $this->log_tsv = $this->getSystemSetting('log-tsv');
        $this->base_server_path = $this->getSystemSetting('base-server-path');
        $this->ts_start = microtime(true);
    }


    function isJson($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }


    /**
     * A utility logging function
     * @param        $file_prefix (will be combined with the system base-server-path to build a complete filename
     * @param        $args (must be a single variable - use an array to pass many variables at once)
     * @param string $type (logging level: INFO / DEBUG / ERROR)
     * @param null   $fix_backtrace (optional parameter to assist when nesting logging functions)
     * @throws \Exception
     */
    function emLog($file_prefix, $args, $type = "INFO", $fix_backtrace = null) {

        // FILENAME
        $filename = $this->base_server_path . $file_prefix;

        // BACKTRACE (remove one from this logging class)
        $bt = debug_backtrace();

        /*  In cases where you call this log function from a parent object's log function, you really are interested
            in the backtrace from one level higher.  To make the logic work, we strip off the last backtrace array
            element.  If, on the other hand, you simply instantiate this and call it from a script, you will not need
            to strip.  There is a caveat - if you wrap your script with a function called log/debug/error it may
            erroneously strip a backtrace and leave your line number and calling function incorrect.

            To summarize, if you wrap this in a parent object, call it with methods 'log,debug, or error' and everything
            should work.
        */

        // If you do not specify, we 'guess' if we should fix the backtrace by looking at the name of the function 1 level up
        if (isset($bt[1]["function"])
            && in_array($bt[1]['function'], array("log","debug","error","emLog","emDebug","emError"))
            && is_null($fix_backtrace)) $fix_backtrace = true;

        // PARSE BACKTRACE
        if ($fix_backtrace) array_shift($bt);
        $function   = isset($bt[1]['function']) ? $bt[1]['function']    : "";
        $file       = isset($bt[0]['file'])     ? $bt[0]['file']        : "";
        $line       = isset($bt[0]['line'])     ? $bt[0]['line']        : "";

        // DETERMINE TIME
        $runtime = round ((microtime(true) - $this->ts_start) * 1000,1);
        $date = date('Y-m-d H:i:s');

        // DETERMINE PROJECT ID
        global $project_id;
        $pid        = isset($_GET['pid'])       ? $_GET['pid']          : (empty($project_id) ? "-" : $project_id);

        // DETERMINE USERNAME
        $username = \ExternalModules\ExternalModules::getUsername();
        if (empty($username)) $username = "-";

        // Convert into an array in the event someone passes a string or other variable type
        if (!is_array($args)) $args = array($args);

        if ($this->log_json) {

            // Add context to args
            $args_detail = array();
            $i = 1;
            foreach ($args as $arg) {
                $detail = array();

                $arg_type = gettype($arg);
                if ($arg_type == "string") {
                    if ($this->isJson($arg)) {
                        // check for json
                        $arg_type="json";
                        $arg=json_decode($arg);
                    }
                }
                $detail['type'] = $arg_type;
                $detail['value'] = $arg;

                if (count($args) > 1) {
                    $detail['count'] = $i;
                }

                $args_detail[] = $detail;
                $i++;
            }

            $entry = array(
                "date"      => $date,
                "type"      => $type,
                "pid"       => $pid,
                "username"  => $username,
                "args"      => $args_detail,
                //"args1"     => $args,
                "file"      => $file,
                "line"      => $line,
                "function"  => $function,
                "runtime"   => $runtime
            );

            if ($type == "DEBUG") $entry['backtrace'] = $bt;

            $file_suffix = "_log.json";
            $log = json_encode($entry) . "\n";

            // WRITE TO FILE
            $this->write($filename . $file_suffix, $log, FILE_APPEND);
        } //json

        if ($this->log_tsv) {
            $entries = array();

            $count = count($args);
            foreach ($args as $i => $message) {

                // Convert arrays/objects into string for logging
                if (is_array($message)) {
                    $obj = "ARR";
                    $msg = empty($message) ? "()" : print_r($message, true);
                } elseif (is_object($message)) {
                    $obj = "OBJ";
                    $msg = print_r($message, true);
                } elseif (is_string($message) || is_numeric($message)) {
                    $obj = "STR";
                    $msg = $message;
                } elseif (is_bool($message)) {
                    $obj = "BOOL";
                    $msg = ($message ? "true" : "false");
                } elseif (is_null($message)) {
                    $obj = "NULL";
                    $msg = "";
                } else {
                    $obj = "UNK";
                    $msg = print_r($message, true);
                }

                $entry = array(
                    "date"     => $date,
                    "ms"       => $runtime,
                    "pid"      => $pid,
                    "username" => $username,
                    "file"     => basename($file, '.php'),
                    "line"     => $line,
                    "function" => $function,
                    "type"     => $type,
                    "arg"      => "[" . ($i + 1) . "/" . $count . "]",
                    "obj"      => $obj,
                    "msg"      => $msg
                );
                $entries[] = implode("\t", $entry);

            } // loop
            $file_suffix = ".log";
            $log = implode("\n", $entries) . "\n";

            // WRITE TO FILE
            $this->write($filename . $file_suffix, $log, FILE_APPEND);
        } // tsv

    } // log

    function write($filename, $data, $flags) {
        if (is_writable($filename) || is_writable(dirname($filename))) {
            file_put_contents($filename, $data, $flags);
        } else {
            throw new \Exception ("Unable to write emLogger to $filename - is the directory writable?");
        }
    }

} // class