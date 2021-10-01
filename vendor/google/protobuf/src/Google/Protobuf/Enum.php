<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/type.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Enum type definition.
 *
 * Generated from protobuf message <code>google.protobuf.Enum</code>
 */
class Enum extends \Google\Protobuf\Internal\Message
{
    /**
     * Enum type name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Enum value definitions.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValue enumvalue = 2;</code>
     */
    private $enumvalue;
    /**
     * Protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 3;</code>
     */
    private $options;
    /**
     * The source context.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 4;</code>
     */
    protected $source_context = null;
    /**
     * The source syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 5;</code>
     */
    protected $syntax = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $name
     *           Enum type name.
     * @type \Google\Protobuf\EnumValue[]|\Google\Protobuf\Internal\RepeatedField $enumvalue
     *           Enum value definitions.
     * @type \Google\Protobuf\Option[]|\Google\Protobuf\Internal\RepeatedField $options
     *           Protocol buffer options.
     * @type \Google\Protobuf\SourceContext $source_context
     *           The source context.
     * @type int $syntax
     *           The source syntax.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Google\Protobuf\Type::initOnce();
        parent::__construct($data);
    }

    /**
     * Enum type name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Enum type name.
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
     * Enum value definitions.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValue enumvalue = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnumvalue()
    {
        return $this->enumvalue;
    }

    /**
     * Enum value definitions.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.EnumValue enumvalue = 2;</code>
     * @param \Google\Protobuf\EnumValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnumvalue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\EnumValue::class);
        $this->enumvalue = $arr;

        return $this;
    }

    /**
     * Protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 3;</code>
     * @param \Google\Protobuf\Option[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Option::class);
        $this->options = $arr;

        return $this;
    }

    /**
     * The source context.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 4;</code>
     * @return \Google\Protobuf\SourceContext|null
     */
    public function getSourceContext()
    {
        return $this->source_context;
    }

    public function hasSourceContext()
    {
        return isset($this->source_context);
    }

    public function clearSourceContext()
    {
        unset($this->source_context);
    }

    /**
     * The source context.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 4;</code>
     * @param \Google\Protobuf\SourceContext $var
     * @return $this
     */
    public function setSourceContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\SourceContext::class);
        $this->source_context = $var;

        return $this;
    }

    /**
     * The source syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 5;</code>
     * @return int
     */
    public function getSyntax()
    {
        return $this->syntax;
    }

    /**
     * The source syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSyntax($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\Syntax::class);
        $this->syntax = $var;

        return $this;
    }

}

