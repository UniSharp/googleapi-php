<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Results describes the artifacts created by the build pipeline.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.Results</code>
 */
class Results extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Images that were built as a part of the build.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.BuiltImage images = 2;</code>
     */
    private $images;
    /**
     * <pre>
     * List of build step digests, in order corresponding to build step indices.
     * </pre>
     *
     * <code>repeated string build_step_images = 3;</code>
     */
    private $build_step_images;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Images that were built as a part of the build.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.BuiltImage images = 2;</code>
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <pre>
     * Images that were built as a part of the build.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.BuiltImage images = 2;</code>
     */
    public function setImages(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\BuiltImage::class);
        $this->images = $var;
    }

    /**
     * <pre>
     * List of build step digests, in order corresponding to build step indices.
     * </pre>
     *
     * <code>repeated string build_step_images = 3;</code>
     */
    public function getBuildStepImages()
    {
        return $this->build_step_images;
    }

    /**
     * <pre>
     * List of build step digests, in order corresponding to build step indices.
     * </pre>
     *
     * <code>repeated string build_step_images = 3;</code>
     */
    public function setBuildStepImages(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->build_step_images = $var;
    }

}
