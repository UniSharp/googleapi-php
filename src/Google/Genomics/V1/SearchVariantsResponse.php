<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The variant search response.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.SearchVariantsResponse</code>
 */
class SearchVariantsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The list of matching Variants.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.Variant variants = 1;</code>
     */
    private $variants;
    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * Provide this value in a subsequent request to return the next page of
     * results. This field will be empty if there aren't any additional results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The list of matching Variants.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.Variant variants = 1;</code>
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * <pre>
     * The list of matching Variants.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.Variant variants = 1;</code>
     */
    public function setVariants(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\Variant::class);
        $this->variants = $var;
    }

    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * Provide this value in a subsequent request to return the next page of
     * results. This field will be empty if there aren't any additional results.
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
     * The continuation token, which is used to page through large result sets.
     * Provide this value in a subsequent request to return the next page of
     * results. This field will be empty if there aren't any additional results.
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

