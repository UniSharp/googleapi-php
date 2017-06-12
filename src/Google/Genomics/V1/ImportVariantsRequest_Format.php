<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

/**
 * Protobuf enum <code>google.genomics.v1.ImportVariantsRequest.Format</code>
 */
class ImportVariantsRequest_Format
{
    /**
     * <code>FORMAT_UNSPECIFIED = 0;</code>
     */
    const FORMAT_UNSPECIFIED = 0;
    /**
     * <pre>
     * VCF (Variant Call Format). The VCF files may be gzip compressed. gVCF is
     * also supported.
     * </pre>
     *
     * <code>FORMAT_VCF = 1;</code>
     */
    const FORMAT_VCF = 1;
    /**
     * <pre>
     * Complete Genomics masterVarBeta format. The masterVarBeta files may
     * be bzip2 compressed.
     * </pre>
     *
     * <code>FORMAT_COMPLETE_GENOMICS = 2;</code>
     */
    const FORMAT_COMPLETE_GENOMICS = 2;
}

