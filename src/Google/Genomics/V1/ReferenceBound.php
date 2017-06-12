<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * ReferenceBound records an upper bound for the starting coordinate of
 * variants in a particular reference.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.ReferenceBound</code>
 */
class ReferenceBound extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the reference associated with this reference bound.
     * </pre>
     *
     * <code>string reference_name = 1;</code>
     */
    private $reference_name = '';
    /**
     * <pre>
     * An upper bound (inclusive) on the starting coordinate of any
     * variant in the reference sequence.
     * </pre>
     *
     * <code>int64 upper_bound = 2;</code>
     */
    private $upper_bound = 0;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the reference associated with this reference bound.
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
     * The name of the reference associated with this reference bound.
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
     * An upper bound (inclusive) on the starting coordinate of any
     * variant in the reference sequence.
     * </pre>
     *
     * <code>int64 upper_bound = 2;</code>
     */
    public function getUpperBound()
    {
        return $this->upper_bound;
    }

    /**
     * <pre>
     * An upper bound (inclusive) on the starting coordinate of any
     * variant in the reference sequence.
     * </pre>
     *
     * <code>int64 upper_bound = 2;</code>
     */
    public function setUpperBound($var)
    {
        GPBUtil::checkInt64($var);
        $this->upper_bound = $var;
    }

}

