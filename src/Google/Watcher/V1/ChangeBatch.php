<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/watcher/v1/watch.proto

namespace Google\Watcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A batch of Change messages.
 * </pre>
 *
 * Protobuf type <code>google.watcher.v1.ChangeBatch</code>
 */
class ChangeBatch extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of Change messages.
     * </pre>
     *
     * <code>repeated .google.watcher.v1.Change changes = 1;</code>
     */
    private $changes;

    public function __construct() {
        \GPBMetadata\Google\Watcher\V1\Watch::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of Change messages.
     * </pre>
     *
     * <code>repeated .google.watcher.v1.Change changes = 1;</code>
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * <pre>
     * A list of Change messages.
     * </pre>
     *
     * <code>repeated .google.watcher.v1.Change changes = 1;</code>
     */
    public function setChanges(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Watcher\V1\Change::class);
        $this->changes = $arr;
    }

}

