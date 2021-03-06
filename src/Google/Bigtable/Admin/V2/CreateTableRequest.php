<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.CreateTable][google.bigtable.admin.v2.BigtableTableAdmin.CreateTable]
 * </pre>
 *
 * Protobuf type <code>google.bigtable.admin.v2.CreateTableRequest</code>
 */
class CreateTableRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The unique name of the instance in which to create the table.
     * Values are of the form `projects/&lt;project&gt;/instances/&lt;instance&gt;`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * <pre>
     * The name by which the new table should be referred to within the parent
     * instance, e.g., `foobar` rather than `&lt;parent&gt;/tables/foobar`.
     * </pre>
     *
     * <code>string table_id = 2;</code>
     */
    private $table_id = '';
    /**
     * <pre>
     * The Table to create.
     * </pre>
     *
     * <code>.google.bigtable.admin.v2.Table table = 3;</code>
     */
    private $table = null;
    /**
     * <pre>
     * The optional list of row keys that will be used to initially split the
     * table into several tablets (tablets are similar to HBase regions).
     * Given two split keys, `s1` and `s2`, three tablets will be created,
     * spanning the key ranges: `[, s1), [s1, s2), [s2, )`.
     * Example:
     * * Row keys := `["a", "apple", "custom", "customer_1", "customer_2",`
     *                `"other", "zz"]`
     * * initial_split_keys := `["apple", "customer_1", "customer_2", "other"]`
     * * Key assignment:
     *     - Tablet 1 `[, apple)                =&gt; {"a"}.`
     *     - Tablet 2 `[apple, customer_1)      =&gt; {"apple", "custom"}.`
     *     - Tablet 3 `[customer_1, customer_2) =&gt; {"customer_1"}.`
     *     - Tablet 4 `[customer_2, other)      =&gt; {"customer_2"}.`
     *     - Tablet 5 `[other, )                =&gt; {"other", "zz"}.`
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.v2.CreateTableRequest.Split initial_splits = 4;</code>
     */
    private $initial_splits;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The unique name of the instance in which to create the table.
     * Values are of the form `projects/&lt;project&gt;/instances/&lt;instance&gt;`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * <pre>
     * The unique name of the instance in which to create the table.
     * Values are of the form `projects/&lt;project&gt;/instances/&lt;instance&gt;`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;
    }

    /**
     * <pre>
     * The name by which the new table should be referred to within the parent
     * instance, e.g., `foobar` rather than `&lt;parent&gt;/tables/foobar`.
     * </pre>
     *
     * <code>string table_id = 2;</code>
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * <pre>
     * The name by which the new table should be referred to within the parent
     * instance, e.g., `foobar` rather than `&lt;parent&gt;/tables/foobar`.
     * </pre>
     *
     * <code>string table_id = 2;</code>
     */
    public function setTableId($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_id = $var;
    }

    /**
     * <pre>
     * The Table to create.
     * </pre>
     *
     * <code>.google.bigtable.admin.v2.Table table = 3;</code>
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * <pre>
     * The Table to create.
     * </pre>
     *
     * <code>.google.bigtable.admin.v2.Table table = 3;</code>
     */
    public function setTable(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Bigtable\Admin\V2\Table::class);
        $this->table = $var;
    }

    /**
     * <pre>
     * The optional list of row keys that will be used to initially split the
     * table into several tablets (tablets are similar to HBase regions).
     * Given two split keys, `s1` and `s2`, three tablets will be created,
     * spanning the key ranges: `[, s1), [s1, s2), [s2, )`.
     * Example:
     * * Row keys := `["a", "apple", "custom", "customer_1", "customer_2",`
     *                `"other", "zz"]`
     * * initial_split_keys := `["apple", "customer_1", "customer_2", "other"]`
     * * Key assignment:
     *     - Tablet 1 `[, apple)                =&gt; {"a"}.`
     *     - Tablet 2 `[apple, customer_1)      =&gt; {"apple", "custom"}.`
     *     - Tablet 3 `[customer_1, customer_2) =&gt; {"customer_1"}.`
     *     - Tablet 4 `[customer_2, other)      =&gt; {"customer_2"}.`
     *     - Tablet 5 `[other, )                =&gt; {"other", "zz"}.`
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.v2.CreateTableRequest.Split initial_splits = 4;</code>
     */
    public function getInitialSplits()
    {
        return $this->initial_splits;
    }

    /**
     * <pre>
     * The optional list of row keys that will be used to initially split the
     * table into several tablets (tablets are similar to HBase regions).
     * Given two split keys, `s1` and `s2`, three tablets will be created,
     * spanning the key ranges: `[, s1), [s1, s2), [s2, )`.
     * Example:
     * * Row keys := `["a", "apple", "custom", "customer_1", "customer_2",`
     *                `"other", "zz"]`
     * * initial_split_keys := `["apple", "customer_1", "customer_2", "other"]`
     * * Key assignment:
     *     - Tablet 1 `[, apple)                =&gt; {"a"}.`
     *     - Tablet 2 `[apple, customer_1)      =&gt; {"apple", "custom"}.`
     *     - Tablet 3 `[customer_1, customer_2) =&gt; {"customer_1"}.`
     *     - Tablet 4 `[customer_2, other)      =&gt; {"customer_2"}.`
     *     - Tablet 5 `[other, )                =&gt; {"other", "zz"}.`
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.v2.CreateTableRequest.Split initial_splits = 4;</code>
     */
    public function setInitialSplits(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\Admin\V2\CreateTableRequest_Split::class);
        $this->initial_splits = $arr;
    }

}

