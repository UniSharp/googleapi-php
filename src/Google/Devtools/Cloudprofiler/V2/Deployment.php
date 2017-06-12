<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudprofiler/v2/profiler.proto

namespace Google\Devtools\Cloudprofiler\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Deployment contains the deployment identification information.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudprofiler.v2.Deployment</code>
 */
class Deployment extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Project ID is the ID of a cloud project.
     * Validation regex: `^[a-z][-a-z0-9:.]{4,61}[a-z0-9]$`.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * Target is the service name used to group related deployments:
     * * Service name for GAE Flex / Standard.
     * * Cluster and container name for GKE.
     * * User-specified string for direct GCE profiling (e.g. Java).
     * * Job name for Dataflow.
     * Validation regex: `^[a-z]([-a-z0-9_.]{0,253}[a-z0-9])?$`.
     * </pre>
     *
     * <code>string target = 2;</code>
     */
    private $target = '';
    /**
     * <pre>
     * Labels identify the deployment within the user universe and same target.
     * Validation regex for label names: `^[a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?$`.
     * Value for an individual label must be &lt;= 512 bytes, the total
     * size of all label names and values must be &lt;= 1024 bytes.
     * Either "zone" or "region" label must be present describing the deployment
     * location. An example of a zone is "us-central1-a", an example of a region
     * is "us-central1" or "us-central".
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 3;</code>
     */
    private $labels;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudprofiler\V2\Profiler::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Project ID is the ID of a cloud project.
     * Validation regex: `^[a-z][-a-z0-9:.]{4,61}[a-z0-9]$`.
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
     * Project ID is the ID of a cloud project.
     * Validation regex: `^[a-z][-a-z0-9:.]{4,61}[a-z0-9]$`.
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
     * Target is the service name used to group related deployments:
     * * Service name for GAE Flex / Standard.
     * * Cluster and container name for GKE.
     * * User-specified string for direct GCE profiling (e.g. Java).
     * * Job name for Dataflow.
     * Validation regex: `^[a-z]([-a-z0-9_.]{0,253}[a-z0-9])?$`.
     * </pre>
     *
     * <code>string target = 2;</code>
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * <pre>
     * Target is the service name used to group related deployments:
     * * Service name for GAE Flex / Standard.
     * * Cluster and container name for GKE.
     * * User-specified string for direct GCE profiling (e.g. Java).
     * * Job name for Dataflow.
     * Validation regex: `^[a-z]([-a-z0-9_.]{0,253}[a-z0-9])?$`.
     * </pre>
     *
     * <code>string target = 2;</code>
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;
    }

    /**
     * <pre>
     * Labels identify the deployment within the user universe and same target.
     * Validation regex for label names: `^[a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?$`.
     * Value for an individual label must be &lt;= 512 bytes, the total
     * size of all label names and values must be &lt;= 1024 bytes.
     * Either "zone" or "region" label must be present describing the deployment
     * location. An example of a zone is "us-central1-a", an example of a region
     * is "us-central1" or "us-central".
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 3;</code>
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * <pre>
     * Labels identify the deployment within the user universe and same target.
     * Validation regex for label names: `^[a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?$`.
     * Value for an individual label must be &lt;= 512 bytes, the total
     * size of all label names and values must be &lt;= 1024 bytes.
     * Either "zone" or "region" label must be present describing the deployment
     * location. An example of a zone is "us-central1-a", an example of a region
     * is "us-central1" or "us-central".
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 3;</code>
     */
    public function setLabels(&$var)
    {
        $this->labels = $var;
    }

}

