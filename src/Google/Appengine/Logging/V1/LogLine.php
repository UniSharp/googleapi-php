<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/logging/v1/request_log.proto

namespace Google\Appengine\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Application log line emitted while processing a request.
 * </pre>
 *
 * Protobuf type <code>google.appengine.logging.v1.LogLine</code>
 */
class LogLine extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Approximate time when this log entry was made.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp time = 1;</code>
     */
    private $time = null;
    /**
     * <pre>
     * Severity of this log entry.
     * </pre>
     *
     * <code>.google.logging.type.LogSeverity severity = 2;</code>
     */
    private $severity = 0;
    /**
     * <pre>
     * App-provided log message.
     * </pre>
     *
     * <code>string log_message = 3;</code>
     */
    private $log_message = '';
    /**
     * <pre>
     * Where in the source code this log message was written.
     * </pre>
     *
     * <code>.google.appengine.logging.v1.SourceLocation source_location = 4;</code>
     */
    private $source_location = null;

    public function __construct() {
        \GPBMetadata\Google\Appengine\Logging\V1\RequestLog::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Approximate time when this log entry was made.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp time = 1;</code>
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * <pre>
     * Approximate time when this log entry was made.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp time = 1;</code>
     */
    public function setTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;
    }

    /**
     * <pre>
     * Severity of this log entry.
     * </pre>
     *
     * <code>.google.logging.type.LogSeverity severity = 2;</code>
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * <pre>
     * Severity of this log entry.
     * </pre>
     *
     * <code>.google.logging.type.LogSeverity severity = 2;</code>
     */
    public function setSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Logging\Type\LogSeverity::class);
        $this->severity = $var;
    }

    /**
     * <pre>
     * App-provided log message.
     * </pre>
     *
     * <code>string log_message = 3;</code>
     */
    public function getLogMessage()
    {
        return $this->log_message;
    }

    /**
     * <pre>
     * App-provided log message.
     * </pre>
     *
     * <code>string log_message = 3;</code>
     */
    public function setLogMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_message = $var;
    }

    /**
     * <pre>
     * Where in the source code this log message was written.
     * </pre>
     *
     * <code>.google.appengine.logging.v1.SourceLocation source_location = 4;</code>
     */
    public function getSourceLocation()
    {
        return $this->source_location;
    }

    /**
     * <pre>
     * Where in the source code this log message was written.
     * </pre>
     *
     * <code>.google.appengine.logging.v1.SourceLocation source_location = 4;</code>
     */
    public function setSourceLocation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\Logging\V1\SourceLocation::class);
        $this->source_location = $var;
    }

}

