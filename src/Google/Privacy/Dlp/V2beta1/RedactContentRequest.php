<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request to search for potentially sensitive info in a list of items
 * and replace it with a default or provided content.
 * </pre>
 *
 * Protobuf type <code>google.privacy.dlp.v2beta1.RedactContentRequest</code>
 */
class RedactContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Configuration for the inspector.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.InspectConfig inspect_config = 1;</code>
     */
    private $inspect_config = null;
    /**
     * <pre>
     * The list of items to inspect. Up to 100 are allowed per request.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.ContentItem items = 2;</code>
     */
    private $items;
    /**
     * <pre>
     * The strings to replace findings with. Must specify at least one.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.RedactContentRequest.ReplaceConfig replace_configs = 3;</code>
     */
    private $replace_configs;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Configuration for the inspector.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.InspectConfig inspect_config = 1;</code>
     */
    public function getInspectConfig()
    {
        return $this->inspect_config;
    }

    /**
     * <pre>
     * Configuration for the inspector.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.InspectConfig inspect_config = 1;</code>
     */
    public function setInspectConfig(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\InspectConfig::class);
        $this->inspect_config = $var;
    }

    /**
     * <pre>
     * The list of items to inspect. Up to 100 are allowed per request.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.ContentItem items = 2;</code>
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <pre>
     * The list of items to inspect. Up to 100 are allowed per request.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.ContentItem items = 2;</code>
     */
    public function setItems(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Privacy\Dlp\V2beta1\ContentItem::class);
        $this->items = $arr;
    }

    /**
     * <pre>
     * The strings to replace findings with. Must specify at least one.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.RedactContentRequest.ReplaceConfig replace_configs = 3;</code>
     */
    public function getReplaceConfigs()
    {
        return $this->replace_configs;
    }

    /**
     * <pre>
     * The strings to replace findings with. Must specify at least one.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.RedactContentRequest.ReplaceConfig replace_configs = 3;</code>
     */
    public function setReplaceConfigs(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Privacy\Dlp\V2beta1\RedactContentRequest_ReplaceConfig::class);
        $this->replace_configs = $arr;
    }

}

