<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Storagetransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Conditions that determine which objects will be transferred.
 * </pre>
 *
 * Protobuf type <code>google.storagetransfer.v1.ObjectConditions</code>
 */
class ObjectConditions extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * If unspecified, `minTimeElapsedSinceLastModification` takes a zero value
     * and `maxTimeElapsedSinceLastModification` takes the maximum possible
     * value of Duration. Objects that satisfy the object conditions
     * must either have a `lastModificationTime` greater or equal to
     * `NOW` - `maxTimeElapsedSinceLastModification` and less than
     * `NOW` - `minTimeElapsedSinceLastModification`, or not have a
     * `lastModificationTime`.
     * </pre>
     *
     * <code>.google.protobuf.Duration min_time_elapsed_since_last_modification = 1;</code>
     */
    private $min_time_elapsed_since_last_modification = null;
    /**
     * <pre>
     * `maxTimeElapsedSinceLastModification` is the complement to
     * `minTimeElapsedSinceLastModification`.
     * </pre>
     *
     * <code>.google.protobuf.Duration max_time_elapsed_since_last_modification = 2;</code>
     */
    private $max_time_elapsed_since_last_modification = null;
    /**
     * <pre>
     * If `includePrefixes` is specified, objects that satisfy the object
     * conditions must have names that start with one of the `includePrefixes`
     * and that do not start with any of the `excludePrefixes`. If `includePrefixes`
     * is not specified, all objects except those that have names starting with
     * one of the `excludePrefixes` must satisfy the object conditions.
     * Requirements:
     *   * Each include-prefix and exclude-prefix can contain any sequence of
     *     Unicode characters, of max length 1024 bytes when UTF8-encoded, and
     *     must not contain Carriage Return or Line Feed characters.  Wildcard
     *     matching and regular expression matching are not supported.
     *   * Each include-prefix and exclude-prefix must omit the leading slash.
     *     For example, to include the `requests.gz` object in a transfer from
     *     `s3://my-aws-bucket/logs/y=2015/requests.gz`, specify the include
     *     prefix as `logs/y=2015/requests.gz`.
     *   * None of the include-prefix or the exclude-prefix values can be empty,
     *     if specified.
     *   * Each include-prefix must include a distinct portion of the object
     *     namespace, i.e., no include-prefix may be a prefix of another
     *     include-prefix.
     *   * Each exclude-prefix must exclude a distinct portion of the object
     *     namespace, i.e., no exclude-prefix may be a prefix of another
     *     exclude-prefix.
     *   * If `includePrefixes` is specified, then each exclude-prefix must start
     *     with the value of a path explicitly included by `includePrefixes`.
     * The max size of `includePrefixes` is 20.
     * </pre>
     *
     * <code>repeated string include_prefixes = 3;</code>
     */
    private $include_prefixes;
    /**
     * <pre>
     * `excludePrefixes` must follow the requirements described for
     * `includePrefixes`.
     * The max size of `excludePrefixes` is 20.
     * </pre>
     *
     * <code>repeated string exclude_prefixes = 4;</code>
     */
    private $exclude_prefixes;

    public function __construct() {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * If unspecified, `minTimeElapsedSinceLastModification` takes a zero value
     * and `maxTimeElapsedSinceLastModification` takes the maximum possible
     * value of Duration. Objects that satisfy the object conditions
     * must either have a `lastModificationTime` greater or equal to
     * `NOW` - `maxTimeElapsedSinceLastModification` and less than
     * `NOW` - `minTimeElapsedSinceLastModification`, or not have a
     * `lastModificationTime`.
     * </pre>
     *
     * <code>.google.protobuf.Duration min_time_elapsed_since_last_modification = 1;</code>
     */
    public function getMinTimeElapsedSinceLastModification()
    {
        return $this->min_time_elapsed_since_last_modification;
    }

    /**
     * <pre>
     * If unspecified, `minTimeElapsedSinceLastModification` takes a zero value
     * and `maxTimeElapsedSinceLastModification` takes the maximum possible
     * value of Duration. Objects that satisfy the object conditions
     * must either have a `lastModificationTime` greater or equal to
     * `NOW` - `maxTimeElapsedSinceLastModification` and less than
     * `NOW` - `minTimeElapsedSinceLastModification`, or not have a
     * `lastModificationTime`.
     * </pre>
     *
     * <code>.google.protobuf.Duration min_time_elapsed_since_last_modification = 1;</code>
     */
    public function setMinTimeElapsedSinceLastModification(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->min_time_elapsed_since_last_modification = $var;
    }

    /**
     * <pre>
     * `maxTimeElapsedSinceLastModification` is the complement to
     * `minTimeElapsedSinceLastModification`.
     * </pre>
     *
     * <code>.google.protobuf.Duration max_time_elapsed_since_last_modification = 2;</code>
     */
    public function getMaxTimeElapsedSinceLastModification()
    {
        return $this->max_time_elapsed_since_last_modification;
    }

    /**
     * <pre>
     * `maxTimeElapsedSinceLastModification` is the complement to
     * `minTimeElapsedSinceLastModification`.
     * </pre>
     *
     * <code>.google.protobuf.Duration max_time_elapsed_since_last_modification = 2;</code>
     */
    public function setMaxTimeElapsedSinceLastModification(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_time_elapsed_since_last_modification = $var;
    }

    /**
     * <pre>
     * If `includePrefixes` is specified, objects that satisfy the object
     * conditions must have names that start with one of the `includePrefixes`
     * and that do not start with any of the `excludePrefixes`. If `includePrefixes`
     * is not specified, all objects except those that have names starting with
     * one of the `excludePrefixes` must satisfy the object conditions.
     * Requirements:
     *   * Each include-prefix and exclude-prefix can contain any sequence of
     *     Unicode characters, of max length 1024 bytes when UTF8-encoded, and
     *     must not contain Carriage Return or Line Feed characters.  Wildcard
     *     matching and regular expression matching are not supported.
     *   * Each include-prefix and exclude-prefix must omit the leading slash.
     *     For example, to include the `requests.gz` object in a transfer from
     *     `s3://my-aws-bucket/logs/y=2015/requests.gz`, specify the include
     *     prefix as `logs/y=2015/requests.gz`.
     *   * None of the include-prefix or the exclude-prefix values can be empty,
     *     if specified.
     *   * Each include-prefix must include a distinct portion of the object
     *     namespace, i.e., no include-prefix may be a prefix of another
     *     include-prefix.
     *   * Each exclude-prefix must exclude a distinct portion of the object
     *     namespace, i.e., no exclude-prefix may be a prefix of another
     *     exclude-prefix.
     *   * If `includePrefixes` is specified, then each exclude-prefix must start
     *     with the value of a path explicitly included by `includePrefixes`.
     * The max size of `includePrefixes` is 20.
     * </pre>
     *
     * <code>repeated string include_prefixes = 3;</code>
     */
    public function getIncludePrefixes()
    {
        return $this->include_prefixes;
    }

    /**
     * <pre>
     * If `includePrefixes` is specified, objects that satisfy the object
     * conditions must have names that start with one of the `includePrefixes`
     * and that do not start with any of the `excludePrefixes`. If `includePrefixes`
     * is not specified, all objects except those that have names starting with
     * one of the `excludePrefixes` must satisfy the object conditions.
     * Requirements:
     *   * Each include-prefix and exclude-prefix can contain any sequence of
     *     Unicode characters, of max length 1024 bytes when UTF8-encoded, and
     *     must not contain Carriage Return or Line Feed characters.  Wildcard
     *     matching and regular expression matching are not supported.
     *   * Each include-prefix and exclude-prefix must omit the leading slash.
     *     For example, to include the `requests.gz` object in a transfer from
     *     `s3://my-aws-bucket/logs/y=2015/requests.gz`, specify the include
     *     prefix as `logs/y=2015/requests.gz`.
     *   * None of the include-prefix or the exclude-prefix values can be empty,
     *     if specified.
     *   * Each include-prefix must include a distinct portion of the object
     *     namespace, i.e., no include-prefix may be a prefix of another
     *     include-prefix.
     *   * Each exclude-prefix must exclude a distinct portion of the object
     *     namespace, i.e., no exclude-prefix may be a prefix of another
     *     exclude-prefix.
     *   * If `includePrefixes` is specified, then each exclude-prefix must start
     *     with the value of a path explicitly included by `includePrefixes`.
     * The max size of `includePrefixes` is 20.
     * </pre>
     *
     * <code>repeated string include_prefixes = 3;</code>
     */
    public function setIncludePrefixes(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_prefixes = $arr;
    }

    /**
     * <pre>
     * `excludePrefixes` must follow the requirements described for
     * `includePrefixes`.
     * The max size of `excludePrefixes` is 20.
     * </pre>
     *
     * <code>repeated string exclude_prefixes = 4;</code>
     */
    public function getExcludePrefixes()
    {
        return $this->exclude_prefixes;
    }

    /**
     * <pre>
     * `excludePrefixes` must follow the requirements described for
     * `includePrefixes`.
     * The max size of `excludePrefixes` is 20.
     * </pre>
     *
     * <code>repeated string exclude_prefixes = 4;</code>
     */
    public function setExcludePrefixes(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->exclude_prefixes = $arr;
    }

}

