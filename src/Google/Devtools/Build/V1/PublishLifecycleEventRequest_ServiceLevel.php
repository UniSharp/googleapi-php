<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/publish_build_event.proto

namespace Google\Devtools\Build\V1;

/**
 * <pre>
 * The service level of the build request. Backends only uses this value when
 * the BuildEnqueued event is published to determine what level of service
 * this build should receive.
 * </pre>
 *
 * Protobuf enum <code>google.devtools.build.v1.PublishLifecycleEventRequest.ServiceLevel</code>
 */
class PublishLifecycleEventRequest_ServiceLevel
{
    /**
     * <pre>
     * Non-interactive builds can tolerate longer event latencies. This is the
     * default ServiceLevel if callers do not specify one.
     * </pre>
     *
     * <code>NONINTERACTIVE = 0;</code>
     */
    const NONINTERACTIVE = 0;
    /**
     * <pre>
     * The events of an interactive build should be delivered with low latency.
     * </pre>
     *
     * <code>INTERACTIVE = 1;</code>
     */
    const INTERACTIVE = 1;
}
