<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/debugger.proto

namespace Google\Devtools\Clouddebugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request to delete a breakpoint.
 * </pre>
 *
 * Protobuf type <code>google.devtools.clouddebugger.v2.DeleteBreakpointRequest</code>
 */
class DeleteBreakpointRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * ID of the debuggee whose breakpoint to delete.
     * </pre>
     *
     * <code>string debuggee_id = 1;</code>
     */
    private $debuggee_id = '';
    /**
     * <pre>
     * ID of the breakpoint to delete.
     * </pre>
     *
     * <code>string breakpoint_id = 2;</code>
     */
    private $breakpoint_id = '';
    /**
     * <pre>
     * The client version making the call.
     * Following: `domain/type/version` (e.g., `google.com/intellij/v1`).
     * </pre>
     *
     * <code>string client_version = 3;</code>
     */
    private $client_version = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Debugger::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * ID of the debuggee whose breakpoint to delete.
     * </pre>
     *
     * <code>string debuggee_id = 1;</code>
     */
    public function getDebuggeeId()
    {
        return $this->debuggee_id;
    }

    /**
     * <pre>
     * ID of the debuggee whose breakpoint to delete.
     * </pre>
     *
     * <code>string debuggee_id = 1;</code>
     */
    public function setDebuggeeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->debuggee_id = $var;
    }

    /**
     * <pre>
     * ID of the breakpoint to delete.
     * </pre>
     *
     * <code>string breakpoint_id = 2;</code>
     */
    public function getBreakpointId()
    {
        return $this->breakpoint_id;
    }

    /**
     * <pre>
     * ID of the breakpoint to delete.
     * </pre>
     *
     * <code>string breakpoint_id = 2;</code>
     */
    public function setBreakpointId($var)
    {
        GPBUtil::checkString($var, True);
        $this->breakpoint_id = $var;
    }

    /**
     * <pre>
     * The client version making the call.
     * Following: `domain/type/version` (e.g., `google.com/intellij/v1`).
     * </pre>
     *
     * <code>string client_version = 3;</code>
     */
    public function getClientVersion()
    {
        return $this->client_version;
    }

    /**
     * <pre>
     * The client version making the call.
     * Following: `domain/type/version` (e.g., `google.com/intellij/v1`).
     * </pre>
     *
     * <code>string client_version = 3;</code>
     */
    public function setClientVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_version = $var;
    }

}

