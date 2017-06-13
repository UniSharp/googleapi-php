<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v1alpha1/cloud_support.proto

namespace Google\Cloud\Support\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response message for `ListSupportAccount`.
 * </pre>
 *
 * Protobuf type <code>google.cloud.support.v1alpha1.ListSupportAccountsResponse</code>
 */
class ListSupportAccountsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of support accounts.
     * </pre>
     *
     * <code>repeated .google.cloud.support.common.SupportAccount accounts = 1;</code>
     */
    private $accounts;
    /**
     * <pre>
     * A token to retrieve the next page of results. This should be passed on in
     * `page_token` field of `ListSupportAccountRequest` for next request. If
     * unspecified, there are no more results to retrieve.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Support\V1Alpha1\CloudSupport::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of support accounts.
     * </pre>
     *
     * <code>repeated .google.cloud.support.common.SupportAccount accounts = 1;</code>
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * <pre>
     * A list of support accounts.
     * </pre>
     *
     * <code>repeated .google.cloud.support.common.SupportAccount accounts = 1;</code>
     */
    public function setAccounts(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Support\Common\SupportAccount::class);
        $this->accounts = $arr;
    }

    /**
     * <pre>
     * A token to retrieve the next page of results. This should be passed on in
     * `page_token` field of `ListSupportAccountRequest` for next request. If
     * unspecified, there are no more results to retrieve.
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
     * A token to retrieve the next page of results. This should be passed on in
     * `page_token` field of `ListSupportAccountRequest` for next request. If
     * unspecified, there are no more results to retrieve.
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

