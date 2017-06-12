<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_service_messages.proto

namespace Google\Bigtable\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response message for BigtableService.SampleRowKeys.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v1.SampleRowKeysResponse</code>
 */
class SampleRowKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Sorted streamed sequence of sample row keys in the table. The table might
     * have contents before the first row key in the list and after the last one,
     * but a key containing the empty string indicates "end of table" and will be
     * the last response given, if present.
     * Note that row keys in this list may not have ever been written to or read
     * from, and users should therefore not make any assumptions about the row key
     * structure that are specific to their use case.
     * </pre>
     *
     * <code>bytes row_key = 1;</code>
     */
    private $row_key = '';
    /**
     * <pre>
     * Approximate total storage space used by all rows in the table which precede
     * "row_key". Buffering the contents of all rows between two subsequent
     * samples would require space roughly equal to the difference in their
     * "offset_bytes" fields.
     * </pre>
     *
     * <code>int64 offset_bytes = 2;</code>
     */
    private $offset_bytes = 0;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V1\BigtableServiceMessages::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Sorted streamed sequence of sample row keys in the table. The table might
     * have contents before the first row key in the list and after the last one,
     * but a key containing the empty string indicates "end of table" and will be
     * the last response given, if present.
     * Note that row keys in this list may not have ever been written to or read
     * from, and users should therefore not make any assumptions about the row key
     * structure that are specific to their use case.
     * </pre>
     *
     * <code>bytes row_key = 1;</code>
     */
    public function getRowKey()
    {
        return $this->row_key;
    }

    /**
     * <pre>
     * Sorted streamed sequence of sample row keys in the table. The table might
     * have contents before the first row key in the list and after the last one,
     * but a key containing the empty string indicates "end of table" and will be
     * the last response given, if present.
     * Note that row keys in this list may not have ever been written to or read
     * from, and users should therefore not make any assumptions about the row key
     * structure that are specific to their use case.
     * </pre>
     *
     * <code>bytes row_key = 1;</code>
     */
    public function setRowKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->row_key = $var;
    }

    /**
     * <pre>
     * Approximate total storage space used by all rows in the table which precede
     * "row_key". Buffering the contents of all rows between two subsequent
     * samples would require space roughly equal to the difference in their
     * "offset_bytes" fields.
     * </pre>
     *
     * <code>int64 offset_bytes = 2;</code>
     */
    public function getOffsetBytes()
    {
        return $this->offset_bytes;
    }

    /**
     * <pre>
     * Approximate total storage space used by all rows in the table which precede
     * "row_key". Buffering the contents of all rows between two subsequent
     * samples would require space roughly equal to the difference in their
     * "offset_bytes" fields.
     * </pre>
     *
     * <code>int64 offset_bytes = 2;</code>
     */
    public function setOffsetBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset_bytes = $var;
    }

}
