<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v1/trace.proto

namespace Google\Devtools\Cloudtrace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request message for the `ListTraces` method. All fields are required
 * unless specified.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudtrace.v1.ListTracesRequest</code>
 */
class ListTracesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * ID of the Cloud project where the trace data is stored.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * Type of data returned for traces in the list. Optional. Default is
     * `MINIMAL`.
     * </pre>
     *
     * <code>.google.devtools.cloudtrace.v1.ListTracesRequest.ViewType view = 2;</code>
     */
    private $view = 0;
    /**
     * <pre>
     * Maximum number of traces to return. If not specified or &lt;= 0, the
     * implementation selects a reasonable value.  The implementation may
     * return fewer traces than the requested page size. Optional.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * Token identifying the page of results to return. If provided, use the
     * value of the `next_page_token` field from a previous request. Optional.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * <pre>
     * End of the time interval (inclusive) during which the trace data was
     * collected from the application.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 5;</code>
     */
    private $start_time = null;
    /**
     * <pre>
     * Start of the time interval (inclusive) during which the trace data was
     * collected from the application.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 6;</code>
     */
    private $end_time = null;
    /**
     * <pre>
     * An optional filter for the request.
     * </pre>
     *
     * <code>string filter = 7;</code>
     */
    private $filter = '';
    /**
     * <pre>
     * Field used to sort the returned traces. Optional.
     * Can be one of the following:
     * *   `trace_id`
     * *   `name` (`name` field of root span in the trace)
     * *   `duration` (difference between `end_time` and `start_time` fields of
     *      the root span)
     * *   `start` (`start_time` field of the root span)
     * Descending order can be specified by appending `desc` to the sort field
     * (for example, `name desc`).
     * Only one sort field is permitted.
     * </pre>
     *
     * <code>string order_by = 8;</code>
     */
    private $order_by = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudtrace\V1\Trace::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * ID of the Cloud project where the trace data is stored.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * ID of the Cloud project where the trace data is stored.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * Type of data returned for traces in the list. Optional. Default is
     * `MINIMAL`.
     * </pre>
     *
     * <code>.google.devtools.cloudtrace.v1.ListTracesRequest.ViewType view = 2;</code>
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * <pre>
     * Type of data returned for traces in the list. Optional. Default is
     * `MINIMAL`.
     * </pre>
     *
     * <code>.google.devtools.cloudtrace.v1.ListTracesRequest.ViewType view = 2;</code>
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Cloudtrace\V1\ListTracesRequest_ViewType::class);
        $this->view = $var;
    }

    /**
     * <pre>
     * Maximum number of traces to return. If not specified or &lt;= 0, the
     * implementation selects a reasonable value.  The implementation may
     * return fewer traces than the requested page size. Optional.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * Maximum number of traces to return. If not specified or &lt;= 0, the
     * implementation selects a reasonable value.  The implementation may
     * return fewer traces than the requested page size. Optional.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * Token identifying the page of results to return. If provided, use the
     * value of the `next_page_token` field from a previous request. Optional.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * Token identifying the page of results to return. If provided, use the
     * value of the `next_page_token` field from a previous request. Optional.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

    /**
     * <pre>
     * End of the time interval (inclusive) during which the trace data was
     * collected from the application.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 5;</code>
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * <pre>
     * End of the time interval (inclusive) during which the trace data was
     * collected from the application.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 5;</code>
     */
    public function setStartTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;
    }

    /**
     * <pre>
     * Start of the time interval (inclusive) during which the trace data was
     * collected from the application.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 6;</code>
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * <pre>
     * Start of the time interval (inclusive) during which the trace data was
     * collected from the application.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 6;</code>
     */
    public function setEndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;
    }

    /**
     * <pre>
     * An optional filter for the request.
     * </pre>
     *
     * <code>string filter = 7;</code>
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * <pre>
     * An optional filter for the request.
     * </pre>
     *
     * <code>string filter = 7;</code>
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;
    }

    /**
     * <pre>
     * Field used to sort the returned traces. Optional.
     * Can be one of the following:
     * *   `trace_id`
     * *   `name` (`name` field of root span in the trace)
     * *   `duration` (difference between `end_time` and `start_time` fields of
     *      the root span)
     * *   `start` (`start_time` field of the root span)
     * Descending order can be specified by appending `desc` to the sort field
     * (for example, `name desc`).
     * Only one sort field is permitted.
     * </pre>
     *
     * <code>string order_by = 8;</code>
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * <pre>
     * Field used to sort the returned traces. Optional.
     * Can be one of the following:
     * *   `trace_id`
     * *   `name` (`name` field of root span in the trace)
     * *   `duration` (difference between `end_time` and `start_time` fields of
     *      the root span)
     * *   `start` (`start_time` field of the root span)
     * Descending order can be specified by appending `desc` to the sort field
     * (for example, `name desc`).
     * Only one sort field is permitted.
     * </pre>
     *
     * <code>string order_by = 8;</code>
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;
    }

}

