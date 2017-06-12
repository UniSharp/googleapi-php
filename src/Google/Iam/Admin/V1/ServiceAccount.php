<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A service account in the Identity and Access Management API.
 * To create a service account, specify the `project_id` and the `account_id`
 * for the account.  The `account_id` is unique within the project, and is used
 * to generate the service account email address and a stable
 * `unique_id`.
 * If the account already exists, the account's resource name is returned
 * in util::Status's ResourceInfo.resource_name in the format of
 * projects/{project}/serviceAccounts/{email}. The caller can use the name in
 * other methods to access the account.
 * All other methods can identify the service account using the format
 * `projects/{project}/serviceAccounts/{account}`.
 * Using `-` as a wildcard for the project will infer the project from
 * the account. The `account` value can be the `email` address or the
 * `unique_id` of the service account.
 * </pre>
 *
 * Protobuf type <code>google.iam.admin.v1.ServiceAccount</code>
 */
class ServiceAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resource name of the service account in the following format:
     * `projects/{project}/serviceAccounts/{account}`.
     * Requests using `-` as a wildcard for the project will infer the project
     * from the `account` and the `account` value can be the `email` address or
     * the `unique_id` of the service account.
     * In responses the resource name will always be in the format
     * `projects/{project}/serviceAccounts/{email}`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * &#64;OutputOnly The id of the project that owns the service account.
     * </pre>
     *
     * <code>string project_id = 2;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * &#64;OutputOnly The unique and stable id of the service account.
     * </pre>
     *
     * <code>string unique_id = 4;</code>
     */
    private $unique_id = '';
    /**
     * <pre>
     * &#64;OutputOnly The email address of the service account.
     * </pre>
     *
     * <code>string email = 5;</code>
     */
    private $email = '';
    /**
     * <pre>
     * Optional. A user-specified description of the service account.  Must be
     * fewer than 100 UTF-8 bytes.
     * </pre>
     *
     * <code>string display_name = 6;</code>
     */
    private $display_name = '';
    /**
     * <pre>
     * Used to perform a consistent read-modify-write.
     * </pre>
     *
     * <code>bytes etag = 7;</code>
     */
    private $etag = '';
    /**
     * <pre>
     * &#64;OutputOnly. The OAuth2 client id for the service account.
     * This is used in conjunction with the OAuth2 clientconfig API to make
     * three legged OAuth2 (3LO) flows to access the data of Google users.
     * </pre>
     *
     * <code>string oauth2_client_id = 9;</code>
     */
    private $oauth2_client_id = '';

    public function __construct() {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resource name of the service account in the following format:
     * `projects/{project}/serviceAccounts/{account}`.
     * Requests using `-` as a wildcard for the project will infer the project
     * from the `account` and the `account` value can be the `email` address or
     * the `unique_id` of the service account.
     * In responses the resource name will always be in the format
     * `projects/{project}/serviceAccounts/{email}`.
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
     * Requests using `-` as a wildcard for the project will infer the project
     * from the `account` and the `account` value can be the `email` address or
     * the `unique_id` of the service account.
     * In responses the resource name will always be in the format
     * `projects/{project}/serviceAccounts/{email}`.
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
     * &#64;OutputOnly The id of the project that owns the service account.
     * </pre>
     *
     * <code>string project_id = 2;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * &#64;OutputOnly The id of the project that owns the service account.
     * </pre>
     *
     * <code>string project_id = 2;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * &#64;OutputOnly The unique and stable id of the service account.
     * </pre>
     *
     * <code>string unique_id = 4;</code>
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * <pre>
     * &#64;OutputOnly The unique and stable id of the service account.
     * </pre>
     *
     * <code>string unique_id = 4;</code>
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unique_id = $var;
    }

    /**
     * <pre>
     * &#64;OutputOnly The email address of the service account.
     * </pre>
     *
     * <code>string email = 5;</code>
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <pre>
     * &#64;OutputOnly The email address of the service account.
     * </pre>
     *
     * <code>string email = 5;</code>
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;
    }

    /**
     * <pre>
     * Optional. A user-specified description of the service account.  Must be
     * fewer than 100 UTF-8 bytes.
     * </pre>
     *
     * <code>string display_name = 6;</code>
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * <pre>
     * Optional. A user-specified description of the service account.  Must be
     * fewer than 100 UTF-8 bytes.
     * </pre>
     *
     * <code>string display_name = 6;</code>
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;
    }

    /**
     * <pre>
     * Used to perform a consistent read-modify-write.
     * </pre>
     *
     * <code>bytes etag = 7;</code>
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * <pre>
     * Used to perform a consistent read-modify-write.
     * </pre>
     *
     * <code>bytes etag = 7;</code>
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, False);
        $this->etag = $var;
    }

    /**
     * <pre>
     * &#64;OutputOnly. The OAuth2 client id for the service account.
     * This is used in conjunction with the OAuth2 clientconfig API to make
     * three legged OAuth2 (3LO) flows to access the data of Google users.
     * </pre>
     *
     * <code>string oauth2_client_id = 9;</code>
     */
    public function getOauth2ClientId()
    {
        return $this->oauth2_client_id;
    }

    /**
     * <pre>
     * &#64;OutputOnly. The OAuth2 client id for the service account.
     * This is used in conjunction with the OAuth2 clientconfig API to make
     * three legged OAuth2 (3LO) flows to access the data of Google users.
     * </pre>
     *
     * <code>string oauth2_client_id = 9;</code>
     */
    public function setOauth2ClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->oauth2_client_id = $var;
    }

}
