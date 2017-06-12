<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/service_controller.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for the Check method.
 * </pre>
 *
 * Protobuf type <code>google.api.servicecontrol.v1.CheckRequest</code>
 */
class CheckRequest extends \Google\Protobuf\Internal\Message
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
     * The operation to be checked.
     * </pre>
     *
     * <code>.google.api.servicecontrol.v1.Operation operation = 2;</code>
     */
    private $operation = null;
    /**
     * <pre>
     * Specifies which version of service configuration should be used to process
     * the request.
     * If unspecified or no matching version can be found, the
     * latest one will be used.
     * </pre>
     *
     * <code>string service_config_id = 4;</code>
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
     * The operation to be checked.
     * </pre>
     *
     * <code>.google.api.servicecontrol.v1.Operation operation = 2;</code>
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * <pre>
     * The operation to be checked.
     * </pre>
     *
     * <code>.google.api.servicecontrol.v1.Operation operation = 2;</code>
     */
    public function setOperation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Servicecontrol\V1\Operation::class);
        $this->operation = $var;
    }

    /**
     * <pre>
     * Specifies which version of service configuration should be used to process
     * the request.
     * If unspecified or no matching version can be found, the
     * latest one will be used.
     * </pre>
     *
     * <code>string service_config_id = 4;</code>
     */
    public function getServiceConfigId()
    {
        return $this->service_config_id;
    }

    /**
     * <pre>
     * Specifies which version of service configuration should be used to process
     * the request.
     * If unspecified or no matching version can be found, the
     * latest one will be used.
     * </pre>
     *
     * <code>string service_config_id = 4;</code>
     */
    public function setServiceConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_config_id = $var;
    }

}
