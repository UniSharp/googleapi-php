<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/entity.proto

namespace Google\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A (kind, ID/name) pair used to construct a key path.
 * If either name or ID is set, the element is complete.
 * If neither is set, the element is incomplete.
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1beta3.Key.PathElement</code>
 */
class Key_PathElement extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The kind of the entity.
     * A kind matching regex `__.*__` is reserved/read-only.
     * A kind must not contain more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     * </pre>
     *
     * <code>string kind = 1;</code>
     */
    private $kind = '';
    protected $id_type;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Entity::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The kind of the entity.
     * A kind matching regex `__.*__` is reserved/read-only.
     * A kind must not contain more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     * </pre>
     *
     * <code>string kind = 1;</code>
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * <pre>
     * The kind of the entity.
     * A kind matching regex `__.*__` is reserved/read-only.
     * A kind must not contain more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     * </pre>
     *
     * <code>string kind = 1;</code>
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;
    }

    /**
     * <pre>
     * The auto-allocated ID of the entity.
     * Never equal to zero. Values less than zero are discouraged and may not
     * be supported in the future.
     * </pre>
     *
     * <code>int64 id = 2;</code>
     */
    public function getId()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * The auto-allocated ID of the entity.
     * Never equal to zero. Values less than zero are discouraged and may not
     * be supported in the future.
     * </pre>
     *
     * <code>int64 id = 2;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * The name of the entity.
     * A name matching regex `__.*__` is reserved/read-only.
     * A name must not be more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     * </pre>
     *
     * <code>string name = 3;</code>
     */
    public function getName()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * The name of the entity.
     * A name matching regex `__.*__` is reserved/read-only.
     * A name must not be more than 1500 bytes when UTF-8 encoded.
     * Cannot be `""`.
     * </pre>
     *
     * <code>string name = 3;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);
    }

    public function getIdType()
    {
        return $this->id_type;
    }

}

