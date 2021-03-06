<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v1/trace.proto

namespace Google\Devtools\Cloudtrace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response message for the `ListTraces` method.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudtrace.v1.ListTracesResponse</code>
 */
class ListTracesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * List of trace records returned.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudtrace.v1.Trace traces = 1;</code>
     */
    private $traces;
    /**
     * <pre>
     * If defined, indicates that there are more traces that match the request
     * and that this value should be passed to the next request to continue
     * retrieving additional traces.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudtrace\V1\Trace::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * List of trace records returned.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudtrace.v1.Trace traces = 1;</code>
     */
    public function getTraces()
    {
        return $this->traces;
    }

    /**
     * <pre>
     * List of trace records returned.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudtrace.v1.Trace traces = 1;</code>
     */
    public function setTraces(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudtrace\V1\Trace::class);
        $this->traces = $arr;
    }

    /**
     * <pre>
     * If defined, indicates that there are more traces that match the request
     * and that this value should be passed to the next request to continue
     * retrieving additional traces.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * <pre>
     * If defined, indicates that there are more traces that match the request
     * and that this value should be passed to the next request to continue
     * retrieving additional traces.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;
    }

}

