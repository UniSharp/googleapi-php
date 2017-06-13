<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response to a batch image annotation request.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.BatchAnnotateImagesResponse</code>
 */
class BatchAnnotateImagesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Individual responses to image annotation requests within the batch.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.AnnotateImageResponse responses = 1;</code>
     */
    private $responses;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Individual responses to image annotation requests within the batch.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.AnnotateImageResponse responses = 1;</code>
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * <pre>
     * Individual responses to image annotation requests within the batch.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.AnnotateImageResponse responses = 1;</code>
     */
    public function setResponses(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\AnnotateImageResponse::class);
        $this->responses = $arr;
    }

}

