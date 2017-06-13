<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response for [Datastore.Lookup][google.datastore.v1.Datastore.Lookup].
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1.LookupResponse</code>
 */
class LookupResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Entities found as `ResultType.FULL` entities. The order of results in this
     * field is undefined and has no relation to the order of the keys in the
     * input.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.EntityResult found = 1;</code>
     */
    private $found;
    /**
     * <pre>
     * Entities not found as `ResultType.KEY_ONLY` entities. The order of results
     * in this field is undefined and has no relation to the order of the keys
     * in the input.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.EntityResult missing = 2;</code>
     */
    private $missing;
    /**
     * <pre>
     * A list of keys that were not looked up due to resource constraints. The
     * order of results in this field is undefined and has no relation to the
     * order of the keys in the input.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Key deferred = 3;</code>
     */
    private $deferred;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Entities found as `ResultType.FULL` entities. The order of results in this
     * field is undefined and has no relation to the order of the keys in the
     * input.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.EntityResult found = 1;</code>
     */
    public function getFound()
    {
        return $this->found;
    }

    /**
     * <pre>
     * Entities found as `ResultType.FULL` entities. The order of results in this
     * field is undefined and has no relation to the order of the keys in the
     * input.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.EntityResult found = 1;</code>
     */
    public function setFound(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\EntityResult::class);
        $this->found = $arr;
    }

    /**
     * <pre>
     * Entities not found as `ResultType.KEY_ONLY` entities. The order of results
     * in this field is undefined and has no relation to the order of the keys
     * in the input.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.EntityResult missing = 2;</code>
     */
    public function getMissing()
    {
        return $this->missing;
    }

    /**
     * <pre>
     * Entities not found as `ResultType.KEY_ONLY` entities. The order of results
     * in this field is undefined and has no relation to the order of the keys
     * in the input.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.EntityResult missing = 2;</code>
     */
    public function setMissing(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\EntityResult::class);
        $this->missing = $arr;
    }

    /**
     * <pre>
     * A list of keys that were not looked up due to resource constraints. The
     * order of results in this field is undefined and has no relation to the
     * order of the keys in the input.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Key deferred = 3;</code>
     */
    public function getDeferred()
    {
        return $this->deferred;
    }

    /**
     * <pre>
     * A list of keys that were not looked up due to resource constraints. The
     * order of results in this field is undefined and has no relation to the
     * order of the keys in the input.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Key deferred = 3;</code>
     */
    public function setDeferred(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\Key::class);
        $this->deferred = $arr;
    }

}

