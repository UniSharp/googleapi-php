<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * This operation resource represents operations that may have happened or are
 * happening on the cluster. All fields are output only.
 * </pre>
 *
 * Protobuf type <code>google.container.v1.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The server-assigned ID for the operation.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the operation
     * is taking place.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * <pre>
     * The operation type.
     * </pre>
     *
     * <code>.google.container.v1.Operation.Type operation_type = 3;</code>
     */
    private $operation_type = 0;
    /**
     * <pre>
     * The current status of the operation.
     * </pre>
     *
     * <code>.google.container.v1.Operation.Status status = 4;</code>
     */
    private $status = 0;
    /**
     * <pre>
     * Detailed operation progress, if available.
     * </pre>
     *
     * <code>string detail = 8;</code>
     */
    private $detail = '';
    /**
     * <pre>
     * If an error has occurred, a textual description of the error.
     * </pre>
     *
     * <code>string status_message = 5;</code>
     */
    private $status_message = '';
    /**
     * <pre>
     * Server-defined URL for the resource.
     * </pre>
     *
     * <code>string self_link = 6;</code>
     */
    private $self_link = '';
    /**
     * <pre>
     * Server-defined URL for the target of the operation.
     * </pre>
     *
     * <code>string target_link = 7;</code>
     */
    private $target_link = '';

    public function __construct() {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The server-assigned ID for the operation.
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
     * The server-assigned ID for the operation.
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
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the operation
     * is taking place.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * <pre>
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the operation
     * is taking place.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;
    }

    /**
     * <pre>
     * The operation type.
     * </pre>
     *
     * <code>.google.container.v1.Operation.Type operation_type = 3;</code>
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * <pre>
     * The operation type.
     * </pre>
     *
     * <code>.google.container.v1.Operation.Type operation_type = 3;</code>
     */
    public function setOperationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Container\V1\Operation_Type::class);
        $this->operation_type = $var;
    }

    /**
     * <pre>
     * The current status of the operation.
     * </pre>
     *
     * <code>.google.container.v1.Operation.Status status = 4;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <pre>
     * The current status of the operation.
     * </pre>
     *
     * <code>.google.container.v1.Operation.Status status = 4;</code>
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Container\V1\Operation_Status::class);
        $this->status = $var;
    }

    /**
     * <pre>
     * Detailed operation progress, if available.
     * </pre>
     *
     * <code>string detail = 8;</code>
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * <pre>
     * Detailed operation progress, if available.
     * </pre>
     *
     * <code>string detail = 8;</code>
     */
    public function setDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->detail = $var;
    }

    /**
     * <pre>
     * If an error has occurred, a textual description of the error.
     * </pre>
     *
     * <code>string status_message = 5;</code>
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * <pre>
     * If an error has occurred, a textual description of the error.
     * </pre>
     *
     * <code>string status_message = 5;</code>
     */
    public function setStatusMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_message = $var;
    }

    /**
     * <pre>
     * Server-defined URL for the resource.
     * </pre>
     *
     * <code>string self_link = 6;</code>
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * <pre>
     * Server-defined URL for the resource.
     * </pre>
     *
     * <code>string self_link = 6;</code>
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;
    }

    /**
     * <pre>
     * Server-defined URL for the target of the operation.
     * </pre>
     *
     * <code>string target_link = 7;</code>
     */
    public function getTargetLink()
    {
        return $this->target_link;
    }

    /**
     * <pre>
     * Server-defined URL for the target of the operation.
     * </pre>
     *
     * <code>string target_link = 7;</code>
     */
    public function setTargetLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_link = $var;
    }

}

