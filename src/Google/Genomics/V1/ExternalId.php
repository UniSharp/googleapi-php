<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/annotations.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.ExternalId</code>
 */
class ExternalId extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the source of this data.
     * </pre>
     *
     * <code>string source_name = 1;</code>
     */
    private $source_name = '';
    /**
     * <pre>
     * The id used by the source of this data.
     * </pre>
     *
     * <code>string id = 2;</code>
     */
    private $id = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Annotations::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the source of this data.
     * </pre>
     *
     * <code>string source_name = 1;</code>
     */
    public function getSourceName()
    {
        return $this->source_name;
    }

    /**
     * <pre>
     * The name of the source of this data.
     * </pre>
     *
     * <code>string source_name = 1;</code>
     */
    public function setSourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_name = $var;
    }

    /**
     * <pre>
     * The id used by the source of this data.
     * </pre>
     *
     * <code>string id = 2;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <pre>
     * The id used by the source of this data.
     * </pre>
     *
     * <code>string id = 2;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

}

