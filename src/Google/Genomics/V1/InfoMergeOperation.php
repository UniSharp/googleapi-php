<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

/**
 * <pre>
 * Operations to be performed during import on Variant info fields.
 * These operations are set for each info field in the info_merge_config
 * map of ImportVariantsRequest, which is plumbed down to the
 * MergeVariantRequests generated by the import job.
 * </pre>
 *
 * Protobuf enum <code>google.genomics.v1.InfoMergeOperation</code>
 */
class InfoMergeOperation
{
    /**
     * <code>INFO_MERGE_OPERATION_UNSPECIFIED = 0;</code>
     */
    const INFO_MERGE_OPERATION_UNSPECIFIED = 0;
    /**
     * <pre>
     * By default, Variant info fields are persisted if the Variant doesn't
     * already exist in the variantset.  If the Variant is equivalent to a
     * Variant already in the variantset, the incoming Variant's info field
     * is ignored in favor of that of the already persisted Variant.
     * </pre>
     *
     * <code>IGNORE_NEW = 1;</code>
     */
    const IGNORE_NEW = 1;
    /**
     * <pre>
     * This operation removes an info field from the incoming Variant
     * and persists this info field in each of the incoming Variant's Calls.
     * </pre>
     *
     * <code>MOVE_TO_CALLS = 2;</code>
     */
    const MOVE_TO_CALLS = 2;
}

