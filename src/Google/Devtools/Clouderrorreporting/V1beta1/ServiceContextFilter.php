<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Devtools\Clouderrorreporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Specifies criteria for filtering a subset of service contexts.
 * The fields in the filter correspond to the fields in `ServiceContext`.
 * Only exact, case-sensitive matches are supported.
 * If a field is unset or empty, it matches arbitrary values.
 * </pre>
 *
 * Protobuf type <code>google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter</code>
 */
class ServiceContextFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * [Optional] The exact value to match against
     * [`ServiceContext.service`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.service).
     * </pre>
     *
     * <code>string service = 2;</code>
     */
    private $service = '';
    /**
     * <pre>
     * [Optional] The exact value to match against
     * [`ServiceContext.version`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.version).
     * </pre>
     *
     * <code>string version = 3;</code>
     */
    private $version = '';
    /**
     * <pre>
     * [Optional] The exact value to match against
     * [`ServiceContext.resource_type`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.resource_type).
     * </pre>
     *
     * <code>string resource_type = 4;</code>
     */
    private $resource_type = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * [Optional] The exact value to match against
     * [`ServiceContext.service`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.service).
     * </pre>
     *
     * <code>string service = 2;</code>
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * <pre>
     * [Optional] The exact value to match against
     * [`ServiceContext.service`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.service).
     * </pre>
     *
     * <code>string service = 2;</code>
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;
    }

    /**
     * <pre>
     * [Optional] The exact value to match against
     * [`ServiceContext.version`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.version).
     * </pre>
     *
     * <code>string version = 3;</code>
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <pre>
     * [Optional] The exact value to match against
     * [`ServiceContext.version`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.version).
     * </pre>
     *
     * <code>string version = 3;</code>
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;
    }

    /**
     * <pre>
     * [Optional] The exact value to match against
     * [`ServiceContext.resource_type`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.resource_type).
     * </pre>
     *
     * <code>string resource_type = 4;</code>
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * <pre>
     * [Optional] The exact value to match against
     * [`ServiceContext.resource_type`](/error-reporting/reference/rest/v1beta1/ServiceContext#FIELDS.resource_type).
     * </pre>
     *
     * <code>string resource_type = 4;</code>
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;
    }

}

