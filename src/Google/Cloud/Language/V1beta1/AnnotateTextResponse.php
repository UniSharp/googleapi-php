<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta1/language_service.proto

namespace Google\Cloud\Language\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The text annotations response message.
 * </pre>
 *
 * Protobuf type <code>google.cloud.language.v1beta1.AnnotateTextResponse</code>
 */
class AnnotateTextResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Sentences in the input document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_syntax][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_syntax].
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Sentence sentences = 1;</code>
     */
    private $sentences;
    /**
     * <pre>
     * Tokens, along with their syntactic information, in the input document.
     * Populated if the user enables
     * [AnnotateTextRequest.Features.extract_syntax][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_syntax].
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Token tokens = 2;</code>
     */
    private $tokens;
    /**
     * <pre>
     * Entities, along with their semantic information, in the input document.
     * Populated if the user enables
     * [AnnotateTextRequest.Features.extract_entities][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_entities].
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Entity entities = 3;</code>
     */
    private $entities;
    /**
     * <pre>
     * The overall sentiment for the document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_document_sentiment].
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.Sentiment document_sentiment = 4;</code>
     */
    private $document_sentiment = null;
    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta1.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 5;</code>
     */
    private $language = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1Beta1\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Sentences in the input document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_syntax][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_syntax].
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Sentence sentences = 1;</code>
     */
    public function getSentences()
    {
        return $this->sentences;
    }

    /**
     * <pre>
     * Sentences in the input document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_syntax][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_syntax].
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Sentence sentences = 1;</code>
     */
    public function setSentences(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1beta1\Sentence::class);
        $this->sentences = $var;
    }

    /**
     * <pre>
     * Tokens, along with their syntactic information, in the input document.
     * Populated if the user enables
     * [AnnotateTextRequest.Features.extract_syntax][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_syntax].
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Token tokens = 2;</code>
     */
    public function getTokens()
    {
        return $this->tokens;
    }

    /**
     * <pre>
     * Tokens, along with their syntactic information, in the input document.
     * Populated if the user enables
     * [AnnotateTextRequest.Features.extract_syntax][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_syntax].
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Token tokens = 2;</code>
     */
    public function setTokens(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1beta1\Token::class);
        $this->tokens = $var;
    }

    /**
     * <pre>
     * Entities, along with their semantic information, in the input document.
     * Populated if the user enables
     * [AnnotateTextRequest.Features.extract_entities][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_entities].
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Entity entities = 3;</code>
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * <pre>
     * Entities, along with their semantic information, in the input document.
     * Populated if the user enables
     * [AnnotateTextRequest.Features.extract_entities][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_entities].
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1beta1.Entity entities = 3;</code>
     */
    public function setEntities(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1beta1\Entity::class);
        $this->entities = $var;
    }

    /**
     * <pre>
     * The overall sentiment for the document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_document_sentiment].
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.Sentiment document_sentiment = 4;</code>
     */
    public function getDocumentSentiment()
    {
        return $this->document_sentiment;
    }

    /**
     * <pre>
     * The overall sentiment for the document. Populated if the user enables
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v1beta1.AnnotateTextRequest.Features.extract_document_sentiment].
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.Sentiment document_sentiment = 4;</code>
     */
    public function setDocumentSentiment(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta1\Sentiment::class);
        $this->document_sentiment = $var;
    }

    /**
     * <pre>
     * The language of the text, which will be the same as the language specified
     * in the request or, if not specified, the automatically-detected language.
     * See [Document.language][google.cloud.language.v1beta1.Document.language] field for more details.
     * </pre>
     *
     * <code>string language = 5;</code>
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
     * <code>string language = 5;</code>
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;
    }

}

