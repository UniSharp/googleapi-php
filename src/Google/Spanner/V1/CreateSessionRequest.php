<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request for [CreateSession][google.spanner.v1.Spanner.CreateSession].
 * </pre>
 *
 * Protobuf type <code>google.spanner.v1.CreateSessionRequest</code>
 */
class CreateSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The database in which the new session is created.
     * </pre>
     *
     * <code>string database = 1;</code>
     */
    private $database = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The database in which the new session is created.
     * </pre>
     *
     * <code>string database = 1;</code>
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * <pre>
     * Required. The database in which the new session is created.
     * </pre>
     *
     * <code>string database = 1;</code>
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;
    }

}

