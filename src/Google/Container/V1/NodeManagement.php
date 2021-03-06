<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * NodeManagement defines the set of node management services turned on for the
 * node pool.
 * </pre>
 *
 * Protobuf type <code>google.container.v1.NodeManagement</code>
 */
class NodeManagement extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A flag that specifies whether node auto-upgrade is enabled for the node
     * pool. If enabled, node auto-upgrade helps keep the nodes in your node pool
     * up to date with the latest release version of Kubernetes.
     * </pre>
     *
     * <code>bool auto_upgrade = 1;</code>
     */
    private $auto_upgrade = false;
    /**
     * <pre>
     * A flag that specifies whether the node auto-repair is enabled for the node
     * pool. If enabled, the nodes in this node pool will be monitored and, if
     * they fail health checks too many times, an automatic repair action will be
     * triggered.
     * </pre>
     *
     * <code>bool auto_repair = 2;</code>
     */
    private $auto_repair = false;
    /**
     * <pre>
     * Specifies the Auto Upgrade knobs for the node pool.
     * </pre>
     *
     * <code>.google.container.v1.AutoUpgradeOptions upgrade_options = 10;</code>
     */
    private $upgrade_options = null;

    public function __construct() {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A flag that specifies whether node auto-upgrade is enabled for the node
     * pool. If enabled, node auto-upgrade helps keep the nodes in your node pool
     * up to date with the latest release version of Kubernetes.
     * </pre>
     *
     * <code>bool auto_upgrade = 1;</code>
     */
    public function getAutoUpgrade()
    {
        return $this->auto_upgrade;
    }

    /**
     * <pre>
     * A flag that specifies whether node auto-upgrade is enabled for the node
     * pool. If enabled, node auto-upgrade helps keep the nodes in your node pool
     * up to date with the latest release version of Kubernetes.
     * </pre>
     *
     * <code>bool auto_upgrade = 1;</code>
     */
    public function setAutoUpgrade($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_upgrade = $var;
    }

    /**
     * <pre>
     * A flag that specifies whether the node auto-repair is enabled for the node
     * pool. If enabled, the nodes in this node pool will be monitored and, if
     * they fail health checks too many times, an automatic repair action will be
     * triggered.
     * </pre>
     *
     * <code>bool auto_repair = 2;</code>
     */
    public function getAutoRepair()
    {
        return $this->auto_repair;
    }

    /**
     * <pre>
     * A flag that specifies whether the node auto-repair is enabled for the node
     * pool. If enabled, the nodes in this node pool will be monitored and, if
     * they fail health checks too many times, an automatic repair action will be
     * triggered.
     * </pre>
     *
     * <code>bool auto_repair = 2;</code>
     */
    public function setAutoRepair($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_repair = $var;
    }

    /**
     * <pre>
     * Specifies the Auto Upgrade knobs for the node pool.
     * </pre>
     *
     * <code>.google.container.v1.AutoUpgradeOptions upgrade_options = 10;</code>
     */
    public function getUpgradeOptions()
    {
        return $this->upgrade_options;
    }

    /**
     * <pre>
     * Specifies the Auto Upgrade knobs for the node pool.
     * </pre>
     *
     * <code>.google.container.v1.AutoUpgradeOptions upgrade_options = 10;</code>
     */
    public function setUpgradeOptions(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Container\V1\AutoUpgradeOptions::class);
        $this->upgrade_options = $var;
    }

}

