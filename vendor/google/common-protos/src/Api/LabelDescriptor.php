<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/label.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of a label.
 *
 * Generated from protobuf message <code>google.api.LabelDescriptor</code>
 */
class LabelDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * The label key.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * The type of data that can be assigned to the label.
     *
     * Generated from protobuf field <code>.google.api.LabelDescriptor.ValueType value_type = 2;</code>
     */
    private $value_type = 0;
    /**
     * A human-readable description for the label.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $key
     *           The label key.
     * @type int $value_type
     *           The type of data that can be assigned to the label.
     * @type string $description
     *           A human-readable description for the label.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Google\Api\Label::initOnce();
        parent::__construct($data);
    }

    /**
     * The label key.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * The label key.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * The type of data that can be assigned to the label.
     *
     * Generated from protobuf field <code>.google.api.LabelDescriptor.ValueType value_type = 2;</code>
     * @return int
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * The type of data that can be assigned to the label.
     *
     * Generated from protobuf field <code>.google.api.LabelDescriptor.ValueType value_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setValueType($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\LabelDescriptor_ValueType::class);
        $this->value_type = $var;

        return $this;
    }

    /**
     * A human-readable description for the label.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A human-readable description for the label.
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

}

