<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\Videointelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Video annotation request.
 * </pre>
 *
 * Protobuf type <code>google.cloud.videointelligence.v1beta1.AnnotateVideoRequest</code>
 */
class AnnotateVideoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Input video location. Currently, only
     * [Google Cloud Storage](https://cloud.google.com/storage/) URIs are
     * supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     * A video URI may include wildcards in `object-id`, and thus identify
     * multiple videos. Supported wildcards: '*' to match 0 or more characters;
     * '?' to match 1 character. If unset, the input video should be embedded
     * in the request as `input_content`. If set, `input_content` should be unset.
     * </pre>
     *
     * <code>string input_uri = 1;</code>
     */
    private $input_uri = '';
    /**
     * <pre>
     * The video data bytes. Encoding: base64. If unset, the input video(s)
     * should be specified via `input_uri`. If set, `input_uri` should be unset.
     * </pre>
     *
     * <code>string input_content = 6;</code>
     */
    private $input_content = '';
    /**
     * <pre>
     * Requested video annotation features.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.Feature features = 2;</code>
     */
    private $features;
    /**
     * <pre>
     * Additional video context and/or feature-specific parameters.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.VideoContext video_context = 3;</code>
     */
    private $video_context = null;
    /**
     * <pre>
     * Optional location where the output (in JSON format) should be stored.
     * Currently, only [Google Cloud Storage](https://cloud.google.com/storage/)
     * URIs are supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     * </pre>
     *
     * <code>string output_uri = 4;</code>
     */
    private $output_uri = '';
    /**
     * <pre>
     * Optional cloud region where annotation should take place. Supported cloud
     * regions: `us-east1`, `us-west1`, `europe-west1`, `asia-east1`. If no region
     * is specified, a region will be determined based on video file location.
     * </pre>
     *
     * <code>string location_id = 5;</code>
     */
    private $location_id = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Input video location. Currently, only
     * [Google Cloud Storage](https://cloud.google.com/storage/) URIs are
     * supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     * A video URI may include wildcards in `object-id`, and thus identify
     * multiple videos. Supported wildcards: '*' to match 0 or more characters;
     * '?' to match 1 character. If unset, the input video should be embedded
     * in the request as `input_content`. If set, `input_content` should be unset.
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
     * Input video location. Currently, only
     * [Google Cloud Storage](https://cloud.google.com/storage/) URIs are
     * supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     * A video URI may include wildcards in `object-id`, and thus identify
     * multiple videos. Supported wildcards: '*' to match 0 or more characters;
     * '?' to match 1 character. If unset, the input video should be embedded
     * in the request as `input_content`. If set, `input_content` should be unset.
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
     * The video data bytes. Encoding: base64. If unset, the input video(s)
     * should be specified via `input_uri`. If set, `input_uri` should be unset.
     * </pre>
     *
     * <code>string input_content = 6;</code>
     */
    public function getInputContent()
    {
        return $this->input_content;
    }

    /**
     * <pre>
     * The video data bytes. Encoding: base64. If unset, the input video(s)
     * should be specified via `input_uri`. If set, `input_uri` should be unset.
     * </pre>
     *
     * <code>string input_content = 6;</code>
     */
    public function setInputContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_content = $var;
    }

    /**
     * <pre>
     * Requested video annotation features.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.Feature features = 2;</code>
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * <pre>
     * Requested video annotation features.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.Feature features = 2;</code>
     */
    public function setFeatures(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Videointelligence\V1beta1\Feature::class);
        $this->features = $arr;
    }

    /**
     * <pre>
     * Additional video context and/or feature-specific parameters.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.VideoContext video_context = 3;</code>
     */
    public function getVideoContext()
    {
        return $this->video_context;
    }

    /**
     * <pre>
     * Additional video context and/or feature-specific parameters.
     * </pre>
     *
     * <code>.google.cloud.videointelligence.v1beta1.VideoContext video_context = 3;</code>
     */
    public function setVideoContext(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Videointelligence\V1beta1\VideoContext::class);
        $this->video_context = $var;
    }

    /**
     * <pre>
     * Optional location where the output (in JSON format) should be stored.
     * Currently, only [Google Cloud Storage](https://cloud.google.com/storage/)
     * URIs are supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     * </pre>
     *
     * <code>string output_uri = 4;</code>
     */
    public function getOutputUri()
    {
        return $this->output_uri;
    }

    /**
     * <pre>
     * Optional location where the output (in JSON format) should be stored.
     * Currently, only [Google Cloud Storage](https://cloud.google.com/storage/)
     * URIs are supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     * </pre>
     *
     * <code>string output_uri = 4;</code>
     */
    public function setOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri = $var;
    }

    /**
     * <pre>
     * Optional cloud region where annotation should take place. Supported cloud
     * regions: `us-east1`, `us-west1`, `europe-west1`, `asia-east1`. If no region
     * is specified, a region will be determined based on video file location.
     * </pre>
     *
     * <code>string location_id = 5;</code>
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * <pre>
     * Optional cloud region where annotation should take place. Supported cloud
     * regions: `us-east1`, `us-west1`, `europe-west1`, `asia-east1`. If no region
     * is specified, a region will be determined based on video file location.
     * </pre>
     *
     * <code>string location_id = 5;</code>
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;
    }

}

