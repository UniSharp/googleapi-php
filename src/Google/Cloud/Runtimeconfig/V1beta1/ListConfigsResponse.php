<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/runtimeconfig.proto

namespace Google\Cloud\Runtimeconfig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * `ListConfigs()` returns the following response. The order of returned
 * objects is arbitrary; that is, it is not ordered in any particular way.
 * </pre>
 *
 * Protobuf type <code>google.cloud.runtimeconfig.v1beta1.ListConfigsResponse</code>
 */
class ListConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of the configurations in the project. The order of returned
     * objects is arbitrary; that is, it is not ordered in any particular way.
     * </pre>
     *
     * <code>repeated .google.cloud.runtimeconfig.v1beta1.RuntimeConfig configs = 1;</code>
     */
    private $configs;
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
     * A list of the configurations in the project. The order of returned
     * objects is arbitrary; that is, it is not ordered in any particular way.
     * </pre>
     *
     * <code>repeated .google.cloud.runtimeconfig.v1beta1.RuntimeConfig configs = 1;</code>
     */
    public function getConfigs()
    {
        return $this->configs;
    }

    /**
     * <pre>
     * A list of the configurations in the project. The order of returned
     * objects is arbitrary; that is, it is not ordered in any particular way.
     * </pre>
     *
     * <code>repeated .google.cloud.runtimeconfig.v1beta1.RuntimeConfig configs = 1;</code>
     */
    public function setConfigs(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Runtimeconfig\V1beta1\RuntimeConfig::class);
        $this->configs = $var;
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

