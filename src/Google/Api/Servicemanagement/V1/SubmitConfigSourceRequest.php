<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Api\Servicemanagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for SubmitConfigSource method.
 * </pre>
 *
 * Protobuf type <code>google.api.servicemanagement.v1.SubmitConfigSourceRequest</code>
 */
class SubmitConfigSourceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the service.  See the [overview](/service-management/overview)
     * for naming requirements.  For example: `example.googleapis.com`.
     * </pre>
     *
     * <code>string service_name = 1;</code>
     */
    private $service_name = '';
    /**
     * <pre>
     * The source configuration for the service.
     * </pre>
     *
     * <code>.google.api.servicemanagement.v1.ConfigSource config_source = 2;</code>
     */
    private $config_source = null;
    /**
     * <pre>
     * Optional. If set, this will result in the generation of a
     * `google.api.Service` configuration based on the `ConfigSource` provided,
     * but the generated config and the sources will NOT be persisted.
     * </pre>
     *
     * <code>bool validate_only = 3;</code>
     */
    private $validate_only = false;

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the service.  See the [overview](/service-management/overview)
     * for naming requirements.  For example: `example.googleapis.com`.
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
     * The name of the service.  See the [overview](/service-management/overview)
     * for naming requirements.  For example: `example.googleapis.com`.
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
     * The source configuration for the service.
     * </pre>
     *
     * <code>.google.api.servicemanagement.v1.ConfigSource config_source = 2;</code>
     */
    public function getConfigSource()
    {
        return $this->config_source;
    }

    /**
     * <pre>
     * The source configuration for the service.
     * </pre>
     *
     * <code>.google.api.servicemanagement.v1.ConfigSource config_source = 2;</code>
     */
    public function setConfigSource(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Servicemanagement\V1\ConfigSource::class);
        $this->config_source = $var;
    }

    /**
     * <pre>
     * Optional. If set, this will result in the generation of a
     * `google.api.Service` configuration based on the `ConfigSource` provided,
     * but the generated config and the sources will NOT be persisted.
     * </pre>
     *
     * <code>bool validate_only = 3;</code>
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * <pre>
     * Optional. If set, this will result in the generation of a
     * `google.api.Service` configuration based on the `ConfigSource` provided,
     * but the generated config and the sources will NOT be persisted.
     * </pre>
     *
     * <code>bool validate_only = 3;</code>
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;
    }

}
