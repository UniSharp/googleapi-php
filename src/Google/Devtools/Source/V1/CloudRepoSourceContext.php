<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/source/v1/source_context.proto

namespace Google\Devtools\Source\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A CloudRepoSourceContext denotes a particular revision in a cloud
 * repo (a repo hosted by the Google Cloud Platform).
 * </pre>
 *
 * Protobuf type <code>google.devtools.source.v1.CloudRepoSourceContext</code>
 */
class CloudRepoSourceContext extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The ID of the repo.
     * </pre>
     *
     * <code>.google.devtools.source.v1.RepoId repo_id = 1;</code>
     */
    private $repo_id = null;
    protected $revision;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Source\V1\SourceContext::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The ID of the repo.
     * </pre>
     *
     * <code>.google.devtools.source.v1.RepoId repo_id = 1;</code>
     */
    public function getRepoId()
    {
        return $this->repo_id;
    }

    /**
     * <pre>
     * The ID of the repo.
     * </pre>
     *
     * <code>.google.devtools.source.v1.RepoId repo_id = 1;</code>
     */
    public function setRepoId(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Source\V1\RepoId::class);
        $this->repo_id = $var;
    }

    /**
     * <pre>
     * A revision ID.
     * </pre>
     *
     * <code>string revision_id = 2;</code>
     */
    public function getRevisionId()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * A revision ID.
     * </pre>
     *
     * <code>string revision_id = 2;</code>
     */
    public function setRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * The name of an alias (branch, tag, etc.).
     * </pre>
     *
     * <code>string alias_name = 3;</code>
     */
    public function getAliasName()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * The name of an alias (branch, tag, etc.).
     * </pre>
     *
     * <code>string alias_name = 3;</code>
     */
    public function setAliasName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);
    }

    /**
     * <pre>
     * An alias, which may be a branch or tag.
     * </pre>
     *
     * <code>.google.devtools.source.v1.AliasContext alias_context = 4;</code>
     */
    public function getAliasContext()
    {
        return $this->readOneof(4);
    }

    /**
     * <pre>
     * An alias, which may be a branch or tag.
     * </pre>
     *
     * <code>.google.devtools.source.v1.AliasContext alias_context = 4;</code>
     */
    public function setAliasContext(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Source\V1\AliasContext::class);
        $this->writeOneof(4, $var);
    }

    public function getRevision()
    {
        return $this->whichOneof("revision");
    }

}

