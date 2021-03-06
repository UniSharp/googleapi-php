<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A request to list jobs in a project.
 * </pre>
 *
 * Protobuf type <code>google.cloud.dataproc.v1.ListJobsRequest</code>
 */
class ListJobsRequest extends \Google\Protobuf\Internal\Message
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
     * [Required] The Cloud Dataproc region in which to handle the request.
     * </pre>
     *
     * <code>string region = 6;</code>
     */
    private $region = '';
    /**
     * <pre>
     * [Optional] The number of results to return in each response.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * [Optional] The page token, returned by a previous call, to request the
     * next page of results.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * <pre>
     * [Optional] If set, the returned jobs list includes only jobs that were
     * submitted to the named cluster.
     * </pre>
     *
     * <code>string cluster_name = 4;</code>
     */
    private $cluster_name = '';
    /**
     * <pre>
     * [Optional] Specifies enumerated categories of jobs to list
     * (default = match ALL jobs).
     * </pre>
     *
     * <code>.google.cloud.dataproc.v1.ListJobsRequest.JobStateMatcher job_state_matcher = 5;</code>
     */
    private $job_state_matcher = 0;

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
     * [Required] The Cloud Dataproc region in which to handle the request.
     * </pre>
     *
     * <code>string region = 6;</code>
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * <pre>
     * [Required] The Cloud Dataproc region in which to handle the request.
     * </pre>
     *
     * <code>string region = 6;</code>
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;
    }

    /**
     * <pre>
     * [Optional] The number of results to return in each response.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * [Optional] The number of results to return in each response.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * [Optional] The page token, returned by a previous call, to request the
     * next page of results.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * [Optional] The page token, returned by a previous call, to request the
     * next page of results.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

    /**
     * <pre>
     * [Optional] If set, the returned jobs list includes only jobs that were
     * submitted to the named cluster.
     * </pre>
     *
     * <code>string cluster_name = 4;</code>
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * <pre>
     * [Optional] If set, the returned jobs list includes only jobs that were
     * submitted to the named cluster.
     * </pre>
     *
     * <code>string cluster_name = 4;</code>
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;
    }

    /**
     * <pre>
     * [Optional] Specifies enumerated categories of jobs to list
     * (default = match ALL jobs).
     * </pre>
     *
     * <code>.google.cloud.dataproc.v1.ListJobsRequest.JobStateMatcher job_state_matcher = 5;</code>
     */
    public function getJobStateMatcher()
    {
        return $this->job_state_matcher;
    }

    /**
     * <pre>
     * [Optional] Specifies enumerated categories of jobs to list
     * (default = match ALL jobs).
     * </pre>
     *
     * <code>.google.cloud.dataproc.v1.ListJobsRequest.JobStateMatcher job_state_matcher = 5;</code>
     */
    public function setJobStateMatcher($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1\ListJobsRequest_JobStateMatcher::class);
        $this->job_state_matcher = $var;
    }

}

