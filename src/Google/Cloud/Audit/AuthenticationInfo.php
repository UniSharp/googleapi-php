<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/audit_log.proto

namespace Google\Cloud\Audit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Authentication information for the operation.
 * </pre>
 *
 * Protobuf type <code>google.cloud.audit.AuthenticationInfo</code>
 */
class AuthenticationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The email address of the authenticated user making the request.
     * </pre>
     *
     * <code>string principal_email = 1;</code>
     */
    private $principal_email = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Audit\AuditLog::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The email address of the authenticated user making the request.
     * </pre>
     *
     * <code>string principal_email = 1;</code>
     */
    public function getPrincipalEmail()
    {
        return $this->principal_email;
    }

    /**
     * <pre>
     * The email address of the authenticated user making the request.
     * </pre>
     *
     * <code>string principal_email = 1;</code>
     */
    public function setPrincipalEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal_email = $var;
    }

}

