<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Devtools\Clouderrorreporting\V1beta1;

/**
 * <pre>
 * The supported time ranges.
 * </pre>
 *
 * Protobuf enum <code>google.devtools.clouderrorreporting.v1beta1.QueryTimeRange.Period</code>
 */
class QueryTimeRange_Period
{
    /**
     * <pre>
     * Do not use.
     * </pre>
     *
     * <code>PERIOD_UNSPECIFIED = 0;</code>
     */
    const PERIOD_UNSPECIFIED = 0;
    /**
     * <pre>
     * Retrieve data for the last hour.
     * Recommended minimum timed count duration: 1 min.
     * </pre>
     *
     * <code>PERIOD_1_HOUR = 1;</code>
     */
    const PERIOD_1_HOUR = 1;
    /**
     * <pre>
     * Retrieve data for the last 6 hours.
     * Recommended minimum timed count duration: 10 min.
     * </pre>
     *
     * <code>PERIOD_6_HOURS = 2;</code>
     */
    const PERIOD_6_HOURS = 2;
    /**
     * <pre>
     * Retrieve data for the last day.
     * Recommended minimum timed count duration: 1 hour.
     * </pre>
     *
     * <code>PERIOD_1_DAY = 3;</code>
     */
    const PERIOD_1_DAY = 3;
    /**
     * <pre>
     * Retrieve data for the last week.
     * Recommended minimum timed count duration: 6 hours.
     * </pre>
     *
     * <code>PERIOD_1_WEEK = 4;</code>
     */
    const PERIOD_1_WEEK = 4;
    /**
     * <pre>
     * Retrieve data for the last 30 days.
     * Recommended minimum timed count duration: 1 day.
     * </pre>
     *
     * <code>PERIOD_30_DAYS = 5;</code>
     */
    const PERIOD_30_DAYS = 5;
}

