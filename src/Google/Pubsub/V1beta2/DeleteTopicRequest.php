<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the DeleteTopic method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1beta2.DeleteTopicRequest</code>
 */
class DeleteTopicRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Name of the topic to delete.
     * </pre>
     *
     * <code>string topic = 1;</code>
     */
    private $topic = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Name of the topic to delete.
     * </pre>
     *
     * <code>string topic = 1;</code>
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * <pre>
     * Name of the topic to delete.
     * </pre>
     *
     * <code>string topic = 1;</code>
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;
    }

}
