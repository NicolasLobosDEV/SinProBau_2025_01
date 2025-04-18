<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/protobuf/wrappers.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Wrapper message for `double`.
 * The JSON representation for `DoubleValue` is JSON number.
 * Not recommended for use in new APIs, but still useful for legacy APIs and
 * has no plan to be removed.
 *
 * Generated from protobuf message <code>google.protobuf.DoubleValue</code>
 */
class DoubleValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The double value.
     *
     * Generated from protobuf field <code>double value = 1;</code>
     */
    protected $value = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $value
     *           The double value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        parent::__construct($data);
    }

    /**
     * The double value.
     *
     * Generated from protobuf field <code>double value = 1;</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The double value.
     *
     * Generated from protobuf field <code>double value = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;

        return $this;
    }

}

