<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/value.proto

namespace Google\Api\Expr\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A map.
 * Wrapped in a message so 'not set' and empty can be differentiated, which is
 * required for use in a 'oneof'.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.MapValue</code>
 */
class MapValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The set of map entries.
     * CEL has fewer restrictions on keys, so a protobuf map represenation
     * cannot be used.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.MapValue.Entry entries = 1;</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type \Google\Api\Expr\V1alpha1\MapValue\Entry[]|\Google\Protobuf\Internal\RepeatedField $entries
     *           The set of map entries.
     *           CEL has fewer restrictions on keys, so a protobuf map represenation
     *           cannot be used.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Value::initOnce();
        parent::__construct($data);
    }

    /**
     * The set of map entries.
     * CEL has fewer restrictions on keys, so a protobuf map represenation
     * cannot be used.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.MapValue.Entry entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * The set of map entries.
     * CEL has fewer restrictions on keys, so a protobuf map represenation
     * cannot be used.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.MapValue.Entry entries = 1;</code>
     * @param \Google\Api\Expr\V1alpha1\MapValue\Entry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Expr\V1alpha1\MapValue\Entry::class);
        $this->entries = $arr;

        return $this;
    }

}

