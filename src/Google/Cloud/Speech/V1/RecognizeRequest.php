<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The top-level message sent by the client for the `Recognize` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.speech.v1.RecognizeRequest</code>
 */
class RecognizeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * *Required* Provides information to the recognizer that specifies how to
     * process the request.
     * </pre>
     *
     * <code>.google.cloud.speech.v1.RecognitionConfig config = 1;</code>
     */
    private $config = null;
    /**
     * <pre>
     * *Required* The audio data to be recognized.
     * </pre>
     *
     * <code>.google.cloud.speech.v1.RecognitionAudio audio = 2;</code>
     */
    private $audio = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * *Required* Provides information to the recognizer that specifies how to
     * process the request.
     * </pre>
     *
     * <code>.google.cloud.speech.v1.RecognitionConfig config = 1;</code>
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * <pre>
     * *Required* Provides information to the recognizer that specifies how to
     * process the request.
     * </pre>
     *
     * <code>.google.cloud.speech.v1.RecognitionConfig config = 1;</code>
     */
    public function setConfig(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V1\RecognitionConfig::class);
        $this->config = $var;
    }

    /**
     * <pre>
     * *Required* The audio data to be recognized.
     * </pre>
     *
     * <code>.google.cloud.speech.v1.RecognitionAudio audio = 2;</code>
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * <pre>
     * *Required* The audio data to be recognized.
     * </pre>
     *
     * <code>.google.cloud.speech.v1.RecognitionAudio audio = 2;</code>
     */
    public function setAudio(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V1\RecognitionAudio::class);
        $this->audio = $var;
    }

}

