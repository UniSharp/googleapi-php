<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Storagetransfer\V1;

/**
 * <pre>
 * The status of a TransferOperation.
 * </pre>
 *
 * Protobuf enum <code>google.storagetransfer.v1.TransferOperation.Status</code>
 */
class TransferOperation_Status
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
     * In progress.
     * </pre>
     *
     * <code>IN_PROGRESS = 1;</code>
     */
    const IN_PROGRESS = 1;
    /**
     * <pre>
     * Paused.
     * </pre>
     *
     * <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;
    /**
     * <pre>
     * Completed successfully.
     * </pre>
     *
     * <code>SUCCESS = 3;</code>
     */
    const SUCCESS = 3;
    /**
     * <pre>
     * Terminated due to an unrecoverable failure.
     * </pre>
     *
     * <code>FAILED = 4;</code>
     */
    const FAILED = 4;
    /**
     * <pre>
     * Aborted by the user.
     * </pre>
     *
     * <code>ABORTED = 5;</code>
     */
    const ABORTED = 5;
}

