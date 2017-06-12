<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Provides information to the recognizer that specifies how to process the
 * request.
 * </pre>
 *
 * Protobuf type <code>google.cloud.speech.v1beta1.RecognitionConfig</code>
 */
class RecognitionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * *Required* Encoding of audio data sent in all `RecognitionAudio` messages.
     * </pre>
     *
     * <code>.google.cloud.speech.v1beta1.RecognitionConfig.AudioEncoding encoding = 1;</code>
     */
    private $encoding = 0;
    /**
     * <pre>
     * *Required* Sample rate in Hertz of the audio data sent in all
     * `RecognitionAudio` messages. Valid values are: 8000-48000.
     * 16000 is optimal. For best results, set the sampling rate of the audio
     * source to 16000 Hz. If that's not possible, use the native sample rate of
     * the audio source (instead of re-sampling).
     * </pre>
     *
     * <code>int32 sample_rate = 2;</code>
     */
    private $sample_rate = 0;
    /**
     * <pre>
     * *Optional* The language of the supplied audio as a BCP-47 language tag.
     * Example: "en-GB"  https://www.rfc-editor.org/rfc/bcp/bcp47.txt
     * If omitted, defaults to "en-US". See
     * [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     * </pre>
     *
     * <code>string language_code = 3;</code>
     */
    private $language_code = '';
    /**
     * <pre>
     * *Optional* Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechRecognitionResult`.
     * The server may return fewer than `max_alternatives`.
     * Valid values are `0`-`30`. A value of `0` or `1` will return a maximum of
     * one. If omitted, will return a maximum of one.
     * </pre>
     *
     * <code>int32 max_alternatives = 4;</code>
     */
    private $max_alternatives = 0;
    /**
     * <pre>
     * *Optional* If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     * </pre>
     *
     * <code>bool profanity_filter = 5;</code>
     */
    private $profanity_filter = false;
    /**
     * <pre>
     * *Optional* A means to provide context to assist the speech recognition.
     * </pre>
     *
     * <code>.google.cloud.speech.v1beta1.SpeechContext speech_context = 6;</code>
     */
    private $speech_context = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * *Required* Encoding of audio data sent in all `RecognitionAudio` messages.
     * </pre>
     *
     * <code>.google.cloud.speech.v1beta1.RecognitionConfig.AudioEncoding encoding = 1;</code>
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * <pre>
     * *Required* Encoding of audio data sent in all `RecognitionAudio` messages.
     * </pre>
     *
     * <code>.google.cloud.speech.v1beta1.RecognitionConfig.AudioEncoding encoding = 1;</code>
     */
    public function setEncoding($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Speech\V1beta1\RecognitionConfig_AudioEncoding::class);
        $this->encoding = $var;
    }

    /**
     * <pre>
     * *Required* Sample rate in Hertz of the audio data sent in all
     * `RecognitionAudio` messages. Valid values are: 8000-48000.
     * 16000 is optimal. For best results, set the sampling rate of the audio
     * source to 16000 Hz. If that's not possible, use the native sample rate of
     * the audio source (instead of re-sampling).
     * </pre>
     *
     * <code>int32 sample_rate = 2;</code>
     */
    public function getSampleRate()
    {
        return $this->sample_rate;
    }

    /**
     * <pre>
     * *Required* Sample rate in Hertz of the audio data sent in all
     * `RecognitionAudio` messages. Valid values are: 8000-48000.
     * 16000 is optimal. For best results, set the sampling rate of the audio
     * source to 16000 Hz. If that's not possible, use the native sample rate of
     * the audio source (instead of re-sampling).
     * </pre>
     *
     * <code>int32 sample_rate = 2;</code>
     */
    public function setSampleRate($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate = $var;
    }

    /**
     * <pre>
     * *Optional* The language of the supplied audio as a BCP-47 language tag.
     * Example: "en-GB"  https://www.rfc-editor.org/rfc/bcp/bcp47.txt
     * If omitted, defaults to "en-US". See
     * [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     * </pre>
     *
     * <code>string language_code = 3;</code>
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * <pre>
     * *Optional* The language of the supplied audio as a BCP-47 language tag.
     * Example: "en-GB"  https://www.rfc-editor.org/rfc/bcp/bcp47.txt
     * If omitted, defaults to "en-US". See
     * [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     * </pre>
     *
     * <code>string language_code = 3;</code>
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;
    }

    /**
     * <pre>
     * *Optional* Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechRecognitionResult`.
     * The server may return fewer than `max_alternatives`.
     * Valid values are `0`-`30`. A value of `0` or `1` will return a maximum of
     * one. If omitted, will return a maximum of one.
     * </pre>
     *
     * <code>int32 max_alternatives = 4;</code>
     */
    public function getMaxAlternatives()
    {
        return $this->max_alternatives;
    }

    /**
     * <pre>
     * *Optional* Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechRecognitionResult`.
     * The server may return fewer than `max_alternatives`.
     * Valid values are `0`-`30`. A value of `0` or `1` will return a maximum of
     * one. If omitted, will return a maximum of one.
     * </pre>
     *
     * <code>int32 max_alternatives = 4;</code>
     */
    public function setMaxAlternatives($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_alternatives = $var;
    }

    /**
     * <pre>
     * *Optional* If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     * </pre>
     *
     * <code>bool profanity_filter = 5;</code>
     */
    public function getProfanityFilter()
    {
        return $this->profanity_filter;
    }

    /**
     * <pre>
     * *Optional* If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     * </pre>
     *
     * <code>bool profanity_filter = 5;</code>
     */
    public function setProfanityFilter($var)
    {
        GPBUtil::checkBool($var);
        $this->profanity_filter = $var;
    }

    /**
     * <pre>
     * *Optional* A means to provide context to assist the speech recognition.
     * </pre>
     *
     * <code>.google.cloud.speech.v1beta1.SpeechContext speech_context = 6;</code>
     */
    public function getSpeechContext()
    {
        return $this->speech_context;
    }

    /**
     * <pre>
     * *Optional* A means to provide context to assist the speech recognition.
     * </pre>
     *
     * <code>.google.cloud.speech.v1beta1.SpeechContext speech_context = 6;</code>
     */
    public function setSpeechContext(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V1beta1\SpeechContext::class);
        $this->speech_context = $var;
    }

}

