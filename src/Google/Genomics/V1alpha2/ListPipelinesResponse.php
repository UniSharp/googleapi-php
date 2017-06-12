<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The response of ListPipelines. Contains at most `pageSize`
 * pipelines. If it contains `pageSize` pipelines, and more pipelines
 * exist, then `nextPageToken` will be populated and should be
 * used as the `pageToken` argument to a subsequent ListPipelines
 * request.
 * </pre>
 *
 * Protobuf type <code>google.genomics.v1alpha2.ListPipelinesResponse</code>
 */
class ListPipelinesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The matched pipelines.
     * </pre>
     *
     * <code>repeated .google.genomics.v1alpha2.Pipeline pipelines = 1;</code>
     */
    private $pipelines;
    /**
     * <pre>
     * The token to use to get the next page of results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The matched pipelines.
     * </pre>
     *
     * <code>repeated .google.genomics.v1alpha2.Pipeline pipelines = 1;</code>
     */
    public function getPipelines()
    {
        return $this->pipelines;
    }

    /**
     * <pre>
     * The matched pipelines.
     * </pre>
     *
     * <code>repeated .google.genomics.v1alpha2.Pipeline pipelines = 1;</code>
     */
    public function setPipelines(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1alpha2\Pipeline::class);
        $this->pipelines = $var;
    }

    /**
     * <pre>
     * The token to use to get the next page of results.
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
     * The token to use to get the next page of results.
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
