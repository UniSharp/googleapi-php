<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A Version resource is a specific set of source code and configuration files
 * that are deployed into a service.
 * </pre>
 *
 * Protobuf type <code>google.appengine.v1.Version</code>
 */
class Version extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Full path to the Version resource in the API.  Example:
     * `apps/myapp/services/default/versions/v1`.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Relative name of the version within the service.  Example: `v1`.
     * Version names can contain only lowercase letters, numbers, or hyphens.
     * Reserved names: "default", "latest", and any name with the prefix "ah-".
     * </pre>
     *
     * <code>string id = 2;</code>
     */
    private $id = '';
    /**
     * <pre>
     * Before an application can receive email or XMPP messages, the application
     * must be configured to enable the service.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.InboundServiceType inbound_services = 6;</code>
     */
    private $inbound_services;
    /**
     * <pre>
     * Instance class that is used to run this version. Valid values are:
     * * AutomaticScaling: `F1`, `F2`, `F4`, `F4_1G`
     * * ManualScaling or BasicScaling: `B1`, `B2`, `B4`, `B8`, `B4_1G`
     * Defaults to `F1` for AutomaticScaling and `B1` for ManualScaling or
     * BasicScaling.
     * </pre>
     *
     * <code>string instance_class = 7;</code>
     */
    private $instance_class = '';
    /**
     * <pre>
     * Extra network settings. Only applicable for VM runtimes.
     * </pre>
     *
     * <code>.google.appengine.v1.Network network = 8;</code>
     */
    private $network = null;
    /**
     * <pre>
     * Machine resources for this version. Only applicable for VM runtimes.
     * </pre>
     *
     * <code>.google.appengine.v1.Resources resources = 9;</code>
     */
    private $resources = null;
    /**
     * <pre>
     * Desired runtime. Example: `python27`.
     * </pre>
     *
     * <code>string runtime = 10;</code>
     */
    private $runtime = '';
    /**
     * <pre>
     * Whether multiple requests can be dispatched to this version at once.
     * </pre>
     *
     * <code>bool threadsafe = 11;</code>
     */
    private $threadsafe = false;
    /**
     * <pre>
     * Whether to deploy this version in a container on a virtual machine.
     * </pre>
     *
     * <code>bool vm = 12;</code>
     */
    private $vm = false;
    /**
     * <pre>
     * Metadata settings that are supplied to this version to enable
     * beta runtime features.
     * </pre>
     *
     * <code>map&lt;string, string&gt; beta_settings = 13;</code>
     */
    private $beta_settings;
    /**
     * <pre>
     * App Engine execution environment for this version.
     * Defaults to `standard`.
     * </pre>
     *
     * <code>string env = 14;</code>
     */
    private $env = '';
    /**
     * <pre>
     * Current serving status of this version. Only the versions with a
     * `SERVING` status create instances and can be billed.
     * `SERVING_STATUS_UNSPECIFIED` is an invalid value. Defaults to `SERVING`.
     * </pre>
     *
     * <code>.google.appengine.v1.ServingStatus serving_status = 15;</code>
     */
    private $serving_status = 0;
    /**
     * <pre>
     * Email address of the user who created this version.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string created_by = 16;</code>
     */
    private $created_by = '';
    /**
     * <pre>
     * Time that this version was created.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 17;</code>
     */
    private $create_time = null;
    /**
     * <pre>
     * Total size in bytes of all the files that are included in this version
     * and curerntly hosted on the App Engine disk.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>int64 disk_usage_bytes = 18;</code>
     */
    private $disk_usage_bytes = 0;
    /**
     * <pre>
     * An ordered list of URL-matching patterns that should be applied to incoming
     * requests. The first matching URL handles the request and other request
     * handlers are not attempted.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.UrlMap handlers = 100;</code>
     */
    private $handlers;
    /**
     * <pre>
     * Custom static error pages. Limited to 10KB per page.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.ErrorHandler error_handlers = 101;</code>
     */
    private $error_handlers;
    /**
     * <pre>
     * Configuration for third-party Python runtime libraries that are required
     * by the application.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.Library libraries = 102;</code>
     */
    private $libraries;
    /**
     * <pre>
     * Serving configuration for
     * [Google Cloud Endpoints](https://cloud.google.com/appengine/docs/python/endpoints/).
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.appengine.v1.ApiConfigHandler api_config = 103;</code>
     */
    private $api_config = null;
    /**
     * <pre>
     * Environment variables available to the application.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>map&lt;string, string&gt; env_variables = 104;</code>
     */
    private $env_variables;
    /**
     * <pre>
     * Duration that static files should be cached by web proxies and browsers.
     * Only applicable if the corresponding
     * [StaticFilesHandler](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#staticfileshandler)
     * does not specify its own expiration time.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.protobuf.Duration default_expiration = 105;</code>
     */
    private $default_expiration = null;
    /**
     * <pre>
     * Configures health checking for VM instances. Unhealthy instances are
     * stopped and replaced with new instances. Only applicable for VM
     * runtimes.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.appengine.v1.HealthCheck health_check = 106;</code>
     */
    private $health_check = null;
    /**
     * <pre>
     * Files that match this pattern will not be built into this version.
     * Only applicable for Go runtimes.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>string nobuild_files_regex = 107;</code>
     */
    private $nobuild_files_regex = '';
    /**
     * <pre>
     * Code and application artifacts that make up this version.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.appengine.v1.Deployment deployment = 108;</code>
     */
    private $deployment = null;
    /**
     * <pre>
     * Serving URL for this version. Example:
     * "https://myversion-dot-myservice-dot-myapp.appspot.com"
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string version_url = 109;</code>
     */
    private $version_url = '';
    protected $scaling;

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Full path to the Version resource in the API.  Example:
     * `apps/myapp/services/default/versions/v1`.
     * &#64;OutputOnly
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
     * Full path to the Version resource in the API.  Example:
     * `apps/myapp/services/default/versions/v1`.
     * &#64;OutputOnly
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
     * Relative name of the version within the service.  Example: `v1`.
     * Version names can contain only lowercase letters, numbers, or hyphens.
     * Reserved names: "default", "latest", and any name with the prefix "ah-".
     * </pre>
     *
     * <code>string id = 2;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <pre>
     * Relative name of the version within the service.  Example: `v1`.
     * Version names can contain only lowercase letters, numbers, or hyphens.
     * Reserved names: "default", "latest", and any name with the prefix "ah-".
     * </pre>
     *
     * <code>string id = 2;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    /**
     * <pre>
     * Automatic scaling is based on request rate, response latencies, and other
     * application metrics.
     * </pre>
     *
     * <code>.google.appengine.v1.AutomaticScaling automatic_scaling = 3;</code>
     */
    public function getAutomaticScaling()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * Automatic scaling is based on request rate, response latencies, and other
     * application metrics.
     * </pre>
     *
     * <code>.google.appengine.v1.AutomaticScaling automatic_scaling = 3;</code>
     */
    public function setAutomaticScaling(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\AutomaticScaling::class);
        $this->writeOneof(3, $var);
    }

    /**
     * <pre>
     * A service with basic scaling will create an instance when the application
     * receives a request. The instance will be turned down when the app becomes
     * idle. Basic scaling is ideal for work that is intermittent or driven by
     * user activity.
     * </pre>
     *
     * <code>.google.appengine.v1.BasicScaling basic_scaling = 4;</code>
     */
    public function getBasicScaling()
    {
        return $this->readOneof(4);
    }

    /**
     * <pre>
     * A service with basic scaling will create an instance when the application
     * receives a request. The instance will be turned down when the app becomes
     * idle. Basic scaling is ideal for work that is intermittent or driven by
     * user activity.
     * </pre>
     *
     * <code>.google.appengine.v1.BasicScaling basic_scaling = 4;</code>
     */
    public function setBasicScaling(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\BasicScaling::class);
        $this->writeOneof(4, $var);
    }

    /**
     * <pre>
     * A service with manual scaling runs continuously, allowing you to perform
     * complex initialization and rely on the state of its memory over time.
     * </pre>
     *
     * <code>.google.appengine.v1.ManualScaling manual_scaling = 5;</code>
     */
    public function getManualScaling()
    {
        return $this->readOneof(5);
    }

    /**
     * <pre>
     * A service with manual scaling runs continuously, allowing you to perform
     * complex initialization and rely on the state of its memory over time.
     * </pre>
     *
     * <code>.google.appengine.v1.ManualScaling manual_scaling = 5;</code>
     */
    public function setManualScaling(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\ManualScaling::class);
        $this->writeOneof(5, $var);
    }

    /**
     * <pre>
     * Before an application can receive email or XMPP messages, the application
     * must be configured to enable the service.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.InboundServiceType inbound_services = 6;</code>
     */
    public function getInboundServices()
    {
        return $this->inbound_services;
    }

    /**
     * <pre>
     * Before an application can receive email or XMPP messages, the application
     * must be configured to enable the service.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.InboundServiceType inbound_services = 6;</code>
     */
    public function setInboundServices(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Appengine\V1\InboundServiceType::class);
        $this->inbound_services = $arr;
    }

    /**
     * <pre>
     * Instance class that is used to run this version. Valid values are:
     * * AutomaticScaling: `F1`, `F2`, `F4`, `F4_1G`
     * * ManualScaling or BasicScaling: `B1`, `B2`, `B4`, `B8`, `B4_1G`
     * Defaults to `F1` for AutomaticScaling and `B1` for ManualScaling or
     * BasicScaling.
     * </pre>
     *
     * <code>string instance_class = 7;</code>
     */
    public function getInstanceClass()
    {
        return $this->instance_class;
    }

    /**
     * <pre>
     * Instance class that is used to run this version. Valid values are:
     * * AutomaticScaling: `F1`, `F2`, `F4`, `F4_1G`
     * * ManualScaling or BasicScaling: `B1`, `B2`, `B4`, `B8`, `B4_1G`
     * Defaults to `F1` for AutomaticScaling and `B1` for ManualScaling or
     * BasicScaling.
     * </pre>
     *
     * <code>string instance_class = 7;</code>
     */
    public function setInstanceClass($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_class = $var;
    }

    /**
     * <pre>
     * Extra network settings. Only applicable for VM runtimes.
     * </pre>
     *
     * <code>.google.appengine.v1.Network network = 8;</code>
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * <pre>
     * Extra network settings. Only applicable for VM runtimes.
     * </pre>
     *
     * <code>.google.appengine.v1.Network network = 8;</code>
     */
    public function setNetwork(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\Network::class);
        $this->network = $var;
    }

    /**
     * <pre>
     * Machine resources for this version. Only applicable for VM runtimes.
     * </pre>
     *
     * <code>.google.appengine.v1.Resources resources = 9;</code>
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * <pre>
     * Machine resources for this version. Only applicable for VM runtimes.
     * </pre>
     *
     * <code>.google.appengine.v1.Resources resources = 9;</code>
     */
    public function setResources(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\Resources::class);
        $this->resources = $var;
    }

    /**
     * <pre>
     * Desired runtime. Example: `python27`.
     * </pre>
     *
     * <code>string runtime = 10;</code>
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * <pre>
     * Desired runtime. Example: `python27`.
     * </pre>
     *
     * <code>string runtime = 10;</code>
     */
    public function setRuntime($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime = $var;
    }

    /**
     * <pre>
     * Whether multiple requests can be dispatched to this version at once.
     * </pre>
     *
     * <code>bool threadsafe = 11;</code>
     */
    public function getThreadsafe()
    {
        return $this->threadsafe;
    }

    /**
     * <pre>
     * Whether multiple requests can be dispatched to this version at once.
     * </pre>
     *
     * <code>bool threadsafe = 11;</code>
     */
    public function setThreadsafe($var)
    {
        GPBUtil::checkBool($var);
        $this->threadsafe = $var;
    }

    /**
     * <pre>
     * Whether to deploy this version in a container on a virtual machine.
     * </pre>
     *
     * <code>bool vm = 12;</code>
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * <pre>
     * Whether to deploy this version in a container on a virtual machine.
     * </pre>
     *
     * <code>bool vm = 12;</code>
     */
    public function setVm($var)
    {
        GPBUtil::checkBool($var);
        $this->vm = $var;
    }

    /**
     * <pre>
     * Metadata settings that are supplied to this version to enable
     * beta runtime features.
     * </pre>
     *
     * <code>map&lt;string, string&gt; beta_settings = 13;</code>
     */
    public function getBetaSettings()
    {
        return $this->beta_settings;
    }

    /**
     * <pre>
     * Metadata settings that are supplied to this version to enable
     * beta runtime features.
     * </pre>
     *
     * <code>map&lt;string, string&gt; beta_settings = 13;</code>
     */
    public function setBetaSettings(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->beta_settings = $arr;
    }

    /**
     * <pre>
     * App Engine execution environment for this version.
     * Defaults to `standard`.
     * </pre>
     *
     * <code>string env = 14;</code>
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * <pre>
     * App Engine execution environment for this version.
     * Defaults to `standard`.
     * </pre>
     *
     * <code>string env = 14;</code>
     */
    public function setEnv($var)
    {
        GPBUtil::checkString($var, True);
        $this->env = $var;
    }

    /**
     * <pre>
     * Current serving status of this version. Only the versions with a
     * `SERVING` status create instances and can be billed.
     * `SERVING_STATUS_UNSPECIFIED` is an invalid value. Defaults to `SERVING`.
     * </pre>
     *
     * <code>.google.appengine.v1.ServingStatus serving_status = 15;</code>
     */
    public function getServingStatus()
    {
        return $this->serving_status;
    }

    /**
     * <pre>
     * Current serving status of this version. Only the versions with a
     * `SERVING` status create instances and can be billed.
     * `SERVING_STATUS_UNSPECIFIED` is an invalid value. Defaults to `SERVING`.
     * </pre>
     *
     * <code>.google.appengine.v1.ServingStatus serving_status = 15;</code>
     */
    public function setServingStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Appengine\V1\ServingStatus::class);
        $this->serving_status = $var;
    }

    /**
     * <pre>
     * Email address of the user who created this version.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string created_by = 16;</code>
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * <pre>
     * Email address of the user who created this version.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string created_by = 16;</code>
     */
    public function setCreatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_by = $var;
    }

    /**
     * <pre>
     * Time that this version was created.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 17;</code>
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * <pre>
     * Time that this version was created.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 17;</code>
     */
    public function setCreateTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;
    }

    /**
     * <pre>
     * Total size in bytes of all the files that are included in this version
     * and curerntly hosted on the App Engine disk.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>int64 disk_usage_bytes = 18;</code>
     */
    public function getDiskUsageBytes()
    {
        return $this->disk_usage_bytes;
    }

    /**
     * <pre>
     * Total size in bytes of all the files that are included in this version
     * and curerntly hosted on the App Engine disk.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>int64 disk_usage_bytes = 18;</code>
     */
    public function setDiskUsageBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->disk_usage_bytes = $var;
    }

    /**
     * <pre>
     * An ordered list of URL-matching patterns that should be applied to incoming
     * requests. The first matching URL handles the request and other request
     * handlers are not attempted.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.UrlMap handlers = 100;</code>
     */
    public function getHandlers()
    {
        return $this->handlers;
    }

    /**
     * <pre>
     * An ordered list of URL-matching patterns that should be applied to incoming
     * requests. The first matching URL handles the request and other request
     * handlers are not attempted.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.UrlMap handlers = 100;</code>
     */
    public function setHandlers(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Appengine\V1\UrlMap::class);
        $this->handlers = $arr;
    }

    /**
     * <pre>
     * Custom static error pages. Limited to 10KB per page.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.ErrorHandler error_handlers = 101;</code>
     */
    public function getErrorHandlers()
    {
        return $this->error_handlers;
    }

    /**
     * <pre>
     * Custom static error pages. Limited to 10KB per page.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.ErrorHandler error_handlers = 101;</code>
     */
    public function setErrorHandlers(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Appengine\V1\ErrorHandler::class);
        $this->error_handlers = $arr;
    }

    /**
     * <pre>
     * Configuration for third-party Python runtime libraries that are required
     * by the application.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.Library libraries = 102;</code>
     */
    public function getLibraries()
    {
        return $this->libraries;
    }

    /**
     * <pre>
     * Configuration for third-party Python runtime libraries that are required
     * by the application.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>repeated .google.appengine.v1.Library libraries = 102;</code>
     */
    public function setLibraries(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Appengine\V1\Library::class);
        $this->libraries = $arr;
    }

    /**
     * <pre>
     * Serving configuration for
     * [Google Cloud Endpoints](https://cloud.google.com/appengine/docs/python/endpoints/).
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.appengine.v1.ApiConfigHandler api_config = 103;</code>
     */
    public function getApiConfig()
    {
        return $this->api_config;
    }

    /**
     * <pre>
     * Serving configuration for
     * [Google Cloud Endpoints](https://cloud.google.com/appengine/docs/python/endpoints/).
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.appengine.v1.ApiConfigHandler api_config = 103;</code>
     */
    public function setApiConfig(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\ApiConfigHandler::class);
        $this->api_config = $var;
    }

    /**
     * <pre>
     * Environment variables available to the application.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>map&lt;string, string&gt; env_variables = 104;</code>
     */
    public function getEnvVariables()
    {
        return $this->env_variables;
    }

    /**
     * <pre>
     * Environment variables available to the application.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>map&lt;string, string&gt; env_variables = 104;</code>
     */
    public function setEnvVariables(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->env_variables = $arr;
    }

    /**
     * <pre>
     * Duration that static files should be cached by web proxies and browsers.
     * Only applicable if the corresponding
     * [StaticFilesHandler](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#staticfileshandler)
     * does not specify its own expiration time.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.protobuf.Duration default_expiration = 105;</code>
     */
    public function getDefaultExpiration()
    {
        return $this->default_expiration;
    }

    /**
     * <pre>
     * Duration that static files should be cached by web proxies and browsers.
     * Only applicable if the corresponding
     * [StaticFilesHandler](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#staticfileshandler)
     * does not specify its own expiration time.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.protobuf.Duration default_expiration = 105;</code>
     */
    public function setDefaultExpiration(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->default_expiration = $var;
    }

    /**
     * <pre>
     * Configures health checking for VM instances. Unhealthy instances are
     * stopped and replaced with new instances. Only applicable for VM
     * runtimes.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.appengine.v1.HealthCheck health_check = 106;</code>
     */
    public function getHealthCheck()
    {
        return $this->health_check;
    }

    /**
     * <pre>
     * Configures health checking for VM instances. Unhealthy instances are
     * stopped and replaced with new instances. Only applicable for VM
     * runtimes.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.appengine.v1.HealthCheck health_check = 106;</code>
     */
    public function setHealthCheck(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\HealthCheck::class);
        $this->health_check = $var;
    }

    /**
     * <pre>
     * Files that match this pattern will not be built into this version.
     * Only applicable for Go runtimes.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>string nobuild_files_regex = 107;</code>
     */
    public function getNobuildFilesRegex()
    {
        return $this->nobuild_files_regex;
    }

    /**
     * <pre>
     * Files that match this pattern will not be built into this version.
     * Only applicable for Go runtimes.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>string nobuild_files_regex = 107;</code>
     */
    public function setNobuildFilesRegex($var)
    {
        GPBUtil::checkString($var, True);
        $this->nobuild_files_regex = $var;
    }

    /**
     * <pre>
     * Code and application artifacts that make up this version.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.appengine.v1.Deployment deployment = 108;</code>
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    /**
     * <pre>
     * Code and application artifacts that make up this version.
     * Only returned in `GET` requests if `view=FULL` is set.
     * </pre>
     *
     * <code>.google.appengine.v1.Deployment deployment = 108;</code>
     */
    public function setDeployment(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\Deployment::class);
        $this->deployment = $var;
    }

    /**
     * <pre>
     * Serving URL for this version. Example:
     * "https://myversion-dot-myservice-dot-myapp.appspot.com"
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string version_url = 109;</code>
     */
    public function getVersionUrl()
    {
        return $this->version_url;
    }

    /**
     * <pre>
     * Serving URL for this version. Example:
     * "https://myversion-dot-myservice-dot-myapp.appspot.com"
     * &#64;OutputOnly
     * </pre>
     *
     * <code>string version_url = 109;</code>
     */
    public function setVersionUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_url = $var;
    }

    public function getScaling()
    {
        return $this->whichOneof("scaling");
    }

}

