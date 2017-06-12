<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Encapsulates the full scoping used to reference a job.
 * </pre>
 *
 * Protobuf type <code>google.cloud.dataproc.v1.JobReference</code>
 */
class JobReference extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * [Required] The ID of the Google Cloud Platform project that the job
     * belongs to.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * [Optional] The job ID, which must be unique within the project. The job ID
     * is generated by the server upon job submission or provided by the user as a
     * means to perform retries without creating duplicate jobs. The ID must
     * contain only letters (a-z, A-Z), numbers (0-9), underscores (_), or
     * hyphens (-). The maximum length is 512 characters.
     * </pre>
     *
     * <code>string job_id = 2;</code>
     */
    private $job_id = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * [Required] The ID of the Google Cloud Platform project that the job
     * belongs to.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * [Required] The ID of the Google Cloud Platform project that the job
     * belongs to.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * [Optional] The job ID, which must be unique within the project. The job ID
     * is generated by the server upon job submission or provided by the user as a
     * means to perform retries without creating duplicate jobs. The ID must
     * contain only letters (a-z, A-Z), numbers (0-9), underscores (_), or
     * hyphens (-). The maximum length is 512 characters.
     * </pre>
     *
     * <code>string job_id = 2;</code>
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * <pre>
     * [Optional] The job ID, which must be unique within the project. The job ID
     * is generated by the server upon job submission or provided by the user as a
     * means to perform retries without creating duplicate jobs. The ID must
     * contain only letters (a-z, A-Z), numbers (0-9), underscores (_), or
     * hyphens (-). The maximum length is 512 characters.
     * </pre>
     *
     * <code>string job_id = 2;</code>
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;
    }

}

