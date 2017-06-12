<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Api\Servicemanagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for EnableService method.
 * </pre>
 *
 * Protobuf type <code>google.api.servicemanagement.v1.EnableServiceRequest</code>
 */
class EnableServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Name of the service to enable. Specifying an unknown service name will
     * cause the request to fail.
     * </pre>
     *
     * <code>string service_name = 1;</code>
     */
    private $service_name = '';
    /**
     * <pre>
     * The identity of consumer resource which service enablement will be
     * applied to.
     * The Google Service Management implementation accepts the following
     * forms:
     * - "project:&lt;project_id&gt;"
     * Note: this is made compatible with
     * google.api.servicecontrol.v1.Operation.consumer_id.
     * </pre>
     *
     * <code>string consumer_id = 2;</code>
     */
    private $consumer_id = '';

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Name of the service to enable. Specifying an unknown service name will
     * cause the request to fail.
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
     * Name of the service to enable. Specifying an unknown service name will
     * cause the request to fail.
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
     * The identity of consumer resource which service enablement will be
     * applied to.
     * The Google Service Management implementation accepts the following
     * forms:
     * - "project:&lt;project_id&gt;"
     * Note: this is made compatible with
     * google.api.servicecontrol.v1.Operation.consumer_id.
     * </pre>
     *
     * <code>string consumer_id = 2;</code>
     */
    public function getConsumerId()
    {
        return $this->consumer_id;
    }

    /**
     * <pre>
     * The identity of consumer resource which service enablement will be
     * applied to.
     * The Google Service Management implementation accepts the following
     * forms:
     * - "project:&lt;project_id&gt;"
     * Note: this is made compatible with
     * google.api.servicecontrol.v1.Operation.consumer_id.
     * </pre>
     *
     * <code>string consumer_id = 2;</code>
     */
    public function setConsumerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->consumer_id = $var;
    }

}
