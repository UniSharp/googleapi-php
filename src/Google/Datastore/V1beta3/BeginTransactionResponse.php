<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/datastore.proto

namespace Google\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response for [Datastore.BeginTransaction][google.datastore.v1beta3.Datastore.BeginTransaction].
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1beta3.BeginTransactionResponse</code>
 */
class BeginTransactionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The transaction identifier (always present).
     * </pre>
     *
     * <code>bytes transaction = 1;</code>
     */
    private $transaction = '';

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Datastore::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The transaction identifier (always present).
     * </pre>
     *
     * <code>bytes transaction = 1;</code>
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * <pre>
     * The transaction identifier (always present).
     * </pre>
     *
     * <code>bytes transaction = 1;</code>
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction = $var;
    }

}

