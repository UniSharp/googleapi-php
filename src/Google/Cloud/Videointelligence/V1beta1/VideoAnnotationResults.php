<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\Videointelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Annotation results for a single video.
 * </pre>
 *
 * Protobuf type <code>google.cloud.videointelligence.v1beta1.VideoAnnotationResults</code>
 */
class VideoAnnotationResults extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Video file location in
     * [Google Cloud Storage](https://cloud.google.com/storage/).
     * </pre>
     *
     * <code>string input_uri = 1;</code>
     */
    private $input_uri = '';
    /**
     * <pre>
     * Label annotations. There is exactly one element for each unique label.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.LabelAnnotation label_annotations = 2;</code>
     */
    private $label_annotations;
    /**
     * <pre>
     * Face annotations. There is exactly one element for each unique face.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.FaceAnnotation face_annotations = 3;</code>
     */
    private $face_annotations;
    /**
     * <pre>
     * Shot annotations. Each shot is represented as a video segment.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.VideoSegment shot_annotations = 4;</code>
     */
    private $shot_annotations;
    /**
     * <pre>
     * Safe search annotations.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.SafeSearchAnnotation safe_search_annotations = 6;</code>
     */
    private $safe_search_annotations;
    /**
     * <pre>
     * If set, indicates an error. Note that for a single `AnnotateVideoRequest`
     * some videos may succeed and some may fail.
     * </pre>
     *
     * <code>.google.rpc.Status error = 5;</code>
     */
    private $error = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Video file location in
     * [Google Cloud Storage](https://cloud.google.com/storage/).
     * </pre>
     *
     * <code>string input_uri = 1;</code>
     */
    public function getInputUri()
    {
        return $this->input_uri;
    }

    /**
     * <pre>
     * Video file location in
     * [Google Cloud Storage](https://cloud.google.com/storage/).
     * </pre>
     *
     * <code>string input_uri = 1;</code>
     */
    public function setInputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_uri = $var;
    }

    /**
     * <pre>
     * Label annotations. There is exactly one element for each unique label.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.LabelAnnotation label_annotations = 2;</code>
     */
    public function getLabelAnnotations()
    {
        return $this->label_annotations;
    }

    /**
     * <pre>
     * Label annotations. There is exactly one element for each unique label.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.LabelAnnotation label_annotations = 2;</code>
     */
    public function setLabelAnnotations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Videointelligence\V1beta1\LabelAnnotation::class);
        $this->label_annotations = $arr;
    }

    /**
     * <pre>
     * Face annotations. There is exactly one element for each unique face.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.FaceAnnotation face_annotations = 3;</code>
     */
    public function getFaceAnnotations()
    {
        return $this->face_annotations;
    }

    /**
     * <pre>
     * Face annotations. There is exactly one element for each unique face.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.FaceAnnotation face_annotations = 3;</code>
     */
    public function setFaceAnnotations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Videointelligence\V1beta1\FaceAnnotation::class);
        $this->face_annotations = $arr;
    }

    /**
     * <pre>
     * Shot annotations. Each shot is represented as a video segment.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.VideoSegment shot_annotations = 4;</code>
     */
    public function getShotAnnotations()
    {
        return $this->shot_annotations;
    }

    /**
     * <pre>
     * Shot annotations. Each shot is represented as a video segment.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.VideoSegment shot_annotations = 4;</code>
     */
    public function setShotAnnotations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Videointelligence\V1beta1\VideoSegment::class);
        $this->shot_annotations = $arr;
    }

    /**
     * <pre>
     * Safe search annotations.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.SafeSearchAnnotation safe_search_annotations = 6;</code>
     */
    public function getSafeSearchAnnotations()
    {
        return $this->safe_search_annotations;
    }

    /**
     * <pre>
     * Safe search annotations.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.SafeSearchAnnotation safe_search_annotations = 6;</code>
     */
    public function setSafeSearchAnnotations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Videointelligence\V1beta1\SafeSearchAnnotation::class);
        $this->safe_search_annotations = $arr;
    }

    /**
     * <pre>
     * If set, indicates an error. Note that for a single `AnnotateVideoRequest`
     * some videos may succeed and some may fail.
     * </pre>
     *
     * <code>.google.rpc.Status error = 5;</code>
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * <pre>
     * If set, indicates an error. Note that for a single `AnnotateVideoRequest`
     * some videos may succeed and some may fail.
     * </pre>
     *
     * <code>.google.rpc.Status error = 5;</code>
     */
    public function setError(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;
    }

}

