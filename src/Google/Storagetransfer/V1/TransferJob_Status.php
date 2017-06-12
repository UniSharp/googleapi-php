<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Storagetransfer\V1;

/**
 * <pre>
 * The status of the transfer job.
 * </pre>
 *
 * Protobuf enum <code>google.storagetransfer.v1.TransferJob.Status</code>
 */
class TransferJob_Status
{
    /**
     * <pre>
     * Zero is an illegal value.
     * </pre>
     *
     * <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * <pre>
     * New transfers will be performed based on the schedule.
     * </pre>
     *
     * <code>ENABLED = 1;</code>
     */
    const ENABLED = 1;
    /**
     * <pre>
     * New transfers will not be scheduled.
     * </pre>
     *
     * <code>DISABLED = 2;</code>
     */
    const DISABLED = 2;
    /**
     * <pre>
     * This is a soft delete state. After a transfer job is set to this
     * state, the job and all the transfer executions are subject to
     * garbage collection.
     * </pre>
     *
     * <code>DELETED = 3;</code>
     */
    const DELETED = 3;
}

