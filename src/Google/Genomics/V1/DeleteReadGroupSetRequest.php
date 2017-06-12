<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/reads.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.DeleteReadGroupSetRequest</code>
 */
class DeleteReadGroupSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The ID of the read group set to be deleted. The caller must have WRITE
     * permissions to the dataset associated with this read group set.
     * </pre>
     *
     * <code>string read_group_set_id = 1;</code>
     */
    private $read_group_set_id = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Reads::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The ID of the read group set to be deleted. The caller must have WRITE
     * permissions to the dataset associated with this read group set.
     * </pre>
     *
     * <code>string read_group_set_id = 1;</code>
     */
    public function getReadGroupSetId()
    {
        return $this->read_group_set_id;
    }

    /**
     * <pre>
     * The ID of the read group set to be deleted. The caller must have WRITE
     * permissions to the dataset associated with this read group set.
     * </pre>
     *
     * <code>string read_group_set_id = 1;</code>
     */
    public function setReadGroupSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->read_group_set_id = $var;
    }

}
