<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response including listed builds.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.ListBuildsResponse</code>
 */
class ListBuildsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Builds will be sorted by create_time, descending.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.Build builds = 1;</code>
     */
    private $builds;
    /**
     * <pre>
     * Token to receive the next page of results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Builds will be sorted by create_time, descending.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.Build builds = 1;</code>
     */
    public function getBuilds()
    {
        return $this->builds;
    }

    /**
     * <pre>
     * Builds will be sorted by create_time, descending.
     * </pre>
     *
     * <code>repeated .google.devtools.cloudbuild.v1.Build builds = 1;</code>
     */
    public function setBuilds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\Build::class);
        $this->builds = $arr;
    }

    /**
     * <pre>
     * Token to receive the next page of results.
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
     * Token to receive the next page of results.
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

