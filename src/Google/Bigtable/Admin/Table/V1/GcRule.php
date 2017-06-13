<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/table/v1/bigtable_table_data.proto

namespace Google\Bigtable\Admin\Table\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Rule for determining which cells to delete during garbage collection.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.admin.table.v1.GcRule</code>
 */
class GcRule extends \Google\Protobuf\Internal\Message
{
    protected $rule;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\Table\V1\BigtableTableData::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Delete all cells in a column except the most recent N.
     * </pre>
     *
     * <code>int32 max_num_versions = 1;</code>
     */
    public function getMaxNumVersions()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * Delete all cells in a column except the most recent N.
     * </pre>
     *
     * <code>int32 max_num_versions = 1;</code>
     */
    public function setMaxNumVersions($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(1, $var);
    }

    /**
     * <pre>
     * Delete cells in a column older than the given age.
     * Values must be at least one millisecond, and will be truncated to
     * microsecond granularity.
     * </pre>
     *
     * <code>.google.protobuf.Duration max_age = 2;</code>
     */
    public function getMaxAge()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * Delete cells in a column older than the given age.
     * Values must be at least one millisecond, and will be truncated to
     * microsecond granularity.
     * </pre>
     *
     * <code>.google.protobuf.Duration max_age = 2;</code>
     */
    public function setMaxAge(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * Delete cells that would be deleted by every nested rule.
     * </pre>
     *
     * <code>.google.bigtable.admin.table.v1.GcRule.Intersection intersection = 3;</code>
     */
    public function getIntersection()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * Delete cells that would be deleted by every nested rule.
     * </pre>
     *
     * <code>.google.bigtable.admin.table.v1.GcRule.Intersection intersection = 3;</code>
     */
    public function setIntersection(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Bigtable\Admin\Table\V1\GcRule_Intersection::class);
        $this->writeOneof(3, $var);
    }

    /**
     * <pre>
     * Delete cells that would be deleted by any nested rule.
     * </pre>
     *
     * <code>.google.bigtable.admin.table.v1.GcRule.Union union = 4;</code>
     */
    public function getUnion()
    {
        return $this->readOneof(4);
    }

    /**
     * <pre>
     * Delete cells that would be deleted by any nested rule.
     * </pre>
     *
     * <code>.google.bigtable.admin.table.v1.GcRule.Union union = 4;</code>
     */
    public function setUnion(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Bigtable\Admin\Table\V1\GcRule_Union::class);
        $this->writeOneof(4, $var);
    }

    public function getRule()
    {
        return $this->whichOneof("rule");
    }

}

