<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/sourcerepo/v1/sourcerepo.proto

namespace Google\Devtools\Sourcerepo\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Configuration to automatically mirror a repository from another
 * hosting service, for example GitHub or BitBucket.
 * </pre>
 *
 * Protobuf type <code>google.devtools.sourcerepo.v1.MirrorConfig</code>
 */
class MirrorConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * URL of the main repository at the other hosting service.
     * </pre>
     *
     * <code>string url = 1;</code>
     */
    private $url = '';
    /**
     * <pre>
     * ID of the webhook listening to updates to trigger mirroring.
     * Removing this webook from the other hosting service will stop
     * Google Cloud Source Repositories from receiving notifications,
     * and thereby disabling mirroring.
     * </pre>
     *
     * <code>string webhook_id = 2;</code>
     */
    private $webhook_id = '';
    /**
     * <pre>
     * ID of the SSH deploy key at the other hosting service.
     * Removing this key from the other service would deauthorize
     * Google Cloud Source Repositories from mirroring.
     * </pre>
     *
     * <code>string deploy_key_id = 3;</code>
     */
    private $deploy_key_id = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Sourcerepo\V1\Sourcerepo::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * URL of the main repository at the other hosting service.
     * </pre>
     *
     * <code>string url = 1;</code>
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * <pre>
     * URL of the main repository at the other hosting service.
     * </pre>
     *
     * <code>string url = 1;</code>
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;
    }

    /**
     * <pre>
     * ID of the webhook listening to updates to trigger mirroring.
     * Removing this webook from the other hosting service will stop
     * Google Cloud Source Repositories from receiving notifications,
     * and thereby disabling mirroring.
     * </pre>
     *
     * <code>string webhook_id = 2;</code>
     */
    public function getWebhookId()
    {
        return $this->webhook_id;
    }

    /**
     * <pre>
     * ID of the webhook listening to updates to trigger mirroring.
     * Removing this webook from the other hosting service will stop
     * Google Cloud Source Repositories from receiving notifications,
     * and thereby disabling mirroring.
     * </pre>
     *
     * <code>string webhook_id = 2;</code>
     */
    public function setWebhookId($var)
    {
        GPBUtil::checkString($var, True);
        $this->webhook_id = $var;
    }

    /**
     * <pre>
     * ID of the SSH deploy key at the other hosting service.
     * Removing this key from the other service would deauthorize
     * Google Cloud Source Repositories from mirroring.
     * </pre>
     *
     * <code>string deploy_key_id = 3;</code>
     */
    public function getDeployKeyId()
    {
        return $this->deploy_key_id;
    }

    /**
     * <pre>
     * ID of the SSH deploy key at the other hosting service.
     * Removing this key from the other service would deauthorize
     * Google Cloud Source Repositories from mirroring.
     * </pre>
     *
     * <code>string deploy_key_id = 3;</code>
     */
    public function setDeployKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deploy_key_id = $var;
    }

}
