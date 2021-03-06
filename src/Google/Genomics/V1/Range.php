<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/range.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A 0-based half-open genomic coordinate range for search requests.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.Range</code>
 */
class Range extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The reference sequence name, for example `chr1`,
     * `1`, or `chrX`.
     * </pre>
     *
     * <code>string reference_name = 1;</code>
     */
    private $reference_name = '';
    /**
     * <pre>
     * The start position of the range on the reference, 0-based inclusive.
     * </pre>
     *
     * <code>int64 start = 2;</code>
     */
    private $start = 0;
    /**
     * <pre>
     * The end position of the range on the reference, 0-based exclusive.
     * </pre>
     *
     * <code>int64 end = 3;</code>
     */
    private $end = 0;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Range::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The reference sequence name, for example `chr1`,
     * `1`, or `chrX`.
     * </pre>
     *
     * <code>string reference_name = 1;</code>
     */
    public function getReferenceName()
    {
        return $this->reference_name;
    }

    /**
     * <pre>
     * The reference sequence name, for example `chr1`,
     * `1`, or `chrX`.
     * </pre>
     *
     * <code>string reference_name = 1;</code>
     */
    public function setReferenceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_name = $var;
    }

    /**
     * <pre>
     * The start position of the range on the reference, 0-based inclusive.
     * </pre>
     *
     * <code>int64 start = 2;</code>
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * <pre>
     * The start position of the range on the reference, 0-based inclusive.
     * </pre>
     *
     * <code>int64 start = 2;</code>
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;
    }

    /**
     * <pre>
     * The end position of the range on the reference, 0-based exclusive.
     * </pre>
     *
     * <code>int64 end = 3;</code>
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * <pre>
     * The end position of the range on the reference, 0-based exclusive.
     * </pre>
     *
     * <code>int64 end = 3;</code>
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;
    }

}

