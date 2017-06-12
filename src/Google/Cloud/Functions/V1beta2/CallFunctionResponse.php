<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1beta2/functions.proto

namespace Google\Cloud\Functions\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response of `CallFunction` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.functions.v1beta2.CallFunctionResponse</code>
 */
class CallFunctionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Execution id of function invocation.
     * </pre>
     *
     * <code>string execution_id = 1;</code>
     */
    private $execution_id = '';
    /**
     * <pre>
     * Result populated for successful execution of synchronous function. Will
     * not be populated if function does not return a result through context.
     * </pre>
     *
     * <code>string result = 2;</code>
     */
    private $result = '';
    /**
     * <pre>
     * Either system or user-function generated error. Set if execution
     * was not successful.
     * </pre>
     *
     * <code>string error = 3;</code>
     */
    private $error = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Functions\V1Beta2\Functions::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Execution id of function invocation.
     * </pre>
     *
     * <code>string execution_id = 1;</code>
     */
    public function getExecutionId()
    {
        return $this->execution_id;
    }

    /**
     * <pre>
     * Execution id of function invocation.
     * </pre>
     *
     * <code>string execution_id = 1;</code>
     */
    public function setExecutionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->execution_id = $var;
    }

    /**
     * <pre>
     * Result populated for successful execution of synchronous function. Will
     * not be populated if function does not return a result through context.
     * </pre>
     *
     * <code>string result = 2;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <pre>
     * Result populated for successful execution of synchronous function. Will
     * not be populated if function does not return a result through context.
     * </pre>
     *
     * <code>string result = 2;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkString($var, True);
        $this->result = $var;
    }

    /**
     * <pre>
     * Either system or user-function generated error. Set if execution
     * was not successful.
     * </pre>
     *
     * <code>string error = 3;</code>
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * <pre>
     * Either system or user-function generated error. Set if execution
     * was not successful.
     * </pre>
     *
     * <code>string error = 3;</code>
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;
    }

}

