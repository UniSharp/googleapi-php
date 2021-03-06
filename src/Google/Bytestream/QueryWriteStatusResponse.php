<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bytestream/bytestream.proto

namespace Google\Bytestream;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response object for ByteStream.QueryWriteStatus.
 * </pre>
 *
 * Protobuf type <code>google.bytestream.QueryWriteStatusResponse</code>
 */
class QueryWriteStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The number of bytes that have been processed for the given resource.
     * </pre>
     *
     * <code>int64 committed_size = 1;</code>
     */
    private $committed_size = 0;
    /**
     * <pre>
     * `complete` is `true` only if the client has sent a `WriteRequest` with
     * `finish_write` set to true, and the server has processed that request.
     * </pre>
     *
     * <code>bool complete = 2;</code>
     */
    private $complete = false;

    public function __construct() {
        \GPBMetadata\Google\Bytestream\Bytestream::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The number of bytes that have been processed for the given resource.
     * </pre>
     *
     * <code>int64 committed_size = 1;</code>
     */
    public function getCommittedSize()
    {
        return $this->committed_size;
    }

    /**
     * <pre>
     * The number of bytes that have been processed for the given resource.
     * </pre>
     *
     * <code>int64 committed_size = 1;</code>
     */
    public function setCommittedSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->committed_size = $var;
    }

    /**
     * <pre>
     * `complete` is `true` only if the client has sent a `WriteRequest` with
     * `finish_write` set to true, and the server has processed that request.
     * </pre>
     *
     * <code>bool complete = 2;</code>
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * <pre>
     * `complete` is `true` only if the client has sent a `WriteRequest` with
     * `finish_write` set to true, and the server has processed that request.
     * </pre>
     *
     * <code>bool complete = 2;</code>
     */
    public function setComplete($var)
    {
        GPBUtil::checkBool($var);
        $this->complete = $var;
    }

}

