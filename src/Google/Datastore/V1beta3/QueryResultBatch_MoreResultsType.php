<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/query.proto

namespace Google\Datastore\V1beta3;

/**
 * <pre>
 * The possible values for the `more_results` field.
 * </pre>
 *
 * Protobuf enum <code>google.datastore.v1beta3.QueryResultBatch.MoreResultsType</code>
 */
class QueryResultBatch_MoreResultsType
{
    /**
     * <pre>
     * Unspecified. This value is never used.
     * </pre>
     *
     * <code>MORE_RESULTS_TYPE_UNSPECIFIED = 0;</code>
     */
    const MORE_RESULTS_TYPE_UNSPECIFIED = 0;
    /**
     * <pre>
     * There may be additional batches to fetch from this query.
     * </pre>
     *
     * <code>NOT_FINISHED = 1;</code>
     */
    const NOT_FINISHED = 1;
    /**
     * <pre>
     * The query is finished, but there may be more results after the limit.
     * </pre>
     *
     * <code>MORE_RESULTS_AFTER_LIMIT = 2;</code>
     */
    const MORE_RESULTS_AFTER_LIMIT = 2;
    /**
     * <pre>
     * The query is finished, but there may be more results after the end
     * cursor.
     * </pre>
     *
     * <code>MORE_RESULTS_AFTER_CURSOR = 4;</code>
     */
    const MORE_RESULTS_AFTER_CURSOR = 4;
    /**
     * <pre>
     * The query has been exhausted.
     * </pre>
     *
     * <code>NO_MORE_RESULTS = 3;</code>
     */
    const NO_MORE_RESULTS = 3;
}

