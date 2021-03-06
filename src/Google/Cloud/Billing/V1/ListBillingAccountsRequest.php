<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_billing.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for `ListBillingAccounts`.
 * </pre>
 *
 * Protobuf type <code>google.cloud.billing.v1.ListBillingAccountsRequest</code>
 */
class ListBillingAccountsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Requested page size. The maximum page size is 100; this is also the
     * default.
     * </pre>
     *
     * <code>int32 page_size = 1;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * A token identifying a page of results to return. This should be a
     * `next_page_token` value returned from a previous `ListBillingAccounts`
     * call. If unspecified, the first page of results is returned.
     * </pre>
     *
     * <code>string page_token = 2;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudBilling::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Requested page size. The maximum page size is 100; this is also the
     * default.
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
     * Requested page size. The maximum page size is 100; this is also the
     * default.
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
     * A token identifying a page of results to return. This should be a
     * `next_page_token` value returned from a previous `ListBillingAccounts`
     * call. If unspecified, the first page of results is returned.
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
     * A token identifying a page of results to return. This should be a
     * `next_page_token` value returned from a previous `ListBillingAccounts`
     * call. If unspecified, the first page of results is returned.
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

