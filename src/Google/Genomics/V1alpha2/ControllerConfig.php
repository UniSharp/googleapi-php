<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Stores the information that the controller will fetch from the
 * server in order to run. Should only be used by VMs created by the
 * Pipelines Service and not by end users.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1alpha2.ControllerConfig</code>
 */
class ControllerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string image = 1;</code>
     */
    private $image = '';
    /**
     * <code>string cmd = 2;</code>
     */
    private $cmd = '';
    /**
     * <code>string gcs_log_path = 3;</code>
     */
    private $gcs_log_path = '';
    /**
     * <code>string machine_type = 4;</code>
     */
    private $machine_type = '';
    /**
     * <code>map&lt;string, string&gt; vars = 5;</code>
     */
    private $vars;
    /**
     * <code>map&lt;string, string&gt; disks = 6;</code>
     */
    private $disks;
    /**
     * <code>map&lt;string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString&gt; gcs_sources = 7;</code>
     */
    private $gcs_sources;
    /**
     * <code>map&lt;string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString&gt; gcs_sinks = 8;</code>
     */
    private $gcs_sinks;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct();
    }

    /**
     * <code>string image = 1;</code>
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * <code>string image = 1;</code>
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;
    }

    /**
     * <code>string cmd = 2;</code>
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     * <code>string cmd = 2;</code>
     */
    public function setCmd($var)
    {
        GPBUtil::checkString($var, True);
        $this->cmd = $var;
    }

    /**
     * <code>string gcs_log_path = 3;</code>
     */
    public function getGcsLogPath()
    {
        return $this->gcs_log_path;
    }

    /**
     * <code>string gcs_log_path = 3;</code>
     */
    public function setGcsLogPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcs_log_path = $var;
    }

    /**
     * <code>string machine_type = 4;</code>
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * <code>string machine_type = 4;</code>
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;
    }

    /**
     * <code>map&lt;string, string&gt; vars = 5;</code>
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * <code>map&lt;string, string&gt; vars = 5;</code>
     */
    public function setVars(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->vars = $arr;
    }

    /**
     * <code>map&lt;string, string&gt; disks = 6;</code>
     */
    public function getDisks()
    {
        return $this->disks;
    }

    /**
     * <code>map&lt;string, string&gt; disks = 6;</code>
     */
    public function setDisks(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->disks = $arr;
    }

    /**
     * <code>map&lt;string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString&gt; gcs_sources = 7;</code>
     */
    public function getGcsSources()
    {
        return $this->gcs_sources;
    }

    /**
     * <code>map&lt;string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString&gt; gcs_sources = 7;</code>
     */
    public function setGcsSources(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1alpha2\ControllerConfig_RepeatedString::class);
        $this->gcs_sources = $arr;
    }

    /**
     * <code>map&lt;string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString&gt; gcs_sinks = 8;</code>
     */
    public function getGcsSinks()
    {
        return $this->gcs_sinks;
    }

    /**
     * <code>map&lt;string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString&gt; gcs_sinks = 8;</code>
     */
    public function setGcsSinks(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1alpha2\ControllerConfig_RepeatedString::class);
        $this->gcs_sinks = $arr;
    }

}

