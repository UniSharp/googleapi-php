<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response for [GetDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.GetDatabaseDdl].
 * </pre>
 *
 * Protobuf type <code>google.spanner.admin.database.v1.GetDatabaseDdlResponse</code>
 */
class GetDatabaseDdlResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of formatted DDL statements defining the schema of the database
     * specified in the request.
     * </pre>
     *
     * <code>repeated string statements = 1;</code>
     */
    private $statements;

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of formatted DDL statements defining the schema of the database
     * specified in the request.
     * </pre>
     *
     * <code>repeated string statements = 1;</code>
     */
    public function getStatements()
    {
        return $this->statements;
    }

    /**
     * <pre>
     * A list of formatted DDL statements defining the schema of the database
     * specified in the request.
     * </pre>
     *
     * <code>repeated string statements = 1;</code>
     */
    public function setStatements(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->statements = $arr;
    }

}

