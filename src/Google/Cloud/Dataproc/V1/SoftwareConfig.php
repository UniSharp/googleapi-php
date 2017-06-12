<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Specifies the selection and config of software inside the cluster.
 * </pre>
 *
 * Protobuf type <code>google.cloud.dataproc.v1.SoftwareConfig</code>
 */
class SoftwareConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * [Optional] The version of software inside the cluster. It must match the
     * regular expression `[0-9]+&#92;.[0-9]+`. If unspecified, it defaults to the
     * latest version (see [Cloud Dataproc Versioning](/dataproc/versioning)).
     * </pre>
     *
     * <code>string image_version = 1;</code>
     */
    private $image_version = '';
    /**
     * <pre>
     * [Optional] The properties to set on daemon config files.
     * Property keys are specified in `prefix:property` format, such as
     * `core:fs.defaultFS`. The following are supported prefixes
     * and their mappings:
     * * core:   `core-site.xml`
     * * hdfs:   `hdfs-site.xml`
     * * mapred: `mapred-site.xml`
     * * yarn:   `yarn-site.xml`
     * * hive:   `hive-site.xml`
     * * pig:    `pig.properties`
     * * spark:  `spark-defaults.conf`
     * </pre>
     *
     * <code>map&lt;string, string&gt; properties = 2;</code>
     */
    private $properties;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * [Optional] The version of software inside the cluster. It must match the
     * regular expression `[0-9]+&#92;.[0-9]+`. If unspecified, it defaults to the
     * latest version (see [Cloud Dataproc Versioning](/dataproc/versioning)).
     * </pre>
     *
     * <code>string image_version = 1;</code>
     */
    public function getImageVersion()
    {
        return $this->image_version;
    }

    /**
     * <pre>
     * [Optional] The version of software inside the cluster. It must match the
     * regular expression `[0-9]+&#92;.[0-9]+`. If unspecified, it defaults to the
     * latest version (see [Cloud Dataproc Versioning](/dataproc/versioning)).
     * </pre>
     *
     * <code>string image_version = 1;</code>
     */
    public function setImageVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_version = $var;
    }

    /**
     * <pre>
     * [Optional] The properties to set on daemon config files.
     * Property keys are specified in `prefix:property` format, such as
     * `core:fs.defaultFS`. The following are supported prefixes
     * and their mappings:
     * * core:   `core-site.xml`
     * * hdfs:   `hdfs-site.xml`
     * * mapred: `mapred-site.xml`
     * * yarn:   `yarn-site.xml`
     * * hive:   `hive-site.xml`
     * * pig:    `pig.properties`
     * * spark:  `spark-defaults.conf`
     * </pre>
     *
     * <code>map&lt;string, string&gt; properties = 2;</code>
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * <pre>
     * [Optional] The properties to set on daemon config files.
     * Property keys are specified in `prefix:property` format, such as
     * `core:fs.defaultFS`. The following are supported prefixes
     * and their mappings:
     * * core:   `core-site.xml`
     * * hdfs:   `hdfs-site.xml`
     * * mapred: `mapred-site.xml`
     * * yarn:   `yarn-site.xml`
     * * hive:   `hive-site.xml`
     * * pig:    `pig.properties`
     * * spark:  `spark-defaults.conf`
     * </pre>
     *
     * <code>map&lt;string, string&gt; properties = 2;</code>
     */
    public function setProperties(&$var)
    {
        $this->properties = $var;
    }

}

