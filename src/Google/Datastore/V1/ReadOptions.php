<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The options shared by read requests.
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1.ReadOptions</code>
 */
class ReadOptions extends \Google\Protobuf\Internal\Message
{
    protected $consistency_type;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The non-transactional read consistency to use.
     * Cannot be set to `STRONG` for global queries.
     * </pre>
     *
     * <code>.google.datastore.v1.ReadOptions.ReadConsistency read_consistency = 1;</code>
     */
    public function getReadConsistency()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * The non-transactional read consistency to use.
     * Cannot be set to `STRONG` for global queries.
     * </pre>
     *
     * <code>.google.datastore.v1.ReadOptions.ReadConsistency read_consistency = 1;</code>
     */
    public function setReadConsistency($var)
    {
        GPBUtil::checkEnum($var, \Google\Datastore\V1\ReadOptions_ReadConsistency::class);
        $this->writeOneof(1, $var);
    }

    /**
     * <pre>
     * The identifier of the transaction in which to read. A
     * transaction identifier is returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     * </pre>
     *
     * <code>bytes transaction = 2;</code>
     */
    public function getTransaction()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * The identifier of the transaction in which to read. A
     * transaction identifier is returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     * </pre>
     *
     * <code>bytes transaction = 2;</code>
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);
    }

    public function getConsistencyType()
    {
        return $this->whichOneof("consistency_type");
    }

}

