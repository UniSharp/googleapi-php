<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/example/library/v1/library.proto

namespace Google\Example\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for LibraryService.ListBooks.
 * </pre>
 *
 * Protobuf type <code>google.example.library.v1.ListBooksRequest</code>
 */
class ListBooksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the shelf whose books we'd like to list.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Requested page size. Server may return fewer books than requested.
     * If unspecified, server will pick an appropriate default.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * A token identifying a page of results the server should return.
     * Typically, this is the value of
     * [ListBooksResponse.next_page_token][google.example.library.v1.ListBooksResponse.next_page_token].
     * returned from the previous call to `ListBooks` method.
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Example\Library\V1\Library::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the shelf whose books we'd like to list.
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
     * The name of the shelf whose books we'd like to list.
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
     * Requested page size. Server may return fewer books than requested.
     * If unspecified, server will pick an appropriate default.
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
     * Requested page size. Server may return fewer books than requested.
     * If unspecified, server will pick an appropriate default.
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
     * A token identifying a page of results the server should return.
     * Typically, this is the value of
     * [ListBooksResponse.next_page_token][google.example.library.v1.ListBooksResponse.next_page_token].
     * returned from the previous call to `ListBooks` method.
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
     * A token identifying a page of results the server should return.
     * Typically, this is the value of
     * [ListBooksResponse.next_page_token][google.example.library.v1.ListBooksResponse.next_page_token].
     * returned from the previous call to `ListBooks` method.
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

