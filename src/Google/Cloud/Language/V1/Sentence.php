<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents a sentence in the input document.
 * </pre>
 *
 * Protobuf type <code>google.cloud.language.v1.Sentence</code>
 */
class Sentence extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The sentence text.
     * </pre>
     *
     * <code>.google.cloud.language.v1.TextSpan text = 1;</code>
     */
    private $text = null;
    /**
     * <pre>
     * For calls to [AnalyzeSentiment][] or if
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v1.AnnotateTextRequest.Features.extract_document_sentiment] is set to
     * true, this field will contain the sentiment for the sentence.
     * </pre>
     *
     * <code>.google.cloud.language.v1.Sentiment sentiment = 2;</code>
     */
    private $sentiment = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The sentence text.
     * </pre>
     *
     * <code>.google.cloud.language.v1.TextSpan text = 1;</code>
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * <pre>
     * The sentence text.
     * </pre>
     *
     * <code>.google.cloud.language.v1.TextSpan text = 1;</code>
     */
    public function setText(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1\TextSpan::class);
        $this->text = $var;
    }

    /**
     * <pre>
     * For calls to [AnalyzeSentiment][] or if
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v1.AnnotateTextRequest.Features.extract_document_sentiment] is set to
     * true, this field will contain the sentiment for the sentence.
     * </pre>
     *
     * <code>.google.cloud.language.v1.Sentiment sentiment = 2;</code>
     */
    public function getSentiment()
    {
        return $this->sentiment;
    }

    /**
     * <pre>
     * For calls to [AnalyzeSentiment][] or if
     * [AnnotateTextRequest.Features.extract_document_sentiment][google.cloud.language.v1.AnnotateTextRequest.Features.extract_document_sentiment] is set to
     * true, this field will contain the sentiment for the sentence.
     * </pre>
     *
     * <code>.google.cloud.language.v1.Sentiment sentiment = 2;</code>
     */
    public function setSentiment(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1\Sentiment::class);
        $this->sentiment = $var;
    }

}

