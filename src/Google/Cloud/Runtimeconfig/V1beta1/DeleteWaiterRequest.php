<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/runtimeconfig.proto

namespace Google\Cloud\Runtimeconfig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the `DeleteWaiter()` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.runtimeconfig.v1beta1.DeleteWaiterRequest</code>
 */
class DeleteWaiterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The Waiter resource to delete, in the format:
     *  `projects/[PROJECT_ID]/configs/[CONFIG_NAME]/waiters/[WAITER_NAME]`
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Runtimeconfig\V1Beta1\Runtimeconfig::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The Waiter resource to delete, in the format:
     *  `projects/[PROJECT_ID]/configs/[CONFIG_NAME]/waiters/[WAITER_NAME]`
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
     * The Waiter resource to delete, in the format:
     *  `projects/[PROJECT_ID]/configs/[CONFIG_NAME]/waiters/[WAITER_NAME]`
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

