<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/logging/v1/request_log.proto

namespace Google\Appengine\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A reference to a particular snapshot of the source tree used to build and
 * deploy an application.
 * </pre>
 *
 * Protobuf type <code>google.appengine.logging.v1.SourceReference</code>
 */
class SourceReference extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Optional. A URI string identifying the repository.
     * Example: "https://github.com/GoogleCloudPlatform/kubernetes.git"
     * </pre>
     *
     * <code>string repository = 1;</code>
     */
    private $repository = '';
    /**
     * <pre>
     * The canonical and persistent identifier of the deployed revision.
     * Example (git): "0035781c50ec7aa23385dc841529ce8a4b70db1b"
     * </pre>
     *
     * <code>string revision_id = 2;</code>
     */
    private $revision_id = '';

    public function __construct() {
        \GPBMetadata\Google\Appengine\Logging\V1\RequestLog::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Optional. A URI string identifying the repository.
     * Example: "https://github.com/GoogleCloudPlatform/kubernetes.git"
     * </pre>
     *
     * <code>string repository = 1;</code>
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * <pre>
     * Optional. A URI string identifying the repository.
     * Example: "https://github.com/GoogleCloudPlatform/kubernetes.git"
     * </pre>
     *
     * <code>string repository = 1;</code>
     */
    public function setRepository($var)
    {
        GPBUtil::checkString($var, True);
        $this->repository = $var;
    }

    /**
     * <pre>
     * The canonical and persistent identifier of the deployed revision.
     * Example (git): "0035781c50ec7aa23385dc841529ce8a4b70db1b"
     * </pre>
     *
     * <code>string revision_id = 2;</code>
     */
    public function getRevisionId()
    {
        return $this->revision_id;
    }

    /**
     * <pre>
     * The canonical and persistent identifier of the deployed revision.
     * Example (git): "0035781c50ec7aa23385dc841529ce8a4b70db1b"
     * </pre>
     *
     * <code>string revision_id = 2;</code>
     */
    public function setRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision_id = $var;
    }

}

