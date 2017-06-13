<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Configuration for a push delivery endpoint.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1beta2.PushConfig</code>
 */
class PushConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A URL locating the endpoint to which messages should be pushed.
     * For example, a Webhook endpoint might use "https://example.com/push".
     * </pre>
     *
     * <code>string push_endpoint = 1;</code>
     */
    private $push_endpoint = '';
    /**
     * <pre>
     * Endpoint configuration attributes.
     * Every endpoint has a set of API supported attributes that can be used to
     * control different aspects of the message delivery.
     * The currently supported attribute is `x-goog-version`, which you can
     * use to change the format of the push message. This attribute
     * indicates the version of the data expected by the endpoint. This
     * controls the shape of the envelope (i.e. its fields and metadata).
     * The endpoint version is based on the version of the Pub/Sub
     * API.
     * If not present during the CreateSubscription call, it will default to
     * the version of the API used to make such call. If not present during a
     * ModifyPushConfig call, its value will not be changed. GetSubscription
     * calls will always return a valid version, even if the subscription was
     * created without this attribute.
     * The possible values for this attribute are:
     * * `v1beta1`: uses the push format defined in the v1beta1 Pub/Sub API.
     * * `v1beta2`: uses the push format defined in the v1beta2 Pub/Sub API.
     * </pre>
     *
     * <code>map&lt;string, string&gt; attributes = 2;</code>
     */
    private $attributes;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A URL locating the endpoint to which messages should be pushed.
     * For example, a Webhook endpoint might use "https://example.com/push".
     * </pre>
     *
     * <code>string push_endpoint = 1;</code>
     */
    public function getPushEndpoint()
    {
        return $this->push_endpoint;
    }

    /**
     * <pre>
     * A URL locating the endpoint to which messages should be pushed.
     * For example, a Webhook endpoint might use "https://example.com/push".
     * </pre>
     *
     * <code>string push_endpoint = 1;</code>
     */
    public function setPushEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->push_endpoint = $var;
    }

    /**
     * <pre>
     * Endpoint configuration attributes.
     * Every endpoint has a set of API supported attributes that can be used to
     * control different aspects of the message delivery.
     * The currently supported attribute is `x-goog-version`, which you can
     * use to change the format of the push message. This attribute
     * indicates the version of the data expected by the endpoint. This
     * controls the shape of the envelope (i.e. its fields and metadata).
     * The endpoint version is based on the version of the Pub/Sub
     * API.
     * If not present during the CreateSubscription call, it will default to
     * the version of the API used to make such call. If not present during a
     * ModifyPushConfig call, its value will not be changed. GetSubscription
     * calls will always return a valid version, even if the subscription was
     * created without this attribute.
     * The possible values for this attribute are:
     * * `v1beta1`: uses the push format defined in the v1beta1 Pub/Sub API.
     * * `v1beta2`: uses the push format defined in the v1beta2 Pub/Sub API.
     * </pre>
     *
     * <code>map&lt;string, string&gt; attributes = 2;</code>
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <pre>
     * Endpoint configuration attributes.
     * Every endpoint has a set of API supported attributes that can be used to
     * control different aspects of the message delivery.
     * The currently supported attribute is `x-goog-version`, which you can
     * use to change the format of the push message. This attribute
     * indicates the version of the data expected by the endpoint. This
     * controls the shape of the envelope (i.e. its fields and metadata).
     * The endpoint version is based on the version of the Pub/Sub
     * API.
     * If not present during the CreateSubscription call, it will default to
     * the version of the API used to make such call. If not present during a
     * ModifyPushConfig call, its value will not be changed. GetSubscription
     * calls will always return a valid version, even if the subscription was
     * created without this attribute.
     * The possible values for this attribute are:
     * * `v1beta1`: uses the push format defined in the v1beta1 Pub/Sub API.
     * * `v1beta2`: uses the push format defined in the v1beta2 Pub/Sub API.
     * </pre>
     *
     * <code>map&lt;string, string&gt; attributes = 2;</code>
     */
    public function setAttributes(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;
    }

}

