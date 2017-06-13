<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * BuildStep describes a step to perform in the build pipeline.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.BuildStep</code>
 */
class BuildStep extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the container image that will run this particular build step.
     * If the image is already available in the host's Docker daemon's cache, it
     * will be run directly. If not, the host will attempt to pull the image
     * first, using the builder service account's credentials if necessary.
     * The Docker daemon's cache will already have the latest versions of all of
     * the officially supported build steps
     * (https://github.com/GoogleCloudPlatform/cloud-builders). The Docker daemon
     * will also have cached many of the layers for some popular images, like
     * "ubuntu", "debian", but they will be refreshed at the time you attempt to
     * use them.
     * If you built an image in a previous build step, it will be stored in the
     * host's Docker daemon's cache and is available to use as the name for a
     * later build step.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * A list of environment variable definitions to be used when running a step.
     * The elements are of the form "KEY=VALUE" for the environment variable "KEY"
     * being given the value "VALUE".
     * </pre>
     *
     * <code>repeated string env = 2;</code>
     */
    private $env;
    /**
     * <pre>
     * A list of arguments that will be presented to the step when it is started.
     * If the image used to run the step's container has an entrypoint, these args
     * will be used as arguments to that entrypoint. If the image does not define
     * an entrypoint, the first element in args will be used as the entrypoint,
     * and the remainder will be used as arguments.
     * </pre>
     *
     * <code>repeated string args = 3;</code>
     */
    private $args;
    /**
     * <pre>
     * Working directory (relative to project source root) to use when running
     * this operation's container.
     * </pre>
     *
     * <code>string dir = 4;</code>
     */
    private $dir = '';
    /**
     * <pre>
     * Optional unique identifier for this build step, used in wait_for to
     * reference this build step as a dependency.
     * </pre>
     *
     * <code>string id = 5;</code>
     */
    private $id = '';
    /**
     * <pre>
     * The ID(s) of the step(s) that this build step depends on.
     * This build step will not start until all the build steps in wait_for
     * have completed successfully. If wait_for is empty, this build step will
     * start when all previous build steps in the Build.Steps list have completed
     * successfully.
     * </pre>
     *
     * <code>repeated string wait_for = 6;</code>
     */
    private $wait_for;
    /**
     * <pre>
     * Optional entrypoint to be used instead of the build step image's default
     * If unset, the image's default will be used.
     * </pre>
     *
     * <code>string entrypoint = 7;</code>
     */
    private $entrypoint = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the container image that will run this particular build step.
     * If the image is already available in the host's Docker daemon's cache, it
     * will be run directly. If not, the host will attempt to pull the image
     * first, using the builder service account's credentials if necessary.
     * The Docker daemon's cache will already have the latest versions of all of
     * the officially supported build steps
     * (https://github.com/GoogleCloudPlatform/cloud-builders). The Docker daemon
     * will also have cached many of the layers for some popular images, like
     * "ubuntu", "debian", but they will be refreshed at the time you attempt to
     * use them.
     * If you built an image in a previous build step, it will be stored in the
     * host's Docker daemon's cache and is available to use as the name for a
     * later build step.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * The name of the container image that will run this particular build step.
     * If the image is already available in the host's Docker daemon's cache, it
     * will be run directly. If not, the host will attempt to pull the image
     * first, using the builder service account's credentials if necessary.
     * The Docker daemon's cache will already have the latest versions of all of
     * the officially supported build steps
     * (https://github.com/GoogleCloudPlatform/cloud-builders). The Docker daemon
     * will also have cached many of the layers for some popular images, like
     * "ubuntu", "debian", but they will be refreshed at the time you attempt to
     * use them.
     * If you built an image in a previous build step, it will be stored in the
     * host's Docker daemon's cache and is available to use as the name for a
     * later build step.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * A list of environment variable definitions to be used when running a step.
     * The elements are of the form "KEY=VALUE" for the environment variable "KEY"
     * being given the value "VALUE".
     * </pre>
     *
     * <code>repeated string env = 2;</code>
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * <pre>
     * A list of environment variable definitions to be used when running a step.
     * The elements are of the form "KEY=VALUE" for the environment variable "KEY"
     * being given the value "VALUE".
     * </pre>
     *
     * <code>repeated string env = 2;</code>
     */
    public function setEnv(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->env = $arr;
    }

    /**
     * <pre>
     * A list of arguments that will be presented to the step when it is started.
     * If the image used to run the step's container has an entrypoint, these args
     * will be used as arguments to that entrypoint. If the image does not define
     * an entrypoint, the first element in args will be used as the entrypoint,
     * and the remainder will be used as arguments.
     * </pre>
     *
     * <code>repeated string args = 3;</code>
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * <pre>
     * A list of arguments that will be presented to the step when it is started.
     * If the image used to run the step's container has an entrypoint, these args
     * will be used as arguments to that entrypoint. If the image does not define
     * an entrypoint, the first element in args will be used as the entrypoint,
     * and the remainder will be used as arguments.
     * </pre>
     *
     * <code>repeated string args = 3;</code>
     */
    public function setArgs(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;
    }

    /**
     * <pre>
     * Working directory (relative to project source root) to use when running
     * this operation's container.
     * </pre>
     *
     * <code>string dir = 4;</code>
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * <pre>
     * Working directory (relative to project source root) to use when running
     * this operation's container.
     * </pre>
     *
     * <code>string dir = 4;</code>
     */
    public function setDir($var)
    {
        GPBUtil::checkString($var, True);
        $this->dir = $var;
    }

    /**
     * <pre>
     * Optional unique identifier for this build step, used in wait_for to
     * reference this build step as a dependency.
     * </pre>
     *
     * <code>string id = 5;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <pre>
     * Optional unique identifier for this build step, used in wait_for to
     * reference this build step as a dependency.
     * </pre>
     *
     * <code>string id = 5;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    /**
     * <pre>
     * The ID(s) of the step(s) that this build step depends on.
     * This build step will not start until all the build steps in wait_for
     * have completed successfully. If wait_for is empty, this build step will
     * start when all previous build steps in the Build.Steps list have completed
     * successfully.
     * </pre>
     *
     * <code>repeated string wait_for = 6;</code>
     */
    public function getWaitFor()
    {
        return $this->wait_for;
    }

    /**
     * <pre>
     * The ID(s) of the step(s) that this build step depends on.
     * This build step will not start until all the build steps in wait_for
     * have completed successfully. If wait_for is empty, this build step will
     * start when all previous build steps in the Build.Steps list have completed
     * successfully.
     * </pre>
     *
     * <code>repeated string wait_for = 6;</code>
     */
    public function setWaitFor(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->wait_for = $arr;
    }

    /**
     * <pre>
     * Optional entrypoint to be used instead of the build step image's default
     * If unset, the image's default will be used.
     * </pre>
     *
     * <code>string entrypoint = 7;</code>
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }

    /**
     * <pre>
     * Optional entrypoint to be used instead of the build step image's default
     * If unset, the image's default will be used.
     * </pre>
     *
     * <code>string entrypoint = 7;</code>
     */
    public function setEntrypoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->entrypoint = $var;
    }

}

