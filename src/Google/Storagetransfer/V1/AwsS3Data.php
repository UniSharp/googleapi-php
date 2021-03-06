<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Storagetransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * An AwsS3Data can be a data source, but not a data sink.
 * In an AwsS3Data, an object's name is the S3 object's key name.
 * </pre>
 *
 * Protobuf type <code>google.storagetransfer.v1.AwsS3Data</code>
 */
class AwsS3Data extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * S3 Bucket name (see
     * [Creating a bucket](http://docs.aws.amazon.com/AmazonS3/latest/dev/create-bucket-get-location-example.html)).
     * Required.
     * </pre>
     *
     * <code>string bucket_name = 1;</code>
     */
    private $bucket_name = '';
    /**
     * <pre>
     * AWS access key used to sign the API requests to the AWS S3 bucket.
     * Permissions on the bucket must be granted to the access ID of the
     * AWS access key.
     * Required.
     * </pre>
     *
     * <code>.google.storagetransfer.v1.AwsAccessKey aws_access_key = 2;</code>
     */
    private $aws_access_key = null;

    public function __construct() {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * S3 Bucket name (see
     * [Creating a bucket](http://docs.aws.amazon.com/AmazonS3/latest/dev/create-bucket-get-location-example.html)).
     * Required.
     * </pre>
     *
     * <code>string bucket_name = 1;</code>
     */
    public function getBucketName()
    {
        return $this->bucket_name;
    }

    /**
     * <pre>
     * S3 Bucket name (see
     * [Creating a bucket](http://docs.aws.amazon.com/AmazonS3/latest/dev/create-bucket-get-location-example.html)).
     * Required.
     * </pre>
     *
     * <code>string bucket_name = 1;</code>
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket_name = $var;
    }

    /**
     * <pre>
     * AWS access key used to sign the API requests to the AWS S3 bucket.
     * Permissions on the bucket must be granted to the access ID of the
     * AWS access key.
     * Required.
     * </pre>
     *
     * <code>.google.storagetransfer.v1.AwsAccessKey aws_access_key = 2;</code>
     */
    public function getAwsAccessKey()
    {
        return $this->aws_access_key;
    }

    /**
     * <pre>
     * AWS access key used to sign the API requests to the AWS S3 bucket.
     * Permissions on the bucket must be granted to the access ID of the
     * AWS access key.
     * Required.
     * </pre>
     *
     * <code>.google.storagetransfer.v1.AwsAccessKey aws_access_key = 2;</code>
     */
    public function setAwsAccessKey(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Storagetransfer\V1\AwsAccessKey::class);
        $this->aws_access_key = $var;
    }

}

