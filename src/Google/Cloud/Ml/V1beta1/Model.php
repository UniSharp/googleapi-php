<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1beta1/model_service.proto

namespace Google\Cloud\Ml\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents a machine learning solution.
 * A model can have multiple versions, each of which is a deployed, trained
 * model ready to receive prediction requests. The model itself is just a
 * container.
 * </pre>
 *
 * Protobuf type <code>google.cloud.ml.v1beta1.Model</code>
 */
class Model extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The name specified for the model when it was created.
     * The model name must be unique within the project it is created in.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Optional. The description specified for the model when it was created.
     * </pre>
     *
     * <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * <pre>
     * Output only. The default version of the model. This version will be used to
     * handle prediction requests that do not specify a version.
     * You can change the default version by calling
     * [projects.methods.versions.setDefault](/ml/reference/rest/v1beta1/projects.models.versions/setDefault).
     * </pre>
     *
     * <code>.google.cloud.ml.v1beta1.Version default_version = 3;</code>
     */
    private $default_version = null;
    /**
     * <pre>
     * Optional. The list of regions where the model is going to be deployed.
     * Currently only one region per model is supported.
     * Defaults to 'us-central1' if nothing is set.
     * </pre>
     *
     * <code>repeated string regions = 4;</code>
     */
    private $regions;
    /**
     * <pre>
     * Optional. If true, enables StackDriver Logging for online prediction.
     * Default is false.
     * </pre>
     *
     * <code>bool online_prediction_logging = 5;</code>
     */
    private $online_prediction_logging = false;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1Beta1\ModelService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The name specified for the model when it was created.
     * The model name must be unique within the project it is created in.
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
     * Required. The name specified for the model when it was created.
     * The model name must be unique within the project it is created in.
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
     * Optional. The description specified for the model when it was created.
     * </pre>
     *
     * <code>string description = 2;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Optional. The description specified for the model when it was created.
     * </pre>
     *
     * <code>string description = 2;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <pre>
     * Output only. The default version of the model. This version will be used to
     * handle prediction requests that do not specify a version.
     * You can change the default version by calling
     * [projects.methods.versions.setDefault](/ml/reference/rest/v1beta1/projects.models.versions/setDefault).
     * </pre>
     *
     * <code>.google.cloud.ml.v1beta1.Version default_version = 3;</code>
     */
    public function getDefaultVersion()
    {
        return $this->default_version;
    }

    /**
     * <pre>
     * Output only. The default version of the model. This version will be used to
     * handle prediction requests that do not specify a version.
     * You can change the default version by calling
     * [projects.methods.versions.setDefault](/ml/reference/rest/v1beta1/projects.models.versions/setDefault).
     * </pre>
     *
     * <code>.google.cloud.ml.v1beta1.Version default_version = 3;</code>
     */
    public function setDefaultVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Ml\V1beta1\Version::class);
        $this->default_version = $var;
    }

    /**
     * <pre>
     * Optional. The list of regions where the model is going to be deployed.
     * Currently only one region per model is supported.
     * Defaults to 'us-central1' if nothing is set.
     * </pre>
     *
     * <code>repeated string regions = 4;</code>
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * <pre>
     * Optional. The list of regions where the model is going to be deployed.
     * Currently only one region per model is supported.
     * Defaults to 'us-central1' if nothing is set.
     * </pre>
     *
     * <code>repeated string regions = 4;</code>
     */
    public function setRegions(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->regions = $var;
    }

    /**
     * <pre>
     * Optional. If true, enables StackDriver Logging for online prediction.
     * Default is false.
     * </pre>
     *
     * <code>bool online_prediction_logging = 5;</code>
     */
    public function getOnlinePredictionLogging()
    {
        return $this->online_prediction_logging;
    }

    /**
     * <pre>
     * Optional. If true, enables StackDriver Logging for online prediction.
     * Default is false.
     * </pre>
     *
     * <code>bool online_prediction_logging = 5;</code>
     */
    public function setOnlinePredictionLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->online_prediction_logging = $var;
    }

}

