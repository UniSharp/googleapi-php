<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Set of dominant colors and their corresponding scores.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.DominantColorsAnnotation</code>
 */
class DominantColorsAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * RGB color values with their score and pixel fraction.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.ColorInfo colors = 1;</code>
     */
    private $colors;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * RGB color values with their score and pixel fraction.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.ColorInfo colors = 1;</code>
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * <pre>
     * RGB color values with their score and pixel fraction.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.ColorInfo colors = 1;</code>
     */
    public function setColors(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\ColorInfo::class);
        $this->colors = $var;
    }

}
