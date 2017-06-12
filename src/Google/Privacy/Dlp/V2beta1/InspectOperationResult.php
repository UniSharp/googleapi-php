<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The operational data.
 * </pre>
 *
 * Protobuf type <code>google.privacy.dlp.v2beta1.InspectOperationResult</code>
 */
class InspectOperationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The server-assigned name, which is only unique within the same service that
     * originally returns it. If you use the default HTTP mapping, the
     * `name` should have the format of `inspect/results/{id}`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The server-assigned name, which is only unique within the same service that
     * originally returns it. If you use the default HTTP mapping, the
     * `name` should have the format of `inspect/results/{id}`.
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
     * The server-assigned name, which is only unique within the same service that
     * originally returns it. If you use the default HTTP mapping, the
     * `name` should have the format of `inspect/results/{id}`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}
