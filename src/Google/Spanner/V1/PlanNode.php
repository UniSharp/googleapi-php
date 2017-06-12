<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/query_plan.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Node information for nodes appearing in a [QueryPlan.plan_nodes][google.spanner.v1.QueryPlan.plan_nodes].
 * </pre>
 *
 * Protobuf type <code>google.spanner.v1.PlanNode</code>
 */
class PlanNode extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The `PlanNode`'s index in [node list][google.spanner.v1.QueryPlan.plan_nodes].
     * </pre>
     *
     * <code>int32 index = 1;</code>
     */
    private $index = 0;
    /**
     * <pre>
     * Used to determine the type of node. May be needed for visualizing
     * different kinds of nodes differently. For example, If the node is a
     * [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] node, it will have a condensed representation
     * which can be used to directly embed a description of the node in its
     * parent.
     * </pre>
     *
     * <code>.google.spanner.v1.PlanNode.Kind kind = 2;</code>
     */
    private $kind = 0;
    /**
     * <pre>
     * The display name for the node.
     * </pre>
     *
     * <code>string display_name = 3;</code>
     */
    private $display_name = '';
    /**
     * <pre>
     * List of child node `index`es and their relationship to this parent.
     * </pre>
     *
     * <code>repeated .google.spanner.v1.PlanNode.ChildLink child_links = 4;</code>
     */
    private $child_links;
    /**
     * <pre>
     * Condensed representation for [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] nodes.
     * </pre>
     *
     * <code>.google.spanner.v1.PlanNode.ShortRepresentation short_representation = 5;</code>
     */
    private $short_representation = null;
    /**
     * <pre>
     * Attributes relevant to the node contained in a group of key-value pairs.
     * For example, a Parameter Reference node could have the following
     * information in its metadata:
     *     {
     *       "parameter_reference": "param1",
     *       "parameter_type": "array"
     *     }
     * </pre>
     *
     * <code>.google.protobuf.Struct metadata = 6;</code>
     */
    private $metadata = null;
    /**
     * <pre>
     * The execution statistics associated with the node, contained in a group of
     * key-value pairs. Only present if the plan was returned as a result of a
     * profile query. For example, number of executions, number of rows/time per
     * execution etc.
     * </pre>
     *
     * <code>.google.protobuf.Struct execution_stats = 7;</code>
     */
    private $execution_stats = null;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\QueryPlan::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The `PlanNode`'s index in [node list][google.spanner.v1.QueryPlan.plan_nodes].
     * </pre>
     *
     * <code>int32 index = 1;</code>
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * <pre>
     * The `PlanNode`'s index in [node list][google.spanner.v1.QueryPlan.plan_nodes].
     * </pre>
     *
     * <code>int32 index = 1;</code>
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;
    }

    /**
     * <pre>
     * Used to determine the type of node. May be needed for visualizing
     * different kinds of nodes differently. For example, If the node is a
     * [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] node, it will have a condensed representation
     * which can be used to directly embed a description of the node in its
     * parent.
     * </pre>
     *
     * <code>.google.spanner.v1.PlanNode.Kind kind = 2;</code>
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * <pre>
     * Used to determine the type of node. May be needed for visualizing
     * different kinds of nodes differently. For example, If the node is a
     * [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] node, it will have a condensed representation
     * which can be used to directly embed a description of the node in its
     * parent.
     * </pre>
     *
     * <code>.google.spanner.v1.PlanNode.Kind kind = 2;</code>
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Spanner\V1\PlanNode_Kind::class);
        $this->kind = $var;
    }

    /**
     * <pre>
     * The display name for the node.
     * </pre>
     *
     * <code>string display_name = 3;</code>
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * <pre>
     * The display name for the node.
     * </pre>
     *
     * <code>string display_name = 3;</code>
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;
    }

    /**
     * <pre>
     * List of child node `index`es and their relationship to this parent.
     * </pre>
     *
     * <code>repeated .google.spanner.v1.PlanNode.ChildLink child_links = 4;</code>
     */
    public function getChildLinks()
    {
        return $this->child_links;
    }

    /**
     * <pre>
     * List of child node `index`es and their relationship to this parent.
     * </pre>
     *
     * <code>repeated .google.spanner.v1.PlanNode.ChildLink child_links = 4;</code>
     */
    public function setChildLinks(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Spanner\V1\PlanNode_ChildLink::class);
        $this->child_links = $var;
    }

    /**
     * <pre>
     * Condensed representation for [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] nodes.
     * </pre>
     *
     * <code>.google.spanner.v1.PlanNode.ShortRepresentation short_representation = 5;</code>
     */
    public function getShortRepresentation()
    {
        return $this->short_representation;
    }

    /**
     * <pre>
     * Condensed representation for [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] nodes.
     * </pre>
     *
     * <code>.google.spanner.v1.PlanNode.ShortRepresentation short_representation = 5;</code>
     */
    public function setShortRepresentation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\PlanNode_ShortRepresentation::class);
        $this->short_representation = $var;
    }

    /**
     * <pre>
     * Attributes relevant to the node contained in a group of key-value pairs.
     * For example, a Parameter Reference node could have the following
     * information in its metadata:
     *     {
     *       "parameter_reference": "param1",
     *       "parameter_type": "array"
     *     }
     * </pre>
     *
     * <code>.google.protobuf.Struct metadata = 6;</code>
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * <pre>
     * Attributes relevant to the node contained in a group of key-value pairs.
     * For example, a Parameter Reference node could have the following
     * information in its metadata:
     *     {
     *       "parameter_reference": "param1",
     *       "parameter_type": "array"
     *     }
     * </pre>
     *
     * <code>.google.protobuf.Struct metadata = 6;</code>
     */
    public function setMetadata(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;
    }

    /**
     * <pre>
     * The execution statistics associated with the node, contained in a group of
     * key-value pairs. Only present if the plan was returned as a result of a
     * profile query. For example, number of executions, number of rows/time per
     * execution etc.
     * </pre>
     *
     * <code>.google.protobuf.Struct execution_stats = 7;</code>
     */
    public function getExecutionStats()
    {
        return $this->execution_stats;
    }

    /**
     * <pre>
     * The execution statistics associated with the node, contained in a group of
     * key-value pairs. Only present if the plan was returned as a result of a
     * profile query. For example, number of executions, number of rows/time per
     * execution etc.
     * </pre>
     *
     * <code>.google.protobuf.Struct execution_stats = 7;</code>
     */
    public function setExecutionStats(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->execution_stats = $var;
    }

}
