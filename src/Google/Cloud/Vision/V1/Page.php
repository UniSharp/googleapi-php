<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/text_annotation.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Detected page from OCR.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.Page</code>
 */
class Page extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Additional information detected on the page.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     */
    private $property = null;
    /**
     * <pre>
     * Page width in pixels.
     * </pre>
     *
     * <code>int32 width = 2;</code>
     */
    private $width = 0;
    /**
     * <pre>
     * Page height in pixels.
     * </pre>
     *
     * <code>int32 height = 3;</code>
     */
    private $height = 0;
    /**
     * <pre>
     * List of blocks of text, images etc on this page.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.Block blocks = 4;</code>
     */
    private $blocks;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\TextAnnotation::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Additional information detected on the page.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * <pre>
     * Additional information detected on the page.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     */
    public function setProperty(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\TextAnnotation_TextProperty::class);
        $this->property = $var;
    }

    /**
     * <pre>
     * Page width in pixels.
     * </pre>
     *
     * <code>int32 width = 2;</code>
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * <pre>
     * Page width in pixels.
     * </pre>
     *
     * <code>int32 width = 2;</code>
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->width = $var;
    }

    /**
     * <pre>
     * Page height in pixels.
     * </pre>
     *
     * <code>int32 height = 3;</code>
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * <pre>
     * Page height in pixels.
     * </pre>
     *
     * <code>int32 height = 3;</code>
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;
    }

    /**
     * <pre>
     * List of blocks of text, images etc on this page.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.Block blocks = 4;</code>
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * <pre>
     * List of blocks of text, images etc on this page.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.Block blocks = 4;</code>
     */
    public function setBlocks(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\Block::class);
        $this->blocks = $var;
    }

}
