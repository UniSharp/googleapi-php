<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/longrunning/operations.proto

namespace Google\Longrunning;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request message for [Operations.GetOperation][google.longrunning.Operations.GetOperation].
 * </pre>
 *
 * Protobuf type <code>google.longrunning.GetOperationRequest</code>
 */
class GetOperationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the operation resource.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the operation resource.
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
     * The name of the operation resource.
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

