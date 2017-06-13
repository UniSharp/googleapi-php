<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/readgroup.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A read group is all the data that's processed the same way by the sequencer.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.ReadGroup</code>
 */
class ReadGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The server-generated read group ID, unique for all read groups.
     * Note: This is different than the &#64;RG ID field in the SAM spec. For that
     * value, see [name][google.genomics.v1.ReadGroup.name].
     * </pre>
     *
     * <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * <pre>
     * The dataset to which this read group belongs.
     * </pre>
     *
     * <code>string dataset_id = 2;</code>
     */
    private $dataset_id = '';
    /**
     * <pre>
     * The read group name. This corresponds to the &#64;RG ID field in the SAM spec.
     * </pre>
     *
     * <code>string name = 3;</code>
     */
    private $name = '';
    /**
     * <pre>
     * A free-form text description of this read group.
     * </pre>
     *
     * <code>string description = 4;</code>
     */
    private $description = '';
    /**
     * <pre>
     * A client-supplied sample identifier for the reads in this read group.
     * </pre>
     *
     * <code>string sample_id = 5;</code>
     */
    private $sample_id = '';
    /**
     * <pre>
     * The experiment used to generate this read group.
     * </pre>
     *
     * <code>.google.genomics.v1.ReadGroup.Experiment experiment = 6;</code>
     */
    private $experiment = null;
    /**
     * <pre>
     * The predicted insert size of this read group. The insert size is the length
     * the sequenced DNA fragment from end-to-end, not including the adapters.
     * </pre>
     *
     * <code>int32 predicted_insert_size = 7;</code>
     */
    private $predicted_insert_size = 0;
    /**
     * <pre>
     * The programs used to generate this read group. Programs are always
     * identical for all read groups within a read group set. For this reason,
     * only the first read group in a returned set will have this field
     * populated.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.ReadGroup.Program programs = 10;</code>
     */
    private $programs;
    /**
     * <pre>
     * The reference set the reads in this read group are aligned to.
     * </pre>
     *
     * <code>string reference_set_id = 11;</code>
     */
    private $reference_set_id = '';
    /**
     * <pre>
     * A map of additional read group information. This must be of the form
     * map&lt;string, string[]&gt; (string key mapping to a list of string values).
     * </pre>
     *
     * <code>map&lt;string, .google.protobuf.ListValue&gt; info = 12;</code>
     */
    private $info;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Readgroup::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The server-generated read group ID, unique for all read groups.
     * Note: This is different than the &#64;RG ID field in the SAM spec. For that
     * value, see [name][google.genomics.v1.ReadGroup.name].
     * </pre>
     *
     * <code>string id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <pre>
     * The server-generated read group ID, unique for all read groups.
     * Note: This is different than the &#64;RG ID field in the SAM spec. For that
     * value, see [name][google.genomics.v1.ReadGroup.name].
     * </pre>
     *
     * <code>string id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    /**
     * <pre>
     * The dataset to which this read group belongs.
     * </pre>
     *
     * <code>string dataset_id = 2;</code>
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * <pre>
     * The dataset to which this read group belongs.
     * </pre>
     *
     * <code>string dataset_id = 2;</code>
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;
    }

    /**
     * <pre>
     * The read group name. This corresponds to the &#64;RG ID field in the SAM spec.
     * </pre>
     *
     * <code>string name = 3;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * The read group name. This corresponds to the &#64;RG ID field in the SAM spec.
     * </pre>
     *
     * <code>string name = 3;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * A free-form text description of this read group.
     * </pre>
     *
     * <code>string description = 4;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * A free-form text description of this read group.
     * </pre>
     *
     * <code>string description = 4;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <pre>
     * A client-supplied sample identifier for the reads in this read group.
     * </pre>
     *
     * <code>string sample_id = 5;</code>
     */
    public function getSampleId()
    {
        return $this->sample_id;
    }

    /**
     * <pre>
     * A client-supplied sample identifier for the reads in this read group.
     * </pre>
     *
     * <code>string sample_id = 5;</code>
     */
    public function setSampleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sample_id = $var;
    }

    /**
     * <pre>
     * The experiment used to generate this read group.
     * </pre>
     *
     * <code>.google.genomics.v1.ReadGroup.Experiment experiment = 6;</code>
     */
    public function getExperiment()
    {
        return $this->experiment;
    }

    /**
     * <pre>
     * The experiment used to generate this read group.
     * </pre>
     *
     * <code>.google.genomics.v1.ReadGroup.Experiment experiment = 6;</code>
     */
    public function setExperiment(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1\ReadGroup_Experiment::class);
        $this->experiment = $var;
    }

    /**
     * <pre>
     * The predicted insert size of this read group. The insert size is the length
     * the sequenced DNA fragment from end-to-end, not including the adapters.
     * </pre>
     *
     * <code>int32 predicted_insert_size = 7;</code>
     */
    public function getPredictedInsertSize()
    {
        return $this->predicted_insert_size;
    }

    /**
     * <pre>
     * The predicted insert size of this read group. The insert size is the length
     * the sequenced DNA fragment from end-to-end, not including the adapters.
     * </pre>
     *
     * <code>int32 predicted_insert_size = 7;</code>
     */
    public function setPredictedInsertSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->predicted_insert_size = $var;
    }

    /**
     * <pre>
     * The programs used to generate this read group. Programs are always
     * identical for all read groups within a read group set. For this reason,
     * only the first read group in a returned set will have this field
     * populated.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.ReadGroup.Program programs = 10;</code>
     */
    public function getPrograms()
    {
        return $this->programs;
    }

    /**
     * <pre>
     * The programs used to generate this read group. Programs are always
     * identical for all read groups within a read group set. For this reason,
     * only the first read group in a returned set will have this field
     * populated.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.ReadGroup.Program programs = 10;</code>
     */
    public function setPrograms(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\ReadGroup_Program::class);
        $this->programs = $arr;
    }

    /**
     * <pre>
     * The reference set the reads in this read group are aligned to.
     * </pre>
     *
     * <code>string reference_set_id = 11;</code>
     */
    public function getReferenceSetId()
    {
        return $this->reference_set_id;
    }

    /**
     * <pre>
     * The reference set the reads in this read group are aligned to.
     * </pre>
     *
     * <code>string reference_set_id = 11;</code>
     */
    public function setReferenceSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_set_id = $var;
    }

    /**
     * <pre>
     * A map of additional read group information. This must be of the form
     * map&lt;string, string[]&gt; (string key mapping to a list of string values).
     * </pre>
     *
     * <code>map&lt;string, .google.protobuf.ListValue&gt; info = 12;</code>
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * <pre>
     * A map of additional read group information. This must be of the form
     * map&lt;string, string[]&gt; (string key mapping to a list of string values).
     * </pre>
     *
     * <code>map&lt;string, .google.protobuf.ListValue&gt; info = 12;</code>
     */
    public function setInfo(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\ListValue::class);
        $this->info = $arr;
    }

}

