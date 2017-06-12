<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Target scaling by CPU usage.
 * </pre>
 *
 * Protobuf type <code>google.appengine.v1.CpuUtilization</code>
 */
class CpuUtilization extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Period of time over which CPU utilization is calculated.
     * </pre>
     *
     * <code>.google.protobuf.Duration aggregation_window_length = 1;</code>
     */
    private $aggregation_window_length = null;
    /**
     * <pre>
     * Target CPU utilization ratio to maintain when scaling. Must be between 0
     * and 1.
     * </pre>
     *
     * <code>double target_utilization = 2;</code>
     */
    private $target_utilization = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Period of time over which CPU utilization is calculated.
     * </pre>
     *
     * <code>.google.protobuf.Duration aggregation_window_length = 1;</code>
     */
    public function getAggregationWindowLength()
    {
        return $this->aggregation_window_length;
    }

    /**
     * <pre>
     * Period of time over which CPU utilization is calculated.
     * </pre>
     *
     * <code>.google.protobuf.Duration aggregation_window_length = 1;</code>
     */
    public function setAggregationWindowLength(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->aggregation_window_length = $var;
    }

    /**
     * <pre>
     * Target CPU utilization ratio to maintain when scaling. Must be between 0
     * and 1.
     * </pre>
     *
     * <code>double target_utilization = 2;</code>
     */
    public function getTargetUtilization()
    {
        return $this->target_utilization;
    }

    /**
     * <pre>
     * Target CPU utilization ratio to maintain when scaling. Must be between 0
     * and 1.
     * </pre>
     *
     * <code>double target_utilization = 2;</code>
     */
    public function setTargetUtilization($var)
    {
        GPBUtil::checkDouble($var);
        $this->target_utilization = $var;
    }

}
