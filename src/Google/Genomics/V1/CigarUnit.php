<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/cigar.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A single CIGAR operation.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.CigarUnit</code>
 */
class CigarUnit extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.google.genomics.v1.CigarUnit.Operation operation = 1;</code>
     */
    private $operation = 0;
    /**
     * <pre>
     * The number of genomic bases that the operation runs for. Required.
     * </pre>
     *
     * <code>int64 operation_length = 2;</code>
     */
    private $operation_length = 0;
    /**
     * <pre>
     * `referenceSequence` is only used at mismatches
     * (`SEQUENCE_MISMATCH`) and deletions (`DELETE`).
     * Filling this field replaces SAM's MD tag. If the relevant information is
     * not available, this field is unset.
     * </pre>
     *
     * <code>string reference_sequence = 3;</code>
     */
    private $reference_sequence = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Cigar::initOnce();
        parent::__construct();
    }

    /**
     * <code>.google.genomics.v1.CigarUnit.Operation operation = 1;</code>
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * <code>.google.genomics.v1.CigarUnit.Operation operation = 1;</code>
     */
    public function setOperation($var)
    {
        GPBUtil::checkEnum($var, \Google\Genomics\V1\CigarUnit_Operation::class);
        $this->operation = $var;
    }

    /**
     * <pre>
     * The number of genomic bases that the operation runs for. Required.
     * </pre>
     *
     * <code>int64 operation_length = 2;</code>
     */
    public function getOperationLength()
    {
        return $this->operation_length;
    }

    /**
     * <pre>
     * The number of genomic bases that the operation runs for. Required.
     * </pre>
     *
     * <code>int64 operation_length = 2;</code>
     */
    public function setOperationLength($var)
    {
        GPBUtil::checkInt64($var);
        $this->operation_length = $var;
    }

    /**
     * <pre>
     * `referenceSequence` is only used at mismatches
     * (`SEQUENCE_MISMATCH`) and deletions (`DELETE`).
     * Filling this field replaces SAM's MD tag. If the relevant information is
     * not available, this field is unset.
     * </pre>
     *
     * <code>string reference_sequence = 3;</code>
     */
    public function getReferenceSequence()
    {
        return $this->reference_sequence;
    }

    /**
     * <pre>
     * `referenceSequence` is only used at mismatches
     * (`SEQUENCE_MISMATCH`) and deletions (`DELETE`).
     * Filling this field replaces SAM's MD tag. If the relevant information is
     * not available, this field is unset.
     * </pre>
     *
     * <code>string reference_sequence = 3;</code>
     */
    public function setReferenceSequence($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_sequence = $var;
    }

}
