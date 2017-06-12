<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Devtools\Clouderrorreporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Data extracted for a specific group based on certain filter criteria,
 * such as a given time period and/or service filter.
 * </pre>
 *
 * Protobuf type <code>google.devtools.clouderrorreporting.v1beta1.ErrorGroupStats</code>
 */
class ErrorGroupStats extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Group data that is independent of the filter criteria.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroup group = 1;</code>
     */
    private $group = null;
    /**
     * <pre>
     * Approximate total number of events in the given group that match
     * the filter criteria.
     * </pre>
     *
     * <code>int64 count = 2;</code>
     */
    private $count = 0;
    /**
     * <pre>
     * Approximate number of affected users in the given group that
     * match the filter criteria.
     * Users are distinguished by data in the `ErrorContext` of the
     * individual error events, such as their login name or their remote
     * IP address in case of HTTP requests.
     * The number of affected users can be zero even if the number of
     * errors is non-zero if no data was provided from which the
     * affected user could be deduced.
     * Users are counted based on data in the request
     * context that was provided in the error report. If more users are
     * implicitly affected, such as due to a crash of the whole service,
     * this is not reflected here.
     * </pre>
     *
     * <code>int64 affected_users_count = 3;</code>
     */
    private $affected_users_count = 0;
    /**
     * <pre>
     * Approximate number of occurrences over time.
     * Timed counts returned by ListGroups are guaranteed to be:
     * - Inside the requested time interval
     * - Non-overlapping, and
     * - Ordered by ascending time.
     * </pre>
     *
     * <code>repeated .google.devtools.clouderrorreporting.v1beta1.TimedCount timed_counts = 4;</code>
     */
    private $timed_counts;
    /**
     * <pre>
     * Approximate first occurrence that was ever seen for this group
     * and which matches the given filter criteria, ignoring the
     * time_range that was specified in the request.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp first_seen_time = 5;</code>
     */
    private $first_seen_time = null;
    /**
     * <pre>
     * Approximate last occurrence that was ever seen for this group and
     * which matches the given filter criteria, ignoring the time_range
     * that was specified in the request.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp last_seen_time = 6;</code>
     */
    private $last_seen_time = null;
    /**
     * <pre>
     * Service contexts with a non-zero error count for the given filter
     * criteria. This list can be truncated if multiple services are affected.
     * Refer to `num_affected_services` for the total count.
     * </pre>
     *
     * <code>repeated .google.devtools.clouderrorreporting.v1beta1.ServiceContext affected_services = 7;</code>
     */
    private $affected_services;
    /**
     * <pre>
     * The total number of services with a non-zero error count for the given
     * filter criteria.
     * </pre>
     *
     * <code>int32 num_affected_services = 8;</code>
     */
    private $num_affected_services = 0;
    /**
     * <pre>
     * An arbitrary event that is chosen as representative for the whole group.
     * The representative event is intended to be used as a quick preview for
     * the whole group. Events in the group are usually sufficiently similar
     * to each other such that showing an arbitrary representative provides
     * insight into the characteristics of the group as a whole.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ErrorEvent representative = 9;</code>
     */
    private $representative = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Group data that is independent of the filter criteria.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroup group = 1;</code>
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * <pre>
     * Group data that is independent of the filter criteria.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroup group = 1;</code>
     */
    public function setGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Clouderrorreporting\V1beta1\ErrorGroup::class);
        $this->group = $var;
    }

    /**
     * <pre>
     * Approximate total number of events in the given group that match
     * the filter criteria.
     * </pre>
     *
     * <code>int64 count = 2;</code>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <pre>
     * Approximate total number of events in the given group that match
     * the filter criteria.
     * </pre>
     *
     * <code>int64 count = 2;</code>
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;
    }

    /**
     * <pre>
     * Approximate number of affected users in the given group that
     * match the filter criteria.
     * Users are distinguished by data in the `ErrorContext` of the
     * individual error events, such as their login name or their remote
     * IP address in case of HTTP requests.
     * The number of affected users can be zero even if the number of
     * errors is non-zero if no data was provided from which the
     * affected user could be deduced.
     * Users are counted based on data in the request
     * context that was provided in the error report. If more users are
     * implicitly affected, such as due to a crash of the whole service,
     * this is not reflected here.
     * </pre>
     *
     * <code>int64 affected_users_count = 3;</code>
     */
    public function getAffectedUsersCount()
    {
        return $this->affected_users_count;
    }

    /**
     * <pre>
     * Approximate number of affected users in the given group that
     * match the filter criteria.
     * Users are distinguished by data in the `ErrorContext` of the
     * individual error events, such as their login name or their remote
     * IP address in case of HTTP requests.
     * The number of affected users can be zero even if the number of
     * errors is non-zero if no data was provided from which the
     * affected user could be deduced.
     * Users are counted based on data in the request
     * context that was provided in the error report. If more users are
     * implicitly affected, such as due to a crash of the whole service,
     * this is not reflected here.
     * </pre>
     *
     * <code>int64 affected_users_count = 3;</code>
     */
    public function setAffectedUsersCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->affected_users_count = $var;
    }

    /**
     * <pre>
     * Approximate number of occurrences over time.
     * Timed counts returned by ListGroups are guaranteed to be:
     * - Inside the requested time interval
     * - Non-overlapping, and
     * - Ordered by ascending time.
     * </pre>
     *
     * <code>repeated .google.devtools.clouderrorreporting.v1beta1.TimedCount timed_counts = 4;</code>
     */
    public function getTimedCounts()
    {
        return $this->timed_counts;
    }

    /**
     * <pre>
     * Approximate number of occurrences over time.
     * Timed counts returned by ListGroups are guaranteed to be:
     * - Inside the requested time interval
     * - Non-overlapping, and
     * - Ordered by ascending time.
     * </pre>
     *
     * <code>repeated .google.devtools.clouderrorreporting.v1beta1.TimedCount timed_counts = 4;</code>
     */
    public function setTimedCounts(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Clouderrorreporting\V1beta1\TimedCount::class);
        $this->timed_counts = $var;
    }

    /**
     * <pre>
     * Approximate first occurrence that was ever seen for this group
     * and which matches the given filter criteria, ignoring the
     * time_range that was specified in the request.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp first_seen_time = 5;</code>
     */
    public function getFirstSeenTime()
    {
        return $this->first_seen_time;
    }

    /**
     * <pre>
     * Approximate first occurrence that was ever seen for this group
     * and which matches the given filter criteria, ignoring the
     * time_range that was specified in the request.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp first_seen_time = 5;</code>
     */
    public function setFirstSeenTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->first_seen_time = $var;
    }

    /**
     * <pre>
     * Approximate last occurrence that was ever seen for this group and
     * which matches the given filter criteria, ignoring the time_range
     * that was specified in the request.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp last_seen_time = 6;</code>
     */
    public function getLastSeenTime()
    {
        return $this->last_seen_time;
    }

    /**
     * <pre>
     * Approximate last occurrence that was ever seen for this group and
     * which matches the given filter criteria, ignoring the time_range
     * that was specified in the request.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp last_seen_time = 6;</code>
     */
    public function setLastSeenTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_seen_time = $var;
    }

    /**
     * <pre>
     * Service contexts with a non-zero error count for the given filter
     * criteria. This list can be truncated if multiple services are affected.
     * Refer to `num_affected_services` for the total count.
     * </pre>
     *
     * <code>repeated .google.devtools.clouderrorreporting.v1beta1.ServiceContext affected_services = 7;</code>
     */
    public function getAffectedServices()
    {
        return $this->affected_services;
    }

    /**
     * <pre>
     * Service contexts with a non-zero error count for the given filter
     * criteria. This list can be truncated if multiple services are affected.
     * Refer to `num_affected_services` for the total count.
     * </pre>
     *
     * <code>repeated .google.devtools.clouderrorreporting.v1beta1.ServiceContext affected_services = 7;</code>
     */
    public function setAffectedServices(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Clouderrorreporting\V1beta1\ServiceContext::class);
        $this->affected_services = $var;
    }

    /**
     * <pre>
     * The total number of services with a non-zero error count for the given
     * filter criteria.
     * </pre>
     *
     * <code>int32 num_affected_services = 8;</code>
     */
    public function getNumAffectedServices()
    {
        return $this->num_affected_services;
    }

    /**
     * <pre>
     * The total number of services with a non-zero error count for the given
     * filter criteria.
     * </pre>
     *
     * <code>int32 num_affected_services = 8;</code>
     */
    public function setNumAffectedServices($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_affected_services = $var;
    }

    /**
     * <pre>
     * An arbitrary event that is chosen as representative for the whole group.
     * The representative event is intended to be used as a quick preview for
     * the whole group. Events in the group are usually sufficiently similar
     * to each other such that showing an arbitrary representative provides
     * insight into the characteristics of the group as a whole.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ErrorEvent representative = 9;</code>
     */
    public function getRepresentative()
    {
        return $this->representative;
    }

    /**
     * <pre>
     * An arbitrary event that is chosen as representative for the whole group.
     * The representative event is intended to be used as a quick preview for
     * the whole group. Events in the group are usually sufficiently similar
     * to each other such that showing an arbitrary representative provides
     * insight into the characteristics of the group as a whole.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ErrorEvent representative = 9;</code>
     */
    public function setRepresentative(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Clouderrorreporting\V1beta1\ErrorEvent::class);
        $this->representative = $var;
    }

}
