<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request for [Datastore.Rollback][google.datastore.v1.Datastore.Rollback].
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1.RollbackRequest</code>
 */
class RollbackRequest extends \Google\Protobuf\Internal\Message
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
     * The transaction identifier, returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     * </pre>
     *
     * <code>bytes transaction = 1;</code>
     */
    private $transaction = '';

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
     * The transaction identifier, returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
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
     * The transaction identifier, returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
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

