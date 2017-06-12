<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\Videointelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Label location.
 * </pre>
 *
 * Protobuf type <code>google.cloud.videointelligence.v1beta1.LabelLocation</code>
 */
class LabelLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Video segment. Set to [-1, -1] for video-level labels.
     * Set to [timestamp, timestamp] for frame-level labels.
     * Otherwise, corresponds to one of `AnnotateSpec.segments`
     * (if specified) or to shot boundaries (if requested).
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.VideoSegment segment = 1;</code>
     */
    private $segment = null;
    /**
     * <pre>
     * Confidence that the label is accurate. Range: [0, 1].
     * </pre>
     *
     * <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;
    /**
     * <pre>
     * Label level.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.LabelLevel level = 3;</code>
     */
    private $level = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Video segment. Set to [-1, -1] for video-level labels.
     * Set to [timestamp, timestamp] for frame-level labels.
     * Otherwise, corresponds to one of `AnnotateSpec.segments`
     * (if specified) or to shot boundaries (if requested).
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.VideoSegment segment = 1;</code>
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * <pre>
     * Video segment. Set to [-1, -1] for video-level labels.
     * Set to [timestamp, timestamp] for frame-level labels.
     * Otherwise, corresponds to one of `AnnotateSpec.segments`
     * (if specified) or to shot boundaries (if requested).
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.VideoSegment segment = 1;</code>
     */
    public function setSegment(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Videointelligence\V1beta1\VideoSegment::class);
        $this->segment = $var;
    }

    /**
     * <pre>
     * Confidence that the label is accurate. Range: [0, 1].
     * </pre>
     *
     * <code>float confidence = 2;</code>
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * <pre>
     * Confidence that the label is accurate. Range: [0, 1].
     * </pre>
     *
     * <code>float confidence = 2;</code>
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;
    }

    /**
     * <pre>
     * Label level.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.LabelLevel level = 3;</code>
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * <pre>
     * Label level.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.LabelLevel level = 3;</code>
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Videointelligence\V1beta1\LabelLevel::class);
        $this->level = $var;
    }

}

