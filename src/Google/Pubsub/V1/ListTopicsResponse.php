<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response for the `ListTopics` method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1.ListTopicsResponse</code>
 */
class ListTopicsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resulting topics.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Topic topics = 1;</code>
     */
    private $topics;
    /**
     * <pre>
     * If not empty, indicates that there may be more topics that match the
     * request; this value should be passed in a new `ListTopicsRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resulting topics.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Topic topics = 1;</code>
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * <pre>
     * The resulting topics.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Topic topics = 1;</code>
     */
    public function setTopics(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Pubsub\V1\Topic::class);
        $this->topics = $var;
    }

    /**
     * <pre>
     * If not empty, indicates that there may be more topics that match the
     * request; this value should be passed in a new `ListTopicsRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * <pre>
     * If not empty, indicates that there may be more topics that match the
     * request; this value should be passed in a new `ListTopicsRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;
    }

}
