<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the GetSubscription method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1beta2.GetSubscriptionRequest</code>
 */
class GetSubscriptionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the subscription to get.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    private $subscription = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the subscription to get.
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
     * The name of the subscription to get.
     * </pre>
     *
     * <code>string subscription = 1;</code>
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;
    }

}

