<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Container structure describing a single finding within a string or image.
 * </pre>
 *
 * Protobuf type <code>google.privacy.dlp.v2beta1.Finding</code>
 */
class Finding extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The specific string that may be potentially sensitive info.
     * </pre>
     *
     * <code>string quote = 1;</code>
     */
    private $quote = '';
    /**
     * <pre>
     * The specific type of info the string might be.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.InfoType info_type = 2;</code>
     */
    private $info_type = null;
    /**
     * <pre>
     * Estimate of how likely it is that the info_type is correct.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.Likelihood likelihood = 3;</code>
     */
    private $likelihood = 0;
    /**
     * <pre>
     * Location of the info found.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.Location location = 4;</code>
     */
    private $location = null;
    /**
     * <pre>
     * Timestamp when finding was detected.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    private $create_time = null;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The specific string that may be potentially sensitive info.
     * </pre>
     *
     * <code>string quote = 1;</code>
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * <pre>
     * The specific string that may be potentially sensitive info.
     * </pre>
     *
     * <code>string quote = 1;</code>
     */
    public function setQuote($var)
    {
        GPBUtil::checkString($var, True);
        $this->quote = $var;
    }

    /**
     * <pre>
     * The specific type of info the string might be.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.InfoType info_type = 2;</code>
     */
    public function getInfoType()
    {
        return $this->info_type;
    }

    /**
     * <pre>
     * The specific type of info the string might be.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.InfoType info_type = 2;</code>
     */
    public function setInfoType(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\InfoType::class);
        $this->info_type = $var;
    }

    /**
     * <pre>
     * Estimate of how likely it is that the info_type is correct.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.Likelihood likelihood = 3;</code>
     */
    public function getLikelihood()
    {
        return $this->likelihood;
    }

    /**
     * <pre>
     * Estimate of how likely it is that the info_type is correct.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.Likelihood likelihood = 3;</code>
     */
    public function setLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Privacy\Dlp\V2beta1\Likelihood::class);
        $this->likelihood = $var;
    }

    /**
     * <pre>
     * Location of the info found.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.Location location = 4;</code>
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * <pre>
     * Location of the info found.
     * </pre>
     *
     * <code>.google.privacy.dlp.v2beta1.Location location = 4;</code>
     */
    public function setLocation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\Location::class);
        $this->location = $var;
    }

    /**
     * <pre>
     * Timestamp when finding was detected.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * <pre>
     * Timestamp when finding was detected.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    public function setCreateTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;
    }

}
