<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/table/v1/bigtable_table_data.proto

namespace Google\Bigtable\Admin\Table\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A GcRule which deletes cells matching any of the given rules.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.admin.table.v1.GcRule.Union</code>
 */
class GcRule_Union extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Delete cells which would be deleted by any element of `rules`.
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.table.v1.GcRule rules = 1;</code>
     */
    private $rules;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\Table\V1\BigtableTableData::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Delete cells which would be deleted by any element of `rules`.
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.table.v1.GcRule rules = 1;</code>
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * <pre>
     * Delete cells which would be deleted by any element of `rules`.
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.table.v1.GcRule rules = 1;</code>
     */
    public function setRules(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\Admin\Table\V1\GcRule::class);
        $this->rules = $arr;
    }

}

