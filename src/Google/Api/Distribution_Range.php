<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/distribution.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The range of the population values.
 * </pre>
 *
 * Protobuf type <code>google.api.Distribution.Range</code>
 */
class Distribution_Range extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The minimum of the population values.
     * </pre>
     *
     * <code>double min = 1;</code>
     */
    private $min = 0.0;
    /**
     * <pre>
     * The maximum of the population values.
     * </pre>
     *
     * <code>double max = 2;</code>
     */
    private $max = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Api\Distribution::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The minimum of the population values.
     * </pre>
     *
     * <code>double min = 1;</code>
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * <pre>
     * The minimum of the population values.
     * </pre>
     *
     * <code>double min = 1;</code>
     */
    public function setMin($var)
    {
        GPBUtil::checkDouble($var);
        $this->min = $var;
    }

    /**
     * <pre>
     * The maximum of the population values.
     * </pre>
     *
     * <code>double max = 2;</code>
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * <pre>
     * The maximum of the population values.
     * </pre>
     *
     * <code>double max = 2;</code>
     */
    public function setMax($var)
    {
        GPBUtil::checkDouble($var);
        $this->max = $var;
    }

}
