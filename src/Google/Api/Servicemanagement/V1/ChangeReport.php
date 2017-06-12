<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace Google\Api\Servicemanagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Change report associated with a particular service configuration.
 * It contains a list of ConfigChanges based on the comparison between
 * two service configurations.
 * </pre>
 *
 * Protobuf type <code>google.api.servicemanagement.v1.ChangeReport</code>
 */
class ChangeReport extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    private $config_changes;

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public function getConfigChanges()
    {
        return $this->config_changes;
    }

    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public function setConfigChanges(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\ConfigChange::class);
        $this->config_changes = $var;
    }

}
