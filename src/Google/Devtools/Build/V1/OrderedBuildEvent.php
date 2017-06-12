<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/publish_build_event.proto

namespace Google\Devtools\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Build event with contextual information about the stream it belongs to and
 * its position in that stream.
 * </pre>
 *
 * Protobuf type <code>google.devtools.build.v1.OrderedBuildEvent</code>
 */
class OrderedBuildEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Which build event stream this event belongs to.
     * </pre>
     *
     * <code>.google.devtools.build.v1.StreamId stream_id = 1;</code>
     */
    private $stream_id = null;
    /**
     * <pre>
     * The position of this event in the stream. The sequence numbers for a build
     * event stream should be a sequence of consecutive natural numbers starting
     * from one. (1, 2, 3, ...)
     * </pre>
     *
     * <code>int64 sequence_number = 2;</code>
     */
    private $sequence_number = 0;
    /**
     * <pre>
     * The actual event.
     * </pre>
     *
     * <code>.google.devtools.build.v1.BuildEvent event = 3;</code>
     */
    private $event = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Build\V1\PublishBuildEvent::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Which build event stream this event belongs to.
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
     * Which build event stream this event belongs to.
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
     * The position of this event in the stream. The sequence numbers for a build
     * event stream should be a sequence of consecutive natural numbers starting
     * from one. (1, 2, 3, ...)
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
     * The position of this event in the stream. The sequence numbers for a build
     * event stream should be a sequence of consecutive natural numbers starting
     * from one. (1, 2, 3, ...)
     * </pre>
     *
     * <code>int64 sequence_number = 2;</code>
     */
    public function setSequenceNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->sequence_number = $var;
    }

    /**
     * <pre>
     * The actual event.
     * </pre>
     *
     * <code>.google.devtools.build.v1.BuildEvent event = 3;</code>
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * <pre>
     * The actual event.
     * </pre>
     *
     * <code>.google.devtools.build.v1.BuildEvent event = 3;</code>
     */
    public function setEvent(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\BuildEvent::class);
        $this->event = $var;
    }

}

