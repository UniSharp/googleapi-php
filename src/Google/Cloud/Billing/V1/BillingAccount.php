<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_billing.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A billing account in [Google Cloud
 * Console](https://console.cloud.google.com/). You can assign a billing account
 * to one or more projects.
 * </pre>
 *
 * Protobuf type <code>google.cloud.billing.v1.BillingAccount</code>
 */
class BillingAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resource name of the billing account. The resource name has the form
     * `billingAccounts/{billing_account_id}`. For example,
     * `billingAccounts/012345-567890-ABCDEF` would be the resource name for
     * billing account `012345-567890-ABCDEF`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * True if the billing account is open, and will therefore be charged for any
     * usage on associated projects. False if the billing account is closed, and
     * therefore projects associated with it will be unable to use paid services.
     * </pre>
     *
     * <code>bool open = 2;</code>
     */
    private $open = false;
    /**
     * <pre>
     * The display name given to the billing account, such as `My Billing
     * Account`. This name is displayed in the Google Cloud Console.
     * </pre>
     *
     * <code>string display_name = 3;</code>
     */
    private $display_name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudBilling::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resource name of the billing account. The resource name has the form
     * `billingAccounts/{billing_account_id}`. For example,
     * `billingAccounts/012345-567890-ABCDEF` would be the resource name for
     * billing account `012345-567890-ABCDEF`.
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
     * The resource name of the billing account. The resource name has the form
     * `billingAccounts/{billing_account_id}`. For example,
     * `billingAccounts/012345-567890-ABCDEF` would be the resource name for
     * billing account `012345-567890-ABCDEF`.
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
     * True if the billing account is open, and will therefore be charged for any
     * usage on associated projects. False if the billing account is closed, and
     * therefore projects associated with it will be unable to use paid services.
     * </pre>
     *
     * <code>bool open = 2;</code>
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * <pre>
     * True if the billing account is open, and will therefore be charged for any
     * usage on associated projects. False if the billing account is closed, and
     * therefore projects associated with it will be unable to use paid services.
     * </pre>
     *
     * <code>bool open = 2;</code>
     */
    public function setOpen($var)
    {
        GPBUtil::checkBool($var);
        $this->open = $var;
    }

    /**
     * <pre>
     * The display name given to the billing account, such as `My Billing
     * Account`. This name is displayed in the Google Cloud Console.
     * </pre>
     *
     * <code>string display_name = 3;</code>
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * <pre>
     * The display name given to the billing account, such as `My Billing
     * Account`. This name is displayed in the Google Cloud Console.
     * </pre>
     *
     * <code>string display_name = 3;</code>
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;
    }

}
