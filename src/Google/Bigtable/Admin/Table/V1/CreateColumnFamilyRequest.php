<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/table/v1/bigtable_table_service_messages.proto

namespace Google\Bigtable\Admin\Table\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.bigtable.admin.table.v1.CreateColumnFamilyRequest</code>
 */
class CreateColumnFamilyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The unique name of the table in which to create the new column family.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The name by which the new column family should be referred to within the
     * table, e.g. "foobar" rather than "&lt;table_name&gt;/columnFamilies/foobar".
     * </pre>
     *
     * <code>string column_family_id = 2;</code>
     */
    private $column_family_id = '';
    /**
     * <pre>
     * The column family to create. The `name` field must be left blank.
     * </pre>
     *
     * <code>.google.bigtable.admin.table.v1.ColumnFamily column_family = 3;</code>
     */
    private $column_family = null;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\Table\V1\BigtableTableServiceMessages::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The unique name of the table in which to create the new column family.
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
     * The unique name of the table in which to create the new column family.
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
     * The name by which the new column family should be referred to within the
     * table, e.g. "foobar" rather than "&lt;table_name&gt;/columnFamilies/foobar".
     * </pre>
     *
     * <code>string column_family_id = 2;</code>
     */
    public function getColumnFamilyId()
    {
        return $this->column_family_id;
    }

    /**
     * <pre>
     * The name by which the new column family should be referred to within the
     * table, e.g. "foobar" rather than "&lt;table_name&gt;/columnFamilies/foobar".
     * </pre>
     *
     * <code>string column_family_id = 2;</code>
     */
    public function setColumnFamilyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->column_family_id = $var;
    }

    /**
     * <pre>
     * The column family to create. The `name` field must be left blank.
     * </pre>
     *
     * <code>.google.bigtable.admin.table.v1.ColumnFamily column_family = 3;</code>
     */
    public function getColumnFamily()
    {
        return $this->column_family;
    }

    /**
     * <pre>
     * The column family to create. The `name` field must be left blank.
     * </pre>
     *
     * <code>.google.bigtable.admin.table.v1.ColumnFamily column_family = 3;</code>
     */
    public function setColumnFamily(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Bigtable\Admin\Table\V1\ColumnFamily::class);
        $this->column_family = $var;
    }

}

