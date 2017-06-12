<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/runtimeconfig.proto

namespace Google\Cloud\Runtimeconfig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Gets a RuntimeConfig resource.
 * </pre>
 *
 * Protobuf type <code>google.cloud.runtimeconfig.v1beta1.GetConfigRequest</code>
 */
class GetConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the RuntimeConfig resource to retrieve, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
     * </pre>
     *
     * <code>string name = 2;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Runtimeconfig\V1Beta1\Runtimeconfig::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the RuntimeConfig resource to retrieve, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
     * </pre>
     *
     * <code>string name = 2;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * The name of the RuntimeConfig resource to retrieve, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
     * </pre>
     *
     * <code>string name = 2;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}

