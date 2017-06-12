<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request to create a new build.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.CreateBuildRequest</code>
 */
class CreateBuildRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * ID of the project.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * Build resource to create.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Build build = 2;</code>
     */
    private $build = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * ID of the project.
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
     * ID of the project.
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
     * Build resource to create.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Build build = 2;</code>
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * <pre>
     * Build resource to create.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Build build = 2;</code>
     */
    public function setBuild(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\Build::class);
        $this->build = $var;
    }

}

