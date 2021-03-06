<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents the feeling associated with the entire text or entities in
 * the text.
 * </pre>
 *
 * Protobuf type <code>google.cloud.language.v1beta2.Sentiment</code>
 */
class Sentiment extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A non-negative number in the [0, +inf) range, which represents
     * the absolute magnitude of sentiment regardless of score (positive or
     * negative).
     * </pre>
     *
     * <code>float magnitude = 2;</code>
     */
    private $magnitude = 0.0;
    /**
     * <pre>
     * Sentiment score between -1.0 (negative sentiment) and 1.0
     * (positive sentiment).
     * </pre>
     *
     * <code>float score = 3;</code>
     */
    private $score = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A non-negative number in the [0, +inf) range, which represents
     * the absolute magnitude of sentiment regardless of score (positive or
     * negative).
     * </pre>
     *
     * <code>float magnitude = 2;</code>
     */
    public function getMagnitude()
    {
        return $this->magnitude;
    }

    /**
     * <pre>
     * A non-negative number in the [0, +inf) range, which represents
     * the absolute magnitude of sentiment regardless of score (positive or
     * negative).
     * </pre>
     *
     * <code>float magnitude = 2;</code>
     */
    public function setMagnitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->magnitude = $var;
    }

    /**
     * <pre>
     * Sentiment score between -1.0 (negative sentiment) and 1.0
     * (positive sentiment).
     * </pre>
     *
     * <code>float score = 3;</code>
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * <pre>
     * Sentiment score between -1.0 (negative sentiment) and 1.0
     * (positive sentiment).
     * </pre>
     *
     * <code>float score = 3;</code>
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;
    }

}

