<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the ListSubscriptions method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1beta2.ListSubscriptionsRequest</code>
 */
class ListSubscriptionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the cloud project that subscriptions belong to.
     * </pre>
     *
     * <code>string project = 1;</code>
     */
    private $project = '';
    /**
     * <pre>
     * Maximum number of subscriptions to return.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * The value returned by the last ListSubscriptionsResponse; indicates that
     * this is a continuation of a prior ListSubscriptions call, and that the
     * system should return the next page of data.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the cloud project that subscriptions belong to.
     * </pre>
     *
     * <code>string project = 1;</code>
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * <pre>
     * The name of the cloud project that subscriptions belong to.
     * </pre>
     *
     * <code>string project = 1;</code>
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;
    }

    /**
     * <pre>
     * Maximum number of subscriptions to return.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * Maximum number of subscriptions to return.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * The value returned by the last ListSubscriptionsResponse; indicates that
     * this is a continuation of a prior ListSubscriptions call, and that the
     * system should return the next page of data.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * The value returned by the last ListSubscriptionsResponse; indicates that
     * this is a continuation of a prior ListSubscriptions call, and that the
     * system should return the next page of data.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}

