<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request for [Datastore.Commit][google.datastore.v1.Datastore.Commit].
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1.CommitRequest</code>
 */
class CommitRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The ID of the project against which to make the request.
     * </pre>
     *
     * <code>string project_id = 8;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * The type of commit to perform. Defaults to `TRANSACTIONAL`.
     * </pre>
     *
     * <code>.google.datastore.v1.CommitRequest.Mode mode = 5;</code>
     */
    private $mode = 0;
    /**
     * <pre>
     * The mutations to perform.
     * When mode is `TRANSACTIONAL`, mutations affecting a single entity are
     * applied in order. The following sequences of mutations affecting a single
     * entity are not permitted in a single `Commit` request:
     * - `insert` followed by `insert`
     * - `update` followed by `insert`
     * - `upsert` followed by `insert`
     * - `delete` followed by `update`
     * When mode is `NON_TRANSACTIONAL`, no two mutations may affect a single
     * entity.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Mutation mutations = 6;</code>
     */
    private $mutations;
    protected $transaction_selector;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The ID of the project against which to make the request.
     * </pre>
     *
     * <code>string project_id = 8;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * The ID of the project against which to make the request.
     * </pre>
     *
     * <code>string project_id = 8;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * The type of commit to perform. Defaults to `TRANSACTIONAL`.
     * </pre>
     *
     * <code>.google.datastore.v1.CommitRequest.Mode mode = 5;</code>
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * <pre>
     * The type of commit to perform. Defaults to `TRANSACTIONAL`.
     * </pre>
     *
     * <code>.google.datastore.v1.CommitRequest.Mode mode = 5;</code>
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Datastore\V1\CommitRequest_Mode::class);
        $this->mode = $var;
    }

    /**
     * <pre>
     * The identifier of the transaction associated with the commit. A
     * transaction identifier is returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     * </pre>
     *
     * <code>bytes transaction = 1;</code>
     */
    public function getTransaction()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * The identifier of the transaction associated with the commit. A
     * transaction identifier is returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     * </pre>
     *
     * <code>bytes transaction = 1;</code>
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);
    }

    /**
     * <pre>
     * The mutations to perform.
     * When mode is `TRANSACTIONAL`, mutations affecting a single entity are
     * applied in order. The following sequences of mutations affecting a single
     * entity are not permitted in a single `Commit` request:
     * - `insert` followed by `insert`
     * - `update` followed by `insert`
     * - `upsert` followed by `insert`
     * - `delete` followed by `update`
     * When mode is `NON_TRANSACTIONAL`, no two mutations may affect a single
     * entity.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Mutation mutations = 6;</code>
     */
    public function getMutations()
    {
        return $this->mutations;
    }

    /**
     * <pre>
     * The mutations to perform.
     * When mode is `TRANSACTIONAL`, mutations affecting a single entity are
     * applied in order. The following sequences of mutations affecting a single
     * entity are not permitted in a single `Commit` request:
     * - `insert` followed by `insert`
     * - `update` followed by `insert`
     * - `upsert` followed by `insert`
     * - `delete` followed by `update`
     * When mode is `NON_TRANSACTIONAL`, no two mutations may affect a single
     * entity.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Mutation mutations = 6;</code>
     */
    public function setMutations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\Mutation::class);
        $this->mutations = $arr;
    }

    public function getTransactionSelector()
    {
        return $this->whichOneof("transaction_selector");
    }

}

