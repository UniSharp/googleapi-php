<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The syntax analysis response message.
 * </pre>
 *
 * Protobuf type <code>google.cloud.language.v1beta2.AnalyzeSyntaxResponse</code>
 */
class AnalyzeSyntaxResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Sentences in the input document.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta2.Sentence sentences = 1;</code>
     */
    private $sentences;
    /**
     * <pre>
     * Tokens, along with their syntactic information, in the input document.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta2.Token tokens = 2;</code>
     */
    private $tokens;
    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 3;</code>
     */
    private $language = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Sentences in the input document.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta2.Sentence sentences = 1;</code>
     */
    public function getSentences()
    {
        return $this->sentences;
    }

    /**
     * <pre>
     * Sentences in the input document.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta2.Sentence sentences = 1;</code>
     */
    public function setSentences(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1beta2\Sentence::class);
        $this->sentences = $var;
    }

    /**
     * <pre>
     * Tokens, along with their syntactic information, in the input document.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta2.Token tokens = 2;</code>
     */
    public function getTokens()
    {
        return $this->tokens;
    }

    /**
     * <pre>
     * Tokens, along with their syntactic information, in the input document.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta2.Token tokens = 2;</code>
     */
    public function setTokens(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1beta2\Token::class);
        $this->tokens = $var;
    }

    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 3;</code>
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta2.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 3;</code>
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;
    }

}
