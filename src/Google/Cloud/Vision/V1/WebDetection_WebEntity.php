<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/web_detection.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Entity deduced from similar images on the Internet.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.WebDetection.WebEntity</code>
 */
class WebDetection_WebEntity extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Opaque entity ID.
     * </pre>
     *
     * <code>string entity_id = 1;</code>
     */
    private $entity_id = '';
    /**
     * <pre>
     * Overall relevancy score for the entity.
     * Not normalized and not comparable across different image queries.
     * </pre>
     *
     * <code>float score = 2;</code>
     */
    private $score = 0.0;
    /**
     * <pre>
     * Canonical description of the entity, in English.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    private $description = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\WebDetection::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Opaque entity ID.
     * </pre>
     *
     * <code>string entity_id = 1;</code>
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * <pre>
     * Opaque entity ID.
     * </pre>
     *
     * <code>string entity_id = 1;</code>
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_id = $var;
    }

    /**
     * <pre>
     * Overall relevancy score for the entity.
     * Not normalized and not comparable across different image queries.
     * </pre>
     *
     * <code>float score = 2;</code>
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * <pre>
     * Overall relevancy score for the entity.
     * Not normalized and not comparable across different image queries.
     * </pre>
     *
     * <code>float score = 2;</code>
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;
    }

    /**
     * <pre>
     * Canonical description of the entity, in English.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Canonical description of the entity, in English.
     * </pre>
     *
     * <code>string description = 3;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

}

