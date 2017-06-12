<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/runtimeconfig.proto

namespace Google\Cloud\Runtimeconfig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response for the `ListWaiters()` method.
 * Order of returned waiter objects is arbitrary.
 * </pre>
 *
 * Protobuf type <code>google.cloud.runtimeconfig.v1beta1.ListWaitersResponse</code>
 */
class ListWaitersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Found waiters in the project.
     * </pre>
     *
     * <code>repeated .google.cloud.runtimeconfig.v1beta1.Waiter waiters = 1;</code>
     */
    private $waiters;
    /**
     * <pre>
     * This token allows you to get the next page of results for list requests.
     * If the number of results is larger than `pageSize`, use the `nextPageToken`
     * as a value for the query parameter `pageToken` in the next list request.
     * Subsequent list requests will have their own `nextPageToken` to continue
     * paging through the results
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Runtimeconfig\V1Beta1\Runtimeconfig::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Found waiters in the project.
     * </pre>
     *
     * <code>repeated .google.cloud.runtimeconfig.v1beta1.Waiter waiters = 1;</code>
     */
    public function getWaiters()
    {
        return $this->waiters;
    }

    /**
     * <pre>
     * Found waiters in the project.
     * </pre>
     *
     * <code>repeated .google.cloud.runtimeconfig.v1beta1.Waiter waiters = 1;</code>
     */
    public function setWaiters(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Runtimeconfig\V1beta1\Waiter::class);
        $this->waiters = $var;
    }

    /**
     * <pre>
     * This token allows you to get the next page of results for list requests.
     * If the number of results is larger than `pageSize`, use the `nextPageToken`
     * as a value for the query parameter `pageToken` in the next list request.
     * Subsequent list requests will have their own `nextPageToken` to continue
     * paging through the results
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
     * This token allows you to get the next page of results for list requests.
     * If the number of results is larger than `pageSize`, use the `nextPageToken`
     * as a value for the query parameter `pageToken` in the next list request.
     * Subsequent list requests will have their own `nextPageToken` to continue
     * paging through the results
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
