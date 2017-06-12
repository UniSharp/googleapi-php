<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/storage.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Options defining a data set within Google Cloud Datastore.
 * </pre>
 *
 * Protobuf type <code>google.privacy.dlp.v2beta1.DatastoreOptions</code>
 */
class DatastoreOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A partition ID identifies a grouping of entities. The grouping is always
     * by project and namespace, however the namespace ID may be empty.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.PartitionId partition_id = 1;</code>
     */
    private $partition_id = null;
    /**
     * <pre>
     * The kind to process.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.KindExpression kind = 2;</code>
     */
    private $kind = null;
    /**
     * <pre>
     * Properties to scan. If none are specified, all properties will be scanned
     * by default.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.Projection projection = 3;</code>
     */
    private $projection;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Storage::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A partition ID identifies a grouping of entities. The grouping is always
     * by project and namespace, however the namespace ID may be empty.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.PartitionId partition_id = 1;</code>
     */
    public function getPartitionId()
    {
        return $this->partition_id;
    }

    /**
     * <pre>
     * A partition ID identifies a grouping of entities. The grouping is always
     * by project and namespace, however the namespace ID may be empty.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.PartitionId partition_id = 1;</code>
     */
    public function setPartitionId(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\PartitionId::class);
        $this->partition_id = $var;
    }

    /**
     * <pre>
     * The kind to process.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.KindExpression kind = 2;</code>
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * <pre>
     * The kind to process.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.KindExpression kind = 2;</code>
     */
    public function setKind(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\KindExpression::class);
        $this->kind = $var;
    }

    /**
     * <pre>
     * Properties to scan. If none are specified, all properties will be scanned
     * by default.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.Projection projection = 3;</code>
     */
    public function getProjection()
    {
        return $this->projection;
    }

    /**
     * <pre>
     * Properties to scan. If none are specified, all properties will be scanned
     * by default.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.Projection projection = 3;</code>
     */
    public function setProjection(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Privacy\Dlp\V2beta1\Projection::class);
        $this->projection = $var;
    }

}
