<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/log_entry.proto

namespace Google\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Additional information about the source code location that produced the log
 * entry.
 * </pre>
 *
 * Protobuf type <code>google.logging.v2.LogEntrySourceLocation</code>
 */
class LogEntrySourceLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Optional. Source file name. Depending on the runtime environment, this
     * might be a simple name or a fully-qualified name.
     * </pre>
     *
     * <code>string file = 1;</code>
     */
    private $file = '';
    /**
     * <pre>
     * Optional. Line within the source file. 1-based; 0 indicates no line number
     * available.
     * </pre>
     *
     * <code>int64 line = 2;</code>
     */
    private $line = 0;
    /**
     * <pre>
     * Optional. Human-readable name of the function or method being invoked, with
     * optional context such as the class or package name. This information may be
     * used in contexts such as the logs viewer, where a file and line number are
     * less meaningful. The format can vary by language. For example:
     * `qual.if.ied.Class.method` (Java), `dir/package.func` (Go), `function`
     * (Python).
     * </pre>
     *
     * <code>string function = 3;</code>
     */
    private $function = '';

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\LogEntry::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Optional. Source file name. Depending on the runtime environment, this
     * might be a simple name or a fully-qualified name.
     * </pre>
     *
     * <code>string file = 1;</code>
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * <pre>
     * Optional. Source file name. Depending on the runtime environment, this
     * might be a simple name or a fully-qualified name.
     * </pre>
     *
     * <code>string file = 1;</code>
     */
    public function setFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->file = $var;
    }

    /**
     * <pre>
     * Optional. Line within the source file. 1-based; 0 indicates no line number
     * available.
     * </pre>
     *
     * <code>int64 line = 2;</code>
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * <pre>
     * Optional. Line within the source file. 1-based; 0 indicates no line number
     * available.
     * </pre>
     *
     * <code>int64 line = 2;</code>
     */
    public function setLine($var)
    {
        GPBUtil::checkInt64($var);
        $this->line = $var;
    }

    /**
     * <pre>
     * Optional. Human-readable name of the function or method being invoked, with
     * optional context such as the class or package name. This information may be
     * used in contexts such as the logs viewer, where a file and line number are
     * less meaningful. The format can vary by language. For example:
     * `qual.if.ied.Class.method` (Java), `dir/package.func` (Go), `function`
     * (Python).
     * </pre>
     *
     * <code>string function = 3;</code>
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * <pre>
     * Optional. Human-readable name of the function or method being invoked, with
     * optional context such as the class or package name. This information may be
     * used in contexts such as the logs viewer, where a file and line number are
     * less meaningful. The format can vary by language. For example:
     * `qual.if.ied.Class.method` (Java), `dir/package.func` (Go), `function`
     * (Python).
     * </pre>
     *
     * <code>string function = 3;</code>
     */
    public function setFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->function = $var;
    }

}
