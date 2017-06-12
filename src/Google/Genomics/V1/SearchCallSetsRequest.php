<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The call set search request.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.SearchCallSetsRequest</code>
 */
class SearchCallSetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Restrict the query to call sets within the given variant sets. At least one
     * ID must be provided.
     * </pre>
     *
     * <code>repeated string variant_set_ids = 1;</code>
     */
    private $variant_set_ids;
    /**
     * <pre>
     * Only return call sets for which a substring of the name matches this
     * string.
     * </pre>
     *
     * <code>string name = 2;</code>
     */
    private $name = '';
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
    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024.
     * </pre>
     *
     * <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Restrict the query to call sets within the given variant sets. At least one
     * ID must be provided.
     * </pre>
     *
     * <code>repeated string variant_set_ids = 1;</code>
     */
    public function getVariantSetIds()
    {
        return $this->variant_set_ids;
    }

    /**
     * <pre>
     * Restrict the query to call sets within the given variant sets. At least one
     * ID must be provided.
     * </pre>
     *
     * <code>repeated string variant_set_ids = 1;</code>
     */
    public function setVariantSetIds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->variant_set_ids = $var;
    }

    /**
     * <pre>
     * Only return call sets for which a substring of the name matches this
     * string.
     * </pre>
     *
     * <code>string name = 2;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * Only return call sets for which a substring of the name matches this
     * string.
     * </pre>
     *
     * <code>string name = 2;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
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

    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024.
     * </pre>
     *
     * <code>int32 page_size = 4;</code>
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
     * <code>int32 page_size = 4;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

}

