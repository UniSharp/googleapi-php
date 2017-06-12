<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace Google\Api\Servicemanagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents a diagnostic message (error or warning)
 * </pre>
 *
 * Protobuf type <code>google.api.servicemanagement.v1.Diagnostic</code>
 */
class Diagnostic extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * File name and line number of the error or warning.
     * </pre>
     *
     * <code>string location = 1;</code>
     */
    private $location = '';
    /**
     * <pre>
     * The kind of diagnostic information provided.
     * </pre>
     *
     * <code>.google.api.servicemanagement.v1.Diagnostic.Kind kind = 2;</code>
     */
    private $kind = 0;
    /**
     * <pre>
     * Message describing the error or warning.
     * </pre>
     *
     * <code>string message = 3;</code>
     */
    private $message = '';

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * File name and line number of the error or warning.
     * </pre>
     *
     * <code>string location = 1;</code>
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * <pre>
     * File name and line number of the error or warning.
     * </pre>
     *
     * <code>string location = 1;</code>
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;
    }

    /**
     * <pre>
     * The kind of diagnostic information provided.
     * </pre>
     *
     * <code>.google.api.servicemanagement.v1.Diagnostic.Kind kind = 2;</code>
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * <pre>
     * The kind of diagnostic information provided.
     * </pre>
     *
     * <code>.google.api.servicemanagement.v1.Diagnostic.Kind kind = 2;</code>
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\Servicemanagement\V1\Diagnostic_Kind::class);
        $this->kind = $var;
    }

    /**
     * <pre>
     * Message describing the error or warning.
     * </pre>
     *
     * <code>string message = 3;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <pre>
     * Message describing the error or warning.
     * </pre>
     *
     * <code>string message = 3;</code>
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;
    }

}
