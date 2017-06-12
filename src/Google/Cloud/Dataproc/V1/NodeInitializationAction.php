<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Specifies an executable to run on a fully configured node and a
 * timeout period for executable completion.
 * </pre>
 *
 * Protobuf type <code>google.cloud.dataproc.v1.NodeInitializationAction</code>
 */
class NodeInitializationAction extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * [Required] Google Cloud Storage URI of executable file.
     * </pre>
     *
     * <code>string executable_file = 1;</code>
     */
    private $executable_file = '';
    /**
     * <pre>
     * [Optional] Amount of time executable has to complete. Default is
     * 10 minutes. Cluster creation fails with an explanatory error message (the
     * name of the executable that caused the error and the exceeded timeout
     * period) if the executable is not completed at end of the timeout period.
     * </pre>
     *
     * <code>.google.protobuf.Duration execution_timeout = 2;</code>
     */
    private $execution_timeout = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * [Required] Google Cloud Storage URI of executable file.
     * </pre>
     *
     * <code>string executable_file = 1;</code>
     */
    public function getExecutableFile()
    {
        return $this->executable_file;
    }

    /**
     * <pre>
     * [Required] Google Cloud Storage URI of executable file.
     * </pre>
     *
     * <code>string executable_file = 1;</code>
     */
    public function setExecutableFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->executable_file = $var;
    }

    /**
     * <pre>
     * [Optional] Amount of time executable has to complete. Default is
     * 10 minutes. Cluster creation fails with an explanatory error message (the
     * name of the executable that caused the error and the exceeded timeout
     * period) if the executable is not completed at end of the timeout period.
     * </pre>
     *
     * <code>.google.protobuf.Duration execution_timeout = 2;</code>
     */
    public function getExecutionTimeout()
    {
        return $this->execution_timeout;
    }

    /**
     * <pre>
     * [Optional] Amount of time executable has to complete. Default is
     * 10 minutes. Cluster creation fails with an explanatory error message (the
     * name of the executable that caused the error and the exceeded timeout
     * period) if the executable is not completed at end of the timeout period.
     * </pre>
     *
     * <code>.google.protobuf.Duration execution_timeout = 2;</code>
     */
    public function setExecutionTimeout(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->execution_timeout = $var;
    }

}
