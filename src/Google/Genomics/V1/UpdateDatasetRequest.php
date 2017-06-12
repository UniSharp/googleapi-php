<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/datasets.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.UpdateDatasetRequest</code>
 */
class UpdateDatasetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The ID of the dataset to be updated.
     * </pre>
     *
     * <code>string dataset_id = 1;</code>
     */
    private $dataset_id = '';
    /**
     * <pre>
     * The new dataset data.
     * </pre>
     *
     * <code>.google.genomics.v1.Dataset dataset = 2;</code>
     */
    private $dataset = null;
    /**
     * <pre>
     * An optional mask specifying which fields to update. At this time, the only
     * mutable field is [name][google.genomics.v1.Dataset.name]. The only
     * acceptable value is "name". If unspecified, all mutable fields will be
     * updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    private $update_mask = null;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Datasets::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The ID of the dataset to be updated.
     * </pre>
     *
     * <code>string dataset_id = 1;</code>
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * <pre>
     * The ID of the dataset to be updated.
     * </pre>
     *
     * <code>string dataset_id = 1;</code>
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;
    }

    /**
     * <pre>
     * The new dataset data.
     * </pre>
     *
     * <code>.google.genomics.v1.Dataset dataset = 2;</code>
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * <pre>
     * The new dataset data.
     * </pre>
     *
     * <code>.google.genomics.v1.Dataset dataset = 2;</code>
     */
    public function setDataset(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1\Dataset::class);
        $this->dataset = $var;
    }

    /**
     * <pre>
     * An optional mask specifying which fields to update. At this time, the only
     * mutable field is [name][google.genomics.v1.Dataset.name]. The only
     * acceptable value is "name". If unspecified, all mutable fields will be
     * updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * <pre>
     * An optional mask specifying which fields to update. At this time, the only
     * mutable field is [name][google.genomics.v1.Dataset.name]. The only
     * acceptable value is "name". If unspecified, all mutable fields will be
     * updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    public function setUpdateMask(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;
    }

}
