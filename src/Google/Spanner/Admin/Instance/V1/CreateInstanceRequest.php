<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request for [CreateInstance][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstance].
 * </pre>
 *
 * Protobuf type <code>google.spanner.admin.instance.v1.CreateInstanceRequest</code>
 */
class CreateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The name of the project in which to create the instance. Values
     * are of the form `projects/&lt;project&gt;`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * <pre>
     * Required. The ID of the instance to create.  Valid identifiers are of the
     * form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 6 and 30 characters in
     * length.
     * </pre>
     *
     * <code>string instance_id = 2;</code>
     */
    private $instance_id = '';
    /**
     * <pre>
     * Required. The instance to create.  The name may be omitted, but if
     * specified must be `&lt;parent&gt;/instances/&lt;instance_id&gt;`.
     * </pre>
     *
     * <code>.google.spanner.admin.instance.v1.Instance instance = 3;</code>
     */
    private $instance = null;

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The name of the project in which to create the instance. Values
     * are of the form `projects/&lt;project&gt;`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * <pre>
     * Required. The name of the project in which to create the instance. Values
     * are of the form `projects/&lt;project&gt;`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;
    }

    /**
     * <pre>
     * Required. The ID of the instance to create.  Valid identifiers are of the
     * form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 6 and 30 characters in
     * length.
     * </pre>
     *
     * <code>string instance_id = 2;</code>
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * <pre>
     * Required. The ID of the instance to create.  Valid identifiers are of the
     * form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 6 and 30 characters in
     * length.
     * </pre>
     *
     * <code>string instance_id = 2;</code>
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;
    }

    /**
     * <pre>
     * Required. The instance to create.  The name may be omitted, but if
     * specified must be `&lt;parent&gt;/instances/&lt;instance_id&gt;`.
     * </pre>
     *
     * <code>.google.spanner.admin.instance.v1.Instance instance = 3;</code>
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * <pre>
     * Required. The instance to create.  The name may be omitted, but if
     * specified must be `&lt;parent&gt;/instances/&lt;instance_id&gt;`.
     * </pre>
     *
     * <code>.google.spanner.admin.instance.v1.Instance instance = 3;</code>
     */
    public function setInstance(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\Admin\Instance\V1\Instance::class);
        $this->instance = $var;
    }

}

