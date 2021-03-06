<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/monitored_resource.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * An object that describes the schema of a [MonitoredResource][google.api.MonitoredResource] object using a
 * type name and a set of labels.  For example, the monitored resource
 * descriptor for Google Compute Engine VM instances has a type of
 * `"gce_instance"` and specifies the use of the labels `"instance_id"` and
 * `"zone"` to identify particular VM instances.
 * Different APIs can support different monitored resource types. APIs generally
 * provide a `list` method that returns the monitored resource descriptors used
 * by the API.
 * </pre>
 *
 * Protobuf type <code>google.api.MonitoredResourceDescriptor</code>
 */
class MonitoredResourceDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Optional. The resource name of the monitored resource descriptor:
     * `"projects/{project_id}/monitoredResourceDescriptors/{type}"` where
     * {type} is the value of the `type` field in this object and
     * {project_id} is a project ID that provides API-specific context for
     * accessing the type.  APIs that do not use project information can use the
     * resource name format `"monitoredResourceDescriptors/{type}"`.
     * </pre>
     *
     * <code>string name = 5;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Required. The monitored resource type. For example, the type
     * `"cloudsql_database"` represents databases in Google Cloud SQL.
     * The maximum length of this value is 256 characters.
     * </pre>
     *
     * <code>string type = 1;</code>
     */
    private $type = '';
    /**
     * <pre>
     * Optional. A concise name for the monitored resource type that might be
     * displayed in user interfaces. It should be a Title Cased Noun Phrase,
     * without any article or other determiners. For example,
     * `"Google Cloud SQL Database"`.
     * </pre>
     *
     * <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * <pre>
     * Optional. A detailed description of the monitored resource type that might
     * be used in documentation.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * <pre>
     * Required. A set of labels used to describe instances of this monitored
     * resource type. For example, an individual Google Cloud SQL database is
     * identified by values for the labels `"database_id"` and `"zone"`.
     * </pre>
     *
     * <code>repeated .google.api.LabelDescriptor labels = 4;</code>
     */
    private $labels;

    public function __construct() {
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Optional. The resource name of the monitored resource descriptor:
     * `"projects/{project_id}/monitoredResourceDescriptors/{type}"` where
     * {type} is the value of the `type` field in this object and
     * {project_id} is a project ID that provides API-specific context for
     * accessing the type.  APIs that do not use project information can use the
     * resource name format `"monitoredResourceDescriptors/{type}"`.
     * </pre>
     *
     * <code>string name = 5;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * Optional. The resource name of the monitored resource descriptor:
     * `"projects/{project_id}/monitoredResourceDescriptors/{type}"` where
     * {type} is the value of the `type` field in this object and
     * {project_id} is a project ID that provides API-specific context for
     * accessing the type.  APIs that do not use project information can use the
     * resource name format `"monitoredResourceDescriptors/{type}"`.
     * </pre>
     *
     * <code>string name = 5;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * Required. The monitored resource type. For example, the type
     * `"cloudsql_database"` represents databases in Google Cloud SQL.
     * The maximum length of this value is 256 characters.
     * </pre>
     *
     * <code>string type = 1;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <pre>
     * Required. The monitored resource type. For example, the type
     * `"cloudsql_database"` represents databases in Google Cloud SQL.
     * The maximum length of this value is 256 characters.
     * </pre>
     *
     * <code>string type = 1;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;
    }

    /**
     * <pre>
     * Optional. A concise name for the monitored resource type that might be
     * displayed in user interfaces. It should be a Title Cased Noun Phrase,
     * without any article or other determiners. For example,
     * `"Google Cloud SQL Database"`.
     * </pre>
     *
     * <code>string display_name = 2;</code>
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * <pre>
     * Optional. A concise name for the monitored resource type that might be
     * displayed in user interfaces. It should be a Title Cased Noun Phrase,
     * without any article or other determiners. For example,
     * `"Google Cloud SQL Database"`.
     * </pre>
     *
     * <code>string display_name = 2;</code>
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;
    }

    /**
     * <pre>
     * Optional. A detailed description of the monitored resource type that might
     * be used in documentation.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Optional. A detailed description of the monitored resource type that might
     * be used in documentation.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <pre>
     * Required. A set of labels used to describe instances of this monitored
     * resource type. For example, an individual Google Cloud SQL database is
     * identified by values for the labels `"database_id"` and `"zone"`.
     * </pre>
     *
     * <code>repeated .google.api.LabelDescriptor labels = 4;</code>
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * <pre>
     * Required. A set of labels used to describe instances of this monitored
     * resource type. For example, an individual Google Cloud SQL database is
     * identified by values for the labels `"database_id"` and `"zone"`.
     * </pre>
     *
     * <code>repeated .google.api.LabelDescriptor labels = 4;</code>
     */
    public function setLabels(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\LabelDescriptor::class);
        $this->labels = $arr;
    }

}

