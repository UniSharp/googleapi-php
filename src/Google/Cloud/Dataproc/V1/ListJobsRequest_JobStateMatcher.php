<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

/**
 * <pre>
 * A matcher that specifies categories of job states.
 * </pre>
 *
 * Protobuf enum <code>google.cloud.dataproc.v1.ListJobsRequest.JobStateMatcher</code>
 */
class ListJobsRequest_JobStateMatcher
{
    /**
     * <pre>
     * Match all jobs, regardless of state.
     * </pre>
     *
     * <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * <pre>
     * Only match jobs in non-terminal states: PENDING, RUNNING, or
     * CANCEL_PENDING.
     * </pre>
     *
     * <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * <pre>
     * Only match jobs in terminal states: CANCELLED, DONE, or ERROR.
     * </pre>
     *
     * <code>NON_ACTIVE = 2;</code>
     */
    const NON_ACTIVE = 2;
}

