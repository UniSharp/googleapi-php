<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/datasets.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The dataset list request.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.ListDatasetsRequest</code>
 */
class ListDatasetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The Google Cloud project ID to list datasets for.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 50. The maximum value is 1024.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Datasets::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The Google Cloud project ID to list datasets for.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * Required. The Google Cloud project ID to list datasets for.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 50. The maximum value is 1024.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 50. The maximum value is 1024.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}

