<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

/**
 * <pre>
 * Depending on the language, Form can be categorizing different forms of
 * verbs, adjectives, adverbs, etc. For example, categorizing inflected
 * endings of verbs and adjectives or distinguishing between short and long
 * forms of adjectives and participles
 * </pre>
 *
 * Protobuf enum <code>google.cloud.language.v1beta2.PartOfSpeech.Form</code>
 */
class PartOfSpeech_Form
{
    /**
     * <pre>
     * Form is not applicable in the analyzed language or is not predicted.
     * </pre>
     *
     * <code>FORM_UNKNOWN = 0;</code>
     */
    const FORM_UNKNOWN = 0;
    /**
     * <pre>
     * Adnomial
     * </pre>
     *
     * <code>ADNOMIAL = 1;</code>
     */
    const ADNOMIAL = 1;
    /**
     * <pre>
     * Auxiliary
     * </pre>
     *
     * <code>AUXILIARY = 2;</code>
     */
    const AUXILIARY = 2;
    /**
     * <pre>
     * Complementizer
     * </pre>
     *
     * <code>COMPLEMENTIZER = 3;</code>
     */
    const COMPLEMENTIZER = 3;
    /**
     * <pre>
     * Final ending
     * </pre>
     *
     * <code>FINAL_ENDING = 4;</code>
     */
    const FINAL_ENDING = 4;
    /**
     * <pre>
     * Gerund
     * </pre>
     *
     * <code>GERUND = 5;</code>
     */
    const GERUND = 5;
    /**
     * <pre>
     * Realis
     * </pre>
     *
     * <code>REALIS = 6;</code>
     */
    const REALIS = 6;
    /**
     * <pre>
     * Irrealis
     * </pre>
     *
     * <code>IRREALIS = 7;</code>
     */
    const IRREALIS = 7;
    /**
     * <pre>
     * Short form
     * </pre>
     *
     * <code>SHORT = 8;</code>
     */
    const SHORT = 8;
    /**
     * <pre>
     * Long form
     * </pre>
     *
     * <code>LONG = 9;</code>
     */
    const LONG = 9;
    /**
     * <pre>
     * Order form
     * </pre>
     *
     * <code>ORDER = 10;</code>
     */
    const ORDER = 10;
    /**
     * <pre>
     * Specific form
     * </pre>
     *
     * <code>SPECIFIC = 11;</code>
     */
    const SPECIFIC = 11;
}

