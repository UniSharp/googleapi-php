<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/job_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for the ListJobs method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.ml.v1.ListJobsRequest</code>
 */
class ListJobsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The name of the project for which to list jobs.
     * Authorization: requires `Viewer` role on the specified project.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * <pre>
     * Optional. Specifies the subset of jobs to retrieve.
     * </pre>
     *
     * <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * <pre>
     * Optional. A page token to request the next page of results.
     * You get the token from the `next_page_token` field of the response from
     * the previous call.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * <pre>
     * Optional. The number of jobs to retrieve per "page" of results. If there
     * are more remaining results than this number, the response message will
     * contain a valid value in the `next_page_token` field.
     * The default value is 20, and the maximum page size is 100.
     * </pre>
     *
     * <code>int32 page_size = 5;</code>
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1\JobService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The name of the project for which to list jobs.
     * Authorization: requires `Viewer` role on the specified project.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * <pre>
     * Required. The name of the project for which to list jobs.
     * Authorization: requires `Viewer` role on the specified project.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;
    }

    /**
     * <pre>
     * Optional. Specifies the subset of jobs to retrieve.
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
     * Optional. Specifies the subset of jobs to retrieve.
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
     * Optional. A page token to request the next page of results.
     * You get the token from the `next_page_token` field of the response from
     * the previous call.
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
     * Optional. A page token to request the next page of results.
     * You get the token from the `next_page_token` field of the response from
     * the previous call.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

    /**
     * <pre>
     * Optional. The number of jobs to retrieve per "page" of results. If there
     * are more remaining results than this number, the response message will
     * contain a valid value in the `next_page_token` field.
     * The default value is 20, and the maximum page size is 100.
     * </pre>
     *
     * <code>int32 page_size = 5;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * Optional. The number of jobs to retrieve per "page" of results. If there
     * are more remaining results than this number, the response message will
     * contain a valid value in the `next_page_token` field.
     * The default value is 20, and the maximum page size is 100.
     * </pre>
     *
     * <code>int32 page_size = 5;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

}

