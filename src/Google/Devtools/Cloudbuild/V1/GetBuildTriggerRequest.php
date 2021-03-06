<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Returns the BuildTrigger with the specified ID.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.GetBuildTriggerRequest</code>
 */
class GetBuildTriggerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * ID of the project that owns the trigger.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * ID of the BuildTrigger to get.
     * </pre>
     *
     * <code>string trigger_id = 2;</code>
     */
    private $trigger_id = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * ID of the project that owns the trigger.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * ID of the project that owns the trigger.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * ID of the BuildTrigger to get.
     * </pre>
     *
     * <code>string trigger_id = 2;</code>
     */
    public function getTriggerId()
    {
        return $this->trigger_id;
    }

    /**
     * <pre>
     * ID of the BuildTrigger to get.
     * </pre>
     *
     * <code>string trigger_id = 2;</code>
     */
    public function setTriggerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trigger_id = $var;
    }

}

