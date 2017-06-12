<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The CreateVariantSet request
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.CreateVariantSetRequest</code>
 */
class CreateVariantSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The variant set to be created. Must have a valid `datasetId`.
     * </pre>
     *
     * <code>.google.genomics.v1.VariantSet variant_set = 1;</code>
     */
    private $variant_set = null;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The variant set to be created. Must have a valid `datasetId`.
     * </pre>
     *
     * <code>.google.genomics.v1.VariantSet variant_set = 1;</code>
     */
    public function getVariantSet()
    {
        return $this->variant_set;
    }

    /**
     * <pre>
     * Required. The variant set to be created. Must have a valid `datasetId`.
     * </pre>
     *
     * <code>.google.genomics.v1.VariantSet variant_set = 1;</code>
     */
    public function setVariantSet(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1\VariantSet::class);
        $this->variant_set = $var;
    }

}

