<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1beta1/job_service.proto

namespace Google\Cloud\Ml\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents results of a training job. Output only.
 * </pre>
 *
 * Protobuf type <code>google.cloud.ml.v1beta1.TrainingOutput</code>
 */
class TrainingOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The number of hyperparameter tuning trials that completed successfully.
     * Only set for hyperparameter tuning jobs.
     * </pre>
     *
     * <code>int64 completed_trial_count = 1;</code>
     */
    private $completed_trial_count = 0;
    /**
     * <pre>
     * Results for individual Hyperparameter trials.
     * Only set for hyperparameter tuning jobs.
     * </pre>
     *
     * <code>repeated .google.cloud.ml.v1beta1.HyperparameterOutput trials = 2;</code>
     */
    private $trials;
    /**
     * <pre>
     * The amount of ML units consumed by the job.
     * </pre>
     *
     * <code>double consumed_ml_units = 3;</code>
     */
    private $consumed_ml_units = 0.0;
    /**
     * <pre>
     * Whether this job is a hyperparameter tuning job.
     * </pre>
     *
     * <code>bool is_hyperparameter_tuning_job = 4;</code>
     */
    private $is_hyperparameter_tuning_job = false;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1Beta1\JobService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The number of hyperparameter tuning trials that completed successfully.
     * Only set for hyperparameter tuning jobs.
     * </pre>
     *
     * <code>int64 completed_trial_count = 1;</code>
     */
    public function getCompletedTrialCount()
    {
        return $this->completed_trial_count;
    }

    /**
     * <pre>
     * The number of hyperparameter tuning trials that completed successfully.
     * Only set for hyperparameter tuning jobs.
     * </pre>
     *
     * <code>int64 completed_trial_count = 1;</code>
     */
    public function setCompletedTrialCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->completed_trial_count = $var;
    }

    /**
     * <pre>
     * Results for individual Hyperparameter trials.
     * Only set for hyperparameter tuning jobs.
     * </pre>
     *
     * <code>repeated .google.cloud.ml.v1beta1.HyperparameterOutput trials = 2;</code>
     */
    public function getTrials()
    {
        return $this->trials;
    }

    /**
     * <pre>
     * Results for individual Hyperparameter trials.
     * Only set for hyperparameter tuning jobs.
     * </pre>
     *
     * <code>repeated .google.cloud.ml.v1beta1.HyperparameterOutput trials = 2;</code>
     */
    public function setTrials(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Ml\V1beta1\HyperparameterOutput::class);
        $this->trials = $arr;
    }

    /**
     * <pre>
     * The amount of ML units consumed by the job.
     * </pre>
     *
     * <code>double consumed_ml_units = 3;</code>
     */
    public function getConsumedMlUnits()
    {
        return $this->consumed_ml_units;
    }

    /**
     * <pre>
     * The amount of ML units consumed by the job.
     * </pre>
     *
     * <code>double consumed_ml_units = 3;</code>
     */
    public function setConsumedMlUnits($var)
    {
        GPBUtil::checkDouble($var);
        $this->consumed_ml_units = $var;
    }

    /**
     * <pre>
     * Whether this job is a hyperparameter tuning job.
     * </pre>
     *
     * <code>bool is_hyperparameter_tuning_job = 4;</code>
     */
    public function getIsHyperparameterTuningJob()
    {
        return $this->is_hyperparameter_tuning_job;
    }

    /**
     * <pre>
     * Whether this job is a hyperparameter tuning job.
     * </pre>
     *
     * <code>bool is_hyperparameter_tuning_job = 4;</code>
     */
    public function setIsHyperparameterTuningJob($var)
    {
        GPBUtil::checkBool($var);
        $this->is_hyperparameter_tuning_job = $var;
    }

}

