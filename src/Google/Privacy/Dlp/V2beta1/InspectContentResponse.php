<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Results of inspecting a list of items.
 * </pre>
 *
 * Protobuf type <code>google.privacy.dlp.v2beta1.InspectContentResponse</code>
 */
class InspectContentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Each content_item from the request will have a result in this list, in the
     * same order as the request.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.InspectResult results = 1;</code>
     */
    private $results;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Each content_item from the request will have a result in this list, in the
     * same order as the request.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.InspectResult results = 1;</code>
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * <pre>
     * Each content_item from the request will have a result in this list, in the
     * same order as the request.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.InspectResult results = 1;</code>
     */
    public function setResults(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Privacy\Dlp\V2beta1\InspectResult::class);
        $this->results = $arr;
    }

}

