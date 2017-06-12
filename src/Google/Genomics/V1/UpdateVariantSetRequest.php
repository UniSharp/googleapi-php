<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.UpdateVariantSetRequest</code>
 */
class UpdateVariantSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The ID of the variant to be updated (must already exist).
     * </pre>
     *
     * <code>string variant_set_id = 1;</code>
     */
    private $variant_set_id = '';
    /**
     * <pre>
     * The new variant data. Only the variant_set.metadata will be considered
     * for update.
     * </pre>
     *
     * <code>.google.genomics.v1.VariantSet variant_set = 2;</code>
     */
    private $variant_set = null;
    /**
     * <pre>
     * An optional mask specifying which fields to update. Supported fields:
     * * [metadata][google.genomics.v1.VariantSet.metadata].
     * * [name][google.genomics.v1.VariantSet.name].
     * * [description][google.genomics.v1.VariantSet.description].
     * Leaving `updateMask` unset is equivalent to specifying all mutable
     * fields.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 5;</code>
     */
    private $update_mask = null;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The ID of the variant to be updated (must already exist).
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
     * The ID of the variant to be updated (must already exist).
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
     * The new variant data. Only the variant_set.metadata will be considered
     * for update.
     * </pre>
     *
     * <code>.google.genomics.v1.VariantSet variant_set = 2;</code>
     */
    public function getVariantSet()
    {
        return $this->variant_set;
    }

    /**
     * <pre>
     * The new variant data. Only the variant_set.metadata will be considered
     * for update.
     * </pre>
     *
     * <code>.google.genomics.v1.VariantSet variant_set = 2;</code>
     */
    public function setVariantSet(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1\VariantSet::class);
        $this->variant_set = $var;
    }

    /**
     * <pre>
     * An optional mask specifying which fields to update. Supported fields:
     * * [metadata][google.genomics.v1.VariantSet.metadata].
     * * [name][google.genomics.v1.VariantSet.name].
     * * [description][google.genomics.v1.VariantSet.description].
     * Leaving `updateMask` unset is equivalent to specifying all mutable
     * fields.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 5;</code>
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * <pre>
     * An optional mask specifying which fields to update. Supported fields:
     * * [metadata][google.genomics.v1.VariantSet.metadata].
     * * [name][google.genomics.v1.VariantSet.name].
     * * [description][google.genomics.v1.VariantSet.description].
     * Leaving `updateMask` unset is equivalent to specifying all mutable
     * fields.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 5;</code>
     */
    public function setUpdateMask(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;
    }

}

