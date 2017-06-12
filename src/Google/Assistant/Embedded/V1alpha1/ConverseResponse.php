<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha1/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The top-level message received by the client. A series of one or more
 * `ConverseResponse` messages are streamed back to the client.
 * </pre>
 *
 * Protobuf type <code>google.assistant.embedded.v1alpha1.ConverseResponse</code>
 */
class ConverseResponse extends \Google\Protobuf\Internal\Message
{
    protected $converse_response;

    public function __construct() {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha1\EmbeddedAssistant::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * *Output-only* If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     * If an error occurs during processing, this message will be set and there
     * will be no further messages sent.
     * </pre>
     *
     * <code>.google.rpc.Status error = 1;</code>
     */
    public function getError()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * *Output-only* If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     * If an error occurs during processing, this message will be set and there
     * will be no further messages sent.
     * </pre>
     *
     * <code>.google.rpc.Status error = 1;</code>
     */
    public function setError(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->writeOneof(1, $var);
    }

    /**
     * <pre>
     * *Output-only* Indicates the type of event.
     * </pre>
     *
     * <code>.google.assistant.embedded.v1alpha1.ConverseResponse.EventType event_type = 2;</code>
     */
    public function getEventType()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * *Output-only* Indicates the type of event.
     * </pre>
     *
     * <code>.google.assistant.embedded.v1alpha1.ConverseResponse.EventType event_type = 2;</code>
     */
    public function setEventType($var)
    {
        GPBUtil::checkEnum($var, \Google\Assistant\Embedded\V1alpha1\ConverseResponse_EventType::class);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * *Output-only* The audio containing the assistant's response to the query.
     * </pre>
     *
     * <code>.google.assistant.embedded.v1alpha1.AudioOut audio_out = 3;</code>
     */
    public function getAudioOut()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * *Output-only* The audio containing the assistant's response to the query.
     * </pre>
     *
     * <code>.google.assistant.embedded.v1alpha1.AudioOut audio_out = 3;</code>
     */
    public function setAudioOut(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Assistant\Embedded\V1alpha1\AudioOut::class);
        $this->writeOneof(3, $var);
    }

    /**
     * <pre>
     * *Output-only* The semantic result for the user's spoken query.
     * </pre>
     *
     * <code>.google.assistant.embedded.v1alpha1.ConverseResult result = 5;</code>
     */
    public function getResult()
    {
        return $this->readOneof(5);
    }

    /**
     * <pre>
     * *Output-only* The semantic result for the user's spoken query.
     * </pre>
     *
     * <code>.google.assistant.embedded.v1alpha1.ConverseResult result = 5;</code>
     */
    public function setResult(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Assistant\Embedded\V1alpha1\ConverseResult::class);
        $this->writeOneof(5, $var);
    }

    public function getConverseResponse()
    {
        return $this->converse_response;
    }

}

