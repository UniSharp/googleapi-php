<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/entity.proto

namespace Google\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * An array value.
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1.ArrayValue</code>
 */
class ArrayValue extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Values in the array.
     * The order of this array may not be preserved if it contains a mix of
     * indexed and unindexed values.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Value values = 1;</code>
     */
    private $values;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1\Entity::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Values in the array.
     * The order of this array may not be preserved if it contains a mix of
     * indexed and unindexed values.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Value values = 1;</code>
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * <pre>
     * Values in the array.
     * The order of this array may not be preserved if it contains a mix of
     * indexed and unindexed values.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Value values = 1;</code>
     */
    public function setValues(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\Value::class);
        $this->values = $arr;
    }

}

