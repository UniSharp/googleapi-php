<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/storage.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Options defining a file or a set of files (path ending with *) within
 * a Google Cloud Storage bucket.
 * </pre>
 *
 * Protobuf type <code>google.privacy.dlp.v2beta1.CloudStorageOptions</code>
 */
class CloudStorageOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.google.privacy.dlp.v2beta1.CloudStorageOptions.FileSet file_set = 1;</code>
     */
    private $file_set = null;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Storage::initOnce();
        parent::__construct();
    }

    /**
     * <code>.google.privacy.dlp.v2beta1.CloudStorageOptions.FileSet file_set = 1;</code>
     */
    public function getFileSet()
    {
        return $this->file_set;
    }

    /**
     * <code>.google.privacy.dlp.v2beta1.CloudStorageOptions.FileSet file_set = 1;</code>
     */
    public function setFileSet(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\CloudStorageOptions_FileSet::class);
        $this->file_set = $var;
    }

}

