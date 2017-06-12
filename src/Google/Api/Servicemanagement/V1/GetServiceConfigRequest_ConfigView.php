<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Api\Servicemanagement\V1;

/**
 * Protobuf enum <code>google.api.servicemanagement.v1.GetServiceConfigRequest.ConfigView</code>
 */
class GetServiceConfigRequest_ConfigView
{
    /**
     * <pre>
     * Server response includes all fields except SourceInfo.
     * </pre>
     *
     * <code>BASIC = 0;</code>
     */
    const BASIC = 0;
    /**
     * <pre>
     * Server response includes all fields including SourceInfo.
     * SourceFiles are of type 'google.api.servicemanagement.v1.ConfigFile'
     * and are only available for configs created using the
     * SubmitConfigSource method.
     * </pre>
     *
     * <code>FULL = 1;</code>
     */
    const FULL = 1;
}
