<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/metric.proto

namespace Google\Api\MetricDescriptor;

use UnexpectedValueException;

/**
 * The value type of a metric.
 *
 * Protobuf type <code>google.api.MetricDescriptor.ValueType</code>
 */
class ValueType
{
    /**
     * Do not use this default value.
     *
     * Generated from protobuf enum <code>VALUE_TYPE_UNSPECIFIED = 0;</code>
     */
    const VALUE_TYPE_UNSPECIFIED = 0;
    /**
     * The value is a boolean.
     * This value type can be used only if the metric kind is `GAUGE`.
     *
     * Generated from protobuf enum <code>BOOL = 1;</code>
     */
    const BOOL = 1;
    /**
     * The value is a signed 64-bit integer.
     *
     * Generated from protobuf enum <code>INT64 = 2;</code>
     */
    const INT64 = 2;
    /**
     * The value is a double precision floating point number.
     *
     * Generated from protobuf enum <code>DOUBLE = 3;</code>
     */
    const DOUBLE = 3;
    /**
     * The value is a text string.
     * This value type can be used only if the metric kind is `GAUGE`.
     *
     * Generated from protobuf enum <code>STRING = 4;</code>
     */
    const STRING = 4;
    /**
     * The value is a [`Distribution`][google.api.Distribution].
     *
     * Generated from protobuf enum <code>DISTRIBUTION = 5;</code>
     */
    const DISTRIBUTION = 5;
    /**
     * The value is money.
     *
     * Generated from protobuf enum <code>MONEY = 6;</code>
     */
    const MONEY = 6;

    private static $valueToName = [
        self::VALUE_TYPE_UNSPECIFIED => 'VALUE_TYPE_UNSPECIFIED',
        self::BOOL => 'BOOL',
        self::INT64 => 'INT64',
        self::DOUBLE => 'DOUBLE',
        self::STRING => 'STRING',
        self::DISTRIBUTION => 'DISTRIBUTION',
        self::MONEY => 'MONEY',
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
class_alias(ValueType::class, \Google\Api\MetricDescriptor_ValueType::class);

