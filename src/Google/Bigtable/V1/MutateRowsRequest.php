<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_service_messages.proto

namespace Google\Bigtable\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for BigtableService.MutateRows.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v1.MutateRowsRequest</code>
 */
class MutateRowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The unique name of the table to which the mutations should be applied.
     * </pre>
     *
     * <code>string table_name = 1;</code>
     */
    private $table_name = '';
    /**
     * <pre>
     * The row keys/mutations to be applied in bulk.
     * Each entry is applied as an atomic mutation, but the entries may be
     * applied in arbitrary order (even between entries for the same row).
     * At least one entry must be specified, and in total the entries may
     * contain at most 100000 mutations.
     * </pre>
     *
     * <code>repeated .google.bigtable.v1.MutateRowsRequest.Entry entries = 2;</code>
     */
    private $entries;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V1\BigtableServiceMessages::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The unique name of the table to which the mutations should be applied.
     * </pre>
     *
     * <code>string table_name = 1;</code>
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * <pre>
     * The unique name of the table to which the mutations should be applied.
     * </pre>
     *
     * <code>string table_name = 1;</code>
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;
    }

    /**
     * <pre>
     * The row keys/mutations to be applied in bulk.
     * Each entry is applied as an atomic mutation, but the entries may be
     * applied in arbitrary order (even between entries for the same row).
     * At least one entry must be specified, and in total the entries may
     * contain at most 100000 mutations.
     * </pre>
     *
     * <code>repeated .google.bigtable.v1.MutateRowsRequest.Entry entries = 2;</code>
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * <pre>
     * The row keys/mutations to be applied in bulk.
     * Each entry is applied as an atomic mutation, but the entries may be
     * applied in arbitrary order (even between entries for the same row).
     * At least one entry must be specified, and in total the entries may
     * contain at most 100000 mutations.
     * </pre>
     *
     * <code>repeated .google.bigtable.v1.MutateRowsRequest.Entry entries = 2;</code>
     */
    public function setEntries(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V1\MutateRowsRequest_Entry::class);
        $this->entries = $arr;
    }

}

