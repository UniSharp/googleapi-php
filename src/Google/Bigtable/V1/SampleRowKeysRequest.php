<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_service_messages.proto

namespace Google\Bigtable\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for BigtableService.SampleRowKeys.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v1.SampleRowKeysRequest</code>
 */
class SampleRowKeysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The unique name of the table from which to sample row keys.
     * </pre>
     *
     * <code>string table_name = 1;</code>
     */
    private $table_name = '';

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V1\BigtableServiceMessages::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The unique name of the table from which to sample row keys.
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
     * The unique name of the table from which to sample row keys.
     * </pre>
     *
     * <code>string table_name = 1;</code>
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;
    }

}

