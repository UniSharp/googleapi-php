<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/tracing/trace.proto

namespace Google\Tracing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * An event describing an RPC message sent/received on the network.
 * </pre>
 *
 * Protobuf type <code>google.tracing.v1.Span.TimeEvent.NetworkEvent</code>
 */
class Span_TimeEvent_NetworkEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * If available, this is the kernel time:
     * For sent messages, this is the time at which the first bit was sent.
     * For received messages, this is the time at which the last bit was
     * received.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp kernel_time = 1;</code>
     */
    private $kernel_time = null;
    /**
     * <code>.google.tracing.v1.Span.TimeEvent.NetworkEvent.Type type = 2;</code>
     */
    private $type = 0;
    /**
     * <pre>
     * Every message has an identifier, that must be different from all the
     * network messages in this span.
     * This is very important when the request/response are streamed.
     * </pre>
     *
     * <code>uint64 message_id = 3;</code>
     */
    private $message_id = 0;
    /**
     * <pre>
     * Number of bytes send/receive.
     * </pre>
     *
     * <code>uint64 message_size = 4;</code>
     */
    private $message_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Tracing\Trace::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * If available, this is the kernel time:
     * For sent messages, this is the time at which the first bit was sent.
     * For received messages, this is the time at which the last bit was
     * received.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp kernel_time = 1;</code>
     */
    public function getKernelTime()
    {
        return $this->kernel_time;
    }

    /**
     * <pre>
     * If available, this is the kernel time:
     * For sent messages, this is the time at which the first bit was sent.
     * For received messages, this is the time at which the last bit was
     * received.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp kernel_time = 1;</code>
     */
    public function setKernelTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->kernel_time = $var;
    }

    /**
     * <code>.google.tracing.v1.Span.TimeEvent.NetworkEvent.Type type = 2;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <code>.google.tracing.v1.Span.TimeEvent.NetworkEvent.Type type = 2;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Tracing\V1\Span_TimeEvent_NetworkEvent_Type::class);
        $this->type = $var;
    }

    /**
     * <pre>
     * Every message has an identifier, that must be different from all the
     * network messages in this span.
     * This is very important when the request/response are streamed.
     * </pre>
     *
     * <code>uint64 message_id = 3;</code>
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * <pre>
     * Every message has an identifier, that must be different from all the
     * network messages in this span.
     * This is very important when the request/response are streamed.
     * </pre>
     *
     * <code>uint64 message_id = 3;</code>
     */
    public function setMessageId($var)
    {
        GPBUtil::checkUint64($var);
        $this->message_id = $var;
    }

    /**
     * <pre>
     * Number of bytes send/receive.
     * </pre>
     *
     * <code>uint64 message_size = 4;</code>
     */
    public function getMessageSize()
    {
        return $this->message_size;
    }

    /**
     * <pre>
     * Number of bytes send/receive.
     * </pre>
     *
     * <code>uint64 message_size = 4;</code>
     */
    public function setMessageSize($var)
    {
        GPBUtil::checkUint64($var);
        $this->message_size = $var;
    }

}

