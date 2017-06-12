<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/datasets.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.GetDatasetRequest</code>
 */
class GetDatasetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The ID of the dataset.
     * </pre>
     *
     * <code>string dataset_id = 1;</code>
     */
    private $dataset_id = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Datasets::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The ID of the dataset.
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
     * The ID of the dataset.
     * </pre>
     *
     * <code>string dataset_id = 1;</code>
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;
    }

}

