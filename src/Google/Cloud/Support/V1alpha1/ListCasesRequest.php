<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v1alpha1/cloud_support.proto

namespace Google\Cloud\Support\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request message for `ListCase` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.support.v1alpha1.ListCasesRequest</code>
 */
class ListCasesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Name of the account resource for which cases are requested. For example:
     * "supportAccounts/accountA"
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The filter applied to the search results. Currently it only accepts "OPEN"
     * or "CLOSED" strings, filtering out cases that are open or resolved.
     * </pre>
     *
     * <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * <pre>
     * Maximum number of cases fetched with each request.
     * </pre>
     *
     * <code>int64 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * A token identifying the page of results to return. If unspecified, the
     * first page is retrieved.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Support\V1Alpha1\CloudSupport::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Name of the account resource for which cases are requested. For example:
     * "supportAccounts/accountA"
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * Name of the account resource for which cases are requested. For example:
     * "supportAccounts/accountA"
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * The filter applied to the search results. Currently it only accepts "OPEN"
     * or "CLOSED" strings, filtering out cases that are open or resolved.
     * </pre>
     *
     * <code>string filter = 2;</code>
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * <pre>
     * The filter applied to the search results. Currently it only accepts "OPEN"
     * or "CLOSED" strings, filtering out cases that are open or resolved.
     * </pre>
     *
     * <code>string filter = 2;</code>
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;
    }

    /**
     * <pre>
     * Maximum number of cases fetched with each request.
     * </pre>
     *
     * <code>int64 page_size = 3;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * Maximum number of cases fetched with each request.
     * </pre>
     *
     * <code>int64 page_size = 3;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * A token identifying the page of results to return. If unspecified, the
     * first page is retrieved.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * A token identifying the page of results to return. If unspecified, the
     * first page is retrieved.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}

