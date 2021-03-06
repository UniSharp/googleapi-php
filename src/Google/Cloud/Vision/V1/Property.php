<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A `Property` consists of a user-supplied name/value pair.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.Property</code>
 */
class Property extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Name of the property.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Value of the property.
     * </pre>
     *
     * <code>string value = 2;</code>
     */
    private $value = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Name of the property.
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
     * Name of the property.
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
     * Value of the property.
     * </pre>
     *
     * <code>string value = 2;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Value of the property.
     * </pre>
     *
     * <code>string value = 2;</code>
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;
    }

}

