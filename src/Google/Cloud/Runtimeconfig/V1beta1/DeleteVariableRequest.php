<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/runtimeconfig.proto

namespace Google\Cloud\Runtimeconfig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the `DeleteVariable()` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.runtimeconfig.v1beta1.DeleteVariableRequest</code>
 */
class DeleteVariableRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the variable to delete, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]/variables/[VARIABLE_NAME]`
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Set to `true` to recursively delete multiple variables with the same
     * prefix.
     * </pre>
     *
     * <code>bool recursive = 2;</code>
     */
    private $recursive = false;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Runtimeconfig\V1Beta1\Runtimeconfig::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the variable to delete, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]/variables/[VARIABLE_NAME]`
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
     * The name of the variable to delete, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]/variables/[VARIABLE_NAME]`
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
     * Set to `true` to recursively delete multiple variables with the same
     * prefix.
     * </pre>
     *
     * <code>bool recursive = 2;</code>
     */
    public function getRecursive()
    {
        return $this->recursive;
    }

    /**
     * <pre>
     * Set to `true` to recursively delete multiple variables with the same
     * prefix.
     * </pre>
     *
     * <code>bool recursive = 2;</code>
     */
    public function setRecursive($var)
    {
        GPBUtil::checkBool($var);
        $this->recursive = $var;
    }

}

