<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request for [Read][google.spanner.v1.Spanner.Read] and
 * [StreamingRead][google.spanner.v1.Spanner.StreamingRead].
 * </pre>
 *
 * Protobuf type <code>google.spanner.v1.ReadRequest</code>
 */
class ReadRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The session in which the read should be performed.
     * </pre>
     *
     * <code>string session = 1;</code>
     */
    private $session = '';
    /**
     * <pre>
     * The transaction to use. If none is provided, the default is a
     * temporary read-only transaction with strong concurrency.
     * </pre>
     *
     * <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     */
    private $transaction = null;
    /**
     * <pre>
     * Required. The name of the table in the database to be read.
     * </pre>
     *
     * <code>string table = 3;</code>
     */
    private $table = '';
    /**
     * <pre>
     * If non-empty, the name of an index on [table][google.spanner.v1.ReadRequest.table]. This index is
     * used instead of the table primary key when interpreting [key_set][google.spanner.v1.ReadRequest.key_set]
     * and sorting result rows. See [key_set][google.spanner.v1.ReadRequest.key_set] for further information.
     * </pre>
     *
     * <code>string index = 4;</code>
     */
    private $index = '';
    /**
     * <pre>
     * The columns of [table][google.spanner.v1.ReadRequest.table] to be returned for each row matching
     * this request.
     * </pre>
     *
     * <code>repeated string columns = 5;</code>
     */
    private $columns;
    /**
     * <pre>
     * Required. `key_set` identifies the rows to be yielded. `key_set` names the
     * primary keys of the rows in [table][google.spanner.v1.ReadRequest.table] to be yielded, unless [index][google.spanner.v1.ReadRequest.index]
     * is present. If [index][google.spanner.v1.ReadRequest.index] is present, then [key_set][google.spanner.v1.ReadRequest.key_set] instead names
     * index keys in [index][google.spanner.v1.ReadRequest.index].
     * Rows are yielded in table primary key order (if [index][google.spanner.v1.ReadRequest.index] is empty)
     * or index key order (if [index][google.spanner.v1.ReadRequest.index] is non-empty).
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     * </pre>
     *
     * <code>.google.spanner.v1.KeySet key_set = 6;</code>
     */
    private $key_set = null;
    /**
     * <pre>
     * If greater than zero, only the first `limit` rows are yielded. If `limit`
     * is zero, the default is no limit.
     * </pre>
     *
     * <code>int64 limit = 8;</code>
     */
    private $limit = 0;
    /**
     * <pre>
     * If this request is resuming a previously interrupted read,
     * `resume_token` should be copied from the last
     * [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     * enables the new read to resume where the last read left off. The
     * rest of the request parameters must exactly match the request
     * that yielded this token.
     * </pre>
     *
     * <code>bytes resume_token = 9;</code>
     */
    private $resume_token = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The session in which the read should be performed.
     * </pre>
     *
     * <code>string session = 1;</code>
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * <pre>
     * Required. The session in which the read should be performed.
     * </pre>
     *
     * <code>string session = 1;</code>
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;
    }

    /**
     * <pre>
     * The transaction to use. If none is provided, the default is a
     * temporary read-only transaction with strong concurrency.
     * </pre>
     *
     * <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * <pre>
     * The transaction to use. If none is provided, the default is a
     * temporary read-only transaction with strong concurrency.
     * </pre>
     *
     * <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     */
    public function setTransaction(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\TransactionSelector::class);
        $this->transaction = $var;
    }

    /**
     * <pre>
     * Required. The name of the table in the database to be read.
     * </pre>
     *
     * <code>string table = 3;</code>
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * <pre>
     * Required. The name of the table in the database to be read.
     * </pre>
     *
     * <code>string table = 3;</code>
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;
    }

    /**
     * <pre>
     * If non-empty, the name of an index on [table][google.spanner.v1.ReadRequest.table]. This index is
     * used instead of the table primary key when interpreting [key_set][google.spanner.v1.ReadRequest.key_set]
     * and sorting result rows. See [key_set][google.spanner.v1.ReadRequest.key_set] for further information.
     * </pre>
     *
     * <code>string index = 4;</code>
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * <pre>
     * If non-empty, the name of an index on [table][google.spanner.v1.ReadRequest.table]. This index is
     * used instead of the table primary key when interpreting [key_set][google.spanner.v1.ReadRequest.key_set]
     * and sorting result rows. See [key_set][google.spanner.v1.ReadRequest.key_set] for further information.
     * </pre>
     *
     * <code>string index = 4;</code>
     */
    public function setIndex($var)
    {
        GPBUtil::checkString($var, True);
        $this->index = $var;
    }

    /**
     * <pre>
     * The columns of [table][google.spanner.v1.ReadRequest.table] to be returned for each row matching
     * this request.
     * </pre>
     *
     * <code>repeated string columns = 5;</code>
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * <pre>
     * The columns of [table][google.spanner.v1.ReadRequest.table] to be returned for each row matching
     * this request.
     * </pre>
     *
     * <code>repeated string columns = 5;</code>
     */
    public function setColumns(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->columns = $var;
    }

    /**
     * <pre>
     * Required. `key_set` identifies the rows to be yielded. `key_set` names the
     * primary keys of the rows in [table][google.spanner.v1.ReadRequest.table] to be yielded, unless [index][google.spanner.v1.ReadRequest.index]
     * is present. If [index][google.spanner.v1.ReadRequest.index] is present, then [key_set][google.spanner.v1.ReadRequest.key_set] instead names
     * index keys in [index][google.spanner.v1.ReadRequest.index].
     * Rows are yielded in table primary key order (if [index][google.spanner.v1.ReadRequest.index] is empty)
     * or index key order (if [index][google.spanner.v1.ReadRequest.index] is non-empty).
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     * </pre>
     *
     * <code>.google.spanner.v1.KeySet key_set = 6;</code>
     */
    public function getKeySet()
    {
        return $this->key_set;
    }

    /**
     * <pre>
     * Required. `key_set` identifies the rows to be yielded. `key_set` names the
     * primary keys of the rows in [table][google.spanner.v1.ReadRequest.table] to be yielded, unless [index][google.spanner.v1.ReadRequest.index]
     * is present. If [index][google.spanner.v1.ReadRequest.index] is present, then [key_set][google.spanner.v1.ReadRequest.key_set] instead names
     * index keys in [index][google.spanner.v1.ReadRequest.index].
     * Rows are yielded in table primary key order (if [index][google.spanner.v1.ReadRequest.index] is empty)
     * or index key order (if [index][google.spanner.v1.ReadRequest.index] is non-empty).
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     * </pre>
     *
     * <code>.google.spanner.v1.KeySet key_set = 6;</code>
     */
    public function setKeySet(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\KeySet::class);
        $this->key_set = $var;
    }

    /**
     * <pre>
     * If greater than zero, only the first `limit` rows are yielded. If `limit`
     * is zero, the default is no limit.
     * </pre>
     *
     * <code>int64 limit = 8;</code>
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <pre>
     * If greater than zero, only the first `limit` rows are yielded. If `limit`
     * is zero, the default is no limit.
     * </pre>
     *
     * <code>int64 limit = 8;</code>
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;
    }

    /**
     * <pre>
     * If this request is resuming a previously interrupted read,
     * `resume_token` should be copied from the last
     * [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     * enables the new read to resume where the last read left off. The
     * rest of the request parameters must exactly match the request
     * that yielded this token.
     * </pre>
     *
     * <code>bytes resume_token = 9;</code>
     */
    public function getResumeToken()
    {
        return $this->resume_token;
    }

    /**
     * <pre>
     * If this request is resuming a previously interrupted read,
     * `resume_token` should be copied from the last
     * [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     * enables the new read to resume where the last read left off. The
     * rest of the request parameters must exactly match the request
     * that yielded this token.
     * </pre>
     *
     * <code>bytes resume_token = 9;</code>
     */
    public function setResumeToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->resume_token = $var;
    }

}

