<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request for
 * [GetInstanceConfigRequest][google.spanner.admin.instance.v1.InstanceAdmin.GetInstanceConfig].
 * </pre>
 *
 * Protobuf type <code>google.spanner.admin.instance.v1.GetInstanceConfigRequest</code>
 */
class GetInstanceConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The name of the requested instance configuration. Values are of
     * the form `projects/&lt;project&gt;/instanceConfigs/&lt;config&gt;`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The name of the requested instance configuration. Values are of
     * the form `projects/&lt;project&gt;/instanceConfigs/&lt;config&gt;`.
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
     * Required. The name of the requested instance configuration. Values are of
     * the form `projects/&lt;project&gt;/instanceConfigs/&lt;config&gt;`.
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
