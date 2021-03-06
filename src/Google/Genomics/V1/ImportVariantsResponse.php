<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The variant data import response.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.ImportVariantsResponse</code>
 */
class ImportVariantsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * IDs of the call sets created during the import.
     * </pre>
     *
     * <code>repeated string call_set_ids = 1;</code>
     */
    private $call_set_ids;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * IDs of the call sets created during the import.
     * </pre>
     *
     * <code>repeated string call_set_ids = 1;</code>
     */
    public function getCallSetIds()
    {
        return $this->call_set_ids;
    }

    /**
     * <pre>
     * IDs of the call sets created during the import.
     * </pre>
     *
     * <code>repeated string call_set_ids = 1;</code>
     */
    public function setCallSetIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->call_set_ids = $arr;
    }

}

