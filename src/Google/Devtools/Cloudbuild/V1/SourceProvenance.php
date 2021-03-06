<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Provenance of the source. Ways to find the original source, or verify that
 * some source was used for this build.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.SourceProvenance</code>
 */
class SourceProvenance extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A copy of the build's source.storage_source, if exists, with any
     * generations resolved.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.StorageSource resolved_storage_source = 3;</code>
     */
    private $resolved_storage_source = null;
    /**
     * <pre>
     * A copy of the build's source.repo_source, if exists, with any
     * revisions resolved.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.RepoSource resolved_repo_source = 6;</code>
     */
    private $resolved_repo_source = null;
    /**
     * <pre>
     * Hash(es) of the build source, which can be used to verify that the original
     * source integrity was maintained in the build. Note that FileHashes will
     * only be populated if BuildOptions has requested a SourceProvenanceHash.
     * The keys to this map are file paths used as build source and the values
     * contain the hash values for those files.
     * If the build source came in a single package such as a gzipped tarfile
     * (.tar.gz), the FileHash will be for the single path to that file.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>map&lt;string, .google.devtools.cloudbuild.v1.FileHashes&gt; file_hashes = 4;</code>
     */
    private $file_hashes;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A copy of the build's source.storage_source, if exists, with any
     * generations resolved.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.StorageSource resolved_storage_source = 3;</code>
     */
    public function getResolvedStorageSource()
    {
        return $this->resolved_storage_source;
    }

    /**
     * <pre>
     * A copy of the build's source.storage_source, if exists, with any
     * generations resolved.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.StorageSource resolved_storage_source = 3;</code>
     */
    public function setResolvedStorageSource(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\StorageSource::class);
        $this->resolved_storage_source = $var;
    }

    /**
     * <pre>
     * A copy of the build's source.repo_source, if exists, with any
     * revisions resolved.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.RepoSource resolved_repo_source = 6;</code>
     */
    public function getResolvedRepoSource()
    {
        return $this->resolved_repo_source;
    }

    /**
     * <pre>
     * A copy of the build's source.repo_source, if exists, with any
     * revisions resolved.
     * </pre>
     *
     * <code>.google.devtools.cloudbuild.v1.RepoSource resolved_repo_source = 6;</code>
     */
    public function setResolvedRepoSource(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\RepoSource::class);
        $this->resolved_repo_source = $var;
    }

    /**
     * <pre>
     * Hash(es) of the build source, which can be used to verify that the original
     * source integrity was maintained in the build. Note that FileHashes will
     * only be populated if BuildOptions has requested a SourceProvenanceHash.
     * The keys to this map are file paths used as build source and the values
     * contain the hash values for those files.
     * If the build source came in a single package such as a gzipped tarfile
     * (.tar.gz), the FileHash will be for the single path to that file.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>map&lt;string, .google.devtools.cloudbuild.v1.FileHashes&gt; file_hashes = 4;</code>
     */
    public function getFileHashes()
    {
        return $this->file_hashes;
    }

    /**
     * <pre>
     * Hash(es) of the build source, which can be used to verify that the original
     * source integrity was maintained in the build. Note that FileHashes will
     * only be populated if BuildOptions has requested a SourceProvenanceHash.
     * The keys to this map are file paths used as build source and the values
     * contain the hash values for those files.
     * If the build source came in a single package such as a gzipped tarfile
     * (.tar.gz), the FileHash will be for the single path to that file.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>map&lt;string, .google.devtools.cloudbuild.v1.FileHashes&gt; file_hashes = 4;</code>
     */
    public function setFileHashes(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\FileHashes::class);
        $this->file_hashes = $arr;
    }

}

