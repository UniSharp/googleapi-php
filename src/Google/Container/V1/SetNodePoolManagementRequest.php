<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * SetNodePoolManagementRequest sets the node management properties of a node
 * pool.
 * </pre>
 *
 * Protobuf type <code>google.container.v1.SetNodePoolManagementRequest</code>
 */
class SetNodePoolManagementRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * <pre>
     * The name of the cluster to update.
     * </pre>
     *
     * <code>string cluster_id = 3;</code>
     */
    private $cluster_id = '';
    /**
     * <pre>
     * The name of the node pool to update.
     * </pre>
     *
     * <code>string node_pool_id = 4;</code>
     */
    private $node_pool_id = '';
    /**
     * <pre>
     * NodeManagement configuration for the node pool.
     * </pre>
     *
     * <code>.google.container.v1.NodeManagement management = 5;</code>
     */
    private $management = null;

    public function __construct() {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * <pre>
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;
    }

    /**
     * <pre>
     * The name of the cluster to update.
     * </pre>
     *
     * <code>string cluster_id = 3;</code>
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * <pre>
     * The name of the cluster to update.
     * </pre>
     *
     * <code>string cluster_id = 3;</code>
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;
    }

    /**
     * <pre>
     * The name of the node pool to update.
     * </pre>
     *
     * <code>string node_pool_id = 4;</code>
     */
    public function getNodePoolId()
    {
        return $this->node_pool_id;
    }

    /**
     * <pre>
     * The name of the node pool to update.
     * </pre>
     *
     * <code>string node_pool_id = 4;</code>
     */
    public function setNodePoolId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_pool_id = $var;
    }

    /**
     * <pre>
     * NodeManagement configuration for the node pool.
     * </pre>
     *
     * <code>.google.container.v1.NodeManagement management = 5;</code>
     */
    public function getManagement()
    {
        return $this->management;
    }

    /**
     * <pre>
     * NodeManagement configuration for the node pool.
     * </pre>
     *
     * <code>.google.container.v1.NodeManagement management = 5;</code>
     */
    public function setManagement(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Container\V1\NodeManagement::class);
        $this->management = $var;
    }

}

