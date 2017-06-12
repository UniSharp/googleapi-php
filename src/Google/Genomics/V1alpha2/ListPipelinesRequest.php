<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A request to list pipelines in a given project. Pipelines can be
 * filtered by name using `namePrefix`: all pipelines with names that
 * begin with `namePrefix` will be returned. Uses standard pagination:
 * `pageSize` indicates how many pipelines to return, and
 * `pageToken` comes from a previous ListPipelinesResponse to
 * indicate offset.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1alpha2.ListPipelinesRequest</code>
 */
class ListPipelinesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The name of the project to search for pipelines. Caller
     * must have READ access to this project.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * <pre>
     * Pipelines with names that match this prefix should be
     * returned.  If unspecified, all pipelines in the project, up to
     * `pageSize`, will be returned.
     * </pre>
     *
     * <code>string name_prefix = 2;</code>
     */
    private $name_prefix = '';
    /**
     * <pre>
     * Number of pipelines to return at once. Defaults to 256, and max
     * is 2048.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * Token to use to indicate where to start getting results.
     * If unspecified, returns the first page of results.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The name of the project to search for pipelines. Caller
     * must have READ access to this project.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * <pre>
     * Required. The name of the project to search for pipelines. Caller
     * must have READ access to this project.
     * </pre>
     *
     * <code>string project_id = 1;</code>
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * <pre>
     * Pipelines with names that match this prefix should be
     * returned.  If unspecified, all pipelines in the project, up to
     * `pageSize`, will be returned.
     * </pre>
     *
     * <code>string name_prefix = 2;</code>
     */
    public function getNamePrefix()
    {
        return $this->name_prefix;
    }

    /**
     * <pre>
     * Pipelines with names that match this prefix should be
     * returned.  If unspecified, all pipelines in the project, up to
     * `pageSize`, will be returned.
     * </pre>
     *
     * <code>string name_prefix = 2;</code>
     */
    public function setNamePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->name_prefix = $var;
    }

    /**
     * <pre>
     * Number of pipelines to return at once. Defaults to 256, and max
     * is 2048.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * Number of pipelines to return at once. Defaults to 256, and max
     * is 2048.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * Token to use to indicate where to start getting results.
     * If unspecified, returns the first page of results.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * Token to use to indicate where to start getting results.
     * If unspecified, returns the first page of results.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}
