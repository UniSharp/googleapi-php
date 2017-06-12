<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1/iam_policy.proto

namespace Google\Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for `TestIamPermissions` method.
 * </pre>
 *
 * Protobuf type <code>google.iam.v1.TestIamPermissionsRequest</code>
 */
class TestIamPermissionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * REQUIRED: The resource for which the policy detail is being requested.
     * `resource` is usually specified as a path. For example, a Project
     * resource is specified as `projects/{project}`.
     * </pre>
     *
     * <code>string resource = 1;</code>
     */
    private $resource = '';
    /**
     * <pre>
     * The set of permissions to check for the `resource`. Permissions with
     * wildcards (such as '*' or 'storage.*') are not allowed. For more
     * information see
     * [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
     * </pre>
     *
     * <code>repeated string permissions = 2;</code>
     */
    private $permissions;

    public function __construct() {
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * REQUIRED: The resource for which the policy detail is being requested.
     * `resource` is usually specified as a path. For example, a Project
     * resource is specified as `projects/{project}`.
     * </pre>
     *
     * <code>string resource = 1;</code>
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * <pre>
     * REQUIRED: The resource for which the policy detail is being requested.
     * `resource` is usually specified as a path. For example, a Project
     * resource is specified as `projects/{project}`.
     * </pre>
     *
     * <code>string resource = 1;</code>
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;
    }

    /**
     * <pre>
     * The set of permissions to check for the `resource`. Permissions with
     * wildcards (such as '*' or 'storage.*') are not allowed. For more
     * information see
     * [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
     * </pre>
     *
     * <code>repeated string permissions = 2;</code>
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * <pre>
     * The set of permissions to check for the `resource`. Permissions with
     * wildcards (such as '*' or 'storage.*') are not allowed. For more
     * information see
     * [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
     * </pre>
     *
     * <code>repeated string permissions = 2;</code>
     */
    public function setPermissions(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->permissions = $var;
    }

}

