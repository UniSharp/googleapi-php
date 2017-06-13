<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/logging/type/http_request.proto
//   Date: 2017-06-13 04:26:02

namespace google\logging\type {

  class HttpRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $request_method = null;
    
    /**  @var string */
    public $request_url = null;
    
    /**  @var int */
    public $request_size = null;
    
    /**  @var int */
    public $status = null;
    
    /**  @var int */
    public $response_size = null;
    
    /**  @var string */
    public $user_agent = null;
    
    /**  @var string */
    public $remote_ip = null;
    
    /**  @var string */
    public $server_ip = null;
    
    /**  @var string */
    public $referer = null;
    
    /**  @var \google\protobuf\Duration */
    public $latency = null;
    
    /**  @var boolean */
    public $cache_lookup = null;
    
    /**  @var boolean */
    public $cache_hit = null;
    
    /**  @var boolean */
    public $cache_validated_with_origin_server = null;
    
    /**  @var int */
    public $cache_fill_bytes = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.logging.type.HttpRequest');

      // OPTIONAL STRING request_method = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "request_method";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING request_url = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "request_url";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 request_size = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "request_size";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 status = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "status";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 response_size = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "response_size";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING user_agent = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "user_agent";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING remote_ip = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "remote_ip";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING server_ip = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "server_ip";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING referer = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "referer";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE latency = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "latency";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Duration';
      $descriptor->addField($f);

      // OPTIONAL BOOL cache_lookup = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "cache_lookup";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL cache_hit = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "cache_hit";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL cache_validated_with_origin_server = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "cache_validated_with_origin_server";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 cache_fill_bytes = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "cache_fill_bytes";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <request_method> has a value
     *
     * @return boolean
     */
    public function hasRequestMethod(){
      return $this->_has(1);
    }
    
    /**
     * Clear <request_method> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearRequestMethod(){
      return $this->_clear(1);
    }
    
    /**
     * Get <request_method> value
     *
     * @return string
     */
    public function getRequestMethod(){
      return $this->_get(1);
    }
    
