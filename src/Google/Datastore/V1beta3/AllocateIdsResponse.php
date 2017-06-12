<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/datastore.proto

namespace Google\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response for [Datastore.AllocateIds][google.datastore.v1beta3.Datastore.AllocateIds].
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1beta3.AllocateIdsResponse</code>
 */
class AllocateIdsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The keys specified in the request (in the same order), each with
     * its key path completed with a newly allocated ID.
     * </pre>
     *
     * <code>repeated .google.datastore.v1beta3.Key keys = 1;</code>
     */
    private $keys;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Datastore::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The keys specified in the request (in the same order), each with
     * its key path completed with a newly allocated ID.
     * </pre>
     *
     * <code>repeated .google.datastore.v1beta3.Key keys = 1;</code>
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * <pre>
     * The keys specified in the request (in the same order), each with
     * its key path completed with a newly allocated ID.
     * </pre>
     *
     * <code>repeated .google.datastore.v1beta3.Key keys = 1;</code>
     */
    public function setKeys(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1beta3\Key::class);
        $this->keys = $var;
    }

}

