<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response containing existing BuildTriggers.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.ListBuildTriggersResponse</code>
 */
class ListBuildTriggersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * BuildTriggers for the project, sorted by create_time descending.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.BuildTrigger triggers = 1;</code>
     */
    private $triggers;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * BuildTriggers for the project, sorted by create_time descending.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.BuildTrigger triggers = 1;</code>
     */
    public function getTriggers()
    {
        return $this->triggers;
    }

    /**
     * <pre>
     * BuildTriggers for the project, sorted by create_time descending.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.BuildTrigger triggers = 1;</code>
     */
    public function setTriggers(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\BuildTrigger::class);
        $this->triggers = $arr;
    }

}

