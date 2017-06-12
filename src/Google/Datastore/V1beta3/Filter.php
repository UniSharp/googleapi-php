<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/query.proto

namespace Google\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A holder for any type of filter.
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1beta3.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    protected $filter_type;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A composite filter.
     * </pre>
     *
     * <code>.google.datastore.v1beta3.CompositeFilter composite_filter = 1;</code>
     */
    public function getCompositeFilter()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * A composite filter.
     * </pre>
     *
     * <code>.google.datastore.v1beta3.CompositeFilter composite_filter = 1;</code>
     */
    public function setCompositeFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Datastore\V1beta3\CompositeFilter::class);
        $this->writeOneof(1, $var);
    }

    /**
     * <pre>
     * A filter on a property.
     * </pre>
     *
     * <code>.google.datastore.v1beta3.PropertyFilter property_filter = 2;</code>
     */
    public function getPropertyFilter()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * A filter on a property.
     * </pre>
     *
     * <code>.google.datastore.v1beta3.PropertyFilter property_filter = 2;</code>
     */
    public function setPropertyFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Datastore\V1beta3\PropertyFilter::class);
        $this->writeOneof(2, $var);
    }

    public function getFilterType()
    {
        return $this->filter_type;
    }

}
