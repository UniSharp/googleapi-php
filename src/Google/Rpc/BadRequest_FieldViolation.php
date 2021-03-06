<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A message type used to describe a single bad request field.
 * </pre>
 *
 * Protobuf type <code>google.rpc.BadRequest.FieldViolation</code>
 */
class BadRequest_FieldViolation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A path leading to a field in the request body. The value will be a
     * sequence of dot-separated identifiers that identify a protocol buffer
     * field. E.g., "field_violations.field" would identify this field.
     * </pre>
     *
     * <code>string field = 1;</code>
     */
    private $field = '';
    /**
     * <pre>
     * A description of why the request element is bad.
     * </pre>
     *
     * <code>string description = 2;</code>
     */
    private $description = '';

    public function __construct() {
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A path leading to a field in the request body. The value will be a
     * sequence of dot-separated identifiers that identify a protocol buffer
     * field. E.g., "field_violations.field" would identify this field.
     * </pre>
     *
     * <code>string field = 1;</code>
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <pre>
     * A path leading to a field in the request body. The value will be a
     * sequence of dot-separated identifiers that identify a protocol buffer
     * field. E.g., "field_violations.field" would identify this field.
     * </pre>
     *
     * <code>string field = 1;</code>
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;
    }

    /**
     * <pre>
     * A description of why the request element is bad.
     * </pre>
     *
     * <code>string description = 2;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * A description of why the request element is bad.
     * </pre>
     *
     * <code>string description = 2;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

}

