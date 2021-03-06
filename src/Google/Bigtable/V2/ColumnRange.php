<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Specifies a contiguous range of columns within a single column family.
 * The range spans from &amp;lt;column_family&amp;gt;:&amp;lt;start_qualifier&amp;gt; to
 * &amp;lt;column_family&amp;gt;:&amp;lt;end_qualifier&amp;gt;, where both bounds can be either
 * inclusive or exclusive.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v2.ColumnRange</code>
 */
class ColumnRange extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the column family within which this range falls.
     * </pre>
     *
     * <code>string family_name = 1;</code>
     */
    private $family_name = '';
    protected $start_qualifier;
    protected $end_qualifier;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the column family within which this range falls.
     * </pre>
     *
     * <code>string family_name = 1;</code>
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }

    /**
     * <pre>
     * The name of the column family within which this range falls.
     * </pre>
     *
     * <code>string family_name = 1;</code>
     */
    public function setFamilyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->family_name = $var;
    }

    /**
     * <pre>
     * Used when giving an inclusive lower bound for the range.
     * </pre>
     *
     * <code>bytes start_qualifier_closed = 2;</code>
     */
    public function getStartQualifierClosed()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * Used when giving an inclusive lower bound for the range.
     * </pre>
     *
     * <code>bytes start_qualifier_closed = 2;</code>
     */
    public function setStartQualifierClosed($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * Used when giving an exclusive lower bound for the range.
     * </pre>
     *
     * <code>bytes start_qualifier_open = 3;</code>
     */
    public function getStartQualifierOpen()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * Used when giving an exclusive lower bound for the range.
     * </pre>
     *
     * <code>bytes start_qualifier_open = 3;</code>
     */
    public function setStartQualifierOpen($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);
    }

    /**
     * <pre>
     * Used when giving an inclusive upper bound for the range.
     * </pre>
     *
     * <code>bytes end_qualifier_closed = 4;</code>
     */
    public function getEndQualifierClosed()
    {
        return $this->readOneof(4);
    }

    /**
     * <pre>
     * Used when giving an inclusive upper bound for the range.
     * </pre>
     *
     * <code>bytes end_qualifier_closed = 4;</code>
     */
    public function setEndQualifierClosed($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(4, $var);
    }

    /**
     * <pre>
     * Used when giving an exclusive upper bound for the range.
     * </pre>
     *
     * <code>bytes end_qualifier_open = 5;</code>
     */
    public function getEndQualifierOpen()
    {
        return $this->readOneof(5);
    }

    /**
     * <pre>
     * Used when giving an exclusive upper bound for the range.
     * </pre>
     *
     * <code>bytes end_qualifier_open = 5;</code>
     */
    public function setEndQualifierOpen($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(5, $var);
    }

    public function getStartQualifier()
    {
        return $this->whichOneof("start_qualifier");
    }

    public function getEndQualifier()
    {
        return $this->whichOneof("end_qualifier");
    }

}

