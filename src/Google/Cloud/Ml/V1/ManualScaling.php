<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/model_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Options for manually scaling a model.
 * </pre>
 *
 * Protobuf type <code>google.cloud.ml.v1.ManualScaling</code>
 */
class ManualScaling extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The number of nodes to allocate for this model. These nodes are always up,
     * starting from the time the model is deployed, so the cost of operating
     * this model will be proportional to nodes * number of hours since
     * deployment.
     * </pre>
     *
     * <code>int32 nodes = 1;</code>
     */
    private $nodes = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1\ModelService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The number of nodes to allocate for this model. These nodes are always up,
     * starting from the time the model is deployed, so the cost of operating
     * this model will be proportional to nodes * number of hours since
     * deployment.
     * </pre>
     *
     * <code>int32 nodes = 1;</code>
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * <pre>
     * The number of nodes to allocate for this model. These nodes are always up,
     * starting from the time the model is deployed, so the cost of operating
     * this model will be proportional to nodes * number of hours since
     * deployment.
     * </pre>
     *
     * <code>int32 nodes = 1;</code>
     */
    public function setNodes($var)
    {
        GPBUtil::checkInt32($var);
        $this->nodes = $var;
    }

}

