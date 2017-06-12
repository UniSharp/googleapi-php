<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * UpdateClusterRequest updates the settings of a cluster.
 * </pre>
 *
 * Protobuf type <code>google.container.v1.UpdateClusterRequest</code>
 */
class UpdateClusterRequest extends \Google\Protobuf\Internal\Message
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
     * The name of the cluster to upgrade.
     * </pre>
     *
     * <code>string cluster_id = 3;</code>
     */
    private $cluster_id = '';
    /**
     * <pre>
     * A description of the update.
     * </pre>
     *
     * <code>.google.container.v1.ClusterUpdate update = 4;</code>
     */
    private $update = null;

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
     * The name of the cluster to upgrade.
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
     * The name of the cluster to upgrade.
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
     * A description of the update.
     * </pre>
     *
     * <code>.google.container.v1.ClusterUpdate update = 4;</code>
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * <pre>
     * A description of the update.
     * </pre>
     *
     * <code>.google.container.v1.ClusterUpdate update = 4;</code>
     */
    public function setUpdate(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Container\V1\ClusterUpdate::class);
        $this->update = $var;
    }

}
