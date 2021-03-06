<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Configuration options for the horizontal pod autoscaling feature, which
 * increases or decreases the number of replica pods a replication controller
 * has based on the resource usage of the existing pods.
 * </pre>
 *
 * Protobuf type <code>google.container.v1.HorizontalPodAutoscaling</code>
 */
class HorizontalPodAutoscaling extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Whether the Horizontal Pod Autoscaling feature is enabled in the cluster.
     * When enabled, it ensures that a Heapster pod is running in the cluster,
     * which is also used by the Cloud Monitoring service.
     * </pre>
     *
     * <code>bool disabled = 1;</code>
     */
    private $disabled = false;

    public function __construct() {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Whether the Horizontal Pod Autoscaling feature is enabled in the cluster.
     * When enabled, it ensures that a Heapster pod is running in the cluster,
     * which is also used by the Cloud Monitoring service.
     * </pre>
     *
     * <code>bool disabled = 1;</code>
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * <pre>
     * Whether the Horizontal Pod Autoscaling feature is enabled in the cluster.
     * When enabled, it ensures that a Heapster pod is running in the cluster,
     * which is also used by the Cloud Monitoring service.
     * </pre>
     *
     * <code>bool disabled = 1;</code>
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;
    }

}

