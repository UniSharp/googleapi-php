<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Describes a Compute Engine resource that is being managed by a running
 * [pipeline][google.genomics.v1alpha2.Pipeline].
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1alpha2.ComputeEngine</code>
 */
class ComputeEngine extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The instance on which the operation is running.
     * </pre>
     *
     * <code>string instance_name = 1;</code>
     */
    private $instance_name = '';
    /**
     * <pre>
     * The availability zone in which the instance resides.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * <pre>
     * The machine type of the instance.
     * </pre>
     *
     * <code>string machine_type = 3;</code>
     */
    private $machine_type = '';
    /**
     * <pre>
     * The names of the disks that were created for this pipeline.
     * </pre>
     *
     * <code>repeated string disk_names = 4;</code>
     */
    private $disk_names;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The instance on which the operation is running.
     * </pre>
     *
     * <code>string instance_name = 1;</code>
     */
    public function getInstanceName()
    {
        return $this->instance_name;
    }

    /**
     * <pre>
     * The instance on which the operation is running.
     * </pre>
     *
     * <code>string instance_name = 1;</code>
     */
    public function setInstanceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_name = $var;
    }

    /**
     * <pre>
     * The availability zone in which the instance resides.
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
     * The availability zone in which the instance resides.
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
     * The machine type of the instance.
     * </pre>
     *
     * <code>string machine_type = 3;</code>
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * <pre>
     * The machine type of the instance.
     * </pre>
     *
     * <code>string machine_type = 3;</code>
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;
    }

    /**
     * <pre>
     * The names of the disks that were created for this pipeline.
     * </pre>
     *
     * <code>repeated string disk_names = 4;</code>
     */
    public function getDiskNames()
    {
        return $this->disk_names;
    }

    /**
     * <pre>
     * The names of the disks that were created for this pipeline.
     * </pre>
     *
     * <code>repeated string disk_names = 4;</code>
     */
    public function setDiskNames(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->disk_names = $arr;
    }

}

