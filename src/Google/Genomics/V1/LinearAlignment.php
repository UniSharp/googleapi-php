<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/readalignment.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A linear alignment can be represented by one CIGAR string. Describes the
 * mapped position and local alignment of the read to the reference.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.LinearAlignment</code>
 */
class LinearAlignment extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The position of this alignment.
     * </pre>
     *
     * <code>.google.genomics.v1.Position position = 1;</code>
     */
    private $position = null;
    /**
     * <pre>
     * The mapping quality of this alignment. Represents how likely
     * the read maps to this position as opposed to other locations.
     * Specifically, this is -10 log10 Pr(mapping position is wrong), rounded to
     * the nearest integer.
     * </pre>
     *
     * <code>int32 mapping_quality = 2;</code>
     */
    private $mapping_quality = 0;
    /**
     * <pre>
     * Represents the local alignment of this sequence (alignment matches, indels,
     * etc) against the reference.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.CigarUnit cigar = 3;</code>
     */
    private $cigar;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Readalignment::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The position of this alignment.
     * </pre>
     *
     * <code>.google.genomics.v1.Position position = 1;</code>
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * <pre>
     * The position of this alignment.
     * </pre>
     *
     * <code>.google.genomics.v1.Position position = 1;</code>
     */
    public function setPosition(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1\Position::class);
        $this->position = $var;
    }

    /**
     * <pre>
     * The mapping quality of this alignment. Represents how likely
     * the read maps to this position as opposed to other locations.
     * Specifically, this is -10 log10 Pr(mapping position is wrong), rounded to
     * the nearest integer.
     * </pre>
     *
     * <code>int32 mapping_quality = 2;</code>
     */
    public function getMappingQuality()
    {
        return $this->mapping_quality;
    }

    /**
     * <pre>
     * The mapping quality of this alignment. Represents how likely
     * the read maps to this position as opposed to other locations.
     * Specifically, this is -10 log10 Pr(mapping position is wrong), rounded to
     * the nearest integer.
     * </pre>
     *
     * <code>int32 mapping_quality = 2;</code>
     */
    public function setMappingQuality($var)
    {
        GPBUtil::checkInt32($var);
        $this->mapping_quality = $var;
    }

    /**
     * <pre>
     * Represents the local alignment of this sequence (alignment matches, indels,
     * etc) against the reference.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.CigarUnit cigar = 3;</code>
     */
    public function getCigar()
    {
        return $this->cigar;
    }

    /**
     * <pre>
     * Represents the local alignment of this sequence (alignment matches, indels,
     * etc) against the reference.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.CigarUnit cigar = 3;</code>
     */
    public function setCigar(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\CigarUnit::class);
        $this->cigar = $arr;
    }

}

