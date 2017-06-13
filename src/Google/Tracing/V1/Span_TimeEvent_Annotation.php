<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/tracing/trace.proto

namespace Google\Tracing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Text annotation with a set of labels.
 * </pre>
 *
 * Protobuf type <code>google.tracing.v1.Span.TimeEvent.Annotation</code>
 */
class Span_TimeEvent_Annotation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A user-supplied message describing the event.
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    private $description = '';
    /**
     * <pre>
     * A set of labels on the annotation.
     * </pre>
     *
     * <code>map&lt;string, .google.tracing.v1.LabelValue&gt; labels = 2;</code>
     */
    private $labels;

    public function __construct() {
        \GPBMetadata\Google\Tracing\Trace::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A user-supplied message describing the event.
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * A user-supplied message describing the event.
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <pre>
     * A set of labels on the annotation.
     * </pre>
     *
     * <code>map&lt;string, .google.tracing.v1.LabelValue&gt; labels = 2;</code>
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * <pre>
     * A set of labels on the annotation.
     * </pre>
     *
     * <code>map&lt;string, .google.tracing.v1.LabelValue&gt; labels = 2;</code>
     */
    public function setLabels(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Tracing\V1\LabelValue::class);
        $this->labels = $arr;
    }

}

