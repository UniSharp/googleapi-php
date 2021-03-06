<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace Google\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Error details for WriteLogEntries with partial success.
 * </pre>
 *
 * Protobuf type <code>google.logging.v2.WriteLogEntriesPartialErrors</code>
 */
class WriteLogEntriesPartialErrors extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * When `WriteLogEntriesRequest.partial_success` is true, records the error
     * status for entries that were not written due to a permanent error, keyed
     * by the entry's zero-based index in `WriteLogEntriesRequest.entries`.
     * Failed requests for which no entries are written will not include
     * per-entry errors.
     * </pre>
     *
     * <code>map&lt;int32, .google.rpc.Status&gt; log_entry_errors = 1;</code>
     */
    private $log_entry_errors;

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\Logging::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * When `WriteLogEntriesRequest.partial_success` is true, records the error
     * status for entries that were not written due to a permanent error, keyed
     * by the entry's zero-based index in `WriteLogEntriesRequest.entries`.
     * Failed requests for which no entries are written will not include
     * per-entry errors.
     * </pre>
     *
     * <code>map&lt;int32, .google.rpc.Status&gt; log_entry_errors = 1;</code>
     */
    public function getLogEntryErrors()
    {
        return $this->log_entry_errors;
    }

    /**
     * <pre>
     * When `WriteLogEntriesRequest.partial_success` is true, records the error
     * status for entries that were not written due to a permanent error, keyed
     * by the entry's zero-based index in `WriteLogEntriesRequest.entries`.
     * Failed requests for which no entries are written will not include
     * per-entry errors.
     * </pre>
     *
     * <code>map&lt;int32, .google.rpc.Status&gt; log_entry_errors = 1;</code>
     */
    public function setLogEntryErrors(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->log_entry_errors = $arr;
    }

}

