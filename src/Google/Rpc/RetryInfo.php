<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Describes when the clients can retry a failed request. Clients could ignore
 * the recommendation here or retry when this information is missing from error
 * responses.
 * It's always recommended that clients should use exponential backoff when
 * retrying.
 * Clients should wait until `retry_delay` amount of time has passed since
 * receiving the error response before retrying.  If retrying requests also
 * fail, clients should use an exponential backoff scheme to gradually increase
 * the delay between retries based on `retry_delay`, until either a maximum
 * number of retires have been reached or a maximum retry delay cap has been
 * reached.
 * </pre>
 *
 * Protobuf type <code>google.rpc.RetryInfo</code>
 */
class RetryInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Clients should wait at least this long between retrying the same request.
     * </pre>
     *
     * <code>.google.protobuf.Duration retry_delay = 1;</code>
     */
    private $retry_delay = null;

    public function __construct() {
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Clients should wait at least this long between retrying the same request.
     * </pre>
     *
     * <code>.google.protobuf.Duration retry_delay = 1;</code>
     */
    public function getRetryDelay()
    {
        return $this->retry_delay;
    }

    /**
     * <pre>
     * Clients should wait at least this long between retrying the same request.
     * </pre>
     *
     * <code>.google.protobuf.Duration retry_delay = 1;</code>
     */
    public function setRetryDelay(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->retry_delay = $var;
    }

}

