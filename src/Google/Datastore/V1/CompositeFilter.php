<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace Google\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A filter that merges multiple other filters using the given operator.
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1.CompositeFilter</code>
 */
class CompositeFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The operator for combining multiple filters.
     * </pre>
     *
     * <code>.google.datastore.v1.CompositeFilter.Operator op = 1;</code>
     */
    private $op = 0;
    /**
     * <pre>
     * The list of filters to combine.
     * Must contain at least one filter.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Filter filters = 2;</code>
     */
    private $filters;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The operator for combining multiple filters.
     * </pre>
     *
     * <code>.google.datastore.v1.CompositeFilter.Operator op = 1;</code>
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * <pre>
     * The operator for combining multiple filters.
     * </pre>
     *
     * <code>.google.datastore.v1.CompositeFilter.Operator op = 1;</code>
     */
    public function setOp($var)
    {
        GPBUtil::checkEnum($var, \Google\Datastore\V1\CompositeFilter_Operator::class);
        $this->op = $var;
    }

    /**
     * <pre>
     * The list of filters to combine.
     * Must contain at least one filter.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Filter filters = 2;</code>
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * <pre>
     * The list of filters to combine.
     * Must contain at least one filter.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Filter filters = 2;</code>
     */
    public function setFilters(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\Filter::class);
        $this->filters = $arr;
    }

}