    /**
     * Set <request_method> value
     *
     * @param string $value
     * @return \google\logging\type\HttpRequest
     */
    public function setRequestMethod( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <request_url> has a value
     *
     * @return boolean
     */
    public function hasRequestUrl(){
      return $this->_has(2);
    }
    
    /**
     * Clear <request_url> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearRequestUrl(){
      return $this->_clear(2);
    }
    
    /**
     * Get <request_url> value
     *
     * @return string
     */
    public function getRequestUrl(){
      return $this->_get(2);
    }
    
    /**
     * Set <request_url> value
     *
     * @param string $value
     * @return \google\logging\type\HttpRequest
     */
    public function setRequestUrl( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <request_size> has a value
     *
     * @return boolean
     */
    public function hasRequestSize(){
      return $this->_has(3);
    }
    
    /**
     * Clear <request_size> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearRequestSize(){
      return $this->_clear(3);
    }
    
    /**
     * Get <request_size> value
     *
     * @return int
     */
    public function getRequestSize(){
      return $this->_get(3);
    }
    
    /**
     * Set <request_size> value
     *
     * @param int $value
     * @return \google\logging\type\HttpRequest
     */
    public function setRequestSize( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <status> has a value
     *
     * @return boolean
     */
    public function hasStatus(){
      return $this->_has(4);
    }
    
    /**
     * Clear <status> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearStatus(){
      return $this->_clear(4);
    }
    
    /**
     * Get <status> value
     *
     * @return int
     */
    public function getStatus(){
      return $this->_get(4);
    }
    
    /**
     * Set <status> value
     *
     * @param int $value
     * @return \google\logging\type\HttpRequest
     */
    public function setStatus( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <response_size> has a value
     *
     * @return boolean
     */
    public function hasResponseSize(){
      return $this->_has(5);
    }
    
    /**
     * Clear <response_size> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearResponseSize(){
      return $this->_clear(5);
    }
    
    /**
     * Get <response_size> value
     *
     * @return int
     */
    public function getResponseSize(){
      return $this->_get(5);
    }
    
    /**
     * Set <response_size> value
     *
     * @param int $value
     * @return \google\logging\type\HttpRequest
     */
    public function setResponseSize( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <user_agent> has a value
     *
     * @return boolean
     */
    public function hasUserAgent(){
      return $this->_has(6);
    }
    
    /**
     * Clear <user_agent> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearUserAgent(){
      return $this->_clear(6);
    }
    
    /**
     * Get <user_agent> value
     *
     * @return string
     */
    public function getUserAgent(){
      return $this->_get(6);
    }
    
    /**
     * Set <user_agent> value
     *
     * @param string $value
     * @return \google\logging\type\HttpRequest
     */
    public function setUserAgent( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <remote_ip> has a value
     *
     * @return boolean
     */
    public function hasRemoteIp(){
      return $this->_has(7);
    }
    
    /**
     * Clear <remote_ip> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearRemoteIp(){
      return $this->_clear(7);
    }
    
    /**
     * Get <remote_ip> value
     *
     * @return string
     */
    public function getRemoteIp(){
      return $this->_get(7);
    }
    
    /**
     * Set <remote_ip> value
     *
     * @param string $value
     * @return \google\logging\type\HttpRequest
     */
    public function setRemoteIp( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <server_ip> has a value
     *
     * @return boolean
     */
    public function hasServerIp(){
      return $this->_has(13);
    }
    
    /**
     * Clear <server_ip> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearServerIp(){
      return $this->_clear(13);
    }
    
    /**
     * Get <server_ip> value
     *
     * @return string
     */
    public function getServerIp(){
      return $this->_get(13);
    }
    
    /**
     * Set <server_ip> value
     *
     * @param string $value
     * @return \google\logging\type\HttpRequest
     */
    public function setServerIp( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <referer> has a value
     *
     * @return boolean
     */
    public function hasReferer(){
      return $this->_has(8);
    }
    
    /**
     * Clear <referer> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearReferer(){
      return $this->_clear(8);
    }
    
    /**
     * Get <referer> value
     *
     * @return string
     */
    public function getReferer(){
      return $this->_get(8);
    }
    
    /**
     * Set <referer> value
     *
     * @param string $value
     * @return \google\logging\type\HttpRequest
     */
    public function setReferer( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <latency> has a value
     *
     * @return boolean
     */
    public function hasLatency(){
      return $this->_has(14);
    }
    
    /**
     * Clear <latency> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearLatency(){
      return $this->_clear(14);
    }
    
    /**
     * Get <latency> value
     *
     * @return \google\protobuf\Duration
     */
    public function getLatency(){
      return $this->_get(14);
    }
    
    /**
     * Set <latency> value
     *
     * @param \google\protobuf\Duration $value
     * @return \google\logging\type\HttpRequest
     */
    public function setLatency(\google\protobuf\Duration $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <cache_lookup> has a value
     *
     * @return boolean
     */
    public function hasCacheLookup(){
      return $this->_has(11);
    }
    
    /**
     * Clear <cache_lookup> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearCacheLookup(){
      return $this->_clear(11);
    }
    
    /**
     * Get <cache_lookup> value
     *
     * @return boolean
     */
    public function getCacheLookup(){
      return $this->_get(11);
    }
    
    /**
     * Set <cache_lookup> value
     *
     * @param boolean $value
     * @return \google\logging\type\HttpRequest
     */
    public function setCacheLookup( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <cache_hit> has a value
     *
     * @return boolean
     */
    public function hasCacheHit(){
      return $this->_has(9);
    }
    
    /**
     * Clear <cache_hit> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearCacheHit(){
      return $this->_clear(9);
    }
    
    /**
     * Get <cache_hit> value
     *
     * @return boolean
     */
    public function getCacheHit(){
      return $this->_get(9);
    }
    
    /**
     * Set <cache_hit> value
     *
     * @param boolean $value
     * @return \google\logging\type\HttpRequest
     */
    public function setCacheHit( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <cache_validated_with_origin_server> has a value
     *
     * @return boolean
     */
    public function hasCacheValidatedWithOriginServer(){
      return $this->_has(10);
    }
    
    /**
     * Clear <cache_validated_with_origin_server> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearCacheValidatedWithOriginServer(){
      return $this->_clear(10);
    }
    
    /**
     * Get <cache_validated_with_origin_server> value
     *
     * @return boolean
     */
    public function getCacheValidatedWithOriginServer(){
      return $this->_get(10);
    }
    
    /**
     * Set <cache_validated_with_origin_server> value
     *
     * @param boolean $value
     * @return \google\logging\type\HttpRequest
     */
    public function setCacheValidatedWithOriginServer( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <cache_fill_bytes> has a value
     *
     * @return boolean
     */
    public function hasCacheFillBytes(){
      return $this->_has(12);
    }
    
    /**
     * Clear <cache_fill_bytes> value
     *
     * @return \google\logging\type\HttpRequest
     */
    public function clearCacheFillBytes(){
      return $this->_clear(12);
    }
    
    /**
     * Get <cache_fill_bytes> value
     *
     * @return int
     */
    public function getCacheFillBytes(){
      return $this->_get(12);
    }
    
    /**
     * Set <cache_fill_bytes> value
     *
     * @param int $value
     * @return \google\logging\type\HttpRequest
     */
    public function setCacheFillBytes( $value){
      return $this->_set(12, $value);
    }
  }
}

