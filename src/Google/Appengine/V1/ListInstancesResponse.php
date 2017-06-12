<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response message for `Instances.ListInstances`.
 * </pre>
 *
 * Protobuf type <code>google.appengine.v1.ListInstancesResponse</code>
 */
class ListInstancesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The instances belonging to the requested version.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.Instance instances = 1;</code>
     */
    private $instances;
    /**
     * <pre>
     * Continuation token for fetching the next page of results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\Appengine::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The instances belonging to the requested version.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.Instance instances = 1;</code>
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * <pre>
     * The instances belonging to the requested version.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.Instance instances = 1;</code>
     */
    public function setInstances(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Appengine\V1\Instance::class);
        $this->instances = $var;
    }

    /**
     * <pre>
     * Continuation token for fetching the next page of results.
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
     * Continuation token for fetching the next page of results.
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

