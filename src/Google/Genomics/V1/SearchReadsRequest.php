<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/reads.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The read search request.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.SearchReadsRequest</code>
 */
class SearchReadsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The IDs of the read groups sets within which to search for reads. All
     * specified read group sets must be aligned against a common set of reference
     * sequences; this defines the genomic coordinates for the query. Must specify
     * one of `readGroupSetIds` or `readGroupIds`.
     * </pre>
     *
     * <code>repeated string read_group_set_ids = 1;</code>
     */
    private $read_group_set_ids;
    /**
     * <pre>
     * The IDs of the read groups within which to search for reads. All specified
     * read groups must belong to the same read group sets. Must specify one of
     * `readGroupSetIds` or `readGroupIds`.
     * </pre>
     *
     * <code>repeated string read_group_ids = 5;</code>
     */
    private $read_group_ids;
    /**
     * <pre>
     * The reference sequence name, for example `chr1`, `1`, or `chrX`. If set to
     * `*`, only unmapped reads are returned. If unspecified, all reads (mapped
     * and unmapped) are returned.
     * </pre>
     *
     * <code>string reference_name = 7;</code>
     */
    private $reference_name = '';
    /**
     * <pre>
     * The start position of the range on the reference, 0-based inclusive. If
     * specified, `referenceName` must also be specified.
     * </pre>
     *
     * <code>int64 start = 8;</code>
     */
    private $start = 0;
    /**
     * <pre>
     * The end position of the range on the reference, 0-based exclusive. If
     * specified, `referenceName` must also be specified.
     * </pre>
     *
     * <code>int64 end = 9;</code>
     */
    private $end = 0;
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
     * defaults to 256. The maximum value is 2048.
     * </pre>
     *
     * <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Reads::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The IDs of the read groups sets within which to search for reads. All
     * specified read group sets must be aligned against a common set of reference
     * sequences; this defines the genomic coordinates for the query. Must specify
     * one of `readGroupSetIds` or `readGroupIds`.
     * </pre>
     *
     * <code>repeated string read_group_set_ids = 1;</code>
     */
    public function getReadGroupSetIds()
    {
        return $this->read_group_set_ids;
    }

    /**
     * <pre>
     * The IDs of the read groups sets within which to search for reads. All
     * specified read group sets must be aligned against a common set of reference
     * sequences; this defines the genomic coordinates for the query. Must specify
     * one of `readGroupSetIds` or `readGroupIds`.
     * </pre>
     *
     * <code>repeated string read_group_set_ids = 1;</code>
     */
    public function setReadGroupSetIds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->read_group_set_ids = $var;
    }

    /**
     * <pre>
     * The IDs of the read groups within which to search for reads. All specified
     * read groups must belong to the same read group sets. Must specify one of
     * `readGroupSetIds` or `readGroupIds`.
     * </pre>
     *
     * <code>repeated string read_group_ids = 5;</code>
     */
    public function getReadGroupIds()
    {
        return $this->read_group_ids;
    }

    /**
     * <pre>
     * The IDs of the read groups within which to search for reads. All specified
     * read groups must belong to the same read group sets. Must specify one of
     * `readGroupSetIds` or `readGroupIds`.
     * </pre>
     *
     * <code>repeated string read_group_ids = 5;</code>
     */
    public function setReadGroupIds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->read_group_ids = $var;
    }

    /**
     * <pre>
     * The reference sequence name, for example `chr1`, `1`, or `chrX`. If set to
     * `*`, only unmapped reads are returned. If unspecified, all reads (mapped
     * and unmapped) are returned.
     * </pre>
     *
     * <code>string reference_name = 7;</code>
     */
    public function getReferenceName()
    {
        return $this->reference_name;
    }

    /**
     * <pre>
     * The reference sequence name, for example `chr1`, `1`, or `chrX`. If set to
     * `*`, only unmapped reads are returned. If unspecified, all reads (mapped
     * and unmapped) are returned.
     * </pre>
     *
     * <code>string reference_name = 7;</code>
     */
    public function setReferenceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_name = $var;
    }

    /**
     * <pre>
     * The start position of the range on the reference, 0-based inclusive. If
     * specified, `referenceName` must also be specified.
     * </pre>
     *
     * <code>int64 start = 8;</code>
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * <pre>
     * The start position of the range on the reference, 0-based inclusive. If
     * specified, `referenceName` must also be specified.
     * </pre>
     *
     * <code>int64 start = 8;</code>
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;
    }

    /**
     * <pre>
     * The end position of the range on the reference, 0-based exclusive. If
     * specified, `referenceName` must also be specified.
     * </pre>
     *
     * <code>int64 end = 9;</code>
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * <pre>
     * The end position of the range on the reference, 0-based exclusive. If
     * specified, `referenceName` must also be specified.
     * </pre>
     *
     * <code>int64 end = 9;</code>
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
     * defaults to 256. The maximum value is 2048.
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
     * defaults to 256. The maximum value is 2048.
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

