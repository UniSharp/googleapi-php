<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace Google\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The parameters to ListMonitoredResourceDescriptors
 * </pre>
 *
 * Protobuf type <code>google.logging.v2.ListMonitoredResourceDescriptorsRequest</code>
 */
class ListMonitoredResourceDescriptorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored.  The presence of `nextPageToken` in the
     * response indicates that more results might be available.
     * </pre>
     *
     * <code>int32 page_size = 1;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method.  `pageToken` must be the value of
     * `nextPageToken` from the previous response.  The values of other method
     * parameters should be identical to those in the previous call.
     * </pre>
     *
     * <code>string page_token = 2;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\Logging::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored.  The presence of `nextPageToken` in the
     * response indicates that more results might be available.
     * </pre>
     *
     * <code>int32 page_size = 1;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored.  The presence of `nextPageToken` in the
     * response indicates that more results might be available.
     * </pre>
     *
     * <code>int32 page_size = 1;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method.  `pageToken` must be the value of
     * `nextPageToken` from the previous response.  The values of other method
     * parameters should be identical to those in the previous call.
     * </pre>
     *
     * <code>string page_token = 2;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method.  `pageToken` must be the value of
     * `nextPageToken` from the previous response.  The values of other method
     * parameters should be identical to those in the previous call.
     * </pre>
     *
     * <code>string page_token = 2;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}

