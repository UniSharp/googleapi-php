<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/build_events.proto

namespace Google\Devtools\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Notification of the end of a build event stream published by a build
 * component other than CONTROLLER (See StreamId.BuildComponents).
 * </pre>
 *
 * Protobuf type <code>google.devtools.build.v1.BuildEvent.BuildComponentStreamFinished</code>
 */
class BuildEvent_BuildComponentStreamFinished extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * How the event stream finished.
     * </pre>
     *
     * <code>.google.devtools.build.v1.BuildEvent.BuildComponentStreamFinished.FinishType type = 1;</code>
     */
    private $type = 0;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Build\V1\BuildEvents::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * How the event stream finished.
     * </pre>
     *
     * <code>.google.devtools.build.v1.BuildEvent.BuildComponentStreamFinished.FinishType type = 1;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <pre>
     * How the event stream finished.
     * </pre>
     *
     * <code>.google.devtools.build.v1.BuildEvent.BuildComponentStreamFinished.FinishType type = 1;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Build\V1\BuildEvent_BuildComponentStreamFinished_FinishType::class);
        $this->type = $var;
    }

}

