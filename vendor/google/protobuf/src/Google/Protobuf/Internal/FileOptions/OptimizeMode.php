<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal\FileOptions;

use UnexpectedValueException;

/**
 * Generated classes can be optimized for speed or code size.
 *
 * Protobuf type <code>google.protobuf.FileOptions.OptimizeMode</code>
 */
class OptimizeMode
{
    /**
     * Generate complete code for parsing, serialization,
     *
     * Generated from protobuf enum <code>SPEED = 1;</code>
     */
    const SPEED = 1;
    /**
     * etc.
     *
     * Generated from protobuf enum <code>CODE_SIZE = 2;</code>
     */
    const CODE_SIZE = 2;
    /**
     * Generate code using MessageLite and the lite runtime.
     *
     * Generated from protobuf enum <code>LITE_RUNTIME = 3;</code>
     */
    const LITE_RUNTIME = 3;

    private static $valueToName = [
        self::SPEED => 'SPEED',
        self::CODE_SIZE => 'CODE_SIZE',
        self::LITE_RUNTIME => 'LITE_RUNTIME',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OptimizeMode::class, \Google\Protobuf\Internal\FileOptions_OptimizeMode::class);

