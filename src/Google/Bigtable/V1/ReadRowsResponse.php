<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_service_messages.proto

namespace Google\Bigtable\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response message for BigtableService.ReadRows.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v1.ReadRowsResponse</code>
 */
class ReadRowsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The key of the row for which we're receiving data.
     * Results will be received in increasing row key order, unless
     * "allow_row_interleaving" was specified in the request.
     * </pre>
     *
     * <code>bytes row_key = 1;</code>
     */
    private $row_key = '';
    /**
     * <pre>
     * One or more chunks of the row specified by "row_key".
     * </pre>
     *
     * <code>repeated .google.bigtable.v1.ReadRowsResponse.Chunk chunks = 2;</code>
     */
    private $chunks;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V1\BigtableServiceMessages::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The key of the row for which we're receiving data.
     * Results will be received in increasing row key order, unless
     * "allow_row_interleaving" was specified in the request.
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
     * The key of the row for which we're receiving data.
     * Results will be received in increasing row key order, unless
     * "allow_row_interleaving" was specified in the request.
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
     * One or more chunks of the row specified by "row_key".
     * </pre>
     *
     * <code>repeated .google.bigtable.v1.ReadRowsResponse.Chunk chunks = 2;</code>
     */
    public function getChunks()
    {
        return $this->chunks;
    }

    /**
     * <pre>
     * One or more chunks of the row specified by "row_key".
     * </pre>
     *
     * <code>repeated .google.bigtable.v1.ReadRowsResponse.Chunk chunks = 2;</code>
     */
    public function setChunks(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V1\ReadRowsResponse_Chunk::class);
        $this->chunks = $var;
    }

}

