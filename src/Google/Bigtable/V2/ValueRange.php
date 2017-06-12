<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Specifies a contiguous range of raw byte values.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v2.ValueRange</code>
 */
class ValueRange extends \Google\Protobuf\Internal\Message
{
    protected $start_value;
    protected $end_value;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Used when giving an inclusive lower bound for the range.
     * </pre>
     *
     * <code>bytes start_value_closed = 1;</code>
     */
    public function getStartValueClosed()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * Used when giving an inclusive lower bound for the range.
     * </pre>
     *
     * <code>bytes start_value_closed = 1;</code>
     */
    public function setStartValueClosed($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);
    }

    /**
     * <pre>
     * Used when giving an exclusive lower bound for the range.
     * </pre>
     *
     * <code>bytes start_value_open = 2;</code>
     */
    public function getStartValueOpen()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * Used when giving an exclusive lower bound for the range.
     * </pre>
     *
     * <code>bytes start_value_open = 2;</code>
     */
    public function setStartValueOpen($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * Used when giving an inclusive upper bound for the range.
     * </pre>
     *
     * <code>bytes end_value_closed = 3;</code>
     */
    public function getEndValueClosed()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * Used when giving an inclusive upper bound for the range.
     * </pre>
     *
     * <code>bytes end_value_closed = 3;</code>
     */
    public function setEndValueClosed($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);
    }

    /**
     * <pre>
     * Used when giving an exclusive upper bound for the range.
     * </pre>
     *
     * <code>bytes end_value_open = 4;</code>
     */
    public function getEndValueOpen()
    {
        return $this->readOneof(4);
    }

    /**
     * <pre>
     * Used when giving an exclusive upper bound for the range.
     * </pre>
     *
     * <code>bytes end_value_open = 4;</code>
     */
    public function setEndValueOpen($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(4, $var);
    }

    public function getStartValue()
    {
        return $this->start_value;
    }

    public function getEndValue()
    {
        return $this->end_value;
    }

}
