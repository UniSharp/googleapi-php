<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for `Instances.DeleteInstance`.
 * </pre>
 *
 * Protobuf type <code>google.appengine.v1.DeleteInstanceRequest</code>
 */
class DeleteInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Name of the resource requested. Example:
     * `apps/myapp/services/default/versions/v1/instances/instance-1`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\Appengine::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Name of the resource requested. Example:
     * `apps/myapp/services/default/versions/v1/instances/instance-1`.
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
     * Name of the resource requested. Example:
     * `apps/myapp/services/default/versions/v1/instances/instance-1`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}

