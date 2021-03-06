<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/reads.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The read group set export request.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.ExportReadGroupSetRequest</code>
 */
class ExportReadGroupSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The Google Cloud project ID that owns this
     * export. The caller must have WRITE access to this project.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * Required. A Google Cloud Storage URI for the exported BAM file.
     * The currently authenticated user must have write access to the new file.
     * An error will be returned if the URI already contains data.
     * </pre>
     *
     * <code>string export_uri = 2;</code>
     */
    private $export_uri = '';
    /**
     * <pre>
     * Required. The ID of the read group set to export. The caller must have
     * READ access to this read group set.
     * </pre>
     *
     * <code>string read_group_set_id = 3;</code>
     */
    private $read_group_set_id = '';
    /**
     * <pre>
     * The reference names to export. If this is not specified, all reference
     * sequences, including unmapped reads, are exported.
     * Use `*` to export only unmapped reads.
     * </pre>
     *
     * <code>repeated string reference_names = 4;</code>
     */
    private $reference_names;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Reads::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The Google Cloud project ID that owns this
     * export. The caller must have WRITE access to this project.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * Required. The Google Cloud project ID that owns this
     * export. The caller must have WRITE access to this project.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * Required. A Google Cloud Storage URI for the exported BAM file.
     * The currently authenticated user must have write access to the new file.
     * An error will be returned if the URI already contains data.
     * </pre>
     *
     * <code>string export_uri = 2;</code>
     */
    public function getExportUri()
    {
        return $this->export_uri;
    }

    /**
     * <pre>
     * Required. A Google Cloud Storage URI for the exported BAM file.
     * The currently authenticated user must have write access to the new file.
     * An error will be returned if the URI already contains data.
     * </pre>
     *
     * <code>string export_uri = 2;</code>
     */
    public function setExportUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->export_uri = $var;
    }

    /**
     * <pre>
     * Required. The ID of the read group set to export. The caller must have
     * READ access to this read group set.
     * </pre>
     *
     * <code>string read_group_set_id = 3;</code>
     */
    public function getReadGroupSetId()
    {
        return $this->read_group_set_id;
    }

    /**
     * <pre>
     * Required. The ID of the read group set to export. The caller must have
     * READ access to this read group set.
     * </pre>
     *
     * <code>string read_group_set_id = 3;</code>
     */
    public function setReadGroupSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->read_group_set_id = $var;
    }

    /**
     * <pre>
     * The reference names to export. If this is not specified, all reference
     * sequences, including unmapped reads, are exported.
     * Use `*` to export only unmapped reads.
     * </pre>
     *
     * <code>repeated string reference_names = 4;</code>
     */
    public function getReferenceNames()
    {
        return $this->reference_names;
    }

    /**
     * <pre>
     * The reference names to export. If this is not specified, all reference
     * sequences, including unmapped reads, are exported.
     * Use `*` to export only unmapped reads.
     * </pre>
     *
     * <code>repeated string reference_names = 4;</code>
     */
    public function setReferenceNames(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->reference_names = $arr;
    }

}

