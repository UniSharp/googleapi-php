<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * ListOperationsRequest lists operations.
 * </pre>
 *
 * Protobuf type <code>google.container.v1.ListOperationsRequest</code>
 */
class ListOperationsRequest extends \Google\Protobuf\Internal\Message
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
     * The name of the Google Compute Engine [zone](/compute/docs/zones#available)
     * to return operations for, or `-` for all zones.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    private $zone = '';

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
     * The name of the Google Compute Engine [zone](/compute/docs/zones#available)
     * to return operations for, or `-` for all zones.
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
     * The name of the Google Compute Engine [zone](/compute/docs/zones#available)
     * to return operations for, or `-` for all zones.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;
    }

}

