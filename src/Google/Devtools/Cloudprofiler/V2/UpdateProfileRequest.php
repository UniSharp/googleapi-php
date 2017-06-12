<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudprofiler/v2/profiler.proto

namespace Google\Devtools\Cloudprofiler\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * UpdateProfileRequest contains the profile to update.
 * </pre>
 *
 * Protobuf type <code>google.devtools.cloudprofiler.v2.UpdateProfileRequest</code>
 */
class UpdateProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Profile to update
     * </pre>
     *
     * <code>.google.devtools.cloudprofiler.v2.Profile profile = 1;</code>
     */
    private $profile = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudprofiler\V2\Profiler::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Profile to update
     * </pre>
     *
     * <code>.google.devtools.cloudprofiler.v2.Profile profile = 1;</code>
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * <pre>
     * Profile to update
     * </pre>
     *
     * <code>.google.devtools.cloudprofiler.v2.Profile profile = 1;</code>
     */
    public function setProfile(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudprofiler\V2\Profile::class);
        $this->profile = $var;
    }

}
