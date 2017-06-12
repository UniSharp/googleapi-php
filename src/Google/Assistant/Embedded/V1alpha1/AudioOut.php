<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha1/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The audio containing the assistant's response to the query. Sequential chunks
 * of audio data are received in sequential `ConverseResponse` messages.
 * </pre>
 *
 * Protobuf type <code>google.assistant.embedded.v1alpha1.AudioOut</code>
 */
class AudioOut extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * *Output-only* The audio data containing the assistant's response to the
     * query. Sequential chunks of audio data are received in sequential
     * `ConverseResponse` messages.
     * </pre>
     *
     * <code>bytes audio_data = 1;</code>
     */
    private $audio_data = '';

    public function __construct() {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha1\EmbeddedAssistant::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * *Output-only* The audio data containing the assistant's response to the
     * query. Sequential chunks of audio data are received in sequential
     * `ConverseResponse` messages.
     * </pre>
     *
     * <code>bytes audio_data = 1;</code>
     */
    public function getAudioData()
    {
        return $this->audio_data;
    }

    /**
     * <pre>
     * *Output-only* The audio data containing the assistant's response to the
     * query. Sequential chunks of audio data are received in sequential
     * `ConverseResponse` messages.
     * </pre>
     *
     * <code>bytes audio_data = 1;</code>
     */
    public function setAudioData($var)
    {
        GPBUtil::checkString($var, False);
        $this->audio_data = $var;
    }

}
