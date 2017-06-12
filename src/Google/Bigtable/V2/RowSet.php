<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Specifies a non-contiguous set of rows.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v2.RowSet</code>
 */
class RowSet extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Single rows included in the set.
     * </pre>
     *
     * <code>repeated bytes row_keys = 1;</code>
     */
    private $row_keys;
    /**
     * <pre>
     * Contiguous row ranges included in the set.
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.RowRange row_ranges = 2;</code>
     */
    private $row_ranges;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Single rows included in the set.
     * </pre>
     *
     * <code>repeated bytes row_keys = 1;</code>
     */
    public function getRowKeys()
    {
        return $this->row_keys;
    }

    /**
     * <pre>
     * Single rows included in the set.
     * </pre>
     *
     * <code>repeated bytes row_keys = 1;</code>
     */
    public function setRowKeys(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->row_keys = $var;
    }

    /**
     * <pre>
     * Contiguous row ranges included in the set.
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.RowRange row_ranges = 2;</code>
     */
    public function getRowRanges()
    {
        return $this->row_ranges;
    }

    /**
     * <pre>
     * Contiguous row ranges included in the set.
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.RowRange row_ranges = 2;</code>
     */
    public function setRowRanges(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V2\RowRange::class);
        $this->row_ranges = $var;
    }

}

