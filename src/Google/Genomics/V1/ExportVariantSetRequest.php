<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The variant data export request.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.ExportVariantSetRequest</code>
 */
class ExportVariantSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The ID of the variant set that contains variant data which
     * should be exported. The caller must have READ access to this variant set.
     * </pre>
     *
     * <code>string variant_set_id = 1;</code>
     */
    private $variant_set_id = '';
    /**
     * <pre>
     * If provided, only variant call information from the specified call sets
     * will be exported. By default all variant calls are exported.
     * </pre>
     *
     * <code>repeated string call_set_ids = 2;</code>
     */
    private $call_set_ids;
    /**
     * <pre>
     * Required. The Google Cloud project ID that owns the destination
     * BigQuery dataset. The caller must have WRITE access to this project.  This
     * project will also own the resulting export job.
     * </pre>
     *
     * <code>string project_id = 3;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * The format for the exported data.
     * </pre>
     *
     * <code>.google.genomics.v1.ExportVariantSetRequest.Format format = 4;</code>
     */
    private $format = 0;
    /**
     * <pre>
     * Required. The BigQuery dataset to export data to. This dataset must already
     * exist. Note that this is distinct from the Genomics concept of "dataset".
     * </pre>
     *
     * <code>string bigquery_dataset = 5;</code>
     */
    private $bigquery_dataset = '';
    /**
     * <pre>
     * Required. The BigQuery table to export data to.
     * If the table doesn't exist, it will be created. If it already exists, it
     * will be overwritten.
     * </pre>
     *
     * <code>string bigquery_table = 6;</code>
     */
    private $bigquery_table = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The ID of the variant set that contains variant data which
     * should be exported. The caller must have READ access to this variant set.
     * </pre>
     *
     * <code>string variant_set_id = 1;</code>
     */
    public function getVariantSetId()
    {
        return $this->variant_set_id;
    }

    /**
     * <pre>
     * Required. The ID of the variant set that contains variant data which
     * should be exported. The caller must have READ access to this variant set.
     * </pre>
     *
     * <code>string variant_set_id = 1;</code>
     */
    public function setVariantSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->variant_set_id = $var;
    }

    /**
     * <pre>
     * If provided, only variant call information from the specified call sets
     * will be exported. By default all variant calls are exported.
     * </pre>
     *
     * <code>repeated string call_set_ids = 2;</code>
     */
    public function getCallSetIds()
    {
        return $this->call_set_ids;
    }

    /**
     * <pre>
     * If provided, only variant call information from the specified call sets
     * will be exported. By default all variant calls are exported.
     * </pre>
     *
     * <code>repeated string call_set_ids = 2;</code>
     */
    public function setCallSetIds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->call_set_ids = $var;
    }

    /**
     * <pre>
     * Required. The Google Cloud project ID that owns the destination
     * BigQuery dataset. The caller must have WRITE access to this project.  This
     * project will also own the resulting export job.
     * </pre>
     *
     * <code>string project_id = 3;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * Required. The Google Cloud project ID that owns the destination
     * BigQuery dataset. The caller must have WRITE access to this project.  This
     * project will also own the resulting export job.
     * </pre>
     *
     * <code>string project_id = 3;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * The format for the exported data.
     * </pre>
     *
     * <code>.google.genomics.v1.ExportVariantSetRequest.Format format = 4;</code>
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * <pre>
     * The format for the exported data.
     * </pre>
     *
     * <code>.google.genomics.v1.ExportVariantSetRequest.Format format = 4;</code>
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Genomics\V1\ExportVariantSetRequest_Format::class);
        $this->format = $var;
    }

    /**
     * <pre>
     * Required. The BigQuery dataset to export data to. This dataset must already
     * exist. Note that this is distinct from the Genomics concept of "dataset".
     * </pre>
     *
     * <code>string bigquery_dataset = 5;</code>
     */
    public function getBigqueryDataset()
    {
        return $this->bigquery_dataset;
    }

    /**
     * <pre>
     * Required. The BigQuery dataset to export data to. This dataset must already
     * exist. Note that this is distinct from the Genomics concept of "dataset".
     * </pre>
     *
     * <code>string bigquery_dataset = 5;</code>
     */
    public function setBigqueryDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->bigquery_dataset = $var;
    }

    /**
     * <pre>
     * Required. The BigQuery table to export data to.
     * If the table doesn't exist, it will be created. If it already exists, it
     * will be overwritten.
     * </pre>
     *
     * <code>string bigquery_table = 6;</code>
     */
    public function getBigqueryTable()
    {
        return $this->bigquery_table;
    }

    /**
     * <pre>
     * Required. The BigQuery table to export data to.
     * If the table doesn't exist, it will be created. If it already exists, it
     * will be overwritten.
     * </pre>
     *
     * <code>string bigquery_table = 6;</code>
     */
    public function setBigqueryTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->bigquery_table = $var;
    }

}
