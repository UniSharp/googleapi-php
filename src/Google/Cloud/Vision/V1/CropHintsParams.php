<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Parameters for crop hints annotation request.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.CropHintsParams</code>
 */
class CropHintsParams extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Aspect ratios in floats, representing the ratio of the width to the height
     * of the image. For example, if the desired aspect ratio is 4/3, the
     * corresponding float value should be 1.33333.  If not specified, the
     * best possible crop is returned. The number of provided aspect ratios is
     * limited to a maximum of 16; any aspect ratios provided after the 16th are
     * ignored.
     * </pre>
     *
     * <code>repeated float aspect_ratios = 1;</code>
     */
    private $aspect_ratios;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Aspect ratios in floats, representing the ratio of the width to the height
     * of the image. For example, if the desired aspect ratio is 4/3, the
     * corresponding float value should be 1.33333.  If not specified, the
     * best possible crop is returned. The number of provided aspect ratios is
     * limited to a maximum of 16; any aspect ratios provided after the 16th are
     * ignored.
     * </pre>
     *
     * <code>repeated float aspect_ratios = 1;</code>
     */
    public function getAspectRatios()
    {
        return $this->aspect_ratios;
    }

    /**
     * <pre>
     * Aspect ratios in floats, representing the ratio of the width to the height
     * of the image. For example, if the desired aspect ratio is 4/3, the
     * corresponding float value should be 1.33333.  If not specified, the
     * best possible crop is returned. The number of provided aspect ratios is
     * limited to a maximum of 16; any aspect ratios provided after the 16th are
     * ignored.
     * </pre>
     *
     * <code>repeated float aspect_ratios = 1;</code>
     */
    public function setAspectRatios(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->aspect_ratios = $var;
    }

}

