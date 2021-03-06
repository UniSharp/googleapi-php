<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Configuration options for the HTTP (L7) load balancing controller addon,
 * which makes it easy to set up HTTP load balancers for services in a cluster.
 * </pre>
 *
 * Protobuf type <code>google.container.v1.HttpLoadBalancing</code>
 */
class HttpLoadBalancing extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Whether the HTTP Load Balancing controller is enabled in the cluster.
     * When enabled, it runs a small pod in the cluster that manages the load
     * balancers.
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
     * Whether the HTTP Load Balancing controller is enabled in the cluster.
     * When enabled, it runs a small pod in the cluster that manages the load
     * balancers.
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
     * Whether the HTTP Load Balancing controller is enabled in the cluster.
     * When enabled, it runs a small pod in the cluster that manages the load
     * balancers.
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

