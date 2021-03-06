<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Metadata describes a single piece of variant call metadata.
 * These data include a top level key and either a single value string (value)
 * or a list of key-value pairs (info.)
 * Value and info are mutually exclusive.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1.VariantSetMetadata</code>
 */
class VariantSetMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The top-level key.
     * </pre>
     *
     * <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * <pre>
     * The value field for simple metadata
     * </pre>
     *
     * <code>string value = 2;</code>
     */
    private $value = '';
    /**
     * <pre>
     * User-provided ID field, not enforced by this API.
     * Two or more pieces of structured metadata with identical
     * id and key fields are considered equivalent.
     * </pre>
     *
     * <code>string id = 4;</code>
     */
    private $id = '';
    /**
     * <pre>
     * The type of data. Possible types include: Integer, Float,
     * Flag, Character, and String.
     * </pre>
     *
     * <code>.google.genomics.v1.VariantSetMetadata.Type type = 5;</code>
     */
    private $type = 0;
    /**
     * <pre>
     * The number of values that can be included in a field described by this
     * metadata.
     * </pre>
     *
     * <code>string number = 8;</code>
     */
    private $number = '';
    /**
     * <pre>
     * A textual description of this metadata.
     * </pre>
     *
     * <code>string description = 7;</code>
     */
    private $description = '';
    /**
     * <pre>
     * Remaining structured metadata key-value pairs. This must be of the form
     * map&lt;string, string[]&gt; (string key mapping to a list of string values).
     * </pre>
     *
     * <code>map&lt;string, .google.protobuf.ListValue&gt; info = 3;</code>
     */
    private $info;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The top-level key.
     * </pre>
     *
     * <code>string key = 1;</code>
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <pre>
     * The top-level key.
     * </pre>
     *
     * <code>string key = 1;</code>
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;
    }

    /**
     * <pre>
     * The value field for simple metadata
     * </pre>
     *
     * <code>string value = 2;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * The value field for simple metadata
     * </pre>
     *
     * <code>string value = 2;</code>
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;
    }

    /**
     * <pre>
     * User-provided ID field, not enforced by this API.
     * Two or more pieces of structured metadata with identical
     * id and key fields are considered equivalent.
     * </pre>
     *
     * <code>string id = 4;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <pre>
     * User-provided ID field, not enforced by this API.
     * Two or more pieces of structured metadata with identical
     * id and key fields are considered equivalent.
     * </pre>
     *
     * <code>string id = 4;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    /**
     * <pre>
     * The type of data. Possible types include: Integer, Float,
     * Flag, Character, and String.
     * </pre>
     *
     * <code>.google.genomics.v1.VariantSetMetadata.Type type = 5;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <pre>
     * The type of data. Possible types include: Integer, Float,
     * Flag, Character, and String.
     * </pre>
     *
     * <code>.google.genomics.v1.VariantSetMetadata.Type type = 5;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Genomics\V1\VariantSetMetadata_Type::class);
        $this->type = $var;
    }

    /**
     * <pre>
     * The number of values that can be included in a field described by this
     * metadata.
     * </pre>
     *
     * <code>string number = 8;</code>
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * <pre>
     * The number of values that can be included in a field described by this
     * metadata.
     * </pre>
     *
     * <code>string number = 8;</code>
     */
    public function setNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->number = $var;
    }

    /**
     * <pre>
     * A textual description of this metadata.
     * </pre>
     *
     * <code>string description = 7;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * A textual description of this metadata.
     * </pre>
     *
     * <code>string description = 7;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <pre>
     * Remaining structured metadata key-value pairs. This must be of the form
     * map&lt;string, string[]&gt; (string key mapping to a list of string values).
     * </pre>
     *
     * <code>map&lt;string, .google.protobuf.ListValue&gt; info = 3;</code>
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * <pre>
     * Remaining structured metadata key-value pairs. This must be of the form
     * map&lt;string, string[]&gt; (string key mapping to a list of string values).
     * </pre>
     *
     * <code>map&lt;string, .google.protobuf.ListValue&gt; info = 3;</code>
     */
    public function setInfo(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\ListValue::class);
        $this->info = $arr;
    }

}

