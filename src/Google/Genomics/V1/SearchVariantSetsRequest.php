<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The search variant sets request.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.SearchVariantSetsRequest</code>
 */
class SearchVariantSetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Exactly one dataset ID must be provided here. Only variant sets which
     * belong to this dataset will be returned.
     * </pre>
     *
     * <code>repeated string dataset_ids = 1;</code>
     */
    private $dataset_ids;
    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     * </pre>
     *
     * <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Exactly one dataset ID must be provided here. Only variant sets which
     * belong to this dataset will be returned.
     * </pre>
     *
     * <code>repeated string dataset_ids = 1;</code>
     */
    public function getDatasetIds()
    {
        return $this->dataset_ids;
    }

    /**
     * <pre>
     * Exactly one dataset ID must be provided here. Only variant sets which
     * belong to this dataset will be returned.
     * </pre>
     *
     * <code>repeated string dataset_ids = 1;</code>
     */
    public function setDatasetIds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dataset_ids = $var;
    }

    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
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
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     * </pre>
     *
     * <code>string page_token = 2;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

}

