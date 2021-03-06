<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Api\Servicemanagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response message for ListServiceConfigs method.
 * </pre>
 *
 * Protobuf type <code>google.api.servicemanagement.v1.ListServiceConfigsResponse</code>
 */
class ListServiceConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The list of service configuration resources.
     * </pre>
     *
     * <code>repeated .google.api.Service service_configs = 1;</code>
     */
    private $service_configs;
    /**
     * <pre>
     * The token of the next page of results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The list of service configuration resources.
     * </pre>
     *
     * <code>repeated .google.api.Service service_configs = 1;</code>
     */
    public function getServiceConfigs()
    {
        return $this->service_configs;
    }

    /**
     * <pre>
     * The list of service configuration resources.
     * </pre>
     *
     * <code>repeated .google.api.Service service_configs = 1;</code>
     */
    public function setServiceConfigs(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Service::class);
        $this->service_configs = $arr;
    }

    /**
     * <pre>
     * The token of the next page of results.
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
     * The token of the next page of results.
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

