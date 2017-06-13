<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v1alpha1/cloud_support.proto

namespace Google\Cloud\Support\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response message for `ListCase` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.support.v1alpha1.ListCasesResponse</code>
 */
class ListCasesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of cases.
     * </pre>
     *
     * <code>repeated .google.cloud.support.common.Case cases = 1;</code>
     */
    private $cases;
    /**
     * <pre>
     * A token to retrieve the next page of results. This should be passed on in
     * `page_token` field of `ListCaseRequest` for next request. If unspecified,
     * there are no more results to retrieve.
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
     * A list of cases.
     * </pre>
     *
     * <code>repeated .google.cloud.support.common.Case cases = 1;</code>
     */
    public function getCases()
    {
        return $this->cases;
    }

    /**
     * <pre>
     * A list of cases.
     * </pre>
     *
     * <code>repeated .google.cloud.support.common.Case cases = 1;</code>
     */
    public function setCases(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Support\Common\Case::class);
        $this->cases = $arr;
    }

    /**
     * <pre>
     * A token to retrieve the next page of results. This should be passed on in
     * `page_token` field of `ListCaseRequest` for next request. If unspecified,
     * there are no more results to retrieve.
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
     * `page_token` field of `ListCaseRequest` for next request. If unspecified,
     * there are no more results to retrieve.
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

