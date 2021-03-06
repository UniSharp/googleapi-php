<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_billing.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Encapsulation of billing information for a Cloud Console project. A project
 * has at most one associated billing account at a time (but a billing account
 * can be assigned to multiple projects).
 * </pre>
 *
 * Protobuf type <code>google.cloud.billing.v1.ProjectBillingInfo</code>
 */
class ProjectBillingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resource name for the `ProjectBillingInfo`; has the form
     * `projects/{project_id}/billingInfo`. For example, the resource name for the
     * billing information for project `tokyo-rain-123` would be
     * `projects/tokyo-rain-123/billingInfo`. This field is read-only.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The ID of the project that this `ProjectBillingInfo` represents, such as
     * `tokyo-rain-123`. This is a convenience field so that you don't need to
     * parse the `name` field to obtain a project ID. This field is read-only.
     * </pre>
     *
     * <code>string project_id = 2;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * The resource name of the billing account associated with the project, if
     * any. For example, `billingAccounts/012345-567890-ABCDEF`.
     * </pre>
     *
     * <code>string billing_account_name = 3;</code>
     */
    private $billing_account_name = '';
    /**
     * <pre>
     * True if the project is associated with an open billing account, to which
     * usage on the project is charged. False if the project is associated with a
     * closed billing account, or no billing account at all, and therefore cannot
     * use paid services. This field is read-only.
     * </pre>
     *
     * <code>bool billing_enabled = 4;</code>
     */
    private $billing_enabled = false;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudBilling::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resource name for the `ProjectBillingInfo`; has the form
     * `projects/{project_id}/billingInfo`. For example, the resource name for the
     * billing information for project `tokyo-rain-123` would be
     * `projects/tokyo-rain-123/billingInfo`. This field is read-only.
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
     * The resource name for the `ProjectBillingInfo`; has the form
     * `projects/{project_id}/billingInfo`. For example, the resource name for the
     * billing information for project `tokyo-rain-123` would be
     * `projects/tokyo-rain-123/billingInfo`. This field is read-only.
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
     * The ID of the project that this `ProjectBillingInfo` represents, such as
     * `tokyo-rain-123`. This is a convenience field so that you don't need to
     * parse the `name` field to obtain a project ID. This field is read-only.
     * </pre>
     *
     * <code>string project_id = 2;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * The ID of the project that this `ProjectBillingInfo` represents, such as
     * `tokyo-rain-123`. This is a convenience field so that you don't need to
     * parse the `name` field to obtain a project ID. This field is read-only.
     * </pre>
     *
     * <code>string project_id = 2;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * The resource name of the billing account associated with the project, if
     * any. For example, `billingAccounts/012345-567890-ABCDEF`.
     * </pre>
     *
     * <code>string billing_account_name = 3;</code>
     */
    public function getBillingAccountName()
    {
        return $this->billing_account_name;
    }

    /**
     * <pre>
     * The resource name of the billing account associated with the project, if
     * any. For example, `billingAccounts/012345-567890-ABCDEF`.
     * </pre>
     *
     * <code>string billing_account_name = 3;</code>
     */
    public function setBillingAccountName($var)
    {
        GPBUtil::checkString($var, True);
        $this->billing_account_name = $var;
    }

    /**
     * <pre>
     * True if the project is associated with an open billing account, to which
     * usage on the project is charged. False if the project is associated with a
     * closed billing account, or no billing account at all, and therefore cannot
     * use paid services. This field is read-only.
     * </pre>
     *
     * <code>bool billing_enabled = 4;</code>
     */
    public function getBillingEnabled()
    {
        return $this->billing_enabled;
    }

    /**
     * <pre>
     * True if the project is associated with an open billing account, to which
     * usage on the project is charged. False if the project is associated with a
     * closed billing account, or no billing account at all, and therefore cannot
     * use paid services. This field is read-only.
     * </pre>
     *
     * <code>bool billing_enabled = 4;</code>
     */
    public function setBillingEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->billing_enabled = $var;
    }

}

