<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Appengine\V1;

/**
 * <pre>
 * Fields that should be returned when [Version][google.appengine.v1.Version] resources
 * are retreived.
 * </pre>
 *
 * Protobuf enum <code>google.appengine.v1.VersionView</code>
 */
class VersionView
{
    /**
     * <pre>
     * Basic version information including scaling and inbound services,
     * but not detailed deployment information.
     * </pre>
     *
     * <code>BASIC = 0;</code>
     */
    const BASIC = 0;
    /**
     * <pre>
     * The information from `BASIC`, plus detailed information about the
     * deployment. This format is required when creating resources, but
     * is not returned in `Get` or `List` by default.
     * </pre>
     *
     * <code>FULL = 1;</code>
     */
    const FULL = 1;
}
