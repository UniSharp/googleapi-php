<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A GcRule which deletes cells matching all of the given rules.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.admin.v2.GcRule.Intersection</code>
 */
class GcRule_Intersection extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Only delete cells which would be deleted by every element of `rules`.
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.v2.GcRule rules = 1;</code>
     */
    private $rules;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Only delete cells which would be deleted by every element of `rules`.
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.v2.GcRule rules = 1;</code>
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * <pre>
     * Only delete cells which would be deleted by every element of `rules`.
     * </pre>
     *
     * <code>repeated .google.bigtable.admin.v2.GcRule rules = 1;</code>
     */
    public function setRules(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\Admin\V2\GcRule::class);
        $this->rules = $var;
    }

}
