<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/annotations.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.GetAnnotationSetRequest</code>
 */
class GetAnnotationSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The ID of the annotation set to be retrieved.
     * </pre>
     *
     * <code>string annotation_set_id = 1;</code>
     */
    private $annotation_set_id = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Annotations::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The ID of the annotation set to be retrieved.
     * </pre>
     *
     * <code>string annotation_set_id = 1;</code>
     */
    public function getAnnotationSetId()
    {
        return $this->annotation_set_id;
    }

    /**
     * <pre>
     * The ID of the annotation set to be retrieved.
     * </pre>
     *
     * <code>string annotation_set_id = 1;</code>
     */
    public function setAnnotationSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotation_set_id = $var;
    }

}

