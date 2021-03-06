<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * ListOperationsResponse is the result of ListOperationsRequest.
 * </pre>
 *
 * Protobuf type <code>google.container.v1.ListOperationsResponse</code>
 */
class ListOperationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of operations in the project in the specified zone.
     * </pre>
     *
     * <code>repeated .google.container.v1.Operation operations = 1;</code>
     */
    private $operations;
    /**
     * <pre>
     * If any zones are listed here, the list of operations returned
     * may be missing the operations from those zones.
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
     * A list of operations in the project in the specified zone.
     * </pre>
     *
     * <code>repeated .google.container.v1.Operation operations = 1;</code>
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * <pre>
     * A list of operations in the project in the specified zone.
     * </pre>
     *
     * <code>repeated .google.container.v1.Operation operations = 1;</code>
     */
    public function setOperations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Container\V1\Operation::class);
        $this->operations = $arr;
    }

    /**
     * <pre>
     * If any zones are listed here, the list of operations returned
     * may be missing the operations from those zones.
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
     * If any zones are listed here, the list of operations returned
     * may be missing the operations from those zones.
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

