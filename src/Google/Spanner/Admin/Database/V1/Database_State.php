<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Spanner\Admin\Database\V1;

/**
 * <pre>
 * Indicates the current state of the database.
 * </pre>
 *
 * Protobuf enum <code>google.spanner.admin.database.v1.Database.State</code>
 */
class Database_State
{
    /**
     * <pre>
     * Not specified.
     * </pre>
     *
     * <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * <pre>
     * The database is still being created. Operations on the database may fail
     * with `FAILED_PRECONDITION` in this state.
     * </pre>
     *
     * <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * <pre>
     * The database is fully created and ready for use.
     * </pre>
     *
     * <code>READY = 2;</code>
     */
    const READY = 2;
}
