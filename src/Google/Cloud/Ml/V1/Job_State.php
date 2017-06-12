<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/job_service.proto

namespace Google\Cloud\Ml\V1;

/**
 * <pre>
 * Describes the job state.
 * </pre>
 *
 * Protobuf enum <code>google.cloud.ml.v1.Job.State</code>
 */
class Job_State
{
    /**
     * <pre>
     * The job state is unspecified.
     * </pre>
     *
     * <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * <pre>
     * The job has been just created and processing has not yet begun.
     * </pre>
     *
     * <code>QUEUED = 1;</code>
     */
    const QUEUED = 1;
    /**
     * <pre>
     * The service is preparing to run the job.
     * </pre>
     *
     * <code>PREPARING = 2;</code>
     */
    const PREPARING = 2;
    /**
     * <pre>
     * The job is in progress.
     * </pre>
     *
     * <code>RUNNING = 3;</code>
     */
    const RUNNING = 3;
    /**
     * <pre>
     * The job completed successfully.
     * </pre>
     *
     * <code>SUCCEEDED = 4;</code>
     */
    const SUCCEEDED = 4;
    /**
     * <pre>
     * The job failed.
     * `error_message` should contain the details of the failure.
     * </pre>
     *
     * <code>FAILED = 5;</code>
     */
    const FAILED = 5;
    /**
     * <pre>
     * The job is being cancelled.
     * `error_message` should describe the reason for the cancellation.
     * </pre>
     *
     * <code>CANCELLING = 6;</code>
     */
    const CANCELLING = 6;
    /**
     * <pre>
     * The job has been cancelled.
     * `error_message` should describe the reason for the cancellation.
     * </pre>
     *
     * <code>CANCELLED = 7;</code>
     */
    const CANCELLED = 7;
}
