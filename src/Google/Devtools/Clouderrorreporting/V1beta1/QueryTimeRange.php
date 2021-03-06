<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Devtools\Clouderrorreporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Requests might be rejected or the resulting timed count durations might be
 * adjusted for lower durations.
 * </pre>
 *
 * Protobuf type <code>google.devtools.clouderrorreporting.v1beta1.QueryTimeRange</code>
 */
class QueryTimeRange extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Restricts the query to the specified time range.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange.Period period = 1;</code>
     */
    private $period = 0;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Restricts the query to the specified time range.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange.Period period = 1;</code>
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * <pre>
     * Restricts the query to the specified time range.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange.Period period = 1;</code>
     */
    public function setPeriod($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Clouderrorreporting\V1beta1\QueryTimeRange_Period::class);
        $this->period = $var;
    }

}

