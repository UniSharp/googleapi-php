<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bytestream/bytestream.proto

namespace Google\Bytestream;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request object for ByteStream.Read.
 * </pre>
 *
 * Protobuf type <code>google.bytestream.ReadRequest</code>
 */
class ReadRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the resource to read.
     * </pre>
     *
     * <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * <pre>
     * The offset for the first byte to return in the read, relative to the start
     * of the resource.
     * A `read_offset` that is negative or greater than the size of the resource
     * will cause an `OUT_OF_RANGE` error.
     * </pre>
     *
     * <code>int64 read_offset = 2;</code>
     */
    private $read_offset = 0;
    /**
     * <pre>
     * The maximum number of `data` bytes the server is allowed to return in the
     * sum of all `ReadResponse` messages. A `read_limit` of zero indicates that
     * there is no limit, and a negative `read_limit` will cause an error.
     * If the stream returns fewer bytes than allowed by the `read_limit` and no
     * error occurred, the stream includes all data from the `read_offset` to the
     * end of the resource.
     * </pre>
     *
     * <code>int64 read_limit = 3;</code>
     */
    private $read_limit = 0;

    public function __construct() {
        \GPBMetadata\Google\Bytestream\Bytestream::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the resource to read.
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
     * The name of the resource to read.
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
     * The offset for the first byte to return in the read, relative to the start
     * of the resource.
     * A `read_offset` that is negative or greater than the size of the resource
     * will cause an `OUT_OF_RANGE` error.
     * </pre>
     *
     * <code>int64 read_offset = 2;</code>
     */
    public function getReadOffset()
    {
        return $this->read_offset;
    }

    /**
     * <pre>
     * The offset for the first byte to return in the read, relative to the start
     * of the resource.
     * A `read_offset` that is negative or greater than the size of the resource
     * will cause an `OUT_OF_RANGE` error.
     * </pre>
     *
     * <code>int64 read_offset = 2;</code>
     */
    public function setReadOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->read_offset = $var;
    }

    /**
     * <pre>
     * The maximum number of `data` bytes the server is allowed to return in the
     * sum of all `ReadResponse` messages. A `read_limit` of zero indicates that
     * there is no limit, and a negative `read_limit` will cause an error.
     * If the stream returns fewer bytes than allowed by the `read_limit` and no
     * error occurred, the stream includes all data from the `read_offset` to the
     * end of the resource.
     * </pre>
     *
     * <code>int64 read_limit = 3;</code>
     */
    public function getReadLimit()
    {
        return $this->read_limit;
    }

    /**
     * <pre>
     * The maximum number of `data` bytes the server is allowed to return in the
     * sum of all `ReadResponse` messages. A `read_limit` of zero indicates that
     * there is no limit, and a negative `read_limit` will cause an error.
     * If the stream returns fewer bytes than allowed by the `read_limit` and no
     * error occurred, the stream includes all data from the `read_offset` to the
     * end of the resource.
     * </pre>
     *
     * <code>int64 read_limit = 3;</code>
     */
    public function setReadLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->read_limit = $var;
    }

}

