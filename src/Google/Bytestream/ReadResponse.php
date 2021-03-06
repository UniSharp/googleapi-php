<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bytestream/bytestream.proto

namespace Google\Bytestream;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response object for ByteStream.Read.
 * </pre>
 *
 * Protobuf type <code>google.bytestream.ReadResponse</code>
 */
class ReadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A portion of the data for the resource. The service **may** leave `data`
     * empty for any given `ReadResponse`. This enables the service to inform the
     * client that the request is still live while it is running an operation to
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
     * A portion of the data for the resource. The service **may** leave `data`
     * empty for any given `ReadResponse`. This enables the service to inform the
     * client that the request is still live while it is running an operation to
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
     * A portion of the data for the resource. The service **may** leave `data`
     * empty for any given `ReadResponse`. This enables the service to inform the
     * client that the request is still live while it is running an operation to
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

