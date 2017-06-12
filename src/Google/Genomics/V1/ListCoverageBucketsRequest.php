<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/reads.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.ListCoverageBucketsRequest</code>
 */
class ListCoverageBucketsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The ID of the read group set over which coverage is requested.
     * </pre>
     *
     * <code>string read_group_set_id = 1;</code>
     */
    private $read_group_set_id = '';
    /**
     * <pre>
     * The name of the reference to query, within the reference set associated
     * with this query. Optional.
     * </pre>
     *
     * <code>string reference_name = 3;</code>
     */
    private $reference_name = '';
    /**
     * <pre>
     * The start position of the range on the reference, 0-based inclusive. If
     * specified, `referenceName` must also be specified. Defaults to 0.
     * </pre>
     *
     * <code>int64 start = 4;</code>
     */
    private $start = 0;
    /**
     * <pre>
     * The end position of the range on the reference, 0-based exclusive. If
     * specified, `referenceName` must also be specified. If unset or 0, defaults
     * to the length of the reference.
     * </pre>
     *
     * <code>int64 end = 5;</code>
     */
    private $end = 0;
    /**
     * <pre>
     * The desired width of each reported coverage bucket in base pairs. This
     * will be rounded down to the nearest precomputed bucket width; the value
     * of which is returned as `bucketWidth` in the response. Defaults
     * to infinity (each bucket spans an entire reference sequence) or the length
     * of the target range, if specified. The smallest precomputed
     * `bucketWidth` is currently 2048 base pairs; this is subject to
     * change.
     * </pre>
     *
     * <code>int64 target_bucket_width = 6;</code>
     */
    private $target_bucket_width = 0;
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
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024. The maximum value is 2048.
     * </pre>
     *
     * <code>int32 page_size = 8;</code>
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Reads::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The ID of the read group set over which coverage is requested.
     * </pre>
     *
     * <code>string read_group_set_id = 1;</code>
     */
    public function getReadGroupSetId()
    {
        return $this->read_group_set_id;
    }

    /**
     * <pre>
     * Required. The ID of the read group set over which coverage is requested.
     * </pre>
     *
     * <code>string read_group_set_id = 1;</code>
     */
    public function setReadGroupSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->read_group_set_id = $var;
    }

    /**
     * <pre>
     * The name of the reference to query, within the reference set associated
     * with this query. Optional.
     * </pre>
     *
     * <code>string reference_name = 3;</code>
     */
    public function getReferenceName()
    {
        return $this->reference_name;
    }

    /**
     * <pre>
     * The name of the reference to query, within the reference set associated
     * with this query. Optional.
     * </pre>
     *
     * <code>string reference_name = 3;</code>
     */
    public function setReferenceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_name = $var;
    }

    /**
     * <pre>
     * The start position of the range on the reference, 0-based inclusive. If
     * specified, `referenceName` must also be specified. Defaults to 0.
     * </pre>
     *
     * <code>int64 start = 4;</code>
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * <pre>
     * The start position of the range on the reference, 0-based inclusive. If
     * specified, `referenceName` must also be specified. Defaults to 0.
     * </pre>
     *
     * <code>int64 start = 4;</code>
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;
    }

    /**
     * <pre>
     * The end position of the range on the reference, 0-based exclusive. If
     * specified, `referenceName` must also be specified. If unset or 0, defaults
     * to the length of the reference.
     * </pre>
     *
     * <code>int64 end = 5;</code>
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * <pre>
     * The end position of the range on the reference, 0-based exclusive. If
     * specified, `referenceName` must also be specified. If unset or 0, defaults
     * to the length of the reference.
     * </pre>
     *
     * <code>int64 end = 5;</code>
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;
    }

    /**
     * <pre>
     * The desired width of each reported coverage bucket in base pairs. This
     * will be rounded down to the nearest precomputed bucket width; the value
     * of which is returned as `bucketWidth` in the response. Defaults
     * to infinity (each bucket spans an entire reference sequence) or the length
     * of the target range, if specified. The smallest precomputed
     * `bucketWidth` is currently 2048 base pairs; this is subject to
     * change.
     * </pre>
     *
     * <code>int64 target_bucket_width = 6;</code>
     */
    public function getTargetBucketWidth()
    {
        return $this->target_bucket_width;
    }

    /**
     * <pre>
     * The desired width of each reported coverage bucket in base pairs. This
     * will be rounded down to the nearest precomputed bucket width; the value
     * of which is returned as `bucketWidth` in the response. Defaults
     * to infinity (each bucket spans an entire reference sequence) or the length
     * of the target range, if specified. The smallest precomputed
     * `bucketWidth` is currently 2048 base pairs; this is subject to
     * change.
     * </pre>
     *
     * <code>int64 target_bucket_width = 6;</code>
     */
    public function setTargetBucketWidth($var)
    {
        GPBUtil::checkInt64($var);
        $this->target_bucket_width = $var;
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
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024. The maximum value is 2048.
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
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024. The maximum value is 2048.
     * </pre>
     *
     * <code>int32 page_size = 8;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

}

