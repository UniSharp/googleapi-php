<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The service account key create request.
 * </pre>
 *
 * Protobuf type <code>google.iam.admin.v1.CreateServiceAccountKeyRequest</code>
 */
class CreateServiceAccountKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resource name of the service account in the following format:
     * `projects/{project}/serviceAccounts/{account}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The output format of the private key. `GOOGLE_CREDENTIALS_FILE` is the
     * default output format.
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     */
    private $private_key_type = 0;
    /**
     * <pre>
     * Which type of key and algorithm to use for the key.
     * The default is currently a 4K RSA key.  However this may change in the
     * future.
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccountKeyAlgorithm key_algorithm = 3;</code>
     */
    private $key_algorithm = 0;

    public function __construct() {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resource name of the service account in the following format:
     * `projects/{project}/serviceAccounts/{account}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * The resource name of the service account in the following format:
     * `projects/{project}/serviceAccounts/{account}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * The output format of the private key. `GOOGLE_CREDENTIALS_FILE` is the
     * default output format.
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     */
    public function getPrivateKeyType()
    {
        return $this->private_key_type;
    }

    /**
     * <pre>
     * The output format of the private key. `GOOGLE_CREDENTIALS_FILE` is the
     * default output format.
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     */
    public function setPrivateKeyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Iam\Admin\V1\ServiceAccountPrivateKeyType::class);
        $this->private_key_type = $var;
    }

    /**
     * <pre>
     * Which type of key and algorithm to use for the key.
     * The default is currently a 4K RSA key.  However this may change in the
     * future.
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccountKeyAlgorithm key_algorithm = 3;</code>
     */
    public function getKeyAlgorithm()
    {
        return $this->key_algorithm;
    }

    /**
     * <pre>
     * Which type of key and algorithm to use for the key.
     * The default is currently a 4K RSA key.  However this may change in the
     * future.
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccountKeyAlgorithm key_algorithm = 3;</code>
     */
    public function setKeyAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Iam\Admin\V1\ServiceAccountKeyAlgorithm::class);
        $this->key_algorithm = $var;
    }

}
