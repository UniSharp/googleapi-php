<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/source/v1/source_context.proto

namespace Google\Devtools\Source\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A unique identifier for a cloud repo.
 * </pre>
 *
 * Protobuf type <code>google.devtools.source.v1.RepoId</code>
 */
class RepoId extends \Google\Protobuf\Internal\Message
{
    protected $id;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Source\V1\SourceContext::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A combination of a project ID and a repo name.
     * </pre>
     *
     * <code>.google.devtools.source.v1.ProjectRepoId project_repo_id = 1;</code>
     */
    public function getProjectRepoId()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * A combination of a project ID and a repo name.
     * </pre>
     *
     * <code>.google.devtools.source.v1.ProjectRepoId project_repo_id = 1;</code>
     */
    public function setProjectRepoId(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Source\V1\ProjectRepoId::class);
        $this->writeOneof(1, $var);
    }

    /**
     * <pre>
     * A server-assigned, globally unique identifier.
     * </pre>
     *
     * <code>string uid = 2;</code>
     */
    public function getUid()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * A server-assigned, globally unique identifier.
     * </pre>
     *
     * <code>string uid = 2;</code>
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);
    }

    public function getId()
    {
        return $this->id;
    }

}
