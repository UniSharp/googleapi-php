<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/storage.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Record key for a finding in a Cloud Storage file.
 * </pre>
 *
 * Protobuf type <code>google.privacy.dlp.v2beta1.CloudStorageKey</code>
 */
class CloudStorageKey extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Path to the file.
     * </pre>
     *
     * <code>string file_path = 1;</code>
     */
    private $file_path = '';
    /**
     * <pre>
     * Byte offset of the referenced data in the file.
     * </pre>
     *
     * <code>int64 start_offset = 2;</code>
     */
    private $start_offset = 0;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Storage::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Path to the file.
     * </pre>
     *
     * <code>string file_path = 1;</code>
     */
    public function getFilePath()
    {
        return $this->file_path;
    }

    /**
     * <pre>
     * Path to the file.
     * </pre>
     *
     * <code>string file_path = 1;</code>
     */
    public function setFilePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_path = $var;
    }

    /**
     * <pre>
     * Byte offset of the referenced data in the file.
     * </pre>
     *
     * <code>int64 start_offset = 2;</code>
     */
    public function getStartOffset()
    {
        return $this->start_offset;
    }

    /**
     * <pre>
     * Byte offset of the referenced data in the file.
     * </pre>
     *
     * <code>int64 start_offset = 2;</code>
     */
    public function setStartOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_offset = $var;
    }

}

