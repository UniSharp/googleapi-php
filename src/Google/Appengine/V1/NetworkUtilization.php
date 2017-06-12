<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Target scaling by network usage. Only applicable for VM runtimes.
 * </pre>
 *
 * Protobuf type <code>google.appengine.v1.NetworkUtilization</code>
 */
class NetworkUtilization extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Target bytes sent per second.
     * </pre>
     *
     * <code>int32 target_sent_bytes_per_second = 1;</code>
     */
    private $target_sent_bytes_per_second = 0;
    /**
     * <pre>
     * Target packets sent per second.
     * </pre>
     *
     * <code>int32 target_sent_packets_per_second = 11;</code>
     */
    private $target_sent_packets_per_second = 0;
    /**
     * <pre>
     * Target bytes received per second.
     * </pre>
     *
     * <code>int32 target_received_bytes_per_second = 12;</code>
     */
    private $target_received_bytes_per_second = 0;
    /**
     * <pre>
     * Target packets received per second.
     * </pre>
     *
     * <code>int32 target_received_packets_per_second = 13;</code>
     */
    private $target_received_packets_per_second = 0;

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Target bytes sent per second.
     * </pre>
     *
     * <code>int32 target_sent_bytes_per_second = 1;</code>
     */
    public function getTargetSentBytesPerSecond()
    {
        return $this->target_sent_bytes_per_second;
    }

    /**
     * <pre>
     * Target bytes sent per second.
     * </pre>
     *
     * <code>int32 target_sent_bytes_per_second = 1;</code>
     */
    public function setTargetSentBytesPerSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_sent_bytes_per_second = $var;
    }

    /**
     * <pre>
     * Target packets sent per second.
     * </pre>
     *
     * <code>int32 target_sent_packets_per_second = 11;</code>
     */
    public function getTargetSentPacketsPerSecond()
    {
        return $this->target_sent_packets_per_second;
    }

    /**
     * <pre>
     * Target packets sent per second.
     * </pre>
     *
     * <code>int32 target_sent_packets_per_second = 11;</code>
     */
    public function setTargetSentPacketsPerSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_sent_packets_per_second = $var;
    }

    /**
     * <pre>
     * Target bytes received per second.
     * </pre>
     *
     * <code>int32 target_received_bytes_per_second = 12;</code>
     */
    public function getTargetReceivedBytesPerSecond()
    {
        return $this->target_received_bytes_per_second;
    }

    /**
     * <pre>
     * Target bytes received per second.
     * </pre>
     *
     * <code>int32 target_received_bytes_per_second = 12;</code>
     */
    public function setTargetReceivedBytesPerSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_received_bytes_per_second = $var;
    }

    /**
     * <pre>
     * Target packets received per second.
     * </pre>
     *
     * <code>int32 target_received_packets_per_second = 13;</code>
     */
    public function getTargetReceivedPacketsPerSecond()
    {
        return $this->target_received_packets_per_second;
    }

    /**
     * <pre>
     * Target packets received per second.
     * </pre>
     *
     * <code>int32 target_received_packets_per_second = 13;</code>
     */
    public function setTargetReceivedPacketsPerSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_received_packets_per_second = $var;
    }

}
