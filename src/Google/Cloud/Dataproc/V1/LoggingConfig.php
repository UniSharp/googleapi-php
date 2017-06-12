<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The runtime logging config of the job.
 * </pre>
 *
 * Protobuf type <code>google.cloud.dataproc.v1.LoggingConfig</code>
 */
class LoggingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The per-package log levels for the driver. This may include
     * "root" package name to configure rootLogger.
     * Examples:
     *   'com.google = FATAL', 'root = INFO', 'org.apache = DEBUG'
     * </pre>
     *
     * <code>map&lt;string, .google.cloud.dataproc.v1.LoggingConfig.Level&gt; driver_log_levels = 2;</code>
     */
    private $driver_log_levels;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The per-package log levels for the driver. This may include
     * "root" package name to configure rootLogger.
     * Examples:
     *   'com.google = FATAL', 'root = INFO', 'org.apache = DEBUG'
     * </pre>
     *
     * <code>map&lt;string, .google.cloud.dataproc.v1.LoggingConfig.Level&gt; driver_log_levels = 2;</code>
     */
    public function getDriverLogLevels()
    {
        return $this->driver_log_levels;
    }

    /**
     * <pre>
     * The per-package log levels for the driver. This may include
     * "root" package name to configure rootLogger.
     * Examples:
     *   'com.google = FATAL', 'root = INFO', 'org.apache = DEBUG'
     * </pre>
     *
     * <code>map&lt;string, .google.cloud.dataproc.v1.LoggingConfig.Level&gt; driver_log_levels = 2;</code>
     */
    public function setDriverLogLevels(&$var)
    {
        $this->driver_log_levels = $var;
    }

}
