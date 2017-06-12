<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The variant set request.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.GetVariantSetRequest</code>
 */
class GetVariantSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The ID of the variant set.
     * </pre>
     *
     * <code>string variant_set_id = 1;</code>
     */
    private $variant_set_id = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The ID of the variant set.
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
     * Required. The ID of the variant set.
     * </pre>
     *
     * <code>string variant_set_id = 1;</code>
     */
    public function setVariantSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->variant_set_id = $var;
    }

}
