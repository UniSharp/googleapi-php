<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/data.proto

namespace Google\Devtools\Clouddebugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents a message with parameters.
 * </pre>
 *
 * Protobuf type <code>google.devtools.clouddebugger.v2.FormatMessage</code>
 */
class FormatMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Format template for the message. The `format` uses placeholders `$0`,
     * `$1`, etc. to reference parameters. `$$` can be used to denote the `$`
     * character.
     * Examples:
     * *   `Failed to load '$0' which helps debug $1 the first time it
     *     is loaded.  Again, $0 is very important.`
     * *   `Please pay $$10 to use $0 instead of $1.`
     * </pre>
     *
     * <code>string format = 1;</code>
     */
    private $format = '';
    /**
     * <pre>
     * Optional parameters to be embedded into the message.
     * </pre>
     *
     * <code>repeated string parameters = 2;</code>
     */
    private $parameters;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Data::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Format template for the message. The `format` uses placeholders `$0`,
     * `$1`, etc. to reference parameters. `$$` can be used to denote the `$`
     * character.
     * Examples:
     * *   `Failed to load '$0' which helps debug $1 the first time it
     *     is loaded.  Again, $0 is very important.`
     * *   `Please pay $$10 to use $0 instead of $1.`
     * </pre>
     *
     * <code>string format = 1;</code>
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * <pre>
     * Format template for the message. The `format` uses placeholders `$0`,
     * `$1`, etc. to reference parameters. `$$` can be used to denote the `$`
     * character.
     * Examples:
     * *   `Failed to load '$0' which helps debug $1 the first time it
     *     is loaded.  Again, $0 is very important.`
     * *   `Please pay $$10 to use $0 instead of $1.`
     * </pre>
     *
     * <code>string format = 1;</code>
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->format = $var;
    }

    /**
     * <pre>
     * Optional parameters to be embedded into the message.
     * </pre>
     *
     * <code>repeated string parameters = 2;</code>
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * <pre>
     * Optional parameters to be embedded into the message.
     * </pre>
     *
     * <code>repeated string parameters = 2;</code>
     */
    public function setParameters(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->parameters = $arr;
    }

}

