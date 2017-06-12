<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Custom static error page to be served when an error occurs.
 * </pre>
 *
 * Protobuf type <code>google.appengine.v1.ErrorHandler</code>
 */
class ErrorHandler extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Error condition this handler applies to.
     * </pre>
     *
     * <code>.google.appengine.v1.ErrorHandler.ErrorCode error_code = 1;</code>
     */
    private $error_code = 0;
    /**
     * <pre>
     * Static file content to be served for this error.
     * </pre>
     *
     * <code>string static_file = 2;</code>
     */
    private $static_file = '';
    /**
     * <pre>
     * MIME type of file. Defaults to `text/html`.
     * </pre>
     *
     * <code>string mime_type = 3;</code>
     */
    private $mime_type = '';

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\AppYaml::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Error condition this handler applies to.
     * </pre>
     *
     * <code>.google.appengine.v1.ErrorHandler.ErrorCode error_code = 1;</code>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * <pre>
     * Error condition this handler applies to.
     * </pre>
     *
     * <code>.google.appengine.v1.ErrorHandler.ErrorCode error_code = 1;</code>
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Appengine\V1\ErrorHandler_ErrorCode::class);
        $this->error_code = $var;
    }

    /**
     * <pre>
     * Static file content to be served for this error.
     * </pre>
     *
     * <code>string static_file = 2;</code>
     */
    public function getStaticFile()
    {
        return $this->static_file;
    }

    /**
     * <pre>
     * Static file content to be served for this error.
     * </pre>
     *
     * <code>string static_file = 2;</code>
     */
    public function setStaticFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->static_file = $var;
    }

    /**
     * <pre>
     * MIME type of file. Defaults to `text/html`.
     * </pre>
     *
     * <code>string mime_type = 3;</code>
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * <pre>
     * MIME type of file. Defaults to `text/html`.
     * </pre>
     *
     * <code>string mime_type = 3;</code>
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;
    }

}
