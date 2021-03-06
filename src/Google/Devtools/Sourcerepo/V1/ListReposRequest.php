<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/sourcerepo/v1/sourcerepo.proto

namespace Google\Devtools\Sourcerepo\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for ListRepos.
 * </pre>
 *
 * Protobuf type <code>google.devtools.sourcerepo.v1.ListReposRequest</code>
 */
class ListReposRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The project ID whose repos should be listed. Values are of the form
     * `projects/&lt;project&gt;`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Maximum number of repositories to return; between 1 and 500.
     * If not set or zero, defaults to 100 at the server.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * Resume listing repositories where a prior ListReposResponse
     * left off. This is an opaque token that must be obtained from
     * a recent, prior ListReposResponse's next_page_token field.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Sourcerepo\V1\Sourcerepo::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The project ID whose repos should be listed. Values are of the form
     * `projects/&lt;project&gt;`.
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
     * The project ID whose repos should be listed. Values are of the form
     * `projects/&lt;project&gt;`.
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
     * Maximum number of repositories to return; between 1 and 500.
     * If not set or zero, defaults to 100 at the server.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * Maximum number of repositories to return; between 1 and 500.
     * If not set or zero, defaults to 100 at the server.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * Resume listing repositories where a prior ListReposResponse
     * left off. This is an opaque token that must be obtained from
     * a recent, prior ListReposResponse's next_page_token field.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * Resume listing repositories where a prior ListReposResponse
     * left off. This is an opaque token that must be obtained from
     * a recent, prior ListReposResponse's next_page_token field.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}

