<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/annotations.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.DeleteAnnotationRequest</code>
 */
class DeleteAnnotationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The ID of the annotation to be deleted.
     * </pre>
     *
     * <code>string annotation_id = 1;</code>
     */
    private $annotation_id = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Annotations::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The ID of the annotation to be deleted.
     * </pre>
     *
     * <code>string annotation_id = 1;</code>
     */
    public function getAnnotationId()
    {
        return $this->annotation_id;
    }

    /**
     * <pre>
     * The ID of the annotation to be deleted.
     * </pre>
     *
     * <code>string annotation_id = 1;</code>
     */
    public function setAnnotationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotation_id = $var;
    }

}
