<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Users describe the type of Google Cloud Vision API tasks to perform over
 * images by using *Feature*s. Each Feature indicates a type of image
 * detection task to perform. Features encode the Cloud Vision API
 * vertical to operate on and the number of top-scoring results to return.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.Feature</code>
 */
class Feature extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The feature type.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Feature.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * <pre>
     * Maximum number of results of this type.
     * </pre>
     *
     * <code>int32 max_results = 2;</code>
     */
    private $max_results = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The feature type.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Feature.Type type = 1;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <pre>
     * The feature type.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.Feature.Type type = 1;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Feature_Type::class);
        $this->type = $var;
    }

    /**
     * <pre>
     * Maximum number of results of this type.
     * </pre>
     *
     * <code>int32 max_results = 2;</code>
     */
    public function getMaxResults()
    {
        return $this->max_results;
    }

    /**
     * <pre>
     * Maximum number of results of this type.
     * </pre>
     *
     * <code>int32 max_results = 2;</code>
     */
    public function setMaxResults($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_results = $var;
    }

}

