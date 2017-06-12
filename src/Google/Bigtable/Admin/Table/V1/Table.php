<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/table/v1/bigtable_table_data.proto

namespace Google\Bigtable\Admin\Table\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A collection of user data indexed by row, column, and timestamp.
 * Each table is served using the resources of its parent cluster.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.admin.table.v1.Table</code>
 */
class Table extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A unique identifier of the form
     * &lt;cluster_name&gt;/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * If this Table is in the process of being created, the Operation used to
     * track its progress. As long as this operation is present, the Table will
     * not accept any Table Admin or Read/Write requests.
     * </pre>
     *
     * <code>.google.longrunning.Operation current_operation = 2;</code>
     */
    private $current_operation = null;
    /**
     * <pre>
     * The column families configured for this table, mapped by column family id.
     * </pre>
     *
     * <code>map&lt;string, .google.bigtable.admin.table.v1.ColumnFamily&gt; column_families = 3;</code>
     */
    private $column_families;
    /**
     * <pre>
     * The granularity (e.g. MILLIS, MICROS) at which timestamps are stored in
     * this table. Timestamps not matching the granularity will be rejected.
     * Cannot be changed once the table is created.
     * </pre>
     *
     * <code>.google.bigtable.admin.table.v1.Table.TimestampGranularity granularity = 4;</code>
     */
    private $granularity = 0;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\Table\V1\BigtableTableData::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A unique identifier of the form
     * &lt;cluster_name&gt;/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * A unique identifier of the form
     * &lt;cluster_name&gt;/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * If this Table is in the process of being created, the Operation used to
     * track its progress. As long as this operation is present, the Table will
     * not accept any Table Admin or Read/Write requests.
     * </pre>
     *
     * <code>.google.longrunning.Operation current_operation = 2;</code>
     */
    public function getCurrentOperation()
    {
        return $this->current_operation;
    }

    /**
     * <pre>
     * If this Table is in the process of being created, the Operation used to
     * track its progress. As long as this operation is present, the Table will
     * not accept any Table Admin or Read/Write requests.
     * </pre>
     *
     * <code>.google.longrunning.Operation current_operation = 2;</code>
     */
    public function setCurrentOperation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Longrunning\Operation::class);
        $this->current_operation = $var;
    }

    /**
     * <pre>
     * The column families configured for this table, mapped by column family id.
     * </pre>
     *
     * <code>map&lt;string, .google.bigtable.admin.table.v1.ColumnFamily&gt; column_families = 3;</code>
     */
    public function getColumnFamilies()
    {
        return $this->column_families;
    }

    /**
     * <pre>
     * The column families configured for this table, mapped by column family id.
     * </pre>
     *
     * <code>map&lt;string, .google.bigtable.admin.table.v1.ColumnFamily&gt; column_families = 3;</code>
     */
    public function setColumnFamilies(&$var)
    {
        $this->column_families = $var;
    }

    /**
     * <pre>
     * The granularity (e.g. MILLIS, MICROS) at which timestamps are stored in
     * this table. Timestamps not matching the granularity will be rejected.
     * Cannot be changed once the table is created.
     * </pre>
     *
     * <code>.google.bigtable.admin.table.v1.Table.TimestampGranularity granularity = 4;</code>
     */
    public function getGranularity()
    {
        return $this->granularity;
    }

    /**
     * <pre>
     * The granularity (e.g. MILLIS, MICROS) at which timestamps are stored in
     * this table. Timestamps not matching the granularity will be rejected.
     * Cannot be changed once the table is created.
     * </pre>
     *
     * <code>.google.bigtable.admin.table.v1.Table.TimestampGranularity granularity = 4;</code>
     */
    public function setGranularity($var)
    {
        GPBUtil::checkEnum($var, \Google\Bigtable\Admin\Table\V1\Table_TimestampGranularity::class);
        $this->granularity = $var;
    }

}

