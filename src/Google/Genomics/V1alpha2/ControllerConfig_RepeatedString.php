<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1alpha2.ControllerConfig.RepeatedString</code>
 */
class ControllerConfig_RepeatedString extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated string values = 1;</code>
     */
    private $values;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated string values = 1;</code>
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * <code>repeated string values = 1;</code>
     */
    public function setValues(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;
    }

}

