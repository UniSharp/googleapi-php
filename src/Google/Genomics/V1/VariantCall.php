<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A call represents the determination of genotype with respect to a particular
 * variant. It may include associated information such as quality and phasing.
 * For example, a call might assign a probability of 0.32 to the occurrence of
 * a SNP named rs1234 in a call set with the name NA12345.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.VariantCall</code>
 */
class VariantCall extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The ID of the call set this variant call belongs to.
     * </pre>
     *
     * <code>string call_set_id = 8;</code>
     */
    private $call_set_id = '';
    /**
     * <pre>
     * The name of the call set this variant call belongs to.
     * </pre>
     *
     * <code>string call_set_name = 9;</code>
     */
    private $call_set_name = '';
    /**
     * <pre>
     * The genotype of this variant call. Each value represents either the value
     * of the `referenceBases` field or a 1-based index into
     * `alternateBases`. If a variant had a `referenceBases`
     * value of `T` and an `alternateBases`
     * value of `["A", "C"]`, and the `genotype` was
     * `[2, 1]`, that would mean the call
     * represented the heterozygous value `CA` for this variant.
     * If the `genotype` was instead `[0, 1]`, the
     * represented value would be `TA`. Ordering of the
     * genotype values is important if the `phaseset` is present.
     * If a genotype is not called (that is, a `.` is present in the
     * GT string) -1 is returned.
     * </pre>
     *
     * <code>repeated int32 genotype = 7;</code>
     */
    private $genotype;
    /**
     * <pre>
     * If this field is present, this variant call's genotype ordering implies
     * the phase of the bases and is consistent with any other variant calls in
     * the same reference sequence which have the same phaseset value.
     * When importing data from VCF, if the genotype data was phased but no
     * phase set was specified this field will be set to `*`.
     * </pre>
     *
     * <code>string phaseset = 5;</code>
     */
    private $phaseset = '';
    /**
     * <pre>
     * The genotype likelihoods for this variant call. Each array entry
     * represents how likely a specific genotype is for this call. The value
     * ordering is defined by the GL tag in the VCF spec.
     * If Phred-scaled genotype likelihood scores (PL) are available and
     * log10(P) genotype likelihood scores (GL) are not, PL scores are converted
     * to GL scores.  If both are available, PL scores are stored in `info`.
     * </pre>
     *
     * <code>repeated double genotype_likelihood = 6;</code>
     */
    private $genotype_likelihood;
    /**
     * <pre>
     * A map of additional variant call information. This must be of the form
     * map&lt;string, string[]&gt; (string key mapping to a list of string values).
     * </pre>
     *
     * <code>map&lt;string, .google.protobuf.ListValue&gt; info = 2;</code>
     */
    private $info;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The ID of the call set this variant call belongs to.
     * </pre>
     *
     * <code>string call_set_id = 8;</code>
     */
    public function getCallSetId()
    {
        return $this->call_set_id;
    }

    /**
     * <pre>
     * The ID of the call set this variant call belongs to.
     * </pre>
     *
     * <code>string call_set_id = 8;</code>
     */
    public function setCallSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_set_id = $var;
    }

    /**
     * <pre>
     * The name of the call set this variant call belongs to.
     * </pre>
     *
     * <code>string call_set_name = 9;</code>
     */
    public function getCallSetName()
    {
        return $this->call_set_name;
    }

    /**
     * <pre>
     * The name of the call set this variant call belongs to.
     * </pre>
     *
     * <code>string call_set_name = 9;</code>
     */
    public function setCallSetName($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_set_name = $var;
    }

    /**
     * <pre>
     * The genotype of this variant call. Each value represents either the value
     * of the `referenceBases` field or a 1-based index into
     * `alternateBases`. If a variant had a `referenceBases`
     * value of `T` and an `alternateBases`
     * value of `["A", "C"]`, and the `genotype` was
     * `[2, 1]`, that would mean the call
     * represented the heterozygous value `CA` for this variant.
     * If the `genotype` was instead `[0, 1]`, the
     * represented value would be `TA`. Ordering of the
     * genotype values is important if the `phaseset` is present.
     * If a genotype is not called (that is, a `.` is present in the
     * GT string) -1 is returned.
     * </pre>
     *
     * <code>repeated int32 genotype = 7;</code>
     */
    public function getGenotype()
    {
        return $this->genotype;
    }

    /**
     * <pre>
     * The genotype of this variant call. Each value represents either the value
     * of the `referenceBases` field or a 1-based index into
     * `alternateBases`. If a variant had a `referenceBases`
     * value of `T` and an `alternateBases`
     * value of `["A", "C"]`, and the `genotype` was
     * `[2, 1]`, that would mean the call
     * represented the heterozygous value `CA` for this variant.
     * If the `genotype` was instead `[0, 1]`, the
     * represented value would be `TA`. Ordering of the
     * genotype values is important if the `phaseset` is present.
     * If a genotype is not called (that is, a `.` is present in the
     * GT string) -1 is returned.
     * </pre>
     *
     * <code>repeated int32 genotype = 7;</code>
     */
    public function setGenotype(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->genotype = $arr;
    }

    /**
     * <pre>
     * If this field is present, this variant call's genotype ordering implies
     * the phase of the bases and is consistent with any other variant calls in
     * the same reference sequence which have the same phaseset value.
     * When importing data from VCF, if the genotype data was phased but no
     * phase set was specified this field will be set to `*`.
     * </pre>
     *
     * <code>string phaseset = 5;</code>
     */
    public function getPhaseset()
    {
        return $this->phaseset;
    }

    /**
     * <pre>
     * If this field is present, this variant call's genotype ordering implies
     * the phase of the bases and is consistent with any other variant calls in
     * the same reference sequence which have the same phaseset value.
     * When importing data from VCF, if the genotype data was phased but no
     * phase set was specified this field will be set to `*`.
     * </pre>
     *
     * <code>string phaseset = 5;</code>
     */
    public function setPhaseset($var)
    {
        GPBUtil::checkString($var, True);
        $this->phaseset = $var;
    }

    /**
     * <pre>
     * The genotype likelihoods for this variant call. Each array entry
     * represents how likely a specific genotype is for this call. The value
     * ordering is defined by the GL tag in the VCF spec.
     * If Phred-scaled genotype likelihood scores (PL) are available and
     * log10(P) genotype likelihood scores (GL) are not, PL scores are converted
     * to GL scores.  If both are available, PL scores are stored in `info`.
     * </pre>
     *
     * <code>repeated double genotype_likelihood = 6;</code>
     */
    public function getGenotypeLikelihood()
    {
        return $this->genotype_likelihood;
    }

    /**
     * <pre>
     * The genotype likelihoods for this variant call. Each array entry
     * represents how likely a specific genotype is for this call. The value
     * ordering is defined by the GL tag in the VCF spec.
     * If Phred-scaled genotype likelihood scores (PL) are available and
     * log10(P) genotype likelihood scores (GL) are not, PL scores are converted
     * to GL scores.  If both are available, PL scores are stored in `info`.
     * </pre>
     *
     * <code>repeated double genotype_likelihood = 6;</code>
     */
    public function setGenotypeLikelihood(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->genotype_likelihood = $arr;
    }

    /**
     * <pre>
     * A map of additional variant call information. This must be of the form
     * map&lt;string, string[]&gt; (string key mapping to a list of string values).
     * </pre>
     *
     * <code>map&lt;string, .google.protobuf.ListValue&gt; info = 2;</code>
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * <pre>
     * A map of additional variant call information. This must be of the form
     * map&lt;string, string[]&gt; (string key mapping to a list of string values).
     * </pre>
     *
     * <code>map&lt;string, .google.protobuf.ListValue&gt; info = 2;</code>
     */
    public function setInfo(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\ListValue::class);
        $this->info = $arr;
    }

}

