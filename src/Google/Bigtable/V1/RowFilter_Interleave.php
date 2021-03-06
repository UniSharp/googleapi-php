<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_data.proto

namespace Google\Bigtable\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A RowFilter which sends each row to each of several component
 * RowFilters and interleaves the results.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v1.RowFilter.Interleave</code>
 */
class RowFilter_Interleave extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The elements of "filters" all process a copy of the input row, and the
     * results are pooled, sorted, and combined into a single output row.
     * If multiple cells are produced with the same column and timestamp,
     * they will all appear in the output row in an unspecified mutual order.
     * Consider the following example, with three filters:
     *                              input row
     *                                  |
     *        -----------------------------------------------------
     *        |                         |                         |
     *       f(0)                      f(1)                      f(2)
     *        |                         |                         |
     * 1: foo,bar,10,x             foo,bar,10,z              far,bar,7,a
     * 2: foo,blah,11,z            far,blah,5,x              far,blah,5,x
     *        |                         |                         |
     *        -----------------------------------------------------
     *                                  |
     * 1:                        foo,bar,10,z     // could have switched with #2
     * 2:                        foo,bar,10,x     // could have switched with #1
     * 3:                        foo,blah,11,z
     * 4:                        far,bar,7,a
     * 5:                        far,blah,5,x     // identical to #6
     * 6:                        far,blah,5,x     // identical to #5
     * All interleaved filters are executed atomically.
     * </pre>
     *
     * <code>repeated .google.bigtable.v1.RowFilter filters = 1;</code>
     */
    private $filters;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V1\BigtableData::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The elements of "filters" all process a copy of the input row, and the
     * results are pooled, sorted, and combined into a single output row.
     * If multiple cells are produced with the same column and timestamp,
     * they will all appear in the output row in an unspecified mutual order.
     * Consider the following example, with three filters:
     *                              input row
     *                                  |
     *        -----------------------------------------------------
     *        |                         |                         |
     *       f(0)                      f(1)                      f(2)
     *        |                         |                         |
     * 1: foo,bar,10,x             foo,bar,10,z              far,bar,7,a
     * 2: foo,blah,11,z            far,blah,5,x              far,blah,5,x
     *        |                         |                         |
     *        -----------------------------------------------------
     *                                  |
     * 1:                        foo,bar,10,z     // could have switched with #2
     * 2:                        foo,bar,10,x     // could have switched with #1
     * 3:                        foo,blah,11,z
     * 4:                        far,bar,7,a
     * 5:                        far,blah,5,x     // identical to #6
     * 6:                        far,blah,5,x     // identical to #5
     * All interleaved filters are executed atomically.
     * </pre>
     *
     * <code>repeated .google.bigtable.v1.RowFilter filters = 1;</code>
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * <pre>
     * The elements of "filters" all process a copy of the input row, and the
     * results are pooled, sorted, and combined into a single output row.
     * If multiple cells are produced with the same column and timestamp,
     * they will all appear in the output row in an unspecified mutual order.
     * Consider the following example, with three filters:
     *                              input row
     *                                  |
     *        -----------------------------------------------------
     *        |                         |                         |
     *       f(0)                      f(1)                      f(2)
     *        |                         |                         |
     * 1: foo,bar,10,x             foo,bar,10,z              far,bar,7,a
     * 2: foo,blah,11,z            far,blah,5,x              far,blah,5,x
     *        |                         |                         |
     *        -----------------------------------------------------
     *                                  |
     * 1:                        foo,bar,10,z     // could have switched with #2
     * 2:                        foo,bar,10,x     // could have switched with #1
     * 3:                        foo,blah,11,z
     * 4:                        far,bar,7,a
     * 5:                        far,blah,5,x     // identical to #6
     * 6:                        far,blah,5,x     // identical to #5
     * All interleaved filters are executed atomically.
     * </pre>
     *
     * <code>repeated .google.bigtable.v1.RowFilter filters = 1;</code>
     */
    public function setFilters(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V1\RowFilter::class);
        $this->filters = $arr;
    }

}

