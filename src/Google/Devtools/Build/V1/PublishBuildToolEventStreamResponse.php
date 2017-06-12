<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/publish_build_event.proto

namespace Google\Devtools\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * States which event has been committed. Any failure to commit will cause
 * RPC errors, hence not recorded by this proto.
 * </pre>
 *
 * Protobuf type <code>google.devtools.build.v1.PublishBuildToolEventStreamResponse</code>
 */
class PublishBuildToolEventStreamResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The stream that contains this event.
     * </pre>
     *
     * <code>.google.devtools.build.v1.StreamId stream_id = 1;</code>
     */
    private $stream_id = null;
    /**
     * <pre>
     * The sequence number of this event that has been committed.
     * </pre>
     *
     * <code>int64 sequence_number = 2;</code>
     */
    private $sequence_number = 0;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Build\V1\PublishBuildEvent::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The stream that contains this event.
     * </pre>
     *
     * <code>.google.devtools.build.v1.StreamId stream_id = 1;</code>
     */
    public function getStreamId()
    {
        return $this->stream_id;
    }

    /**
     * <pre>
     * The stream that contains this event.
     * </pre>
     *
     * <code>.google.devtools.build.v1.StreamId stream_id = 1;</code>
     */
    public function setStreamId(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\StreamId::class);
        $this->stream_id = $var;
    }

    /**
     * <pre>
     * The sequence number of this event that has been committed.
     * </pre>
     *
     * <code>int64 sequence_number = 2;</code>
     */
    public function getSequenceNumber()
    {
        return $this->sequence_number;
    }

    /**
     * <pre>
     * The sequence number of this event that has been committed.
     * </pre>
     *
     * <code>int64 sequence_number = 2;</code>
     */
    public function setSequenceNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->sequence_number = $var;
    }

}
