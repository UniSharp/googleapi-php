<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/job_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents input parameters for a training job.
 * </pre>
 *
 * Protobuf type <code>google.cloud.ml.v1.TrainingInput</code>
 */
class TrainingInput extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. Specifies the machine types, the number of replicas for workers
     * and parameter servers.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.TrainingInput.ScaleTier scale_tier = 1;</code>
     */
    private $scale_tier = 0;
    /**
     * <pre>
     * Optional. Specifies the type of virtual machine to use for your training
     * job's master worker.
     * The following types are supported:
     * &lt;dl&gt;
     *   &lt;dt&gt;standard&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A basic machine configuration suitable for training simple models with
     *   small to moderate datasets.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;large_model&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine with a lot of memory, specially suited for parameter servers
     *   when your model is large (having many hidden layers or layers with very
     *   large numbers of nodes).
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_s&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine suitable for the master and workers of the cluster when your
     *   model requires more computation than the standard machine can handle
     *   satisfactorily.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_m&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine with roughly twice the number of cores and roughly double the
     *   memory of &lt;code suppresswarning="true"&gt;complex_model_s&lt;/code&gt;.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_l&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine with roughly twice the number of cores and roughly double the
     *   memory of &lt;code suppresswarning="true"&gt;complex_model_m&lt;/code&gt;.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;standard_gpu&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine equivalent to &lt;code suppresswarning="true"&gt;standard&lt;/code&gt; that
     *   also includes a
     *   &lt;a href="ml/docs/how-tos/using-gpus"&gt;
     *   GPU that you can use in your trainer&lt;/a&gt;.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_m_gpu&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine equivalent to
     *   &lt;code suppresswarning="true"&gt;coplex_model_m&lt;/code&gt; that also includes
     *   four GPUs.
     *   &lt;/dd&gt;
     * &lt;/dl&gt;
     * You must set this value when `scaleTier` is set to `CUSTOM`.
     * </pre>
     *
     * <code>string master_type = 2;</code>
     */
    private $master_type = '';
    /**
     * <pre>
     * Optional. Specifies the type of virtual machine to use for your training
     * job's worker nodes.
     * The supported values are the same as those described in the entry for
     * `masterType`.
     * This value must be present when `scaleTier` is set to `CUSTOM` and
     * `workerCount` is greater than zero.
     * </pre>
     *
     * <code>string worker_type = 3;</code>
     */
    private $worker_type = '';
    /**
     * <pre>
     * Optional. Specifies the type of virtual machine to use for your training
     * job's parameter server.
     * The supported values are the same as those described in the entry for
     * `master_type`.
     * This value must be present when `scaleTier` is set to `CUSTOM` and
     * `parameter_server_count` is greater than zero.
     * </pre>
     *
     * <code>string parameter_server_type = 4;</code>
     */
    private $parameter_server_type = '';
    /**
     * <pre>
     * Optional. The number of worker replicas to use for the training job. Each
     * replica in the cluster will be of the type specified in `worker_type`.
     * This value can only be used when `scale_tier` is set to `CUSTOM`. If you
     * set this value, you must also set `worker_type`.
     * </pre>
     *
     * <code>int64 worker_count = 5;</code>
     */
    private $worker_count = 0;
    /**
     * <pre>
     * Optional. The number of parameter server replicas to use for the training
     * job. Each replica in the cluster will be of the type specified in
     * `parameter_server_type`.
     * This value can only be used when `scale_tier` is set to `CUSTOM`.If you
     * set this value, you must also set `parameter_server_type`.
     * </pre>
     *
     * <code>int64 parameter_server_count = 6;</code>
     */
    private $parameter_server_count = 0;
    /**
     * <pre>
     * Required. The Google Cloud Storage location of the packages with
     * the training program and any additional dependencies.
     * </pre>
     *
     * <code>repeated string package_uris = 7;</code>
     */
    private $package_uris;
    /**
     * <pre>
     * Required. The Python module name to run after installing the packages.
     * </pre>
     *
     * <code>string python_module = 8;</code>
     */
    private $python_module = '';
    /**
     * <pre>
     * Optional. Command line arguments to pass to the program.
     * </pre>
     *
     * <code>repeated string args = 10;</code>
     */
    private $args;
    /**
     * <pre>
     * Optional. The set of Hyperparameters to tune.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.HyperparameterSpec hyperparameters = 12;</code>
     */
    private $hyperparameters = null;
    /**
     * <pre>
     * Required. The Google Compute Engine region to run the training job in.
     * </pre>
     *
     * <code>string region = 14;</code>
     */
    private $region = '';
    /**
     * <pre>
     * Optional. A Google Cloud Storage path in which to store training outputs
     * and other data needed for training. This path is passed to your TensorFlow
     * program as the 'job_dir' command-line argument. The benefit of specifying
     * this field is that Cloud ML validates the path for use in training.
     * </pre>
     *
     * <code>string job_dir = 16;</code>
     */
    private $job_dir = '';
    /**
     * <pre>
     * Optional. The Google Cloud ML runtime version to use for training.  If not
     * set, Google Cloud ML will choose the latest stable version.
     * </pre>
     *
     * <code>string runtime_version = 15;</code>
     */
    private $runtime_version = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1\JobService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. Specifies the machine types, the number of replicas for workers
     * and parameter servers.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.TrainingInput.ScaleTier scale_tier = 1;</code>
     */
    public function getScaleTier()
    {
        return $this->scale_tier;
    }

    /**
     * <pre>
     * Required. Specifies the machine types, the number of replicas for workers
     * and parameter servers.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.TrainingInput.ScaleTier scale_tier = 1;</code>
     */
    public function setScaleTier($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Ml\V1\TrainingInput_ScaleTier::class);
        $this->scale_tier = $var;
    }

    /**
     * <pre>
     * Optional. Specifies the type of virtual machine to use for your training
     * job's master worker.
     * The following types are supported:
     * &lt;dl&gt;
     *   &lt;dt&gt;standard&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A basic machine configuration suitable for training simple models with
     *   small to moderate datasets.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;large_model&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine with a lot of memory, specially suited for parameter servers
     *   when your model is large (having many hidden layers or layers with very
     *   large numbers of nodes).
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_s&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine suitable for the master and workers of the cluster when your
     *   model requires more computation than the standard machine can handle
     *   satisfactorily.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_m&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine with roughly twice the number of cores and roughly double the
     *   memory of &lt;code suppresswarning="true"&gt;complex_model_s&lt;/code&gt;.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_l&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine with roughly twice the number of cores and roughly double the
     *   memory of &lt;code suppresswarning="true"&gt;complex_model_m&lt;/code&gt;.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;standard_gpu&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine equivalent to &lt;code suppresswarning="true"&gt;standard&lt;/code&gt; that
     *   also includes a
     *   &lt;a href="ml/docs/how-tos/using-gpus"&gt;
     *   GPU that you can use in your trainer&lt;/a&gt;.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_m_gpu&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine equivalent to
     *   &lt;code suppresswarning="true"&gt;coplex_model_m&lt;/code&gt; that also includes
     *   four GPUs.
     *   &lt;/dd&gt;
     * &lt;/dl&gt;
     * You must set this value when `scaleTier` is set to `CUSTOM`.
     * </pre>
     *
     * <code>string master_type = 2;</code>
     */
    public function getMasterType()
    {
        return $this->master_type;
    }

    /**
     * <pre>
     * Optional. Specifies the type of virtual machine to use for your training
     * job's master worker.
     * The following types are supported:
     * &lt;dl&gt;
     *   &lt;dt&gt;standard&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A basic machine configuration suitable for training simple models with
     *   small to moderate datasets.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;large_model&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine with a lot of memory, specially suited for parameter servers
     *   when your model is large (having many hidden layers or layers with very
     *   large numbers of nodes).
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_s&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine suitable for the master and workers of the cluster when your
     *   model requires more computation than the standard machine can handle
     *   satisfactorily.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_m&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine with roughly twice the number of cores and roughly double the
     *   memory of &lt;code suppresswarning="true"&gt;complex_model_s&lt;/code&gt;.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_l&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine with roughly twice the number of cores and roughly double the
     *   memory of &lt;code suppresswarning="true"&gt;complex_model_m&lt;/code&gt;.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;standard_gpu&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine equivalent to &lt;code suppresswarning="true"&gt;standard&lt;/code&gt; that
     *   also includes a
     *   &lt;a href="ml/docs/how-tos/using-gpus"&gt;
     *   GPU that you can use in your trainer&lt;/a&gt;.
     *   &lt;/dd&gt;
     *   &lt;dt&gt;complex_model_m_gpu&lt;/dt&gt;
     *   &lt;dd&gt;
     *   A machine equivalent to
     *   &lt;code suppresswarning="true"&gt;coplex_model_m&lt;/code&gt; that also includes
     *   four GPUs.
     *   &lt;/dd&gt;
     * &lt;/dl&gt;
     * You must set this value when `scaleTier` is set to `CUSTOM`.
     * </pre>
     *
     * <code>string master_type = 2;</code>
     */
    public function setMasterType($var)
    {
        GPBUtil::checkString($var, True);
        $this->master_type = $var;
    }

    /**
     * <pre>
     * Optional. Specifies the type of virtual machine to use for your training
     * job's worker nodes.
     * The supported values are the same as those described in the entry for
     * `masterType`.
     * This value must be present when `scaleTier` is set to `CUSTOM` and
     * `workerCount` is greater than zero.
     * </pre>
     *
     * <code>string worker_type = 3;</code>
     */
    public function getWorkerType()
    {
        return $this->worker_type;
    }

    /**
     * <pre>
     * Optional. Specifies the type of virtual machine to use for your training
     * job's worker nodes.
     * The supported values are the same as those described in the entry for
     * `masterType`.
     * This value must be present when `scaleTier` is set to `CUSTOM` and
     * `workerCount` is greater than zero.
     * </pre>
     *
     * <code>string worker_type = 3;</code>
     */
    public function setWorkerType($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_type = $var;
    }

    /**
     * <pre>
     * Optional. Specifies the type of virtual machine to use for your training
     * job's parameter server.
     * The supported values are the same as those described in the entry for
     * `master_type`.
     * This value must be present when `scaleTier` is set to `CUSTOM` and
     * `parameter_server_count` is greater than zero.
     * </pre>
     *
     * <code>string parameter_server_type = 4;</code>
     */
    public function getParameterServerType()
    {
        return $this->parameter_server_type;
    }

    /**
     * <pre>
     * Optional. Specifies the type of virtual machine to use for your training
     * job's parameter server.
     * The supported values are the same as those described in the entry for
     * `master_type`.
     * This value must be present when `scaleTier` is set to `CUSTOM` and
     * `parameter_server_count` is greater than zero.
     * </pre>
     *
     * <code>string parameter_server_type = 4;</code>
     */
    public function setParameterServerType($var)
    {
        GPBUtil::checkString($var, True);
        $this->parameter_server_type = $var;
    }

    /**
     * <pre>
     * Optional. The number of worker replicas to use for the training job. Each
     * replica in the cluster will be of the type specified in `worker_type`.
     * This value can only be used when `scale_tier` is set to `CUSTOM`. If you
     * set this value, you must also set `worker_type`.
     * </pre>
     *
     * <code>int64 worker_count = 5;</code>
     */
    public function getWorkerCount()
    {
        return $this->worker_count;
    }

    /**
     * <pre>
     * Optional. The number of worker replicas to use for the training job. Each
     * replica in the cluster will be of the type specified in `worker_type`.
     * This value can only be used when `scale_tier` is set to `CUSTOM`. If you
     * set this value, you must also set `worker_type`.
     * </pre>
     *
     * <code>int64 worker_count = 5;</code>
     */
    public function setWorkerCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->worker_count = $var;
    }

    /**
     * <pre>
     * Optional. The number of parameter server replicas to use for the training
     * job. Each replica in the cluster will be of the type specified in
     * `parameter_server_type`.
     * This value can only be used when `scale_tier` is set to `CUSTOM`.If you
     * set this value, you must also set `parameter_server_type`.
     * </pre>
     *
     * <code>int64 parameter_server_count = 6;</code>
     */
    public function getParameterServerCount()
    {
        return $this->parameter_server_count;
    }

    /**
     * <pre>
     * Optional. The number of parameter server replicas to use for the training
     * job. Each replica in the cluster will be of the type specified in
     * `parameter_server_type`.
     * This value can only be used when `scale_tier` is set to `CUSTOM`.If you
     * set this value, you must also set `parameter_server_type`.
     * </pre>
     *
     * <code>int64 parameter_server_count = 6;</code>
     */
    public function setParameterServerCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->parameter_server_count = $var;
    }

    /**
     * <pre>
     * Required. The Google Cloud Storage location of the packages with
     * the training program and any additional dependencies.
     * </pre>
     *
     * <code>repeated string package_uris = 7;</code>
     */
    public function getPackageUris()
    {
        return $this->package_uris;
    }

    /**
     * <pre>
     * Required. The Google Cloud Storage location of the packages with
     * the training program and any additional dependencies.
     * </pre>
     *
     * <code>repeated string package_uris = 7;</code>
     */
    public function setPackageUris(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->package_uris = $var;
    }

    /**
     * <pre>
     * Required. The Python module name to run after installing the packages.
     * </pre>
     *
     * <code>string python_module = 8;</code>
     */
    public function getPythonModule()
    {
        return $this->python_module;
    }

    /**
     * <pre>
     * Required. The Python module name to run after installing the packages.
     * </pre>
     *
     * <code>string python_module = 8;</code>
     */
    public function setPythonModule($var)
    {
        GPBUtil::checkString($var, True);
        $this->python_module = $var;
    }

    /**
     * <pre>
     * Optional. Command line arguments to pass to the program.
     * </pre>
     *
     * <code>repeated string args = 10;</code>
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * <pre>
     * Optional. Command line arguments to pass to the program.
     * </pre>
     *
     * <code>repeated string args = 10;</code>
     */
    public function setArgs(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $var;
    }

    /**
     * <pre>
     * Optional. The set of Hyperparameters to tune.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.HyperparameterSpec hyperparameters = 12;</code>
     */
    public function getHyperparameters()
    {
        return $this->hyperparameters;
    }

    /**
     * <pre>
     * Optional. The set of Hyperparameters to tune.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.HyperparameterSpec hyperparameters = 12;</code>
     */
    public function setHyperparameters(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Ml\V1\HyperparameterSpec::class);
        $this->hyperparameters = $var;
    }

    /**
     * <pre>
     * Required. The Google Compute Engine region to run the training job in.
     * </pre>
     *
     * <code>string region = 14;</code>
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * <pre>
     * Required. The Google Compute Engine region to run the training job in.
     * </pre>
     *
     * <code>string region = 14;</code>
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;
    }

    /**
     * <pre>
     * Optional. A Google Cloud Storage path in which to store training outputs
     * and other data needed for training. This path is passed to your TensorFlow
     * program as the 'job_dir' command-line argument. The benefit of specifying
     * this field is that Cloud ML validates the path for use in training.
     * </pre>
     *
     * <code>string job_dir = 16;</code>
     */
    public function getJobDir()
    {
        return $this->job_dir;
    }

    /**
     * <pre>
     * Optional. A Google Cloud Storage path in which to store training outputs
     * and other data needed for training. This path is passed to your TensorFlow
     * program as the 'job_dir' command-line argument. The benefit of specifying
     * this field is that Cloud ML validates the path for use in training.
     * </pre>
     *
     * <code>string job_dir = 16;</code>
     */
    public function setJobDir($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_dir = $var;
    }

    /**
     * <pre>
     * Optional. The Google Cloud ML runtime version to use for training.  If not
     * set, Google Cloud ML will choose the latest stable version.
     * </pre>
     *
     * <code>string runtime_version = 15;</code>
     */
    public function getRuntimeVersion()
    {
        return $this->runtime_version;
    }

    /**
     * <pre>
     * Optional. The Google Cloud ML runtime version to use for training.  If not
     * set, Google Cloud ML will choose the latest stable version.
     * </pre>
     *
     * <code>string runtime_version = 15;</code>
     */
    public function setRuntimeVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime_version = $var;
    }

}

