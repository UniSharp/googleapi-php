<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/reads.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.StreamReadsResponse</code>
 */
class StreamReadsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .google.genomics.v1.Read alignments = 1;</code>
     */
    private $alignments;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Reads::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .google.genomics.v1.Read alignments = 1;</code>
     */
    public function getAlignments()
    {
        return $this->alignments;
    }

    /**
     * <code>repeated .google.genomics.v1.Read alignments = 1;</code>
     */
    public function setAlignments(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\Read::class);
        $this->alignments = $arr;
    }

}

