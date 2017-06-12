<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/query.proto

namespace Google\Datastore\V1beta3;

/**
 * <pre>
 * A property filter operator.
 * </pre>
 *
 * Protobuf enum <code>google.datastore.v1beta3.PropertyFilter.Operator</code>
 */
class PropertyFilter_Operator
{
    /**
     * <pre>
     * Unspecified. This value must not be used.
     * </pre>
     *
     * <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * <pre>
     * Less than.
     * </pre>
     *
     * <code>LESS_THAN = 1;</code>
     */
    const LESS_THAN = 1;
    /**
     * <pre>
     * Less than or equal.
     * </pre>
     *
     * <code>LESS_THAN_OR_EQUAL = 2;</code>
     */
    const LESS_THAN_OR_EQUAL = 2;
    /**
     * <pre>
     * Greater than.
     * </pre>
     *
     * <code>GREATER_THAN = 3;</code>
     */
    const GREATER_THAN = 3;
    /**
     * <pre>
     * Greater than or equal.
     * </pre>
     *
     * <code>GREATER_THAN_OR_EQUAL = 4;</code>
     */
    const GREATER_THAN_OR_EQUAL = 4;
    /**
     * <pre>
     * Equal.
     * </pre>
     *
     * <code>EQUAL = 5;</code>
     */
    const EQUAL = 5;
    /**
     * <pre>
     * Has ancestor.
     * </pre>
     *
     * <code>HAS_ANCESTOR = 11;</code>
     */
    const HAS_ANCESTOR = 11;
}

