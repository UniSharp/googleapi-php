<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/operation.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents information regarding an operation.
 * </pre>
 *
 * Protobuf type <code>google.api.servicecontrol.v1.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Identity of the operation. This must be unique within the scope of the
     * service that generated the operation. If the service calls
     * Check() and Report() on the same operation, the two calls should carry
     * the same id.
     * UUID version 4 is recommended, though not required.
     * In scenarios where an operation is computed from existing information
     * and an idempotent id is desirable for deduplication purpose, UUID version 5
     * is recommended. See RFC 4122 for details.
     * </pre>
     *
     * <code>string operation_id = 1;</code>
     */
    private $operation_id = '';
    /**
     * <pre>
     * Fully qualified name of the operation. Reserved for future use.
     * </pre>
     *
     * <code>string operation_name = 2;</code>
     */
    private $operation_name = '';
    /**
     * <pre>
     * Identity of the consumer who is using the service.
     * This field should be filled in for the operations initiated by a
     * consumer, but not for service-initiated operations that are
     * not related to a specific consumer.
     * This can be in one of the following formats:
     *   project:&lt;project_id&gt;,
     *   project_number:&lt;project_number&gt;,
     *   api_key:&lt;api_key&gt;.
     * </pre>
     *
     * <code>string consumer_id = 3;</code>
     */
    private $consumer_id = '';
    /**
     * <pre>
     * Required. Start time of the operation.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 4;</code>
     */
    private $start_time = null;
    /**
     * <pre>
     * End time of the operation.
     * Required when the operation is used in [ServiceController.Report][google.api.servicecontrol.v1.ServiceController.Report],
     * but optional when the operation is used in [ServiceController.Check][google.api.servicecontrol.v1.ServiceController.Check].
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 5;</code>
     */
    private $end_time = null;
    /**
     * <pre>
     * Labels describing the operation. Only the following labels are allowed:
     * - Labels describing monitored resources as defined in
     *   the service configuration.
     * - Default labels of metric values. When specified, labels defined in the
     *   metric value override these default.
     * - The following labels defined by Google Cloud Platform:
     *     - `cloud.googleapis.com/location` describing the location where the
     *        operation happened,
     *     - `servicecontrol.googleapis.com/user_agent` describing the user agent
     *        of the API request,
     *     - `servicecontrol.googleapis.com/service_agent` describing the service
     *        used to handle the API request (e.g. ESP),
     *     - `servicecontrol.googleapis.com/platform` describing the platform
     *        where the API is served (e.g. GAE, GCE, GKE).
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 6;</code>
     */
    private $labels;
    /**
     * <pre>
     * Represents information about this operation. Each MetricValueSet
     * corresponds to a metric defined in the service configuration.
     * The data type used in the MetricValueSet must agree with
     * the data type specified in the metric definition.
     * Within a single operation, it is not allowed to have more than one
     * MetricValue instances that have the same metric names and identical
     * label value combinations. If a request has such duplicated MetricValue
     * instances, the entire request is rejected with
     * an invalid argument error.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.MetricValueSet metric_value_sets = 7;</code>
     */
    private $metric_value_sets;
    /**
     * <pre>
     * Represents information to be logged.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.LogEntry log_entries = 8;</code>
     */
    private $log_entries;
    /**
     * <pre>
     * DO NOT USE. This is an experimental field.
     * </pre>
     *
     * <code>.google.api.servicecontrol.v1.Operation.Importance importance = 11;</code>
     */
    private $importance = 0;

    public function __construct() {
        \GPBMetadata\Google\Api\Servicecontrol\V1\Operation::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Identity of the operation. This must be unique within the scope of the
     * service that generated the operation. If the service calls
     * Check() and Report() on the same operation, the two calls should carry
     * the same id.
     * UUID version 4 is recommended, though not required.
     * In scenarios where an operation is computed from existing information
     * and an idempotent id is desirable for deduplication purpose, UUID version 5
     * is recommended. See RFC 4122 for details.
     * </pre>
     *
     * <code>string operation_id = 1;</code>
     */
    public function getOperationId()
    {
        return $this->operation_id;
    }

    /**
     * <pre>
     * Identity of the operation. This must be unique within the scope of the
     * service that generated the operation. If the service calls
     * Check() and Report() on the same operation, the two calls should carry
     * the same id.
     * UUID version 4 is recommended, though not required.
     * In scenarios where an operation is computed from existing information
     * and an idempotent id is desirable for deduplication purpose, UUID version 5
     * is recommended. See RFC 4122 for details.
     * </pre>
     *
     * <code>string operation_id = 1;</code>
     */
    public function setOperationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_id = $var;
    }

    /**
     * <pre>
     * Fully qualified name of the operation. Reserved for future use.
     * </pre>
     *
     * <code>string operation_name = 2;</code>
     */
    public function getOperationName()
    {
        return $this->operation_name;
    }

    /**
     * <pre>
     * Fully qualified name of the operation. Reserved for future use.
     * </pre>
     *
     * <code>string operation_name = 2;</code>
     */
    public function setOperationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_name = $var;
    }

    /**
     * <pre>
     * Identity of the consumer who is using the service.
     * This field should be filled in for the operations initiated by a
     * consumer, but not for service-initiated operations that are
     * not related to a specific consumer.
     * This can be in one of the following formats:
     *   project:&lt;project_id&gt;,
     *   project_number:&lt;project_number&gt;,
     *   api_key:&lt;api_key&gt;.
     * </pre>
     *
     * <code>string consumer_id = 3;</code>
     */
    public function getConsumerId()
    {
        return $this->consumer_id;
    }

    /**
     * <pre>
     * Identity of the consumer who is using the service.
     * This field should be filled in for the operations initiated by a
     * consumer, but not for service-initiated operations that are
     * not related to a specific consumer.
     * This can be in one of the following formats:
     *   project:&lt;project_id&gt;,
     *   project_number:&lt;project_number&gt;,
     *   api_key:&lt;api_key&gt;.
     * </pre>
     *
     * <code>string consumer_id = 3;</code>
     */
    public function setConsumerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->consumer_id = $var;
    }

    /**
     * <pre>
     * Required. Start time of the operation.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 4;</code>
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * <pre>
     * Required. Start time of the operation.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 4;</code>
     */
    public function setStartTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;
    }

    /**
     * <pre>
     * End time of the operation.
     * Required when the operation is used in [ServiceController.Report][google.api.servicecontrol.v1.ServiceController.Report],
     * but optional when the operation is used in [ServiceController.Check][google.api.servicecontrol.v1.ServiceController.Check].
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 5;</code>
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * <pre>
     * End time of the operation.
     * Required when the operation is used in [ServiceController.Report][google.api.servicecontrol.v1.ServiceController.Report],
     * but optional when the operation is used in [ServiceController.Check][google.api.servicecontrol.v1.ServiceController.Check].
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 5;</code>
     */
    public function setEndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;
    }

    /**
     * <pre>
     * Labels describing the operation. Only the following labels are allowed:
     * - Labels describing monitored resources as defined in
     *   the service configuration.
     * - Default labels of metric values. When specified, labels defined in the
     *   metric value override these default.
     * - The following labels defined by Google Cloud Platform:
     *     - `cloud.googleapis.com/location` describing the location where the
     *        operation happened,
     *     - `servicecontrol.googleapis.com/user_agent` describing the user agent
     *        of the API request,
     *     - `servicecontrol.googleapis.com/service_agent` describing the service
     *        used to handle the API request (e.g. ESP),
     *     - `servicecontrol.googleapis.com/platform` describing the platform
     *        where the API is served (e.g. GAE, GCE, GKE).
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 6;</code>
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * <pre>
     * Labels describing the operation. Only the following labels are allowed:
     * - Labels describing monitored resources as defined in
     *   the service configuration.
     * - Default labels of metric values. When specified, labels defined in the
     *   metric value override these default.
     * - The following labels defined by Google Cloud Platform:
     *     - `cloud.googleapis.com/location` describing the location where the
     *        operation happened,
     *     - `servicecontrol.googleapis.com/user_agent` describing the user agent
     *        of the API request,
     *     - `servicecontrol.googleapis.com/service_agent` describing the service
     *        used to handle the API request (e.g. ESP),
     *     - `servicecontrol.googleapis.com/platform` describing the platform
     *        where the API is served (e.g. GAE, GCE, GKE).
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 6;</code>
     */
    public function setLabels(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;
    }

    /**
     * <pre>
     * Represents information about this operation. Each MetricValueSet
     * corresponds to a metric defined in the service configuration.
     * The data type used in the MetricValueSet must agree with
     * the data type specified in the metric definition.
     * Within a single operation, it is not allowed to have more than one
     * MetricValue instances that have the same metric names and identical
     * label value combinations. If a request has such duplicated MetricValue
     * instances, the entire request is rejected with
     * an invalid argument error.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.MetricValueSet metric_value_sets = 7;</code>
     */
    public function getMetricValueSets()
    {
        return $this->metric_value_sets;
    }

    /**
     * <pre>
     * Represents information about this operation. Each MetricValueSet
     * corresponds to a metric defined in the service configuration.
     * The data type used in the MetricValueSet must agree with
     * the data type specified in the metric definition.
     * Within a single operation, it is not allowed to have more than one
     * MetricValue instances that have the same metric names and identical
     * label value combinations. If a request has such duplicated MetricValue
     * instances, the entire request is rejected with
     * an invalid argument error.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.MetricValueSet metric_value_sets = 7;</code>
     */
    public function setMetricValueSets(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Servicecontrol\V1\MetricValueSet::class);
        $this->metric_value_sets = $arr;
    }

    /**
     * <pre>
     * Represents information to be logged.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.LogEntry log_entries = 8;</code>
     */
    public function getLogEntries()
    {
        return $this->log_entries;
    }

    /**
     * <pre>
     * Represents information to be logged.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.LogEntry log_entries = 8;</code>
     */
    public function setLogEntries(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Servicecontrol\V1\LogEntry::class);
        $this->log_entries = $arr;
    }

    /**
     * <pre>
     * DO NOT USE. This is an experimental field.
     * </pre>
     *
     * <code>.google.api.servicecontrol.v1.Operation.Importance importance = 11;</code>
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * <pre>
     * DO NOT USE. This is an experimental field.
     * </pre>
     *
     * <code>.google.api.servicecontrol.v1.Operation.Importance importance = 11;</code>
     */
    public function setImportance($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\Servicecontrol\V1\Operation_Importance::class);
        $this->importance = $var;
    }

}

