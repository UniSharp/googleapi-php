<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/example/library/v1/library.proto

namespace Google\Example\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A single book in the library.
 * </pre>
 *
 * Protobuf type <code>google.example.library.v1.Book</code>
 */
class Book extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resource name of the book.
     * Book names have the form `shelves/{shelf_id}/books/{book_id}`.
     * The name is ignored when creating a book.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The name of the book author.
     * </pre>
     *
     * <code>string author = 2;</code>
     */
    private $author = '';
    /**
     * <pre>
     * The title of the book.
     * </pre>
     *
     * <code>string title = 3;</code>
     */
    private $title = '';
    /**
     * <pre>
     * Value indicating whether the book has been read.
     * </pre>
     *
     * <code>bool read = 4;</code>
     */
    private $read = false;

    public function __construct() {
        \GPBMetadata\Google\Example\Library\V1\Library::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resource name of the book.
     * Book names have the form `shelves/{shelf_id}/books/{book_id}`.
     * The name is ignored when creating a book.
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
     * The resource name of the book.
     * Book names have the form `shelves/{shelf_id}/books/{book_id}`.
     * The name is ignored when creating a book.
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
     * The name of the book author.
     * </pre>
     *
     * <code>string author = 2;</code>
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * <pre>
     * The name of the book author.
     * </pre>
     *
     * <code>string author = 2;</code>
     */
    public function setAuthor($var)
    {
        GPBUtil::checkString($var, True);
        $this->author = $var;
    }

    /**
     * <pre>
     * The title of the book.
     * </pre>
     *
     * <code>string title = 3;</code>
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * <pre>
     * The title of the book.
     * </pre>
     *
     * <code>string title = 3;</code>
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;
    }

    /**
     * <pre>
     * Value indicating whether the book has been read.
     * </pre>
     *
     * <code>bool read = 4;</code>
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * <pre>
     * Value indicating whether the book has been read.
     * </pre>
     *
     * <code>bool read = 4;</code>
     */
    public function setRead($var)
    {
        GPBUtil::checkBool($var);
        $this->read = $var;
    }

}

