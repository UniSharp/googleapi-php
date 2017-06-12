<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response for [ListDatabases][google.spanner.admin.database.v1.DatabaseAdmin.ListDatabases].
 * </pre>
 *
 * Protobuf type <code>google.spanner.admin.database.v1.ListDatabasesResponse</code>
 */
class ListDatabasesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Databases that matched the request.
     * </pre>
     *
     * <code>repeated .google.spanner.admin.database.v1.Database databases = 1;</code>
     */
    private $databases;
    /**
     * <pre>
     * `next_page_token` can be sent in a subsequent
     * [ListDatabases][google.spanner.admin.database.v1.DatabaseAdmin.ListDatabases] call to fetch more
     * of the matching databases.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Databases that matched the request.
     * </pre>
     *
     * <code>repeated .google.spanner.admin.database.v1.Database databases = 1;</code>
     */
    public function getDatabases()
    {
        return $this->databases;
    }

    /**
     * <pre>
     * Databases that matched the request.
     * </pre>
     *
     * <code>repeated .google.spanner.admin.database.v1.Database databases = 1;</code>
     */
    public function setDatabases(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Spanner\Admin\Database\V1\Database::class);
        $this->databases = $var;
    }

    /**
     * <pre>
     * `next_page_token` can be sent in a subsequent
     * [ListDatabases][google.spanner.admin.database.v1.DatabaseAdmin.ListDatabases] call to fetch more
     * of the matching databases.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * <pre>
     * `next_page_token` can be sent in a subsequent
     * [ListDatabases][google.spanner.admin.database.v1.DatabaseAdmin.ListDatabases] call to fetch more
     * of the matching databases.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;
    }

}
