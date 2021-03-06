<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace Google\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Describes a logs-based metric.  The value of the metric is the
 * number of log entries that match a logs filter in a given time interval.
 * </pre>
 *
 * Protobuf type <code>google.logging.v2.LogMetric</code>
 */
class LogMetric extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The client-assigned metric identifier.
     * Examples: `"error_count"`, `"nginx/requests"`.
     * Metric identifiers are limited to 100 characters and can include
     * only the following characters: `A-Z`, `a-z`, `0-9`, and the
     * special characters `_-.,+!*',()%/`.  The forward-slash character
     * (`/`) denotes a hierarchy of name pieces, and it cannot be the
     * first character of the name.
     * The metric identifier in this field must not be
     * [URL-encoded](https://en.wikipedia.org/wiki/Percent-encoding).
     * However, when the metric identifier appears as the `[METRIC_ID]`
     * part of a `metric_name` API parameter, then the metric identifier
     * must be URL-encoded. Example:
     * `"projects/my-project/metrics/nginx%2Frequests"`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Optional. A description of this metric, which is used in documentation.
     * </pre>
     *
     * <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * <pre>
     * Required. An [advanced logs filter](/logging/docs/view/advanced_filters)
     * which is used to match log entries.
     * Example:
     *     "resource.type=gae_app AND severity&gt;=ERROR"
     * The maximum length of the filter is 20000 characters.
     * </pre>
     *
     * <code>string filter = 3;</code>
     */
    private $filter = '';
    /**
     * <pre>
     * Output only. The API version that created or updated this metric.
     * The version also dictates the syntax of the filter expression. When a value
     * for this field is missing, the default value of V2 should be assumed.
     * </pre>
     *
     * <code>.google.logging.v2.LogMetric.ApiVersion version = 4;</code>
     */
    private $version = 0;

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\LoggingMetrics::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The client-assigned metric identifier.
     * Examples: `"error_count"`, `"nginx/requests"`.
     * Metric identifiers are limited to 100 characters and can include
     * only the following characters: `A-Z`, `a-z`, `0-9`, and the
     * special characters `_-.,+!*',()%/`.  The forward-slash character
     * (`/`) denotes a hierarchy of name pieces, and it cannot be the
     * first character of the name.
     * The metric identifier in this field must not be
     * [URL-encoded](https://en.wikipedia.org/wiki/Percent-encoding).
     * However, when the metric identifier appears as the `[METRIC_ID]`
     * part of a `metric_name` API parameter, then the metric identifier
     * must be URL-encoded. Example:
     * `"projects/my-project/metrics/nginx%2Frequests"`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * Required. The client-assigned metric identifier.
     * Examples: `"error_count"`, `"nginx/requests"`.
     * Metric identifiers are limited to 100 characters and can include
     * only the following characters: `A-Z`, `a-z`, `0-9`, and the
     * special characters `_-.,+!*',()%/`.  The forward-slash character
     * (`/`) denotes a hierarchy of name pieces, and it cannot be the
     * first character of the name.
     * The metric identifier in this field must not be
     * [URL-encoded](https://en.wikipedia.org/wiki/Percent-encoding).
     * However, when the metric identifier appears as the `[METRIC_ID]`
     * part of a `metric_name` API parameter, then the metric identifier
     * must be URL-encoded. Example:
     * `"projects/my-project/metrics/nginx%2Frequests"`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * Optional. A description of this metric, which is used in documentation.
     * </pre>
     *
     * <code>string description = 2;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Optional. A description of this metric, which is used in documentation.
     * </pre>
     *
     * <code>string description = 2;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <pre>
     * Required. An [advanced logs filter](/logging/docs/view/advanced_filters)
     * which is used to match log entries.
     * Example:
     *     "resource.type=gae_app AND severity&gt;=ERROR"
     * The maximum length of the filter is 20000 characters.
     * </pre>
     *
     * <code>string filter = 3;</code>
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * <pre>
     * Required. An [advanced logs filter](/logging/docs/view/advanced_filters)
     * which is used to match log entries.
     * Example:
     *     "resource.type=gae_app AND severity&gt;=ERROR"
     * The maximum length of the filter is 20000 characters.
     * </pre>
     *
     * <code>string filter = 3;</code>
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;
    }

    /**
     * <pre>
     * Output only. The API version that created or updated this metric.
     * The version also dictates the syntax of the filter expression. When a value
     * for this field is missing, the default value of V2 should be assumed.
     * </pre>
     *
     * <code>.google.logging.v2.LogMetric.ApiVersion version = 4;</code>
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <pre>
     * Output only. The API version that created or updated this metric.
     * The version also dictates the syntax of the filter expression. When a value
     * for this field is missing, the default value of V2 should be assumed.
     * </pre>
     *
     * <code>.google.logging.v2.LogMetric.ApiVersion version = 4;</code>
     */
    public function setVersion($var)
    {
        GPBUtil::checkEnum($var, \Google\Logging\V2\LogMetric_ApiVersion::class);
        $this->version = $var;
    }

}

