<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/build_events.proto

namespace Google\Devtools\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Notification that an invocation attempt has finished.
 * </pre>
 *
 * Protobuf type <code>google.devtools.build.v1.BuildEvent.InvocationAttemptFinished</code>
 */
class BuildEvent_InvocationAttemptFinished extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The exit code of the build tool.
     * </pre>
     *
     * <code>.google.protobuf.Int32Value exit_code = 2;</code>
     */
    private $exit_code = null;
    /**
     * <pre>
     * Final status of the invocation.
     * </pre>
     *
     * <code>.google.devtools.build.v1.BuildStatus invocation_status = 3;</code>
     */
    private $invocation_status = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Build\V1\BuildEvents::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The exit code of the build tool.
     * </pre>
     *
     * <code>.google.protobuf.Int32Value exit_code = 2;</code>
     */
    public function getExitCode()
    {
        return $this->exit_code;
    }

    /**
     * <pre>
     * The exit code of the build tool.
     * </pre>
     *
     * <code>.google.protobuf.Int32Value exit_code = 2;</code>
     */
    public function setExitCode(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->exit_code = $var;
    }

    /**
     * <pre>
     * Final status of the invocation.
     * </pre>
     *
     * <code>.google.devtools.build.v1.BuildStatus invocation_status = 3;</code>
     */
    public function getInvocationStatus()
    {
        return $this->invocation_status;
    }

    /**
     * <pre>
     * Final status of the invocation.
     * </pre>
     *
     * <code>.google.devtools.build.v1.BuildStatus invocation_status = 3;</code>
     */
    public function setInvocationStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\BuildStatus::class);
        $this->invocation_status = $var;
    }

}

