<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1beta2/functions.proto

namespace Google\Cloud\Functions\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Describes HTTPSTrigger, could be used to connect web hooks to function.
 * </pre>
 *
 * Protobuf type <code>google.cloud.functions.v1beta2.HTTPSTrigger</code>
 */
class HTTPSTrigger extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Output only. The deployed url for the function.
     * </pre>
     *
     * <code>string url = 1;</code>
     */
    private $url = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Functions\V1Beta2\Functions::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Output only. The deployed url for the function.
     * </pre>
     *
     * <code>string url = 1;</code>
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * <pre>
     * Output only. The deployed url for the function.
     * </pre>
     *
     * <code>string url = 1;</code>
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;
    }

}

