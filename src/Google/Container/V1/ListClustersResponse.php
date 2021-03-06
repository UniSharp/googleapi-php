<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * ListClustersResponse is the result of ListClustersRequest.
 * </pre>
 *
 * Protobuf type <code>google.container.v1.ListClustersResponse</code>
 */
class ListClustersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1.Cluster clusters = 1;</code>
     */
    private $clusters;
    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     */
    private $missing_zones;

    public function __construct() {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1.Cluster clusters = 1;</code>
     */
    public function getClusters()
    {
        return $this->clusters;
    }

    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1.Cluster clusters = 1;</code>
     */
    public function setClusters(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Container\V1\Cluster::class);
        $this->clusters = $arr;
    }

    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     */
    public function getMissingZones()
    {
        return $this->missing_zones;
    }

    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     */
    public function setMissingZones(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->missing_zones = $arr;
    }

}

