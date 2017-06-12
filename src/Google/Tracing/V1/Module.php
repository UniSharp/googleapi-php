<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/tracing/trace.proto

namespace Google\Tracing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.tracing.v1.Module</code>
 */
class Module extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Binary module.
     * E.g. main binary, kernel modules, and dynamic libraries
     * such as libc.so, sharedlib.so
     * </pre>
     *
     * <code>string module = 1;</code>
     */
    private $module = '';
    /**
     * <pre>
     * Build_id is a unique identifier for the module,
     * probably a hash of its contents
     * </pre>
     *
     * <code>string build_id = 2;</code>
     */
    private $build_id = '';

    public function __construct() {
        \GPBMetadata\Google\Tracing\Trace::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Binary module.
     * E.g. main binary, kernel modules, and dynamic libraries
     * such as libc.so, sharedlib.so
     * </pre>
     *
     * <code>string module = 1;</code>
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * <pre>
     * Binary module.
     * E.g. main binary, kernel modules, and dynamic libraries
     * such as libc.so, sharedlib.so
     * </pre>
     *
     * <code>string module = 1;</code>
     */
    public function setModule($var)
    {
        GPBUtil::checkString($var, True);
        $this->module = $var;
    }

    /**
     * <pre>
     * Build_id is a unique identifier for the module,
     * probably a hash of its contents
     * </pre>
     *
     * <code>string build_id = 2;</code>
     */
    public function getBuildId()
    {
        return $this->build_id;
    }

    /**
     * <pre>
     * Build_id is a unique identifier for the module,
     * probably a hash of its contents
     * </pre>
     *
     * <code>string build_id = 2;</code>
     */
    public function setBuildId($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_id = $var;
    }

}

