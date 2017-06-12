<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/text_annotation.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Detected language for a structural component.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.TextAnnotation.DetectedLanguage</code>
 */
class TextAnnotation_DetectedLanguage extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     * </pre>
     *
     * <code>string language_code = 1;</code>
     */
    private $language_code = '';
    /**
     * <pre>
     * Confidence of detected language. Range [0, 1].
     * </pre>
     *
     * <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\TextAnnotation::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     * </pre>
     *
     * <code>string language_code = 1;</code>
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * <pre>
     * The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     * </pre>
     *
     * <code>string language_code = 1;</code>
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;
    }

    /**
     * <pre>
     * Confidence of detected language. Range [0, 1].
     * </pre>
     *
     * <code>float confidence = 2;</code>
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * <pre>
     * Confidence of detected language. Range [0, 1].
     * </pre>
     *
     * <code>float confidence = 2;</code>
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;
    }

}

