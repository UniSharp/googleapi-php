<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Configuration for an automated build in response to source repository
 * changes.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.BuildTrigger</code>
 */
class BuildTrigger extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Unique identifier of the trigger.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * <pre>
     * Human-readable description of this trigger.
     * </pre>
     *
     * <code>string description = 10;</code>
     */
    private $description = '';
    /**
     * <pre>
     * Template describing the types of source changes to trigger a build.
     * Branch and tag names in trigger templates are interpreted as regular
     * expressions. Any branch or tag change that matches that regular expression
     * will trigger a build.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.RepoSource trigger_template = 7;</code>
     */
    private $trigger_template = null;
    /**
     * <pre>
     * Time when the trigger was created.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 5;</code>
     */
    private $create_time = null;
    /**
     * <pre>
     * If true, the trigger will never result in a build.
     * </pre>
     *
     * <code>bool disabled = 9;</code>
     */
    private $disabled = false;
    /**
     * <pre>
     * Substitutions data for Build resource.
     * </pre>
     *
     * <code>map&lt;string, string&gt; substitutions = 11;</code>
     */
    private $substitutions;
    protected $build_template;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Unique identifier of the trigger.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <pre>
     * Unique identifier of the trigger.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    /**
     * <pre>
     * Human-readable description of this trigger.
     * </pre>
     *
     * <code>string description = 10;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Human-readable description of this trigger.
     * </pre>
     *
     * <code>string description = 10;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <pre>
     * Template describing the types of source changes to trigger a build.
     * Branch and tag names in trigger templates are interpreted as regular
     * expressions. Any branch or tag change that matches that regular expression
     * will trigger a build.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.RepoSource trigger_template = 7;</code>
     */
    public function getTriggerTemplate()
    {
        return $this->trigger_template;
    }

    /**
     * <pre>
     * Template describing the types of source changes to trigger a build.
     * Branch and tag names in trigger templates are interpreted as regular
     * expressions. Any branch or tag change that matches that regular expression
     * will trigger a build.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.RepoSource trigger_template = 7;</code>
     */
    public function setTriggerTemplate(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\RepoSource::class);
        $this->trigger_template = $var;
    }

    /**
     * <pre>
     * Contents of the build template.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Build build = 4;</code>
     */
    public function getBuild()
    {
        return $this->readOneof(4);
    }

    /**
     * <pre>
     * Contents of the build template.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.Build build = 4;</code>
     */
    public function setBuild(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\Build::class);
        $this->writeOneof(4, $var);
    }

    /**
     * <pre>
     * Path, from the source root, to a file whose contents is used for the
     * template.
     * </pre>
     *
     * <code>string filename = 8;</code>
     */
    public function getFilename()
    {
        return $this->readOneof(8);
    }

    /**
     * <pre>
     * Path, from the source root, to a file whose contents is used for the
     * template.
     * </pre>
     *
     * <code>string filename = 8;</code>
     */
    public function setFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(8, $var);
    }

    /**
     * <pre>
     * Time when the trigger was created.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 5;</code>
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * <pre>
     * Time when the trigger was created.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 5;</code>
     */
    public function setCreateTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;
    }

    /**
     * <pre>
     * If true, the trigger will never result in a build.
     * </pre>
     *
     * <code>bool disabled = 9;</code>
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * <pre>
     * If true, the trigger will never result in a build.
     * </pre>
     *
     * <code>bool disabled = 9;</code>
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;
    }

    /**
     * <pre>
     * Substitutions data for Build resource.
     * </pre>
     *
     * <code>map&lt;string, string&gt; substitutions = 11;</code>
     */
    public function getSubstitutions()
    {
        return $this->substitutions;
    }

    /**
     * <pre>
     * Substitutions data for Build resource.
     * </pre>
     *
     * <code>map&lt;string, string&gt; substitutions = 11;</code>
     */
    public function setSubstitutions(&$var)
    {
        $this->substitutions = $var;
    }

    public function getBuildTemplate()
    {
        return $this->build_template;
    }

}

