<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/sourcerepo/v1/sourcerepo.proto

namespace Google\Devtools\Sourcerepo\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A repository (or repo) is a Git repository storing versioned source content.
 * </pre>
 *
 * Protobuf type <code>google.devtools.sourcerepo.v1.Repo</code>
 */
class Repo extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Resource name of the repository, of the form
     * `projects/&lt;project&gt;/repos/&lt;repo&gt;`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The disk usage of the repo, in bytes.
     * Only returned by GetRepo.
     * </pre>
     *
     * <code>int64 size = 2;</code>
     */
    private $size = 0;
    /**
     * <pre>
     * URL to clone the repository from Google Cloud Source Repositories.
     * </pre>
     *
     * <code>string url = 3;</code>
     */
    private $url = '';
    /**
     * <pre>
     * How this repository mirrors a repository managed by another service.
     * </pre>
     *
     * <code>.google.devtools.sourcerepo.v1.MirrorConfig mirror_config = 4;</code>
     */
    private $mirror_config = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Sourcerepo\V1\Sourcerepo::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Resource name of the repository, of the form
     * `projects/&lt;project&gt;/repos/&lt;repo&gt;`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * Resource name of the repository, of the form
     * `projects/&lt;project&gt;/repos/&lt;repo&gt;`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * The disk usage of the repo, in bytes.
     * Only returned by GetRepo.
     * </pre>
     *
     * <code>int64 size = 2;</code>
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * <pre>
     * The disk usage of the repo, in bytes.
     * Only returned by GetRepo.
     * </pre>
     *
     * <code>int64 size = 2;</code>
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->size = $var;
    }

    /**
     * <pre>
     * URL to clone the repository from Google Cloud Source Repositories.
     * </pre>
     *
     * <code>string url = 3;</code>
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * <pre>
     * URL to clone the repository from Google Cloud Source Repositories.
     * </pre>
     *
     * <code>string url = 3;</code>
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;
    }

    /**
     * <pre>
     * How this repository mirrors a repository managed by another service.
     * </pre>
     *
     * <code>.google.devtools.sourcerepo.v1.MirrorConfig mirror_config = 4;</code>
     */
    public function getMirrorConfig()
    {
        return $this->mirror_config;
    }

    /**
     * <pre>
     * How this repository mirrors a repository managed by another service.
     * </pre>
     *
     * <code>.google.devtools.sourcerepo.v1.MirrorConfig mirror_config = 4;</code>
     */
    public function setMirrorConfig(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Sourcerepo\V1\MirrorConfig::class);
        $this->mirror_config = $var;
    }

}

