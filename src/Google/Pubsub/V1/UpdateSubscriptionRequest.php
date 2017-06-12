<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the UpdateSubscription method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1.UpdateSubscriptionRequest</code>
 */
class UpdateSubscriptionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The updated subscription object.
     * </pre>
     *
     * <code>.google.pubsub.v1.Subscription subscription = 1;</code>
     */
    private $subscription = null;
    /**
     * <pre>
     * Indicates which fields in the provided subscription to update.
     * Must be specified and non-empty.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The updated subscription object.
     * </pre>
     *
     * <code>.google.pubsub.v1.Subscription subscription = 1;</code>
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * <pre>
     * The updated subscription object.
     * </pre>
     *
     * <code>.google.pubsub.v1.Subscription subscription = 1;</code>
     */
    public function setSubscription(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Pubsub\V1\Subscription::class);
        $this->subscription = $var;
    }

    /**
     * <pre>
     * Indicates which fields in the provided subscription to update.
     * Must be specified and non-empty.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * <pre>
     * Indicates which fields in the provided subscription to update.
     * Must be specified and non-empty.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    public function setUpdateMask(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;
    }

}
