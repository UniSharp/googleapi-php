<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta1/language_service.proto

namespace Google\Cloud\Language\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The entity analysis response message.
 * </pre>
 *
 * Protobuf type <code>google.cloud.language.v1beta1.AnalyzeEntitiesResponse</code>
 */
class AnalyzeEntitiesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The recognized entities in the input document.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Entity entities = 1;</code>
     */
    private $entities;
    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta1.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 2;</code>
     */
    private $language = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1Beta1\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The recognized entities in the input document.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Entity entities = 1;</code>
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * <pre>
     * The recognized entities in the input document.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Entity entities = 1;</code>
     */
    public function setEntities(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1beta1\Entity::class);
        $this->entities = $var;
    }

    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta1.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 2;</code>
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta1.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 2;</code>
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;
    }

}

