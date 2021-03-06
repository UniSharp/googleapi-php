<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A Google Cloud Service Account.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1alpha2.ServiceAccount</code>
 */
class ServiceAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Email address of the service account. Defaults to `default`,
     * which uses the compute service account associated with the project.
     * </pre>
     *
     * <code>string email = 1;</code>
     */
    private $email = '';
    /**
     * <pre>
     * List of scopes to be enabled for this service account on the VM.
     * The following scopes are automatically included:
     * * https://www.googleapis.com/auth/compute
     * * https://www.googleapis.com/auth/devstorage.full_control
     * * https://www.googleapis.com/auth/genomics
     * * https://www.googleapis.com/auth/logging.write
     * * https://www.googleapis.com/auth/monitoring.write
     * </pre>
     *
     * <code>repeated string scopes = 2;</code>
     */
    private $scopes;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Email address of the service account. Defaults to `default`,
     * which uses the compute service account associated with the project.
     * </pre>
     *
     * <code>string email = 1;</code>
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <pre>
     * Email address of the service account. Defaults to `default`,
     * which uses the compute service account associated with the project.
     * </pre>
     *
     * <code>string email = 1;</code>
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;
    }

    /**
     * <pre>
     * List of scopes to be enabled for this service account on the VM.
     * The following scopes are automatically included:
     * * https://www.googleapis.com/auth/compute
     * * https://www.googleapis.com/auth/devstorage.full_control
     * * https://www.googleapis.com/auth/genomics
     * * https://www.googleapis.com/auth/logging.write
     * * https://www.googleapis.com/auth/monitoring.write
     * </pre>
     *
     * <code>repeated string scopes = 2;</code>
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * <pre>
     * List of scopes to be enabled for this service account on the VM.
     * The following scopes are automatically included:
     * * https://www.googleapis.com/auth/compute
     * * https://www.googleapis.com/auth/devstorage.full_control
     * * https://www.googleapis.com/auth/genomics
     * * https://www.googleapis.com/auth/logging.write
     * * https://www.googleapis.com/auth/monitoring.write
     * </pre>
     *
     * <code>repeated string scopes = 2;</code>
     */
    public function setScopes(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scopes = $arr;
    }

}

