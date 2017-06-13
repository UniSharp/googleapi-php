<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v1alpha1/cloud_support.proto

namespace Google\Cloud\Support\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response message for `ListComments` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.support.v1alpha1.ListCommentsResponse</code>
 */
class ListCommentsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of comments.
     * </pre>
     *
     * <code>repeated .google.cloud.support.common.Comment comments = 1;</code>
     */
    private $comments;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Support\V1Alpha1\CloudSupport::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of comments.
     * </pre>
     *
     * <code>repeated .google.cloud.support.common.Comment comments = 1;</code>
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * <pre>
     * A list of comments.
     * </pre>
     *
     * <code>repeated .google.cloud.support.common.Comment comments = 1;</code>
     */
    public function setComments(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Support\Common\Comment::class);
        $this->comments = $arr;
    }

}

