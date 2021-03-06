<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bytestream/bytestream.proto

namespace Google\Bytestream;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request object for ByteStream.Write.
 * </pre>
 *
 * Protobuf type <code>google.bytestream.WriteRequest</code>
 */
class WriteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the resource to write. This **must** be set on the first
     * `WriteRequest` of each `Write()` action. If it is set on subsequent calls,
     * it **must** match the value of the first request.
     * </pre>
     *
     * <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * <pre>
     * The offset from the beginning of the resource at which the data should be
     * written. It is required on all `WriteRequest`s.
     * In the first `WriteRequest` of a `Write()` action, it indicates
     * the initial offset for the `Write()` call. The value **must** be equal to
     * the `committed_size` that a call to `QueryWriteStatus()` would return.
     * On subsequent calls, this value **must** be set and **must** be equal to
     * the sum of the first `write_offset` and the sizes of all `data` bundles
     * sent previously on this stream.
     * An incorrect value will cause an error.
     * </pre>
     *
     * <code>int64 write_offset = 2;</code>
     */
    private $write_offset = 0;
    /**
     * <pre>
     * If `true`, this indicates that the write is complete. Sending any
     * `WriteRequest`s subsequent to one in which `finish_write` is `true` will
     * cause an error.
     * </pre>
     *
     * <code>bool finish_write = 3;</code>
     */
    private $finish_write = false;
    /**
     * <pre>
     * A portion of the data for the resource. The client **may** leave `data`
     * empty for any given `WriteRequest`. This enables the client to inform the
     * service that the request is still live while it is running an operation to
     * generate more data.
     * </pre>
     *
     * <code>bytes data = 10;</code>
     */
    private $data = '';

    public function __construct() {
        \GPBMetadata\Google\Bytestream\Bytestream::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the resource to write. This **must** be set on the first
     * `WriteRequest` of each `Write()` action. If it is set on subsequent calls,
     * it **must** match the value of the first request.
     * </pre>
     *
     * <code>string resource_name = 1;</code>
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * <pre>
     * The name of the resource to write. This **must** be set on the first
     * `WriteRequest` of each `Write()` action. If it is set on subsequent calls,
     * it **must** match the value of the first request.
     * </pre>
     *
     * <code>string resource_name = 1;</code>
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;
    }

    /**
     * <pre>
     * The offset from the beginning of the resource at which the data should be
     * written. It is required on all `WriteRequest`s.
     * In the first `WriteRequest` of a `Write()` action, it indicates
     * the initial offset for the `Write()` call. The value **must** be equal to
     * the `committed_size` that a call to `QueryWriteStatus()` would return.
     * On subsequent calls, this value **must** be set and **must** be equal to
     * the sum of the first `write_offset` and the sizes of all `data` bundles
     * sent previously on this stream.
     * An incorrect value will cause an error.
     * </pre>
     *
     * <code>int64 write_offset = 2;</code>
     */
    public function getWriteOffset()
    {
        return $this->write_offset;
    }

    /**
     * <pre>
     * The offset from the beginning of the resource at which the data should be
     * written. It is required on all `WriteRequest`s.
     * In the first `WriteRequest` of a `Write()` action, it indicates
     * the initial offset for the `Write()` call. The value **must** be equal to
     * the `committed_size` that a call to `QueryWriteStatus()` would return.
     * On subsequent calls, this value **must** be set and **must** be equal to
     * the sum of the first `write_offset` and the sizes of all `data` bundles
     * sent previously on this stream.
     * An incorrect value will cause an error.
     * </pre>
     *
     * <code>int64 write_offset = 2;</code>
     */
    public function setWriteOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->write_offset = $var;
    }

    /**
     * <pre>
     * If `true`, this indicates that the write is complete. Sending any
     * `WriteRequest`s subsequent to one in which `finish_write` is `true` will
     * cause an error.
     * </pre>
     *
     * <code>bool finish_write = 3;</code>
     */
    public function getFinishWrite()
    {
        return $this->finish_write;
    }

    /**
     * <pre>
     * If `true`, this indicates that the write is complete. Sending any
     * `WriteRequest`s subsequent to one in which `finish_write` is `true` will
     * cause an error.
     * </pre>
     *
     * <code>bool finish_write = 3;</code>
     */
    public function setFinishWrite($var)
    {
        GPBUtil::checkBool($var);
        $this->finish_write = $var;
    }

    /**
     * <pre>
     * A portion of the data for the resource. The client **may** leave `data`
     * empty for any given `WriteRequest`. This enables the client to inform the
     * service that the request is still live while it is running an operation to
     * generate more data.
     * </pre>
     *
     * <code>bytes data = 10;</code>
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * <pre>
     * A portion of the data for the resource. The client **may** leave `data`
     * empty for any given `WriteRequest`. This enables the client to inform the
     * service that the request is still live while it is running an operation to
     * generate more data.
     * </pre>
     *
     * <code>bytes data = 10;</code>
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;
    }

}

