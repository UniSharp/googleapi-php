<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the ModifyAckDeadline method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1beta2.ModifyAckDeadlineRequest</code>
 */
class ModifyAckDeadlineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the subscription.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    private $subscription = '';
    /**
     * <pre>
     * The acknowledgment ID.
     * </pre>
     *
     * <code>string ack_id = 2;</code>
     */
    private $ack_id = '';
    /**
     * <pre>
     * The new ack deadline with respect to the time this request was sent to the
     * Pub/Sub system. Must be &gt;= 0. For example, if the value is 10, the new ack
     * deadline will expire 10 seconds after the ModifyAckDeadline call was made.
     * Specifying zero may immediately make the message available for another pull
     * request.
     * </pre>
     *
     * <code>int32 ack_deadline_seconds = 3;</code>
     */
    private $ack_deadline_seconds = 0;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the subscription.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * <pre>
     * The name of the subscription.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;
    }

    /**
     * <pre>
     * The acknowledgment ID.
     * </pre>
     *
     * <code>string ack_id = 2;</code>
     */
    public function getAckId()
    {
        return $this->ack_id;
    }

    /**
     * <pre>
     * The acknowledgment ID.
     * </pre>
     *
     * <code>string ack_id = 2;</code>
     */
    public function setAckId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ack_id = $var;
    }

    /**
     * <pre>
     * The new ack deadline with respect to the time this request was sent to the
     * Pub/Sub system. Must be &gt;= 0. For example, if the value is 10, the new ack
     * deadline will expire 10 seconds after the ModifyAckDeadline call was made.
     * Specifying zero may immediately make the message available for another pull
     * request.
     * </pre>
     *
     * <code>int32 ack_deadline_seconds = 3;</code>
     */
    public function getAckDeadlineSeconds()
    {
        return $this->ack_deadline_seconds;
    }

    /**
     * <pre>
     * The new ack deadline with respect to the time this request was sent to the
     * Pub/Sub system. Must be &gt;= 0. For example, if the value is 10, the new ack
     * deadline will expire 10 seconds after the ModifyAckDeadline call was made.
     * Specifying zero may immediately make the message available for another pull
     * request.
     * </pre>
     *
     * <code>int32 ack_deadline_seconds = 3;</code>
     */
    public function setAckDeadlineSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->ack_deadline_seconds = $var;
    }

}

