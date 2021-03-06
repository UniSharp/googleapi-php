<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/service_controller.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response message for the Check method.
 * </pre>
 *
 * Protobuf type <code>google.api.servicecontrol.v1.CheckResponse</code>
 */
class CheckResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The same operation_id value used in the CheckRequest.
     * Used for logging and diagnostics purposes.
     * </pre>
     *
     * <code>string operation_id = 1;</code>
     */
    private $operation_id = '';
    /**
     * <pre>
     * Indicate the decision of the check.
     * If no check errors are present, the service should process the operation.
     * Otherwise the service should use the list of errors to determine the
     * appropriate action.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.CheckError check_errors = 2;</code>
     */
    private $check_errors;
    /**
     * <pre>
     * The actual config id used to process the request.
     * </pre>
     *
     * <code>string service_config_id = 5;</code>
     */
    private $service_config_id = '';

    public function __construct() {
        \GPBMetadata\Google\Api\Servicecontrol\V1\ServiceController::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The same operation_id value used in the CheckRequest.
     * Used for logging and diagnostics purposes.
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
     * The same operation_id value used in the CheckRequest.
     * Used for logging and diagnostics purposes.
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
     * Indicate the decision of the check.
     * If no check errors are present, the service should process the operation.
     * Otherwise the service should use the list of errors to determine the
     * appropriate action.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.CheckError check_errors = 2;</code>
     */
    public function getCheckErrors()
    {
        return $this->check_errors;
    }

    /**
     * <pre>
     * Indicate the decision of the check.
     * If no check errors are present, the service should process the operation.
     * Otherwise the service should use the list of errors to determine the
     * appropriate action.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.CheckError check_errors = 2;</code>
     */
    public function setCheckErrors(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Servicecontrol\V1\CheckError::class);
        $this->check_errors = $arr;
    }

    /**
     * <pre>
     * The actual config id used to process the request.
     * </pre>
     *
     * <code>string service_config_id = 5;</code>
     */
    public function getServiceConfigId()
    {
        return $this->service_config_id;
    }

    /**
     * <pre>
     * The actual config id used to process the request.
     * </pre>
     *
     * <code>string service_config_id = 5;</code>
     */
    public function setServiceConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_config_id = $var;
    }

}

