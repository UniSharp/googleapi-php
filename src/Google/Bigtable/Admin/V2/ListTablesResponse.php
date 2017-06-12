<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.ListTables][google.bigtable.admin.v2.BigtableTableAdmin.ListTables]
 * </pre>
 *
 * Protobuf type <code>google.bigtable.admin.v2.ListTablesResponse</code>
 */
class ListTablesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The tables present in the requested instance.
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.v2.Table tables = 1;</code>
     */
    private $tables;
    /**
     * <pre>
     * Set if not all tables could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The tables present in the requested instance.
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.v2.Table tables = 1;</code>
     */
    public function getTables()
    {
        return $this->tables;
    }

    /**
     * <pre>
     * The tables present in the requested instance.
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.v2.Table tables = 1;</code>
     */
    public function setTables(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\Admin\V2\Table::class);
        $this->tables = $var;
    }

    /**
     * <pre>
     * Set if not all tables could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
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
     * Set if not all tables could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
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

