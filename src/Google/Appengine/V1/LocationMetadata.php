<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/location.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Metadata for the given [google.cloud.location.Location][google.cloud.location.Location].
 * </pre>
 *
 * Protobuf type <code>google.appengine.v1.LocationMetadata</code>
 */
class LocationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * App Engine Standard Environment is available in the given location.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>bool standard_environment_available = 2;</code>
     */
    private $standard_environment_available = false;
    /**
     * <pre>
     * App Engine Flexible Environment is available in the given location.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>bool flexible_environment_available = 4;</code>
     */
    private $flexible_environment_available = false;

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\Location::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * App Engine Standard Environment is available in the given location.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>bool standard_environment_available = 2;</code>
     */
    public function getStandardEnvironmentAvailable()
    {
        return $this->standard_environment_available;
    }

    /**
     * <pre>
     * App Engine Standard Environment is available in the given location.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>bool standard_environment_available = 2;</code>
     */
    public function setStandardEnvironmentAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->standard_environment_available = $var;
    }

    /**
     * <pre>
     * App Engine Flexible Environment is available in the given location.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>bool flexible_environment_available = 4;</code>
     */
    public function getFlexibleEnvironmentAvailable()
    {
        return $this->flexible_environment_available;
    }

    /**
     * <pre>
     * App Engine Flexible Environment is available in the given location.
     * &#64;OutputOnly
     * </pre>
     *
     * <code>bool flexible_environment_available = 4;</code>
     */
    public function setFlexibleEnvironmentAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->flexible_environment_available = $var;
    }

}

