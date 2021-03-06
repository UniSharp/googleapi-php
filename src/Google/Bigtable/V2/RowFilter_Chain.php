<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A RowFilter which sends rows through several RowFilters in sequence.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v2.RowFilter.Chain</code>
 */
class RowFilter_Chain extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The elements of "filters" are chained together to process the input row:
     * in row -&gt; f(0) -&gt; intermediate row -&gt; f(1) -&gt; ... -&gt; f(N) -&gt; out row
     * The full chain is executed atomically.
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.RowFilter filters = 1;</code>
     */
    private $filters;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The elements of "filters" are chained together to process the input row:
     * in row -&gt; f(0) -&gt; intermediate row -&gt; f(1) -&gt; ... -&gt; f(N) -&gt; out row
     * The full chain is executed atomically.
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.RowFilter filters = 1;</code>
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * <pre>
     * The elements of "filters" are chained together to process the input row:
     * in row -&gt; f(0) -&gt; intermediate row -&gt; f(1) -&gt; ... -&gt; f(N) -&gt; out row
     * The full chain is executed atomically.
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.RowFilter filters = 1;</code>
     */
    public function setFilters(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V2\RowFilter::class);
        $this->filters = $arr;
    }

}

