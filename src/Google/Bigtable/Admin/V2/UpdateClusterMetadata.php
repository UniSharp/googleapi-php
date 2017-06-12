<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The metadata for the Operation returned by UpdateCluster.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.admin.v2.UpdateClusterMetadata</code>
 */
class UpdateClusterMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The request that prompted the initiation of this UpdateCluster operation.
     * </pre>
     *
     * <code>.google.bigtable.admin.v2.Cluster original_request = 1;</code>
     */
    private $original_request = null;
    /**
     * <pre>
     * The time at which the original request was received.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp request_time = 2;</code>
     */
    private $request_time = null;
    /**
     * <pre>
     * The time at which the operation failed or was completed successfully.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp finish_time = 3;</code>
     */
    private $finish_time = null;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The request that prompted the initiation of this UpdateCluster operation.
     * </pre>
     *
     * <code>.google.bigtable.admin.v2.Cluster original_request = 1;</code>
     */
    public function getOriginalRequest()
    {
        return $this->original_request;
    }

    /**
     * <pre>
     * The request that prompted the initiation of this UpdateCluster operation.
     * </pre>
     *
     * <code>.google.bigtable.admin.v2.Cluster original_request = 1;</code>
     */
    public function setOriginalRequest(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Bigtable\Admin\V2\Cluster::class);
        $this->original_request = $var;
    }

    /**
     * <pre>
     * The time at which the original request was received.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp request_time = 2;</code>
     */
    public function getRequestTime()
    {
        return $this->request_time;
    }

    /**
     * <pre>
     * The time at which the original request was received.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp request_time = 2;</code>
     */
    public function setRequestTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->request_time = $var;
    }

    /**
     * <pre>
     * The time at which the operation failed or was completed successfully.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp finish_time = 3;</code>
     */
    public function getFinishTime()
    {
        return $this->finish_time;
    }

    /**
     * <pre>
     * The time at which the operation failed or was completed successfully.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp finish_time = 3;</code>
     */
    public function setFinishTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->finish_time = $var;
    }

}

