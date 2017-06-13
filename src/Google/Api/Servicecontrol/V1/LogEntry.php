<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/log_entry.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * An individual log entry.
 * </pre>
 *
 * Protobuf type <code>google.api.servicecontrol.v1.LogEntry</code>
 */
class LogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The log to which this log entry belongs. Examples: `"syslog"`,
     * `"book_log"`.
     * </pre>
     *
     * <code>string name = 10;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The time the event described by the log entry occurred. If
     * omitted, defaults to operation start time.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp timestamp = 11;</code>
     */
    private $timestamp = null;
    /**
     * <pre>
     * The severity of the log entry. The default value is
     * `LogSeverity.DEFAULT`.
     * </pre>
     *
     * <code>.google.logging.type.LogSeverity severity = 12;</code>
     */
    private $severity = 0;
    /**
     * <pre>
     * A unique ID for the log entry used for deduplication. If omitted,
     * the implementation will generate one based on operation_id.
     * </pre>
     *
     * <code>string insert_id = 4;</code>
     */
    private $insert_id = '';
    /**
     * <pre>
     * A set of user-defined (key, value) data that provides additional
     * information about the log entry.
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 13;</code>
     */
    private $labels;
    protected $payload;

    public function __construct() {
        \GPBMetadata\Google\Api\Servicecontrol\V1\LogEntry::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The log to which this log entry belongs. Examples: `"syslog"`,
     * `"book_log"`.
     * </pre>
     *
     * <code>string name = 10;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * Required. The log to which this log entry belongs. Examples: `"syslog"`,
     * `"book_log"`.
     * </pre>
     *
     * <code>string name = 10;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * The time the event described by the log entry occurred. If
     * omitted, defaults to operation start time.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp timestamp = 11;</code>
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * <pre>
     * The time the event described by the log entry occurred. If
     * omitted, defaults to operation start time.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp timestamp = 11;</code>
     */
    public function setTimestamp(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;
    }

    /**
     * <pre>
     * The severity of the log entry. The default value is
     * `LogSeverity.DEFAULT`.
     * </pre>
     *
     * <code>.google.logging.type.LogSeverity severity = 12;</code>
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * <pre>
     * The severity of the log entry. The default value is
     * `LogSeverity.DEFAULT`.
     * </pre>
     *
     * <code>.google.logging.type.LogSeverity severity = 12;</code>
     */
    public function setSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Logging\Type\LogSeverity::class);
        $this->severity = $var;
    }

    /**
     * <pre>
     * A unique ID for the log entry used for deduplication. If omitted,
     * the implementation will generate one based on operation_id.
     * </pre>
     *
     * <code>string insert_id = 4;</code>
     */
    public function getInsertId()
    {
        return $this->insert_id;
    }

    /**
     * <pre>
     * A unique ID for the log entry used for deduplication. If omitted,
     * the implementation will generate one based on operation_id.
     * </pre>
     *
     * <code>string insert_id = 4;</code>
     */
    public function setInsertId($var)
    {
        GPBUtil::checkString($var, True);
        $this->insert_id = $var;
    }

    /**
     * <pre>
     * A set of user-defined (key, value) data that provides additional
     * information about the log entry.
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 13;</code>
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * <pre>
     * A set of user-defined (key, value) data that provides additional
     * information about the log entry.
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 13;</code>
     */
    public function setLabels(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;
    }

    /**
     * <pre>
     * The log entry payload, represented as a protocol buffer that is
     * expressed as a JSON object. You can only pass `protoPayload`
     * values that belong to a set of approved types.
     * </pre>
     *
     * <code>.google.protobuf.Any proto_payload = 2;</code>
     */
    public function getProtoPayload()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * The log entry payload, represented as a protocol buffer that is
     * expressed as a JSON object. You can only pass `protoPayload`
     * values that belong to a set of approved types.
     * </pre>
     *
     * <code>.google.protobuf.Any proto_payload = 2;</code>
     */
    public function setProtoPayload(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * The log entry payload, represented as a Unicode string (UTF-8).
     * </pre>
     *
     * <code>string text_payload = 3;</code>
     */
    public function getTextPayload()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * The log entry payload, represented as a Unicode string (UTF-8).
     * </pre>
     *
     * <code>string text_payload = 3;</code>
     */
    public function setTextPayload($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);
    }

    /**
     * <pre>
     * The log entry payload, represented as a structure that
     * is expressed as a JSON object.
     * </pre>
     *
     * <code>.google.protobuf.Struct struct_payload = 6;</code>
     */
    public function getStructPayload()
    {
        return $this->readOneof(6);
    }

    /**
     * <pre>
     * The log entry payload, represented as a structure that
     * is expressed as a JSON object.
     * </pre>
     *
     * <code>.google.protobuf.Struct struct_payload = 6;</code>
     */
    public function setStructPayload(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->writeOneof(6, $var);
    }

    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}

