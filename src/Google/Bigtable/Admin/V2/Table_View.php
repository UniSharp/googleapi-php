<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Bigtable\Admin\V2;

/**
 * <pre>
 * Defines a view over a table's fields.
 * </pre>
 *
 * Protobuf enum <code>google.bigtable.admin.v2.Table.View</code>
 */
class Table_View
{
    /**
     * <pre>
     * Uses the default view for each method as documented in its request.
     * </pre>
     *
     * <code>VIEW_UNSPECIFIED = 0;</code>
     */
    const VIEW_UNSPECIFIED = 0;
    /**
     * <pre>
     * Only populates `name`.
     * </pre>
     *
     * <code>NAME_ONLY = 1;</code>
     */
    const NAME_ONLY = 1;
    /**
     * <pre>
     * Only populates `name` and fields related to the table's schema.
     * </pre>
     *
     * <code>SCHEMA_VIEW = 2;</code>
     */
    const SCHEMA_VIEW = 2;
    /**
     * <pre>
     * Populates all fields.
     * </pre>
     *
     * <code>FULL = 4;</code>
     */
    const FULL = 4;
}

