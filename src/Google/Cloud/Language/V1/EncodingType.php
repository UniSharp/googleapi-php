<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

/**
 * <pre>
 * Represents the text encoding that the caller uses to process the output.
 * Providing an `EncodingType` is recommended because the API provides the
 * beginning offsets for various outputs, such as tokens and mentions, and
 * languages that natively use different text encodings may access offsets
 * differently.
 * </pre>
 *
 * Protobuf enum <code>google.cloud.language.v1.EncodingType</code>
 */
class EncodingType
{
    /**
     * <pre>
     * If `EncodingType` is not specified, encoding-dependent information (such as
     * `begin_offset`) will be set at `-1`.
     * </pre>
     *
     * <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * <pre>
     * Encoding-dependent information (such as `begin_offset`) is calculated based
     * on the UTF-8 encoding of the input. C++ and Go are examples of languages
     * that use this encoding natively.
     * </pre>
     *
     * <code>UTF8 = 1;</code>
     */
    const UTF8 = 1;
    /**
     * <pre>
     * Encoding-dependent information (such as `begin_offset`) is calculated based
     * on the UTF-16 encoding of the input. Java and Javascript are examples of
     * languages that use this encoding natively.
     * </pre>
     *
     * <code>UTF16 = 2;</code>
     */
    const UTF16 = 2;
    /**
     * <pre>
     * Encoding-dependent information (such as `begin_offset`) is calculated based
     * on the UTF-32 encoding of the input. Python is an example of a language
     * that uses this encoding natively.
     * </pre>
     *
     * <code>UTF32 = 3;</code>
     */
    const UTF32 = 3;
}

