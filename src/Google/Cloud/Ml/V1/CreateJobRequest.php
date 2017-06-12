<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/job_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for the CreateJob method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.ml.v1.CreateJobRequest</code>
 */
class CreateJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The project name.
     * Authorization: requires `Editor` role on the specified project.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * <pre>
     * Required. The job to create.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.Job job = 2;</code>
     */
    private $job = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1\JobService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The project name.
     * Authorization: requires `Editor` role on the specified project.
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
     * Required. The project name.
     * Authorization: requires `Editor` role on the specified project.
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
     * Required. The job to create.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.Job job = 2;</code>
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * <pre>
     * Required. The job to create.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.Job job = 2;</code>
     */
    public function setJob(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Ml\V1\Job::class);
        $this->job = $var;
    }

}

