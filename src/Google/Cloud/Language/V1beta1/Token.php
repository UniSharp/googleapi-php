<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta1/language_service.proto

namespace Google\Cloud\Language\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents the smallest syntactic building block of the text.
 * </pre>
 *
 * Protobuf type <code>google.cloud.language.v1beta1.Token</code>
 */
class Token extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The token text.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.TextSpan text = 1;</code>
     */
    private $text = null;
    /**
     * <pre>
     * Parts of speech tag for this token.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.PartOfSpeech part_of_speech = 2;</code>
     */
    private $part_of_speech = null;
    /**
     * <pre>
     * Dependency tree parse for this token.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.DependencyEdge dependency_edge = 3;</code>
     */
    private $dependency_edge = null;
    /**
     * <pre>
     * [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     * </pre>
     *
     * <code>string lemma = 4;</code>
     */
    private $lemma = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1Beta1\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The token text.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.TextSpan text = 1;</code>
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * <pre>
     * The token text.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.TextSpan text = 1;</code>
     */
    public function setText(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta1\TextSpan::class);
        $this->text = $var;
    }

    /**
     * <pre>
     * Parts of speech tag for this token.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.PartOfSpeech part_of_speech = 2;</code>
     */
    public function getPartOfSpeech()
    {
        return $this->part_of_speech;
    }

    /**
     * <pre>
     * Parts of speech tag for this token.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.PartOfSpeech part_of_speech = 2;</code>
     */
    public function setPartOfSpeech(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta1\PartOfSpeech::class);
        $this->part_of_speech = $var;
    }

    /**
     * <pre>
     * Dependency tree parse for this token.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.DependencyEdge dependency_edge = 3;</code>
     */
    public function getDependencyEdge()
    {
        return $this->dependency_edge;
    }

    /**
     * <pre>
     * Dependency tree parse for this token.
     * </pre>
     *
     * <code>.google.cloud.language.v1beta1.DependencyEdge dependency_edge = 3;</code>
     */
    public function setDependencyEdge(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta1\DependencyEdge::class);
        $this->dependency_edge = $var;
    }

    /**
     * <pre>
     * [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     * </pre>
     *
     * <code>string lemma = 4;</code>
     */
    public function getLemma()
    {
        return $this->lemma;
    }

    /**
     * <pre>
     * [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     * </pre>
     *
     * <code>string lemma = 4;</code>
     */
    public function setLemma($var)
    {
        GPBUtil::checkString($var, True);
        $this->lemma = $var;
    }

}

