<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the `Pull` method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1.PullRequest</code>
 */
class PullRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The subscription from which messages should be pulled.
     * Format is `projects/{project}/subscriptions/{sub}`.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    private $subscription = '';
    /**
     * <pre>
     * If this field set to true, the system will respond immediately even if
     * it there are no messages available to return in the `Pull` response.
     * Otherwise, the system may wait (for a bounded amount of time) until at
     * least one message is available, rather than returning no messages. The
     * client may cancel the request if it does not wish to wait any longer for
     * the response.
     * </pre>
     *
     * <code>bool return_immediately = 2;</code>
     */
    private $return_immediately = false;
    /**
     * <pre>
     * The maximum number of messages returned for this request. The Pub/Sub
     * system may return fewer than the number specified.
     * </pre>
     *
     * <code>int32 max_messages = 3;</code>
     */
    private $max_messages = 0;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The subscription from which messages should be pulled.
     * Format is `projects/{project}/subscriptions/{sub}`.
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
     * The subscription from which messages should be pulled.
     * Format is `projects/{project}/subscriptions/{sub}`.
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
     * If this field set to true, the system will respond immediately even if
     * it there are no messages available to return in the `Pull` response.
     * Otherwise, the system may wait (for a bounded amount of time) until at
     * least one message is available, rather than returning no messages. The
     * client may cancel the request if it does not wish to wait any longer for
     * the response.
     * </pre>
     *
     * <code>bool return_immediately = 2;</code>
     */
    public function getReturnImmediately()
    {
        return $this->return_immediately;
    }

    /**
     * <pre>
     * If this field set to true, the system will respond immediately even if
     * it there are no messages available to return in the `Pull` response.
     * Otherwise, the system may wait (for a bounded amount of time) until at
     * least one message is available, rather than returning no messages. The
     * client may cancel the request if it does not wish to wait any longer for
     * the response.
     * </pre>
     *
     * <code>bool return_immediately = 2;</code>
     */
    public function setReturnImmediately($var)
    {
        GPBUtil::checkBool($var);
        $this->return_immediately = $var;
    }

    /**
     * <pre>
     * The maximum number of messages returned for this request. The Pub/Sub
     * system may return fewer than the number specified.
     * </pre>
     *
     * <code>int32 max_messages = 3;</code>
     */
    public function getMaxMessages()
    {
        return $this->max_messages;
    }

    /**
     * <pre>
     * The maximum number of messages returned for this request. The Pub/Sub
     * system may return fewer than the number specified.
     * </pre>
     *
     * <code>int32 max_messages = 3;</code>
     */
    public function setMaxMessages($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_messages = $var;
    }

}
