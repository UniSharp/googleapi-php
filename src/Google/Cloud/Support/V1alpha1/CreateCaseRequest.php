<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v1alpha1/cloud_support.proto

namespace Google\Cloud\Support\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request message for `CreateCase` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.support.v1alpha1.CreateCaseRequest</code>
 */
class CreateCaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resource name for `SupportAccount` under which this case is created.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * <pre>
     * The case resource to create.
     * </pre>
     *
     * <code>.google.cloud.support.common.Case case = 2;</code>
     */
    private $case = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Support\V1Alpha1\CloudSupport::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resource name for `SupportAccount` under which this case is created.
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
     * The resource name for `SupportAccount` under which this case is created.
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
     * The case resource to create.
     * </pre>
     *
     * <code>.google.cloud.support.common.Case case = 2;</code>
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * <pre>
     * The case resource to create.
     * </pre>
     *
     * <code>.google.cloud.support.common.Case case = 2;</code>
     */
    public function setCase(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Support\Common\Case::class);
        $this->case = $var;
    }

}

