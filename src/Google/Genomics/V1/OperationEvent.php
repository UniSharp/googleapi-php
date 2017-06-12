<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/operations.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * An event that occurred during an [Operation][google.longrunning.Operation].
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.OperationEvent</code>
 */
class OperationEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Optional time of when event started.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    private $start_time = null;
    /**
     * <pre>
     * Optional time of when event finished. An event can have a start time and no
     * finish time. If an event has a finish time, there must be a start time.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * <pre>
     * Required description of event.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    private $description = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Operations::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Optional time of when event started.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * <pre>
     * Optional time of when event started.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    public function setStartTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;
    }

    /**
     * <pre>
     * Optional time of when event finished. An event can have a start time and no
     * finish time. If an event has a finish time, there must be a start time.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * <pre>
     * Optional time of when event finished. An event can have a start time and no
     * finish time. If an event has a finish time, there must be a start time.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    public function setEndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;
    }

    /**
     * <pre>
     * Required description of event.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Required description of event.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

}
