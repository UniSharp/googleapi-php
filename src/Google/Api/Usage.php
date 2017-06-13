<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/usage.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Configuration controlling usage of a service.
 * </pre>
 *
 * Protobuf type <code>google.api.Usage</code>
 */
class Usage extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Requirements that must be satisfied before a consumer project can use the
     * service. Each requirement is of the form &lt;service.name&gt;/&lt;requirement-id&gt;;
     * for example 'serviceusage.googleapis.com/billing-enabled'.
     * </pre>
     *
     * <code>repeated string requirements = 1;</code>
     */
    private $requirements;
    /**
     * <pre>
     * A list of usage rules that apply to individual API methods.
     * **NOTE:** All service configuration rules follow "last one wins" order.
     * </pre>
     *
     * <code>repeated .google.api.UsageRule rules = 6;</code>
     */
    private $rules;
    /**
     * <pre>
     * The full resource name of a channel used for sending notifications to the
     * service producer.
     * Google Service Management currently only supports
     * [Google Cloud Pub/Sub](https://cloud.google.com/pubsub) as a notification
     * channel. To use Google Cloud Pub/Sub as the channel, this must be the name
     * of a Cloud Pub/Sub topic that uses the Cloud Pub/Sub topic name format
     * documented in https://cloud.google.com/pubsub/docs/overview.
     * </pre>
     *
     * <code>string producer_notification_channel = 7;</code>
     */
    private $producer_notification_channel = '';

    public function __construct() {
        \GPBMetadata\Google\Api\Usage::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Requirements that must be satisfied before a consumer project can use the
     * service. Each requirement is of the form &lt;service.name&gt;/&lt;requirement-id&gt;;
     * for example 'serviceusage.googleapis.com/billing-enabled'.
     * </pre>
     *
     * <code>repeated string requirements = 1;</code>
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * <pre>
     * Requirements that must be satisfied before a consumer project can use the
     * service. Each requirement is of the form &lt;service.name&gt;/&lt;requirement-id&gt;;
     * for example 'serviceusage.googleapis.com/billing-enabled'.
     * </pre>
     *
     * <code>repeated string requirements = 1;</code>
     */
    public function setRequirements(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->requirements = $arr;
    }

    /**
     * <pre>
     * A list of usage rules that apply to individual API methods.
     * **NOTE:** All service configuration rules follow "last one wins" order.
     * </pre>
     *
     * <code>repeated .google.api.UsageRule rules = 6;</code>
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * <pre>
     * A list of usage rules that apply to individual API methods.
     * **NOTE:** All service configuration rules follow "last one wins" order.
     * </pre>
     *
     * <code>repeated .google.api.UsageRule rules = 6;</code>
     */
    public function setRules(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\UsageRule::class);
        $this->rules = $arr;
    }

    /**
     * <pre>
     * The full resource name of a channel used for sending notifications to the
     * service producer.
     * Google Service Management currently only supports
     * [Google Cloud Pub/Sub](https://cloud.google.com/pubsub) as a notification
     * channel. To use Google Cloud Pub/Sub as the channel, this must be the name
     * of a Cloud Pub/Sub topic that uses the Cloud Pub/Sub topic name format
     * documented in https://cloud.google.com/pubsub/docs/overview.
     * </pre>
     *
     * <code>string producer_notification_channel = 7;</code>
     */
    public function getProducerNotificationChannel()
    {
        return $this->producer_notification_channel;
    }

    /**
     * <pre>
     * The full resource name of a channel used for sending notifications to the
     * service producer.
     * Google Service Management currently only supports
     * [Google Cloud Pub/Sub](https://cloud.google.com/pubsub) as a notification
     * channel. To use Google Cloud Pub/Sub as the channel, this must be the name
     * of a Cloud Pub/Sub topic that uses the Cloud Pub/Sub topic name format
     * documented in https://cloud.google.com/pubsub/docs/overview.
     * </pre>
     *
     * <code>string producer_notification_channel = 7;</code>
     */
    public function setProducerNotificationChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->producer_notification_channel = $var;
    }

}

