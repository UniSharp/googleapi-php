<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/query.proto

namespace Google\Datastore\V1beta3;

/**
 * <pre>
 * A composite filter operator.
 * </pre>
 *
 * Protobuf enum <code>google.datastore.v1beta3.CompositeFilter.Operator</code>
 */
class CompositeFilter_Operator
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
     * The results are required to satisfy each of the combined filters.
     * </pre>
     *
     * <code>AND = 1;</code>
     */
    const AND = 1;
}

