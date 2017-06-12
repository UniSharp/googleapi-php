<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/references.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.SearchReferenceSetsRequest</code>
 */
class SearchReferenceSetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * If present, return reference sets for which the
     * [md5checksum][google.genomics.v1.ReferenceSet.md5checksum] matches exactly.
     * </pre>
     *
     * <code>repeated string md5checksums = 1;</code>
     */
    private $md5checksums;
    /**
     * <pre>
     * If present, return reference sets for which a prefix of any of
     * [sourceAccessions][google.genomics.v1.ReferenceSet.source_accessions]
     * match any of these strings. Accession numbers typically have a main number
     * and a version, for example `NC_000001.11`.
     * </pre>
     *
     * <code>repeated string accessions = 2;</code>
     */
    private $accessions;
    /**
     * <pre>
     * If present, return reference sets for which a substring of their
     * `assemblyId` matches this string (case insensitive).
     * </pre>
     *
     * <code>string assembly_id = 3;</code>
     */
    private $assembly_id = '';
    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024. The maximum value is 4096.
     * </pre>
     *
     * <code>int32 page_size = 5;</code>
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\References::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * If present, return reference sets for which the
     * [md5checksum][google.genomics.v1.ReferenceSet.md5checksum] matches exactly.
     * </pre>
     *
     * <code>repeated string md5checksums = 1;</code>
     */
    public function getMd5Checksums()
    {
        return $this->md5checksums;
    }

    /**
     * <pre>
     * If present, return reference sets for which the
     * [md5checksum][google.genomics.v1.ReferenceSet.md5checksum] matches exactly.
     * </pre>
     *
     * <code>repeated string md5checksums = 1;</code>
     */
    public function setMd5Checksums(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->md5checksums = $var;
    }

    /**
     * <pre>
     * If present, return reference sets for which a prefix of any of
     * [sourceAccessions][google.genomics.v1.ReferenceSet.source_accessions]
     * match any of these strings. Accession numbers typically have a main number
     * and a version, for example `NC_000001.11`.
     * </pre>
     *
     * <code>repeated string accessions = 2;</code>
     */
    public function getAccessions()
    {
        return $this->accessions;
    }

    /**
     * <pre>
     * If present, return reference sets for which a prefix of any of
     * [sourceAccessions][google.genomics.v1.ReferenceSet.source_accessions]
     * match any of these strings. Accession numbers typically have a main number
     * and a version, for example `NC_000001.11`.
     * </pre>
     *
     * <code>repeated string accessions = 2;</code>
     */
    public function setAccessions(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->accessions = $var;
    }

    /**
     * <pre>
     * If present, return reference sets for which a substring of their
     * `assemblyId` matches this string (case insensitive).
     * </pre>
     *
     * <code>string assembly_id = 3;</code>
     */
    public function getAssemblyId()
    {
        return $this->assembly_id;
    }

    /**
     * <pre>
     * If present, return reference sets for which a substring of their
     * `assemblyId` matches this string (case insensitive).
     * </pre>
     *
     * <code>string assembly_id = 3;</code>
     */
    public function setAssemblyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->assembly_id = $var;
    }

    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024. The maximum value is 4096.
     * </pre>
     *
     * <code>int32 page_size = 5;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024. The maximum value is 4096.
     * </pre>
     *
     * <code>int32 page_size = 5;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

}

