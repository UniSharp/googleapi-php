<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1beta1/job_service.proto

namespace Google\Cloud\Ml\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents results of a prediction job.
 * </pre>
 *
 * Protobuf type <code>google.cloud.ml.v1beta1.PredictionOutput</code>
 */
class PredictionOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The output Google Cloud Storage location provided at the job creation time.
     * </pre>
     *
     * <code>string output_path = 1;</code>
     */
    private $output_path = '';
    /**
     * <pre>
     * The number of generated predictions.
     * </pre>
     *
     * <code>int64 prediction_count = 2;</code>
     */
    private $prediction_count = 0;
    /**
     * <pre>
     * The number of data instances which resulted in errors.
     * </pre>
     *
     * <code>int64 error_count = 3;</code>
     */
    private $error_count = 0;
    /**
     * <pre>
     * Node hours used by the batch prediction job.
     * </pre>
     *
     * <code>double node_hours = 4;</code>
     */
    private $node_hours = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1Beta1\JobService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The output Google Cloud Storage location provided at the job creation time.
     * </pre>
     *
     * <code>string output_path = 1;</code>
     */
    public function getOutputPath()
    {
        return $this->output_path;
    }

    /**
     * <pre>
     * The output Google Cloud Storage location provided at the job creation time.
     * </pre>
     *
     * <code>string output_path = 1;</code>
     */
    public function setOutputPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_path = $var;
    }

    /**
     * <pre>
     * The number of generated predictions.
     * </pre>
     *
     * <code>int64 prediction_count = 2;</code>
     */
    public function getPredictionCount()
    {
        return $this->prediction_count;
    }

    /**
     * <pre>
     * The number of generated predictions.
     * </pre>
     *
     * <code>int64 prediction_count = 2;</code>
     */
    public function setPredictionCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->prediction_count = $var;
    }

    /**
     * <pre>
     * The number of data instances which resulted in errors.
     * </pre>
     *
     * <code>int64 error_count = 3;</code>
     */
    public function getErrorCount()
    {
        return $this->error_count;
    }

    /**
     * <pre>
     * The number of data instances which resulted in errors.
     * </pre>
     *
     * <code>int64 error_count = 3;</code>
     */
    public function setErrorCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->error_count = $var;
    }

    /**
     * <pre>
     * Node hours used by the batch prediction job.
     * </pre>
     *
     * <code>double node_hours = 4;</code>
     */
    public function getNodeHours()
    {
        return $this->node_hours;
    }

    /**
     * <pre>
     * Node hours used by the batch prediction job.
     * </pre>
     *
     * <code>double node_hours = 4;</code>
     */
    public function setNodeHours($var)
    {
        GPBUtil::checkDouble($var);
        $this->node_hours = $var;
    }

}

