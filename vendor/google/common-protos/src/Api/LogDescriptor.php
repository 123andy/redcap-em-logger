<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/log.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of a log type. Example in YAML format:
 *     - name: library.googleapis.com/activity_history
 *       description: The history of borrowing and returning library items.
 *       display_name: Activity
 *       labels:
 *       - key: /customer_id
 *         description: Identifier of a library customer
 *
 * Generated from protobuf message <code>google.api.LogDescriptor</code>
 */
class LogDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the log. It must be less than 512 characters long and can
     * include the following characters: upper- and lower-case alphanumeric
     * characters [A-Za-z0-9], and punctuation characters including
     * slash, underscore, hyphen, period [/_-.].
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The set of labels that are available to describe a specific log entry.
     * Runtime requests that contain labels not specified here are
     * considered invalid.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor labels = 2;</code>
     */
    private $labels;
    /**
     * A human-readable description of this log. This information appears in
     * the documentation and can contain details.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * The human-readable name for this log. This information appears on
     * the user interface and should be concise.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     */
    private $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $name
     *           The name of the log. It must be less than 512 characters long and can
     *           include the following characters: upper- and lower-case alphanumeric
     *           characters [A-Za-z0-9], and punctuation characters including
     *           slash, underscore, hyphen, period [/_-.].
     * @type \Google\Api\LabelDescriptor[]|\Google\Protobuf\Internal\RepeatedField $labels
     *           The set of labels that are available to describe a specific log entry.
     *           Runtime requests that contain labels not specified here are
     *           considered invalid.
     * @type string $description
     *           A human-readable description of this log. This information appears in
     *           the documentation and can contain details.
     * @type string $display_name
     *           The human-readable name for this log. This information appears on
     *           the user interface and should be concise.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Google\Api\Log::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the log. It must be less than 512 characters long and can
     * include the following characters: upper- and lower-case alphanumeric
     * characters [A-Za-z0-9], and punctuation characters including
     * slash, underscore, hyphen, period [/_-.].
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the log. It must be less than 512 characters long and can
     * include the following characters: upper- and lower-case alphanumeric
     * characters [A-Za-z0-9], and punctuation characters including
     * slash, underscore, hyphen, period [/_-.].
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The set of labels that are available to describe a specific log entry.
     * Runtime requests that contain labels not specified here are
     * considered invalid.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor labels = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The set of labels that are available to describe a specific log entry.
     * Runtime requests that contain labels not specified here are
     * considered invalid.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor labels = 2;</code>
     * @param \Google\Api\LabelDescriptor[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\LabelDescriptor::class);
        $this->labels = $arr;

        return $this;
    }

    /**
     * A human-readable description of this log. This information appears in
     * the documentation and can contain details.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A human-readable description of this log. This information appears in
     * the documentation and can contain details.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The human-readable name for this log. This information appears on
     * the user interface and should be concise.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The human-readable name for this log. This information appears on
     * the user interface and should be concise.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

