<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Container structure for the content to inspect.
 * </pre>
 *
 * Protobuf type <code>google.privacy.dlp.v2beta1.ContentItem</code>
 */
class ContentItem extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Type of the content, as defined in Content-Type HTTP header.
     * Supported types are: all "text" types, octet streams, PNG images,
     * JPEG images.
     * </pre>
     *
     * <code>string type = 1;</code>
     */
    private $type = '';
    protected $data_item;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Type of the content, as defined in Content-Type HTTP header.
     * Supported types are: all "text" types, octet streams, PNG images,
     * JPEG images.
     * </pre>
     *
     * <code>string type = 1;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <pre>
     * Type of the content, as defined in Content-Type HTTP header.
     * Supported types are: all "text" types, octet streams, PNG images,
     * JPEG images.
     * </pre>
     *
     * <code>string type = 1;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;
    }

    /**
     * <pre>
     * Content data to inspect or redact.
     * </pre>
     *
     * <code>bytes data = 2;</code>
     */
    public function getData()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * Content data to inspect or redact.
     * </pre>
     *
     * <code>bytes data = 2;</code>
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * String data to inspect or redact.
     * </pre>
     *
     * <code>string value = 3;</code>
     */
    public function getValue()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * String data to inspect or redact.
     * </pre>
     *
     * <code>string value = 3;</code>
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);
    }

    public function getDataItem()
    {
        return $this->whichOneof("data_item");
    }

}

