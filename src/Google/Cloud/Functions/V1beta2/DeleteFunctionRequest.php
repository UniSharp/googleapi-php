<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1beta2/functions.proto

namespace Google\Cloud\Functions\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the `DeleteFunction` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.functions.v1beta2.DeleteFunctionRequest</code>
 */
class DeleteFunctionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the function which should be deleted.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Functions\V1Beta2\Functions::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the function which should be deleted.
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
     * The name of the function which should be deleted.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}
