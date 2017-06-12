<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Extra network settings. Only applicable for VM runtimes.
 * </pre>
 *
 * Protobuf type <code>google.appengine.v1.Network</code>
 */
class Network extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * List of ports, or port pairs, to forward from the virtual machine to the
     * application container.
     * </pre>
     *
     * <code>repeated string forwarded_ports = 1;</code>
     */
    private $forwarded_ports;
    /**
     * <pre>
     * Tag to apply to the VM instance during creation.
     * </pre>
     *
     * <code>string instance_tag = 2;</code>
     */
    private $instance_tag = '';
    /**
     * <pre>
     * Google Cloud Platform network where the virtual machines are created.
     * Specify the short name, not the resource path.
     * Defaults to `default`.
     * </pre>
     *
     * <code>string name = 3;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * List of ports, or port pairs, to forward from the virtual machine to the
     * application container.
     * </pre>
     *
     * <code>repeated string forwarded_ports = 1;</code>
     */
    public function getForwardedPorts()
    {
        return $this->forwarded_ports;
    }

    /**
     * <pre>
     * List of ports, or port pairs, to forward from the virtual machine to the
     * application container.
     * </pre>
     *
     * <code>repeated string forwarded_ports = 1;</code>
     */
    public function setForwardedPorts(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->forwarded_ports = $var;
    }

    /**
     * <pre>
     * Tag to apply to the VM instance during creation.
     * </pre>
     *
     * <code>string instance_tag = 2;</code>
     */
    public function getInstanceTag()
    {
        return $this->instance_tag;
    }

    /**
     * <pre>
     * Tag to apply to the VM instance during creation.
     * </pre>
     *
     * <code>string instance_tag = 2;</code>
     */
    public function setInstanceTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_tag = $var;
    }

    /**
     * <pre>
     * Google Cloud Platform network where the virtual machines are created.
     * Specify the short name, not the resource path.
     * Defaults to `default`.
     * </pre>
     *
     * <code>string name = 3;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * Google Cloud Platform network where the virtual machines are created.
     * Specify the short name, not the resource path.
     * Defaults to `default`.
     * </pre>
     *
     * <code>string name = 3;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}

