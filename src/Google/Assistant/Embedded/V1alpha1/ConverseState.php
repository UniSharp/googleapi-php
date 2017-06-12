<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha1/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Provides information about the current dialog state.
 * </pre>
 *
 * Protobuf type <code>google.assistant.embedded.v1alpha1.ConverseState</code>
 */
class ConverseState extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * *Required* The `conversation_state` value returned in the prior
     * `ConverseResponse`. Omit (do not set the field) if there was no prior
     * `ConverseResponse`. If there was a prior `ConverseResponse`, do not omit
     * this field; doing so will end that conversation (and this new request will
     * start a new conversation).
     * </pre>
     *
     * <code>bytes conversation_state = 1;</code>
     */
    private $conversation_state = '';

    public function __construct() {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha1\EmbeddedAssistant::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * *Required* The `conversation_state` value returned in the prior
     * `ConverseResponse`. Omit (do not set the field) if there was no prior
     * `ConverseResponse`. If there was a prior `ConverseResponse`, do not omit
     * this field; doing so will end that conversation (and this new request will
     * start a new conversation).
     * </pre>
     *
     * <code>bytes conversation_state = 1;</code>
     */
    public function getConversationState()
    {
        return $this->conversation_state;
    }

    /**
     * <pre>
     * *Required* The `conversation_state` value returned in the prior
     * `ConverseResponse`. Omit (do not set the field) if there was no prior
     * `ConverseResponse`. If there was a prior `ConverseResponse`, do not omit
     * this field; doing so will end that conversation (and this new request will
     * start a new conversation).
     * </pre>
     *
     * <code>bytes conversation_state = 1;</code>
     */
    public function setConversationState($var)
    {
        GPBUtil::checkString($var, False);
        $this->conversation_state = $var;
    }

}

