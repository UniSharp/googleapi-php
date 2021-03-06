<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/service_controller.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for the Report method.
 * </pre>
 *
 * Protobuf type <code>google.api.servicecontrol.v1.ReportRequest</code>
 */
class ReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The service name as specified in its service configuration. For example,
     * `"pubsub.googleapis.com"`.
     * See [google.api.Service][google.api.Service] for the definition of a service name.
     * </pre>
     *
     * <code>string service_name = 1;</code>
     */
    private $service_name = '';
    /**
     * <pre>
     * Operations to be reported.
     * Typically the service should report one operation per request.
     * Putting multiple operations into a single request is allowed, but should
     * be used only when multiple operations are natually available at the time
     * of the report.
     * If multiple operations are in a single request, the total request size
     * should be no larger than 1MB. See [ReportResponse.report_errors][google.api.servicecontrol.v1.ReportResponse.report_errors] for
     * partial failure behavior.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.Operation operations = 2;</code>
     */
    private $operations;
    /**
     * <pre>
     * Specifies which version of service config should be used to process the
     * request.
     * If unspecified or no matching version can be found, the
     * latest one will be used.
     * </pre>
     *
     * <code>string service_config_id = 3;</code>
     */
    private $service_config_id = '';

    public function __construct() {
        \GPBMetadata\Google\Api\Servicecontrol\V1\ServiceController::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The service name as specified in its service configuration. For example,
     * `"pubsub.googleapis.com"`.
     * See [google.api.Service][google.api.Service] for the definition of a service name.
     * </pre>
     *
     * <code>string service_name = 1;</code>
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * <pre>
     * The service name as specified in its service configuration. For example,
     * `"pubsub.googleapis.com"`.
     * See [google.api.Service][google.api.Service] for the definition of a service name.
     * </pre>
     *
     * <code>string service_name = 1;</code>
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;
    }

    /**
     * <pre>
     * Operations to be reported.
     * Typically the service should report one operation per request.
     * Putting multiple operations into a single request is allowed, but should
     * be used only when multiple operations are natually available at the time
     * of the report.
     * If multiple operations are in a single request, the total request size
     * should be no larger than 1MB. See [ReportResponse.report_errors][google.api.servicecontrol.v1.ReportResponse.report_errors] for
     * partial failure behavior.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.Operation operations = 2;</code>
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * <pre>
     * Operations to be reported.
     * Typically the service should report one operation per request.
     * Putting multiple operations into a single request is allowed, but should
     * be used only when multiple operations are natually available at the time
     * of the report.
     * If multiple operations are in a single request, the total request size
     * should be no larger than 1MB. See [ReportResponse.report_errors][google.api.servicecontrol.v1.ReportResponse.report_errors] for
     * partial failure behavior.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.Operation operations = 2;</code>
     */
    public function setOperations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Servicecontrol\V1\Operation::class);
        $this->operations = $arr;
    }

    /**
     * <pre>
     * Specifies which version of service config should be used to process the
     * request.
     * If unspecified or no matching version can be found, the
     * latest one will be used.
     * </pre>
     *
     * <code>string service_config_id = 3;</code>
     */
    public function getServiceConfigId()
    {
        return $this->service_config_id;
    }

    /**
     * <pre>
     * Specifies which version of service config should be used to process the
     * request.
     * If unspecified or no matching version can be found, the
     * latest one will be used.
     * </pre>
     *
     * <code>string service_config_id = 3;</code>
     */
    public function setServiceConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_config_id = $var;
    }

}

