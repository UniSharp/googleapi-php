<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.MergeVariantsRequest</code>
 */
class MergeVariantsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The destination variant set.
     * </pre>
     *
     * <code>string variant_set_id = 1;</code>
     */
    private $variant_set_id = '';
    /**
     * <pre>
     * The variants to be merged with existing variants.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.Variant variants = 2;</code>
     */
    private $variants;
    /**
     * <pre>
     * A mapping between info field keys and the InfoMergeOperations to
     * be performed on them.
     * </pre>
     *
     * <code>map&lt;string, .google.genomics.v1.InfoMergeOperation&gt; info_merge_config = 3;</code>
     */
    private $info_merge_config;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The destination variant set.
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
     * The destination variant set.
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
     * The variants to be merged with existing variants.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.Variant variants = 2;</code>
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * <pre>
     * The variants to be merged with existing variants.
     * </pre>
     *
     * <code>repeated .google.genomics.v1.Variant variants = 2;</code>
     */
    public function setVariants(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\Variant::class);
        $this->variants = $var;
    }

    /**
     * <pre>
     * A mapping between info field keys and the InfoMergeOperations to
     * be performed on them.
     * </pre>
     *
     * <code>map&lt;string, .google.genomics.v1.InfoMergeOperation&gt; info_merge_config = 3;</code>
     */
    public function getInfoMergeConfig()
    {
        return $this->info_merge_config;
    }

    /**
     * <pre>
     * A mapping between info field keys and the InfoMergeOperations to
     * be performed on them.
     * </pre>
     *
     * <code>map&lt;string, .google.genomics.v1.InfoMergeOperation&gt; info_merge_config = 3;</code>
     */
    public function setInfoMergeConfig(&$var)
    {
        $this->info_merge_config = $var;
    }

}

