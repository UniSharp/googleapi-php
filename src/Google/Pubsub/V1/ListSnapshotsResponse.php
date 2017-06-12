<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response for the `ListSnapshots` method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1.ListSnapshotsResponse</code>
 */
class ListSnapshotsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resulting snapshots.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Snapshot snapshots = 1;</code>
     */
    private $snapshots;
    /**
     * <pre>
     * If not empty, indicates that there may be more snapshot that match the
     * request; this value should be passed in a new `ListSnapshotsRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resulting snapshots.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Snapshot snapshots = 1;</code>
     */
    public function getSnapshots()
    {
        return $this->snapshots;
    }

    /**
     * <pre>
     * The resulting snapshots.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Snapshot snapshots = 1;</code>
     */
    public function setSnapshots(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Pubsub\V1\Snapshot::class);
        $this->snapshots = $var;
    }

    /**
     * <pre>
     * If not empty, indicates that there may be more snapshot that match the
     * request; this value should be passed in a new `ListSnapshotsRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * <pre>
     * If not empty, indicates that there may be more snapshot that match the
     * request; this value should be passed in a new `ListSnapshotsRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;
    }

}
