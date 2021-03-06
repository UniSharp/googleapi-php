<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/data.proto

namespace Google\Devtools\Clouddebugger\V2;

/**
 * <pre>
 * Actions that can be taken when a breakpoint hits.
 * Agents should reject breakpoints with unsupported or unknown action values.
 * </pre>
 *
 * Protobuf enum <code>google.devtools.clouddebugger.v2.Breakpoint.Action</code>
 */
class Breakpoint_Action
{
    /**
     * <pre>
     * Capture stack frame and variables and update the breakpoint.
     * The data is only captured once. After that the breakpoint is set
     * in a final state.
     * </pre>
     *
     * <code>CAPTURE = 0;</code>
     */
    const CAPTURE = 0;
    /**
     * <pre>
     * Log each breakpoint hit. The breakpoint remains active until
     * deleted or expired.
     * </pre>
     *
     * <code>LOG = 1;</code>
     */
    const LOG = 1;
}

