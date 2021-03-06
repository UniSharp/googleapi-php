<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

/**
 * <pre>
 * Possible status of a build.
 * </pre>
 *
 * Protobuf enum <code>google.devtools.cloudbuild.v1.Build.Status</code>
 */
class Build_Status
{
    /**
     * <pre>
     * Status of the build is unknown.
     * </pre>
     *
     * <code>STATUS_UNKNOWN = 0;</code>
     */
    const STATUS_UNKNOWN = 0;
    /**
     * <pre>
     * Build is queued; work has not yet begun.
     * </pre>
     *
     * <code>QUEUED = 1;</code>
     */
    const QUEUED = 1;
    /**
     * <pre>
     * Build is being executed.
     * </pre>
     *
     * <code>WORKING = 2;</code>
     */
    const WORKING = 2;
    /**
     * <pre>
     * Build finished successfully.
     * </pre>
     *
     * <code>SUCCESS = 3;</code>
     */
    const SUCCESS = 3;
    /**
     * <pre>
     * Build failed to complete successfully.
     * </pre>
     *
     * <code>FAILURE = 4;</code>
     */
    const FAILURE = 4;
    /**
     * <pre>
     * Build failed due to an internal cause.
     * </pre>
     *
     * <code>INTERNAL_ERROR = 5;</code>
     */
    const INTERNAL_ERROR = 5;
    /**
     * <pre>
     * Build took longer than was allowed.
     * </pre>
     *
     * <code>TIMEOUT = 6;</code>
     */
    const TIMEOUT = 6;
    /**
     * <pre>
     * Build was canceled by a user.
     * </pre>
     *
     * <code>CANCELLED = 7;</code>
     */
    const CANCELLED = 7;
}

