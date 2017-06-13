<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/controller.proto

namespace Google\Devtools\Clouddebugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response for listing active breakpoints.
 * </pre>
 *
 * Protobuf type <code>google.devtools.clouddebugger.v2.ListActiveBreakpointsResponse</code>
 */
class ListActiveBreakpointsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * List of all active breakpoints.
     * The fields `id` and `location` are guaranteed to be set on each breakpoint.
     * </pre>
     *
     * <code>repeated .google.devtools.clouddebugger.v2.Breakpoint breakpoints = 1;</code>
     */
    private $breakpoints;
    /**
     * <pre>
     * A wait token that can be used in the next method call to block until
     * the list of breakpoints changes.
     * </pre>
     *
     * <code>string next_wait_token = 2;</code>
     */
    private $next_wait_token = '';
    /**
     * <pre>
     * The `wait_expired` field is set to true by the server when the
     * request times out and the field `success_on_timeout` is set to true.
     * </pre>
     *
     * <code>bool wait_expired = 3;</code>
     */
    private $wait_expired = false;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Controller::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * List of all active breakpoints.
     * The fields `id` and `location` are guaranteed to be set on each breakpoint.
     * </pre>
     *
     * <code>repeated .google.devtools.clouddebugger.v2.Breakpoint breakpoints = 1;</code>
     */
    public function getBreakpoints()
    {
        return $this->breakpoints;
    }

    /**
     * <pre>
     * List of all active breakpoints.
     * The fields `id` and `location` are guaranteed to be set on each breakpoint.
     * </pre>
     *
     * <code>repeated .google.devtools.clouddebugger.v2.Breakpoint breakpoints = 1;</code>
     */
    public function setBreakpoints(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Clouddebugger\V2\Breakpoint::class);
        $this->breakpoints = $arr;
    }

    /**
     * <pre>
     * A wait token that can be used in the next method call to block until
     * the list of breakpoints changes.
     * </pre>
     *
     * <code>string next_wait_token = 2;</code>
     */
    public function getNextWaitToken()
    {
        return $this->next_wait_token;
    }

    /**
     * <pre>
     * A wait token that can be used in the next method call to block until
     * the list of breakpoints changes.
     * </pre>
     *
     * <code>string next_wait_token = 2;</code>
     */
    public function setNextWaitToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_wait_token = $var;
    }

    /**
     * <pre>
     * The `wait_expired` field is set to true by the server when the
     * request times out and the field `success_on_timeout` is set to true.
     * </pre>
     *
     * <code>bool wait_expired = 3;</code>
     */
    public function getWaitExpired()
    {
        return $this->wait_expired;
    }

    /**
     * <pre>
     * The `wait_expired` field is set to true by the server when the
     * request times out and the field `success_on_timeout` is set to true.
     * </pre>
     *
     * <code>bool wait_expired = 3;</code>
     */
    public function setWaitExpired($var)
    {
        GPBUtil::checkBool($var);
        $this->wait_expired = $var;
    }

}

