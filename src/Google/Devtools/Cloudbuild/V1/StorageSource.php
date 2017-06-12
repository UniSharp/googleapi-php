<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * StorageSource describes the location of the source in an archive file in
 * Google Cloud Storage.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.StorageSource</code>
 */
class StorageSource extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Google Cloud Storage bucket containing source (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     * </pre>
     *
     * <code>string bucket = 1;</code>
     */
    private $bucket = '';
    /**
     * <pre>
     * Google Cloud Storage object containing source.
     * This object must be a gzipped archive file (.tar.gz) containing source to
     * build.
     * </pre>
     *
     * <code>string object = 2;</code>
     */
    private $object = '';
    /**
     * <pre>
     * Google Cloud Storage generation for the object. If the generation is
     * omitted, the latest generation will be used.
     * </pre>
     *
     * <code>int64 generation = 3;</code>
     */
    private $generation = 0;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Google Cloud Storage bucket containing source (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     * </pre>
     *
     * <code>string bucket = 1;</code>
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * <pre>
     * Google Cloud Storage bucket containing source (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     * </pre>
     *
     * <code>string bucket = 1;</code>
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;
    }

    /**
     * <pre>
     * Google Cloud Storage object containing source.
     * This object must be a gzipped archive file (.tar.gz) containing source to
     * build.
     * </pre>
     *
     * <code>string object = 2;</code>
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * <pre>
     * Google Cloud Storage object containing source.
     * This object must be a gzipped archive file (.tar.gz) containing source to
     * build.
     * </pre>
     *
     * <code>string object = 2;</code>
     */
    public function setObject($var)
    {
        GPBUtil::checkString($var, True);
        $this->object = $var;
    }

    /**
     * <pre>
     * Google Cloud Storage generation for the object. If the generation is
     * omitted, the latest generation will be used.
     * </pre>
     *
     * <code>int64 generation = 3;</code>
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * <pre>
     * Google Cloud Storage generation for the object. If the generation is
     * omitted, the latest generation will be used.
     * </pre>
     *
     * <code>int64 generation = 3;</code>
     */
    public function setGeneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->generation = $var;
    }

}

