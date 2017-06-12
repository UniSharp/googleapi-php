<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Bounding box encompassing detected text within an image.
 * </pre>
 *
 * Protobuf type <code>google.privacy.dlp.v2beta1.ImageLocation</code>
 */
class ImageLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Top coordinate of the bounding box. (0,0) is upper left.
     * </pre>
     *
     * <code>int32 top = 1;</code>
     */
    private $top = 0;
    /**
     * <pre>
     * Left coordinate of the bounding box. (0,0) is upper left.
     * </pre>
     *
     * <code>int32 left = 2;</code>
     */
    private $left = 0;
    /**
     * <pre>
     * Width of the bounding box in pixels.
     * </pre>
     *
     * <code>int32 width = 3;</code>
     */
    private $width = 0;
    /**
     * <pre>
     * Height of the bounding box in pixels.
     * </pre>
     *
     * <code>int32 height = 4;</code>
     */
    private $height = 0;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Top coordinate of the bounding box. (0,0) is upper left.
     * </pre>
     *
     * <code>int32 top = 1;</code>
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * <pre>
     * Top coordinate of the bounding box. (0,0) is upper left.
     * </pre>
     *
     * <code>int32 top = 1;</code>
     */
    public function setTop($var)
    {
        GPBUtil::checkInt32($var);
        $this->top = $var;
    }

    /**
     * <pre>
     * Left coordinate of the bounding box. (0,0) is upper left.
     * </pre>
     *
     * <code>int32 left = 2;</code>
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * <pre>
     * Left coordinate of the bounding box. (0,0) is upper left.
     * </pre>
     *
     * <code>int32 left = 2;</code>
     */
    public function setLeft($var)
    {
        GPBUtil::checkInt32($var);
        $this->left = $var;
    }

    /**
     * <pre>
     * Width of the bounding box in pixels.
     * </pre>
     *
     * <code>int32 width = 3;</code>
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * <pre>
     * Width of the bounding box in pixels.
     * </pre>
     *
     * <code>int32 width = 3;</code>
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->width = $var;
    }

    /**
     * <pre>
     * Height of the bounding box in pixels.
     * </pre>
     *
     * <code>int32 height = 4;</code>
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * <pre>
     * Height of the bounding box in pixels.
     * </pre>
     *
     * <code>int32 height = 4;</code>
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;
    }

}

