<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/example/library/v1/library.proto

namespace Google\Example\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for LibraryService.ListShelves.
 * </pre>
 *
 * Protobuf type <code>google.example.library.v1.ListShelvesRequest</code>
 */
class ListShelvesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Requested page size. Server may return fewer shelves than requested.
     * If unspecified, server will pick an appropriate default.
     * </pre>
     *
     * <code>int32 page_size = 1;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * A token identifying a page of results the server should return.
     * Typically, this is the value of
     * [ListShelvesResponse.next_page_token][google.example.library.v1.ListShelvesResponse.next_page_token]
     * returned from the previous call to `ListShelves` method.
     * </pre>
     *
     * <code>string page_token = 2;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Example\Library\V1\Library::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Requested page size. Server may return fewer shelves than requested.
     * If unspecified, server will pick an appropriate default.
     * </pre>
     *
     * <code>int32 page_size = 1;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * Requested page size. Server may return fewer shelves than requested.
     * If unspecified, server will pick an appropriate default.
     * </pre>
     *
     * <code>int32 page_size = 1;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * A token identifying a page of results the server should return.
     * Typically, this is the value of
     * [ListShelvesResponse.next_page_token][google.example.library.v1.ListShelvesResponse.next_page_token]
     * returned from the previous call to `ListShelves` method.
     * </pre>
     *
     * <code>string page_token = 2;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * A token identifying a page of results the server should return.
     * Typically, this is the value of
     * [ListShelvesResponse.next_page_token][google.example.library.v1.ListShelvesResponse.next_page_token]
     * returned from the previous call to `ListShelves` method.
     * </pre>
     *
     * <code>string page_token = 2;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}

