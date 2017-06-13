<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A Cloud Dataproc job for running [Apache Spark SQL](http://spark.apache.org/sql/)
 * queries.
 * </pre>
 *
 * Protobuf type <code>google.cloud.dataproc.v1.SparkSqlJob</code>
 */
class SparkSqlJob extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * [Optional] Mapping of query variable names to values (equivalent to the
     * Spark SQL command: SET `name="value";`).
     * </pre>
     *
     * <code>map&lt;string, string&gt; script_variables = 3;</code>
     */
    private $script_variables;
    /**
     * <pre>
     * [Optional] A mapping of property names to values, used to configure
     * Spark SQL's SparkConf. Properties that conflict with values set by the
     * Cloud Dataproc API may be overwritten.
     * </pre>
     *
     * <code>map&lt;string, string&gt; properties = 4;</code>
     */
    private $properties;
    /**
     * <pre>
     * [Optional] HCFS URIs of jar files to be added to the Spark CLASSPATH.
     * </pre>
     *
     * <code>repeated string jar_file_uris = 56;</code>
     */
    private $jar_file_uris;
    /**
     * <pre>
     * [Optional] The runtime log config for job execution.
     * </pre>
     *
     * <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 6;</code>
     */
    private $logging_config = null;
    protected $queries;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The HCFS URI of the script that contains SQL queries.
     * </pre>
     *
     * <code>string query_file_uri = 1;</code>
     */
    public function getQueryFileUri()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * The HCFS URI of the script that contains SQL queries.
     * </pre>
     *
     * <code>string query_file_uri = 1;</code>
     */
    public function setQueryFileUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);
    }

    /**
     * <pre>
     * A list of queries.
     * </pre>
     *
     * <code>.google.cloud.dataproc.v1.QueryList query_list = 2;</code>
     */
    public function getQueryList()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * A list of queries.
     * </pre>
     *
     * <code>.google.cloud.dataproc.v1.QueryList query_list = 2;</code>
     */
    public function setQueryList(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\QueryList::class);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * [Optional] Mapping of query variable names to values (equivalent to the
     * Spark SQL command: SET `name="value";`).
     * </pre>
     *
     * <code>map&lt;string, string&gt; script_variables = 3;</code>
     */
    public function getScriptVariables()
    {
        return $this->script_variables;
    }

    /**
     * <pre>
     * [Optional] Mapping of query variable names to values (equivalent to the
     * Spark SQL command: SET `name="value";`).
     * </pre>
     *
     * <code>map&lt;string, string&gt; script_variables = 3;</code>
     */
    public function setScriptVariables(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->script_variables = $arr;
    }

    /**
     * <pre>
     * [Optional] A mapping of property names to values, used to configure
     * Spark SQL's SparkConf. Properties that conflict with values set by the
     * Cloud Dataproc API may be overwritten.
     * </pre>
     *
     * <code>map&lt;string, string&gt; properties = 4;</code>
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * <pre>
     * [Optional] A mapping of property names to values, used to configure
     * Spark SQL's SparkConf. Properties that conflict with values set by the
     * Cloud Dataproc API may be overwritten.
     * </pre>
     *
     * <code>map&lt;string, string&gt; properties = 4;</code>
     */
    public function setProperties(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->properties = $arr;
    }

    /**
     * <pre>
     * [Optional] HCFS URIs of jar files to be added to the Spark CLASSPATH.
     * </pre>
     *
     * <code>repeated string jar_file_uris = 56;</code>
     */
    public function getJarFileUris()
    {
        return $this->jar_file_uris;
    }

    /**
     * <pre>
     * [Optional] HCFS URIs of jar files to be added to the Spark CLASSPATH.
     * </pre>
     *
     * <code>repeated string jar_file_uris = 56;</code>
     */
    public function setJarFileUris(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->jar_file_uris = $arr;
    }

    /**
     * <pre>
     * [Optional] The runtime log config for job execution.
     * </pre>
     *
     * <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 6;</code>
     */
    public function getLoggingConfig()
    {
        return $this->logging_config;
    }

    /**
     * <pre>
     * [Optional] The runtime log config for job execution.
     * </pre>
     *
     * <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 6;</code>
     */
    public function setLoggingConfig(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\LoggingConfig::class);
        $this->logging_config = $var;
    }

    public function getQueries()
    {
        return $this->whichOneof("queries");
    }

}

