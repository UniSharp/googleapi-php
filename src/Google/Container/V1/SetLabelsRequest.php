<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * SetLabelsRequest sets the Google Cloud Platform labels on a Google Container
 * Engine cluster, which will in turn set them for Google Compute Engine
 * resources used by that cluster
 * </pre>
 *
 * Protobuf type <code>google.container.v1.SetLabelsRequest</code>
 */
class SetLabelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * <pre>
     * The name of the cluster.
     * </pre>
     *
     * <code>string cluster_id = 3;</code>
     */
    private $cluster_id = '';
    /**
     * <pre>
     * The labels to set for that cluster.
     * </pre>
     *
     * <code>map&lt;string, string&gt; resource_labels = 4;</code>
     */
    private $resource_labels;
    /**
     * <pre>
     * The fingerprint of the previous set of labels for this resource,
     * used to detect conflicts. The fingerprint is initially generated by
     * Container Engine and changes after every request to modify or update
     * labels. You must always provide an up-to-date fingerprint hash when
     * updating or changing labels. Make a &lt;code&gt;get()&lt;/code&gt; request to the
     * resource to get the latest fingerprint.
     * </pre>
     *
     * <code>string label_fingerprint = 5;</code>
     */
    private $label_fingerprint = '';

    public function __construct() {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
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
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
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
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * <pre>
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * </pre>
     *
     * <code>string zone = 2;</code>
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;
    }

    /**
     * <pre>
     * The name of the cluster.
     * </pre>
     *
     * <code>string cluster_id = 3;</code>
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * <pre>
     * The name of the cluster.
     * </pre>
     *
     * <code>string cluster_id = 3;</code>
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;
    }

    /**
     * <pre>
     * The labels to set for that cluster.
     * </pre>
     *
     * <code>map&lt;string, string&gt; resource_labels = 4;</code>
     */
    public function getResourceLabels()
    {
        return $this->resource_labels;
    }

    /**
     * <pre>
     * The labels to set for that cluster.
     * </pre>
     *
     * <code>map&lt;string, string&gt; resource_labels = 4;</code>
     */
    public function setResourceLabels(&$var)
    {
        $this->resource_labels = $var;
    }

    /**
     * <pre>
     * The fingerprint of the previous set of labels for this resource,
     * used to detect conflicts. The fingerprint is initially generated by
     * Container Engine and changes after every request to modify or update
     * labels. You must always provide an up-to-date fingerprint hash when
     * updating or changing labels. Make a &lt;code&gt;get()&lt;/code&gt; request to the
     * resource to get the latest fingerprint.
     * </pre>
     *
     * <code>string label_fingerprint = 5;</code>
     */
    public function getLabelFingerprint()
    {
        return $this->label_fingerprint;
    }

    /**
     * <pre>
     * The fingerprint of the previous set of labels for this resource,
     * used to detect conflicts. The fingerprint is initially generated by
     * Container Engine and changes after every request to modify or update
     * labels. You must always provide an up-to-date fingerprint hash when
     * updating or changing labels. Make a &lt;code&gt;get()&lt;/code&gt; request to the
     * resource to get the latest fingerprint.
     * </pre>
     *
     * <code>string label_fingerprint = 5;</code>
     */
    public function setLabelFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->label_fingerprint = $var;
    }

}
