<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/job_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents a training or prediction job.
 * </pre>
 *
 * Protobuf type <code>google.cloud.ml.v1.Job</code>
 */
class Job extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The user-specified id of the job.
     * </pre>
     *
     * <code>string job_id = 1;</code>
     */
    private $job_id = '';
    /**
     * <pre>
     * Output only. When the job was created.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    private $create_time = null;
    /**
     * <pre>
     * Output only. When the job processing was started.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 5;</code>
     */
    private $start_time = null;
    /**
     * <pre>
     * Output only. When the job processing was completed.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 6;</code>
     */
    private $end_time = null;
    /**
     * <pre>
     * Output only. The detailed state of a job.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.Job.State state = 7;</code>
     */
    private $state = 0;
    /**
     * <pre>
     * Output only. The details of a failure or a cancellation.
     * </pre>
     *
     * <code>string error_message = 8;</code>
     */
    private $error_message = '';
    protected $input;
    protected $output;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1\JobService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The user-specified id of the job.
     * </pre>
     *
     * <code>string job_id = 1;</code>
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * <pre>
     * Required. The user-specified id of the job.
     * </pre>
     *
     * <code>string job_id = 1;</code>
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;
    }

    /**
     * <pre>
     * Input parameters to create a training job.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.TrainingInput training_input = 2;</code>
     */
    public function getTrainingInput()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * Input parameters to create a training job.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.TrainingInput training_input = 2;</code>
     */
    public function setTrainingInput(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Ml\V1\TrainingInput::class);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * Input parameters to create a prediction job.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.PredictionInput prediction_input = 3;</code>
     */
    public function getPredictionInput()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * Input parameters to create a prediction job.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.PredictionInput prediction_input = 3;</code>
     */
    public function setPredictionInput(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Ml\V1\PredictionInput::class);
        $this->writeOneof(3, $var);
    }

    /**
     * <pre>
     * Output only. When the job was created.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * <pre>
     * Output only. When the job was created.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    public function setCreateTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;
    }

    /**
     * <pre>
     * Output only. When the job processing was started.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 5;</code>
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * <pre>
     * Output only. When the job processing was started.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 5;</code>
     */
    public function setStartTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;
    }

    /**
     * <pre>
     * Output only. When the job processing was completed.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 6;</code>
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * <pre>
     * Output only. When the job processing was completed.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 6;</code>
     */
    public function setEndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;
    }

    /**
     * <pre>
     * Output only. The detailed state of a job.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.Job.State state = 7;</code>
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <pre>
     * Output only. The detailed state of a job.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.Job.State state = 7;</code>
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Ml\V1\Job_State::class);
        $this->state = $var;
    }

    /**
     * <pre>
     * Output only. The details of a failure or a cancellation.
     * </pre>
     *
     * <code>string error_message = 8;</code>
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * <pre>
     * Output only. The details of a failure or a cancellation.
     * </pre>
     *
     * <code>string error_message = 8;</code>
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;
    }

    /**
     * <pre>
     * The current training job result.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.TrainingOutput training_output = 9;</code>
     */
    public function getTrainingOutput()
    {
        return $this->readOneof(9);
    }

    /**
     * <pre>
     * The current training job result.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.TrainingOutput training_output = 9;</code>
     */
    public function setTrainingOutput(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Ml\V1\TrainingOutput::class);
        $this->writeOneof(9, $var);
    }

    /**
     * <pre>
     * The current prediction job result.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.PredictionOutput prediction_output = 10;</code>
     */
    public function getPredictionOutput()
    {
        return $this->readOneof(10);
    }

    /**
     * <pre>
     * The current prediction job result.
     * </pre>
     *
     * <code>.google.cloud.ml.v1.PredictionOutput prediction_output = 10;</code>
     */
    public function setPredictionOutput(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Ml\V1\PredictionOutput::class);
        $this->writeOneof(10, $var);
    }

    public function getInput()
    {
        return $this->input;
    }

    public function getOutput()
    {
        return $this->output;
    }

}

