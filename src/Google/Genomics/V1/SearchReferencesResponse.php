<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/references.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.SearchReferencesResponse</code>
 */
class SearchReferencesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The matching references.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.Reference references = 1;</code>
     */
    private $references;
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
        \GPBMetadata\Google\Genomics\V1\References::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The matching references.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.Reference references = 1;</code>
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * <pre>
     * The matching references.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.Reference references = 1;</code>
     */
    public function setReferences(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\Reference::class);
        $this->references = $var;
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

