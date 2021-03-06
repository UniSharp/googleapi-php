<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/system_parameter.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Define a system parameter rule mapping system parameter definitions to
 * methods.
 * </pre>
 *
 * Protobuf type <code>google.api.SystemParameterRule</code>
 */
class SystemParameterRule extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Selects the methods to which this rule applies. Use '*' to indicate all
     * methods in all APIs.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     * </pre>
     *
     * <code>string selector = 1;</code>
     */
    private $selector = '';
    /**
     * <pre>
     * Define parameters. Multiple names may be defined for a parameter.
     * For a given method call, only one of them should be used. If multiple
     * names are used the behavior is implementation-dependent.
     * If none of the specified names are present the behavior is
     * parameter-dependent.
     * </pre>
     *
     * <code>repeated .google.api.SystemParameter parameters = 2;</code>
     */
    private $parameters;

    public function __construct() {
        \GPBMetadata\Google\Api\SystemParameter::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Selects the methods to which this rule applies. Use '*' to indicate all
     * methods in all APIs.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     * </pre>
     *
     * <code>string selector = 1;</code>
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * <pre>
     * Selects the methods to which this rule applies. Use '*' to indicate all
     * methods in all APIs.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     * </pre>
     *
     * <code>string selector = 1;</code>
     */
    public function setSelector($var)
    {
        GPBUtil::checkString($var, True);
        $this->selector = $var;
    }

    /**
     * <pre>
     * Define parameters. Multiple names may be defined for a parameter.
     * For a given method call, only one of them should be used. If multiple
     * names are used the behavior is implementation-dependent.
     * If none of the specified names are present the behavior is
     * parameter-dependent.
     * </pre>
     *
     * <code>repeated .google.api.SystemParameter parameters = 2;</code>
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * <pre>
     * Define parameters. Multiple names may be defined for a parameter.
     * For a given method call, only one of them should be used. If multiple
     * names are used the behavior is implementation-dependent.
     * If none of the specified names are present the behavior is
     * parameter-dependent.
     * </pre>
     *
     * <code>repeated .google.api.SystemParameter parameters = 2;</code>
     */
    public function setParameters(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\SystemParameter::class);
        $this->parameters = $arr;
    }

}

