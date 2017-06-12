<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Metadata type for the operation returned by
 * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl].
 * </pre>
 *
 * Protobuf type <code>google.spanner.admin.database.v1.UpdateDatabaseDdlMetadata</code>
 */
class UpdateDatabaseDdlMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The database being modified.
     * </pre>
     *
     * <code>string database = 1;</code>
     */
    private $database = '';
    /**
     * <pre>
     * For an update this list contains all the statements. For an
     * individual statement, this list contains only that statement.
     * </pre>
     *
     * <code>repeated string statements = 2;</code>
     */
    private $statements;
    /**
     * <pre>
     * Reports the commit timestamps of all statements that have
     * succeeded so far, where `commit_timestamps[i]` is the commit
     * timestamp for the statement `statements[i]`.
     * </pre>
     *
     * <code>repeated .google.protobuf.Timestamp commit_timestamps = 3;</code>
     */
    private $commit_timestamps;

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The database being modified.
     * </pre>
     *
     * <code>string database = 1;</code>
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * <pre>
     * The database being modified.
     * </pre>
     *
     * <code>string database = 1;</code>
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;
    }

    /**
     * <pre>
     * For an update this list contains all the statements. For an
     * individual statement, this list contains only that statement.
     * </pre>
     *
     * <code>repeated string statements = 2;</code>
     */
    public function getStatements()
    {
        return $this->statements;
    }

    /**
     * <pre>
     * For an update this list contains all the statements. For an
     * individual statement, this list contains only that statement.
     * </pre>
     *
     * <code>repeated string statements = 2;</code>
     */
    public function setStatements(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->statements = $var;
    }

    /**
     * <pre>
     * Reports the commit timestamps of all statements that have
     * succeeded so far, where `commit_timestamps[i]` is the commit
     * timestamp for the statement `statements[i]`.
     * </pre>
     *
     * <code>repeated .google.protobuf.Timestamp commit_timestamps = 3;</code>
     */
    public function getCommitTimestamps()
    {
        return $this->commit_timestamps;
    }

    /**
     * <pre>
     * Reports the commit timestamps of all statements that have
     * succeeded so far, where `commit_timestamps[i]` is the commit
     * timestamp for the statement `statements[i]`.
     * </pre>
     *
     * <code>repeated .google.protobuf.Timestamp commit_timestamps = 3;</code>
     */
    public function setCommitTimestamps(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Timestamp::class);
        $this->commit_timestamps = $var;
    }

}
