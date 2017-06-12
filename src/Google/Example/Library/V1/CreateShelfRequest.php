<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/example/library/v1/library.proto

namespace Google\Example\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for LibraryService.CreateShelf.
 * </pre>
 *
 * Protobuf type <code>google.example.library.v1.CreateShelfRequest</code>
 */
class CreateShelfRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The shelf to create.
     * </pre>
     *
     * <code>.google.example.library.v1.Shelf shelf = 1;</code>
     */
    private $shelf = null;

    public function __construct() {
        \GPBMetadata\Google\Example\Library\V1\Library::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The shelf to create.
     * </pre>
     *
     * <code>.google.example.library.v1.Shelf shelf = 1;</code>
     */
    public function getShelf()
    {
        return $this->shelf;
    }

    /**
     * <pre>
     * The shelf to create.
     * </pre>
     *
     * <code>.google.example.library.v1.Shelf shelf = 1;</code>
     */
    public function setShelf(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Example\Library\V1\Shelf::class);
        $this->shelf = $var;
    }

}
