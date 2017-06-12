<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The service account create request.
 * </pre>
 *
 * Protobuf type <code>google.iam.admin.v1.CreateServiceAccountRequest</code>
 */
class CreateServiceAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Required. The account id that is used to generate the service account
     * email address and a stable unique id. It is unique within a project,
     * must be 6-30 characters long, and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     * </pre>
     *
     * <code>string account_id = 2;</code>
     */
    private $account_id = '';
    /**
     * <pre>
     * The [ServiceAccount][google.iam.admin.v1.ServiceAccount] resource to create.
     * Currently, only the following values are user assignable:
     * `display_name` .
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccount service_account = 3;</code>
     */
    private $service_account = null;

    public function __construct() {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
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
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
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
     * Required. The account id that is used to generate the service account
     * email address and a stable unique id. It is unique within a project,
     * must be 6-30 characters long, and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     * </pre>
     *
     * <code>string account_id = 2;</code>
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * <pre>
     * Required. The account id that is used to generate the service account
     * email address and a stable unique id. It is unique within a project,
     * must be 6-30 characters long, and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     * </pre>
     *
     * <code>string account_id = 2;</code>
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;
    }

    /**
     * <pre>
     * The [ServiceAccount][google.iam.admin.v1.ServiceAccount] resource to create.
     * Currently, only the following values are user assignable:
     * `display_name` .
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccount service_account = 3;</code>
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * <pre>
     * The [ServiceAccount][google.iam.admin.v1.ServiceAccount] resource to create.
     * Currently, only the following values are user assignable:
     * `display_name` .
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccount service_account = 3;</code>
     */
    public function setServiceAccount(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Iam\Admin\V1\ServiceAccount::class);
        $this->service_account = $var;
    }

}

