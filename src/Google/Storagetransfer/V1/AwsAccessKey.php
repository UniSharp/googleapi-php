<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Storagetransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * AWS access key (see
 * [AWS Security Credentials](http://docs.aws.amazon.com/general/latest/gr/aws-security-credentials.html)).
 * </pre>
 *
 * Protobuf type <code>google.storagetransfer.v1.AwsAccessKey</code>
 */
class AwsAccessKey extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * AWS access key ID.
     * Required.
     * </pre>
     *
     * <code>string access_key_id = 1;</code>
     */
    private $access_key_id = '';
    /**
     * <pre>
     * AWS secret access key. This field is not returned in RPC responses.
     * Required.
     * </pre>
     *
     * <code>string secret_access_key = 2;</code>
     */
    private $secret_access_key = '';

    public function __construct() {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * AWS access key ID.
     * Required.
     * </pre>
     *
     * <code>string access_key_id = 1;</code>
     */
    public function getAccessKeyId()
    {
        return $this->access_key_id;
    }

    /**
     * <pre>
     * AWS access key ID.
     * Required.
     * </pre>
     *
     * <code>string access_key_id = 1;</code>
     */
    public function setAccessKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_key_id = $var;
    }

    /**
     * <pre>
     * AWS secret access key. This field is not returned in RPC responses.
     * Required.
     * </pre>
     *
     * <code>string secret_access_key = 2;</code>
     */
    public function getSecretAccessKey()
    {
        return $this->secret_access_key;
    }

    /**
     * <pre>
     * AWS secret access key. This field is not returned in RPC responses.
     * Required.
     * </pre>
     *
     * <code>string secret_access_key = 2;</code>
     */
    public function setSecretAccessKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_access_key = $var;
    }

}

