<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Target scaling by request utilization. Only applicable for VM runtimes.
 * </pre>
 *
 * Protobuf type <code>google.appengine.v1.RequestUtilization</code>
 */
class RequestUtilization extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Target requests per second.
     * </pre>
     *
     * <code>int32 target_request_count_per_second = 1;</code>
     */
    private $target_request_count_per_second = 0;
    /**
     * <pre>
     * Target number of concurrent requests.
     * </pre>
     *
     * <code>int32 target_concurrent_requests = 2;</code>
     */
    private $target_concurrent_requests = 0;

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Target requests per second.
     * </pre>
     *
     * <code>int32 target_request_count_per_second = 1;</code>
     */
    public function getTargetRequestCountPerSecond()
    {
        return $this->target_request_count_per_second;
    }

    /**
     * <pre>
     * Target requests per second.
     * </pre>
     *
     * <code>int32 target_request_count_per_second = 1;</code>
     */
    public function setTargetRequestCountPerSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_request_count_per_second = $var;
    }

    /**
     * <pre>
     * Target number of concurrent requests.
     * </pre>
     *
     * <code>int32 target_concurrent_requests = 2;</code>
     */
    public function getTargetConcurrentRequests()
    {
        return $this->target_concurrent_requests;
    }

    /**
     * <pre>
     * Target number of concurrent requests.
     * </pre>
     *
     * <code>int32 target_concurrent_requests = 2;</code>
     */
    public function setTargetConcurrentRequests($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_concurrent_requests = $var;
    }

}

