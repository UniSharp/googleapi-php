<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/query_plan.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Condensed representation of a node and its subtree. Only present for
 * `SCALAR` [PlanNode(s)][google.spanner.v1.PlanNode].
 * </pre>
 *
 * Protobuf type <code>google.spanner.v1.PlanNode.ShortRepresentation</code>
 */
class PlanNode_ShortRepresentation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A string representation of the expression subtree rooted at this node.
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    private $description = '';
    /**
     * <pre>
     * A mapping of (subquery variable name) -&gt; (subquery node id) for cases
     * where the `description` string of this node references a `SCALAR`
     * subquery contained in the expression subtree rooted at this node. The
     * referenced `SCALAR` subquery may not necessarily be a direct child of
     * this node.
     * </pre>
     *
     * <code>map&lt;string, int32&gt; subqueries = 2;</code>
     */
    private $subqueries;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\QueryPlan::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A string representation of the expression subtree rooted at this node.
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * A string representation of the expression subtree rooted at this node.
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <pre>
     * A mapping of (subquery variable name) -&gt; (subquery node id) for cases
     * where the `description` string of this node references a `SCALAR`
     * subquery contained in the expression subtree rooted at this node. The
     * referenced `SCALAR` subquery may not necessarily be a direct child of
     * this node.
     * </pre>
     *
     * <code>map&lt;string, int32&gt; subqueries = 2;</code>
     */
    public function getSubqueries()
    {
        return $this->subqueries;
    }

    /**
     * <pre>
     * A mapping of (subquery variable name) -&gt; (subquery node id) for cases
     * where the `description` string of this node references a `SCALAR`
     * subquery contained in the expression subtree rooted at this node. The
     * referenced `SCALAR` subquery may not necessarily be a direct child of
     * this node.
     * </pre>
     *
     * <code>map&lt;string, int32&gt; subqueries = 2;</code>
     */
    public function setSubqueries(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT32);
        $this->subqueries = $arr;
    }

}

