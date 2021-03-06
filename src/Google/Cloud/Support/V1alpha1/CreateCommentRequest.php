<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v1alpha1/cloud_support.proto

namespace Google\Cloud\Support\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request message for `CreateComment` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.support.v1alpha1.CreateCommentRequest</code>
 */
class CreateCommentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resource name of case to which this comment should be added.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The `Comment` to be added to this case.
     * </pre>
     *
     * <code>.google.cloud.support.common.Comment comment = 2;</code>
     */
    private $comment = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Support\V1Alpha1\CloudSupport::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resource name of case to which this comment should be added.
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
     * The resource name of case to which this comment should be added.
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
     * The `Comment` to be added to this case.
     * </pre>
     *
     * <code>.google.cloud.support.common.Comment comment = 2;</code>
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * <pre>
     * The `Comment` to be added to this case.
     * </pre>
     *
     * <code>.google.cloud.support.common.Comment comment = 2;</code>
     */
    public function setComment(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Support\Common\Comment::class);
        $this->comment = $var;
    }

}

