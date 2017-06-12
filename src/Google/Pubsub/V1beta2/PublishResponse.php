<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response for the Publish method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1beta2.PublishResponse</code>
 */
class PublishResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The server-assigned ID of each published message, in the same order as
     * the messages in the request. IDs are guaranteed to be unique within
     * the topic.
     * </pre>
     *
     * <code>repeated string message_ids = 1;</code>
     */
    private $message_ids;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The server-assigned ID of each published message, in the same order as
     * the messages in the request. IDs are guaranteed to be unique within
     * the topic.
     * </pre>
     *
     * <code>repeated string message_ids = 1;</code>
     */
    public function getMessageIds()
    {
        return $this->message_ids;
    }

    /**
     * <pre>
     * The server-assigned ID of each published message, in the same order as
     * the messages in the request. IDs are guaranteed to be unique within
     * the topic.
     * </pre>
     *
     * <code>repeated string message_ids = 1;</code>
     */
    public function setMessageIds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->message_ids = $var;
    }

}

