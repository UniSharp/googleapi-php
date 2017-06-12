<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/job_service.proto

namespace Google\Cloud\Ml\V1;

/**
 * <pre>
 * The type of the parameter.
 * </pre>
 *
 * Protobuf enum <code>google.cloud.ml.v1.ParameterSpec.ParameterType</code>
 */
class ParameterSpec_ParameterType
{
    /**
     * <pre>
     * You must specify a valid type. Using this unspecified type will result in
     * an error.
     * </pre>
     *
     * <code>PARAMETER_TYPE_UNSPECIFIED = 0;</code>
     */
    const PARAMETER_TYPE_UNSPECIFIED = 0;
    /**
     * <pre>
     * Type for real-valued parameters.
     * </pre>
     *
     * <code>DOUBLE = 1;</code>
     */
    const DOUBLE = 1;
    /**
     * <pre>
     * Type for integral parameters.
     * </pre>
     *
     * <code>INTEGER = 2;</code>
     */
    const INTEGER = 2;
    /**
     * <pre>
     * The parameter is categorical, with a value chosen from the categories
     * field.
     * </pre>
     *
     * <code>CATEGORICAL = 3;</code>
     */
    const CATEGORICAL = 3;
    /**
     * <pre>
     * The parameter is real valued, with a fixed set of feasible points. If
     * `type==DISCRETE`, feasible_points must be provided, and
     * {`min_value`, `max_value`} will be ignored.
     * </pre>
     *
     * <code>DISCRETE = 4;</code>
     */
    const DISCRETE = 4;
}

