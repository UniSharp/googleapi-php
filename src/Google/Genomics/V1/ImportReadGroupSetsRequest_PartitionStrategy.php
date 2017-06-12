<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/reads.proto

namespace Google\Genomics\V1;

/**
 * Protobuf enum <code>google.genomics.v1.ImportReadGroupSetsRequest.PartitionStrategy</code>
 */
class ImportReadGroupSetsRequest_PartitionStrategy
{
    /**
     * <code>PARTITION_STRATEGY_UNSPECIFIED = 0;</code>
     */
    const PARTITION_STRATEGY_UNSPECIFIED = 0;
    /**
     * <pre>
     * In most cases, this strategy yields one read group set per file. This is
     * the default behavior.
     * Allocate one read group set per file per sample. For BAM files, read
     * groups are considered to share a sample if they have identical sample
     * names. Furthermore, all reads for each file which do not belong to a read
     * group, if any, will be grouped into a single read group set per-file.
     * </pre>
     *
     * <code>PER_FILE_PER_SAMPLE = 1;</code>
     */
    const PER_FILE_PER_SAMPLE = 1;
    /**
     * <pre>
     * Includes all read groups in all imported files into a single read group
     * set. Requires that the headers for all imported files are equivalent. All
     * reads which do not belong to a read group, if any, will be grouped into a
     * separate read group set.
     * </pre>
     *
     * <code>MERGE_ALL = 2;</code>
     */
    const MERGE_ALL = 2;
}
