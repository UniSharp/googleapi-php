<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/entity.proto

namespace Google\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A Datastore data object.
 * An entity is limited to 1 megabyte when stored. That _roughly_
 * corresponds to a limit of 1 megabyte for the serialized form of this
 * message.
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1.Entity</code>
 */
class Entity extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The entity's key.
     * An entity must have a key, unless otherwise documented (for example,
     * an entity in `Value.entity_value` may have no key).
     * An entity's kind is its key path's last element's kind,
     * or null if it has no key.
     * </pre>
     *
     * <code>.google.datastore.v1.Key key = 1;</code>
     */
    private $key = null;
    /**
     * <pre>
     * The entity's properties.
     * The map's keys are property names.
     * A property name matching regex `__.*__` is reserved.
     * A reserved property name is forbidden in certain documented contexts.
     * The name must not contain more than 500 characters.
     * The name cannot be `""`.
     * </pre>
     *
     * <code>map&lt;string, .google.datastore.v1.Value&gt; properties = 3;</code>
     */
    private $properties;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1\Entity::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The entity's key.
     * An entity must have a key, unless otherwise documented (for example,
     * an entity in `Value.entity_value` may have no key).
     * An entity's kind is its key path's last element's kind,
     * or null if it has no key.
     * </pre>
     *
     * <code>.google.datastore.v1.Key key = 1;</code>
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <pre>
     * The entity's key.
     * An entity must have a key, unless otherwise documented (for example,
     * an entity in `Value.entity_value` may have no key).
     * An entity's kind is its key path's last element's kind,
     * or null if it has no key.
     * </pre>
     *
     * <code>.google.datastore.v1.Key key = 1;</code>
     */
    public function setKey(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Datastore\V1\Key::class);
        $this->key = $var;
    }

    /**
     * <pre>
     * The entity's properties.
     * The map's keys are property names.
     * A property name matching regex `__.*__` is reserved.
     * A reserved property name is forbidden in certain documented contexts.
     * The name must not contain more than 500 characters.
     * The name cannot be `""`.
     * </pre>
     *
     * <code>map&lt;string, .google.datastore.v1.Value&gt; properties = 3;</code>
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * <pre>
     * The entity's properties.
     * The map's keys are property names.
     * A property name matching regex `__.*__` is reserved.
     * A reserved property name is forbidden in certain documented contexts.
     * The name must not contain more than 500 characters.
     * The name cannot be `""`.
     * </pre>
     *
     * <code>map&lt;string, .google.datastore.v1.Value&gt; properties = 3;</code>
     */
    public function setProperties(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\Value::class);
        $this->properties = $arr;
    }

}

