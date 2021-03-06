<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Describes the progress of a long-running `AsyncRecognize` call. It is
 * included in the `metadata` field of the `Operation` returned by the
 * `GetOperation` call of the `google::longrunning::Operations` service.
 * </pre>
 *
 * Protobuf type <code>google.cloud.speech.v1beta1.AsyncRecognizeMetadata</code>
 */
class AsyncRecognizeMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Approximate percentage of audio processed thus far. Guaranteed to be 100
     * when the audio is fully processed and the results are available.
     * </pre>
     *
     * <code>int32 progress_percent = 1;</code>
     */
    private $progress_percent = 0;
    /**
     * <pre>
     * Time when the request was received.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    private $start_time = null;
    /**
     * <pre>
     * Time of the most recent processing update.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp last_update_time = 3;</code>
     */
    private $last_update_time = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Approximate percentage of audio processed thus far. Guaranteed to be 100
     * when the audio is fully processed and the results are available.
     * </pre>
     *
     * <code>int32 progress_percent = 1;</code>
     */
    public function getProgressPercent()
    {
        return $this->progress_percent;
    }

    /**
     * <pre>
     * Approximate percentage of audio processed thus far. Guaranteed to be 100
     * when the audio is fully processed and the results are available.
     * </pre>
     *
     * <code>int32 progress_percent = 1;</code>
     */
    public function setProgressPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->progress_percent = $var;
    }

    /**
     * <pre>
     * Time when the request was received.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * <pre>
     * Time when the request was received.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    public function setStartTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;
    }

    /**
     * <pre>
     * Time of the most recent processing update.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp last_update_time = 3;</code>
     */
    public function getLastUpdateTime()
    {
        return $this->last_update_time;
    }

    /**
     * <pre>
     * Time of the most recent processing update.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp last_update_time = 3;</code>
     */
    public function setLastUpdateTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_update_time = $var;
    }

}

