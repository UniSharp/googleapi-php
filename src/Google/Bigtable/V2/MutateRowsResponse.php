<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response message for BigtableService.MutateRows.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v2.MutateRowsResponse</code>
 */
class MutateRowsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * One or more results for Entries from the batch request.
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.MutateRowsResponse.Entry entries = 1;</code>
     */
    private $entries;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * One or more results for Entries from the batch request.
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.MutateRowsResponse.Entry entries = 1;</code>
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * <pre>
     * One or more results for Entries from the batch request.
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.MutateRowsResponse.Entry entries = 1;</code>
     */
    public function setEntries(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V2\MutateRowsResponse_Entry::class);
        $this->entries = $arr;
    }

}

