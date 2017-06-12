<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer.proto

namespace Google\Storagetransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request passed to UpdateTransferJob.
 * </pre>
 *
 * Protobuf type <code>google.storagetransfer.v1.UpdateTransferJobRequest</code>
 */
class UpdateTransferJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of job to update.
     * Required.
     * </pre>
     *
     * <code>string job_name = 1;</code>
     */
    private $job_name = '';
    /**
     * <pre>
     * The ID of the Google Cloud Platform Console project that owns the job.
     * Required.
     * </pre>
     *
     * <code>string project_id = 2;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * The job to update.
     * Required.
     * </pre>
     *
     * <code>.google.storagetransfer.v1.TransferJob transfer_job = 3;</code>
     */
    private $transfer_job = null;
    /**
     * <pre>
     * The field mask of the fields in `transferJob` that are to be updated in
     * this request.  Fields in `transferJob` that can be updated are:
     * `description`, `transferSpec`, and `status`.  To update the `transferSpec`
     * of the job, a complete transfer specification has to be provided. An
     * incomplete specification which misses any required fields will be rejected
     * with the error `INVALID_ARGUMENT`.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_transfer_job_field_mask = 4;</code>
     */
    private $update_transfer_job_field_mask = null;

    public function __construct() {
        \GPBMetadata\Google\Storagetransfer\V1\Transfer::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of job to update.
     * Required.
     * </pre>
     *
     * <code>string job_name = 1;</code>
     */
    public function getJobName()
    {
        return $this->job_name;
    }

    /**
     * <pre>
     * The name of job to update.
     * Required.
     * </pre>
     *
     * <code>string job_name = 1;</code>
     */
    public function setJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_name = $var;
    }

    /**
     * <pre>
     * The ID of the Google Cloud Platform Console project that owns the job.
     * Required.
     * </pre>
     *
     * <code>string project_id = 2;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * The ID of the Google Cloud Platform Console project that owns the job.
     * Required.
     * </pre>
     *
     * <code>string project_id = 2;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * The job to update.
     * Required.
     * </pre>
     *
     * <code>.google.storagetransfer.v1.TransferJob transfer_job = 3;</code>
     */
    public function getTransferJob()
    {
        return $this->transfer_job;
    }

    /**
     * <pre>
     * The job to update.
     * Required.
     * </pre>
     *
     * <code>.google.storagetransfer.v1.TransferJob transfer_job = 3;</code>
     */
    public function setTransferJob(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Storagetransfer\V1\TransferJob::class);
        $this->transfer_job = $var;
    }

    /**
     * <pre>
     * The field mask of the fields in `transferJob` that are to be updated in
     * this request.  Fields in `transferJob` that can be updated are:
     * `description`, `transferSpec`, and `status`.  To update the `transferSpec`
     * of the job, a complete transfer specification has to be provided. An
     * incomplete specification which misses any required fields will be rejected
     * with the error `INVALID_ARGUMENT`.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_transfer_job_field_mask = 4;</code>
     */
    public function getUpdateTransferJobFieldMask()
    {
        return $this->update_transfer_job_field_mask;
    }

    /**
     * <pre>
     * The field mask of the fields in `transferJob` that are to be updated in
     * this request.  Fields in `transferJob` that can be updated are:
     * `description`, `transferSpec`, and `status`.  To update the `transferSpec`
     * of the job, a complete transfer specification has to be provided. An
     * incomplete specification which misses any required fields will be rejected
     * with the error `INVALID_ARGUMENT`.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_transfer_job_field_mask = 4;</code>
     */
    public function setUpdateTransferJobFieldMask(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_transfer_job_field_mask = $var;
    }

}

