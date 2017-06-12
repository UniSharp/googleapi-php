<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/result_set.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Metadata about a [ResultSet][google.spanner.v1.ResultSet] or [PartialResultSet][google.spanner.v1.PartialResultSet].
 * </pre>
 *
 * Protobuf type <code>google.spanner.v1.ResultSetMetadata</code>
 */
class ResultSetMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Indicates the field names and types for the rows in the result
     * set.  For example, a SQL query like `"SELECT UserId, UserName FROM
     * Users"` could return a `row_type` value like:
     *     "fields": [
     *       { "name": "UserId", "type": { "code": "INT64" } },
     *       { "name": "UserName", "type": { "code": "STRING" } },
     *     ]
     * </pre>
     *
     * <code>.google.spanner.v1.StructType row_type = 1;</code>
     */
    private $row_type = null;
    /**
     * <pre>
     * If the read or SQL query began a transaction as a side-effect, the
     * information about the new transaction is yielded here.
     * </pre>
     *
     * <code>.google.spanner.v1.Transaction transaction = 2;</code>
     */
    private $transaction = null;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\ResultSet::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Indicates the field names and types for the rows in the result
     * set.  For example, a SQL query like `"SELECT UserId, UserName FROM
     * Users"` could return a `row_type` value like:
     *     "fields": [
     *       { "name": "UserId", "type": { "code": "INT64" } },
     *       { "name": "UserName", "type": { "code": "STRING" } },
     *     ]
     * </pre>
     *
     * <code>.google.spanner.v1.StructType row_type = 1;</code>
     */
    public function getRowType()
    {
        return $this->row_type;
    }

    /**
     * <pre>
     * Indicates the field names and types for the rows in the result
     * set.  For example, a SQL query like `"SELECT UserId, UserName FROM
     * Users"` could return a `row_type` value like:
     *     "fields": [
     *       { "name": "UserId", "type": { "code": "INT64" } },
     *       { "name": "UserName", "type": { "code": "STRING" } },
     *     ]
     * </pre>
     *
     * <code>.google.spanner.v1.StructType row_type = 1;</code>
     */
    public function setRowType(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\StructType::class);
        $this->row_type = $var;
    }

    /**
     * <pre>
     * If the read or SQL query began a transaction as a side-effect, the
     * information about the new transaction is yielded here.
     * </pre>
     *
     * <code>.google.spanner.v1.Transaction transaction = 2;</code>
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * <pre>
     * If the read or SQL query began a transaction as a side-effect, the
     * information about the new transaction is yielded here.
     * </pre>
     *
     * <code>.google.spanner.v1.Transaction transaction = 2;</code>
     */
    public function setTransaction(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\Transaction::class);
        $this->transaction = $var;
    }

}
