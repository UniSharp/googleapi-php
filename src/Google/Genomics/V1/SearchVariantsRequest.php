<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The variant search request.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.SearchVariantsRequest</code>
 */
class SearchVariantsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * At most one variant set ID must be provided. Only variants from this
     * variant set will be returned. If omitted, a call set id must be included in
     * the request.
     * </pre>
     *
     * <code>repeated string variant_set_ids = 1;</code>
     */
    private $variant_set_ids;
    /**
     * <pre>
     * Only return variants which have exactly this name.
     * </pre>
     *
     * <code>string variant_name = 2;</code>
     */
    private $variant_name = '';
    /**
     * <pre>
     * Only return variant calls which belong to call sets with these ids.
     * Leaving this blank returns all variant calls. If a variant has no
     * calls belonging to any of these call sets, it won't be returned at all.
     * </pre>
     *
     * <code>repeated string call_set_ids = 3;</code>
     */
    private $call_set_ids;
    /**
     * <pre>
     * Required. Only return variants in this reference sequence.
     * </pre>
     *
     * <code>string reference_name = 4;</code>
     */
    private $reference_name = '';
    /**
     * <pre>
     * The beginning of the window (0-based, inclusive) for which
     * overlapping variants should be returned. If unspecified, defaults to 0.
     * </pre>
     *
     * <code>int64 start = 5;</code>
     */
    private $start = 0;
    /**
     * <pre>
     * The end of the window, 0-based exclusive. If unspecified or 0, defaults to
     * the length of the reference.
     * </pre>
     *
     * <code>int64 end = 6;</code>
     */
    private $end = 0;
    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     * </pre>
     *
     * <code>string page_token = 7;</code>
     */
    private $page_token = '';
    /**
     * <pre>
     * The maximum number of variants to return in a single page. If unspecified,
     * defaults to 5000. The maximum value is 10000.
     * </pre>
     *
     * <code>int32 page_size = 8;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * The maximum number of calls to return in a single page. Note that this
     * limit may be exceeded in the event that a matching variant contains more
     * calls than the requested maximum. If unspecified, defaults to 5000. The
     * maximum value is 10000.
     * </pre>
     *
     * <code>int32 max_calls = 9;</code>
     */
    private $max_calls = 0;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * At most one variant set ID must be provided. Only variants from this
     * variant set will be returned. If omitted, a call set id must be included in
     * the request.
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
     * At most one variant set ID must be provided. Only variants from this
     * variant set will be returned. If omitted, a call set id must be included in
     * the request.
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
     * Only return variants which have exactly this name.
     * </pre>
     *
     * <code>string variant_name = 2;</code>
     */
    public function getVariantName()
    {
        return $this->variant_name;
    }

    /**
     * <pre>
     * Only return variants which have exactly this name.
     * </pre>
     *
     * <code>string variant_name = 2;</code>
     */
    public function setVariantName($var)
    {
        GPBUtil::checkString($var, True);
        $this->variant_name = $var;
    }

    /**
     * <pre>
     * Only return variant calls which belong to call sets with these ids.
     * Leaving this blank returns all variant calls. If a variant has no
     * calls belonging to any of these call sets, it won't be returned at all.
     * </pre>
     *
     * <code>repeated string call_set_ids = 3;</code>
     */
    public function getCallSetIds()
    {
        return $this->call_set_ids;
    }

    /**
     * <pre>
     * Only return variant calls which belong to call sets with these ids.
     * Leaving this blank returns all variant calls. If a variant has no
     * calls belonging to any of these call sets, it won't be returned at all.
     * </pre>
     *
     * <code>repeated string call_set_ids = 3;</code>
     */
    public function setCallSetIds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->call_set_ids = $var;
    }

    /**
     * <pre>
     * Required. Only return variants in this reference sequence.
     * </pre>
     *
     * <code>string reference_name = 4;</code>
     */
    public function getReferenceName()
    {
        return $this->reference_name;
    }

    /**
     * <pre>
     * Required. Only return variants in this reference sequence.
     * </pre>
     *
     * <code>string reference_name = 4;</code>
     */
    public function setReferenceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_name = $var;
    }

    /**
     * <pre>
     * The beginning of the window (0-based, inclusive) for which
     * overlapping variants should be returned. If unspecified, defaults to 0.
     * </pre>
     *
     * <code>int64 start = 5;</code>
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * <pre>
     * The beginning of the window (0-based, inclusive) for which
     * overlapping variants should be returned. If unspecified, defaults to 0.
     * </pre>
     *
     * <code>int64 start = 5;</code>
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;
    }

    /**
     * <pre>
     * The end of the window, 0-based exclusive. If unspecified or 0, defaults to
     * the length of the reference.
     * </pre>
     *
     * <code>int64 end = 6;</code>
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * <pre>
     * The end of the window, 0-based exclusive. If unspecified or 0, defaults to
     * the length of the reference.
     * </pre>
     *
     * <code>int64 end = 6;</code>
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;
    }

    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     * </pre>
     *
     * <code>string page_token = 7;</code>
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
     * <code>string page_token = 7;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

    /**
     * <pre>
     * The maximum number of variants to return in a single page. If unspecified,
     * defaults to 5000. The maximum value is 10000.
     * </pre>
     *
     * <code>int32 page_size = 8;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * The maximum number of variants to return in a single page. If unspecified,
     * defaults to 5000. The maximum value is 10000.
     * </pre>
     *
     * <code>int32 page_size = 8;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * The maximum number of calls to return in a single page. Note that this
     * limit may be exceeded in the event that a matching variant contains more
     * calls than the requested maximum. If unspecified, defaults to 5000. The
     * maximum value is 10000.
     * </pre>
     *
     * <code>int32 max_calls = 9;</code>
     */
    public function getMaxCalls()
    {
        return $this->max_calls;
    }

    /**
     * <pre>
     * The maximum number of calls to return in a single page. Note that this
     * limit may be exceeded in the event that a matching variant contains more
     * calls than the requested maximum. If unspecified, defaults to 5000. The
     * maximum value is 10000.
     * </pre>
     *
     * <code>int32 max_calls = 9;</code>
     */
    public function setMaxCalls($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_calls = $var;
    }

}
