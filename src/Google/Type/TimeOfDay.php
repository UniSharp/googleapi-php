<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/timeofday.proto

namespace Google\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents a time of day. The date and time zone are either not significant
 * or are specified elsewhere. An API may chose to allow leap seconds. Related
 * types are [google.type.Date][google.type.Date] and `google.protobuf.Timestamp`.
 * </pre>
 *
 * Protobuf type <code>google.type.TimeOfDay</code>
 */
class TimeOfDay extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Hours of day in 24 hour format. Should be from 0 to 23. An API may choose
     * to allow the value "24:00:00" for scenarios like business closing time.
     * </pre>
     *
     * <code>int32 hours = 1;</code>
     */
    private $hours = 0;
    /**
     * <pre>
     * Minutes of hour of day. Must be from 0 to 59.
     * </pre>
     *
     * <code>int32 minutes = 2;</code>
     */
    private $minutes = 0;
    /**
     * <pre>
     * Seconds of minutes of the time. Must normally be from 0 to 59. An API may
     * allow the value 60 if it allows leap-seconds.
     * </pre>
     *
     * <code>int32 seconds = 3;</code>
     */
    private $seconds = 0;
    /**
     * <pre>
     * Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     * </pre>
     *
     * <code>int32 nanos = 4;</code>
     */
    private $nanos = 0;

    public function __construct() {
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Hours of day in 24 hour format. Should be from 0 to 23. An API may choose
     * to allow the value "24:00:00" for scenarios like business closing time.
     * </pre>
     *
     * <code>int32 hours = 1;</code>
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * <pre>
     * Hours of day in 24 hour format. Should be from 0 to 23. An API may choose
     * to allow the value "24:00:00" for scenarios like business closing time.
     * </pre>
     *
     * <code>int32 hours = 1;</code>
     */
    public function setHours($var)
    {
        GPBUtil::checkInt32($var);
        $this->hours = $var;
    }

    /**
     * <pre>
     * Minutes of hour of day. Must be from 0 to 59.
     * </pre>
     *
     * <code>int32 minutes = 2;</code>
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * <pre>
     * Minutes of hour of day. Must be from 0 to 59.
     * </pre>
     *
     * <code>int32 minutes = 2;</code>
     */
    public function setMinutes($var)
    {
        GPBUtil::checkInt32($var);
        $this->minutes = $var;
    }

    /**
     * <pre>
     * Seconds of minutes of the time. Must normally be from 0 to 59. An API may
     * allow the value 60 if it allows leap-seconds.
     * </pre>
     *
     * <code>int32 seconds = 3;</code>
     */
    public function getSeconds()
    {
        return $this->seconds;
    }

    /**
     * <pre>
     * Seconds of minutes of the time. Must normally be from 0 to 59. An API may
     * allow the value 60 if it allows leap-seconds.
     * </pre>
     *
     * <code>int32 seconds = 3;</code>
     */
    public function setSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->seconds = $var;
    }

    /**
     * <pre>
     * Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     * </pre>
     *
     * <code>int32 nanos = 4;</code>
     */
    public function getNanos()
    {
        return $this->nanos;
    }

    /**
     * <pre>
     * Fractions of seconds in nanoseconds. Must be from 0 to 999,999,999.
     * </pre>
     *
     * <code>int32 nanos = 4;</code>
     */
    public function setNanos($var)
    {
        GPBUtil::checkInt32($var);
        $this->nanos = $var;
    }

}

