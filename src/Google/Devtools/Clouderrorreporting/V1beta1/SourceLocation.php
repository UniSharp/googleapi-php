<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/common.proto

namespace Google\Devtools\Clouderrorreporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Indicates a location in the source code of the service for which
 * errors are reported.
 * This data should be provided by the application when reporting an error,
 * unless the error report has been generated automatically from Google App
 * Engine logs. All fields are optional.
 * </pre>
 *
 * Protobuf type <code>google.devtools.clouderrorreporting.v1beta1.SourceLocation</code>
 */
class SourceLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The source code filename, which can include a truncated relative
     * path, or a full path from a production machine.
     * </pre>
     *
     * <code>string file_path = 1;</code>
     */
    private $file_path = '';
    /**
     * <pre>
     * 1-based. 0 indicates that the line number is unknown.
     * </pre>
     *
     * <code>int32 line_number = 2;</code>
     */
    private $line_number = 0;
    /**
     * <pre>
     * Human-readable name of a function or method.
     * The value can include optional context like the class or package name.
     * For example, `my.package.MyClass.method` in case of Java.
     * </pre>
     *
     * <code>string function_name = 4;</code>
     */
    private $function_name = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The source code filename, which can include a truncated relative
     * path, or a full path from a production machine.
     * </pre>
     *
     * <code>string file_path = 1;</code>
     */
    public function getFilePath()
    {
        return $this->file_path;
    }

    /**
     * <pre>
     * The source code filename, which can include a truncated relative
     * path, or a full path from a production machine.
     * </pre>
     *
     * <code>string file_path = 1;</code>
     */
    public function setFilePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_path = $var;
    }

    /**
     * <pre>
     * 1-based. 0 indicates that the line number is unknown.
     * </pre>
     *
     * <code>int32 line_number = 2;</code>
     */
    public function getLineNumber()
    {
        return $this->line_number;
    }

    /**
     * <pre>
     * 1-based. 0 indicates that the line number is unknown.
     * </pre>
     *
     * <code>int32 line_number = 2;</code>
     */
    public function setLineNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->line_number = $var;
    }

    /**
     * <pre>
     * Human-readable name of a function or method.
     * The value can include optional context like the class or package name.
     * For example, `my.package.MyClass.method` in case of Java.
     * </pre>
     *
     * <code>string function_name = 4;</code>
     */
    public function getFunctionName()
    {
        return $this->function_name;
    }

    /**
     * <pre>
     * Human-readable name of a function or method.
     * The value can include optional context like the class or package name.
     * For example, `my.package.MyClass.method` in case of Java.
     * </pre>
     *
     * <code>string function_name = 4;</code>
     */
    public function setFunctionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->function_name = $var;
    }

}

