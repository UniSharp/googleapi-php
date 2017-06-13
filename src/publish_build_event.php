<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/devtools/build/v1/publish_build_event.proto
//   Date: 2017-06-13 04:25:03

namespace google\devtools\build\v1\PublishLifecycleEventRequest {

  class ServiceLevel extends \DrSlump\Protobuf\Enum {
    const NONINTERACTIVE = 0;
    const INTERACTIVE = 1;
  }
}
namespace google\devtools\build\v1 {

  class PublishLifecycleEventRequest extends \DrSlump\Protobuf\Message {

    /**  @var int - \google\devtools\build\v1\PublishLifecycleEventRequest\ServiceLevel */
    public $service_level = null;
    
    /**  @var \google\devtools\build\v1\OrderedBuildEvent */
    public $build_event = null;
    
    /**  @var \google\protobuf\Duration */
    public $stream_timeout = null;
    
    /**  @var string[]  */
    public $notification_keywords = array();
    
    /**  @var string */
    public $project_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.build.v1.PublishLifecycleEventRequest');

      // OPTIONAL ENUM service_level = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "service_level";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\devtools\build\v1\PublishLifecycleEventRequest\ServiceLevel';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE build_event = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "build_event";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\devtools\build\v1\OrderedBuildEvent';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE stream_timeout = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "stream_timeout";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Duration';
      $descriptor->addField($f);

      // REPEATED STRING notification_keywords = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "notification_keywords";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL STRING project_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "project_id";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <service_level> has a value
     *
     * @return boolean
     */
    public function hasServiceLevel(){
      return $this->_has(1);
    }
    
    /**
     * Clear <service_level> value
     *
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function clearServiceLevel(){
      return $this->_clear(1);
    }
    
    /**
     * Get <service_level> value
     *
     * @return int - \google\devtools\build\v1\PublishLifecycleEventRequest\ServiceLevel
     */
    public function getServiceLevel(){
      return $this->_get(1);
    }
    
    /**
     * Set <service_level> value
     *
     * @param int - \google\devtools\build\v1\PublishLifecycleEventRequest\ServiceLevel $value
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function setServiceLevel( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <build_event> has a value
     *
     * @return boolean
     */
    public function hasBuildEvent(){
      return $this->_has(2);
    }
    
    /**
     * Clear <build_event> value
     *
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function clearBuildEvent(){
      return $this->_clear(2);
    }
    
    /**
     * Get <build_event> value
     *
     * @return \google\devtools\build\v1\OrderedBuildEvent
     */
    public function getBuildEvent(){
      return $this->_get(2);
    }
    
    /**
     * Set <build_event> value
     *
     * @param \google\devtools\build\v1\OrderedBuildEvent $value
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function setBuildEvent(\google\devtools\build\v1\OrderedBuildEvent $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <stream_timeout> has a value
     *
     * @return boolean
     */
    public function hasStreamTimeout(){
      return $this->_has(3);
    }
    
    /**
     * Clear <stream_timeout> value
     *
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function clearStreamTimeout(){
      return $this->_clear(3);
    }
    
    /**
     * Get <stream_timeout> value
     *
     * @return \google\protobuf\Duration
     */
    public function getStreamTimeout(){
      return $this->_get(3);
    }
    
    /**
     * Set <stream_timeout> value
     *
     * @param \google\protobuf\Duration $value
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function setStreamTimeout(\google\protobuf\Duration $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <notification_keywords> has a value
     *
     * @return boolean
     */
    public function hasNotificationKeywords(){
      return $this->_has(4);
    }
    
    /**
     * Clear <notification_keywords> value
     *
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function clearNotificationKeywords(){
      return $this->_clear(4);
    }
    
    /**
     * Get <notification_keywords> value
     *
     * @param int $idx
     * @return string
     */
    public function getNotificationKeywords($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <notification_keywords> value
     *
     * @param string $value
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function setNotificationKeywords( $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <notification_keywords>
     *
     * @return string[]
     */
    public function getNotificationKeywordsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <notification_keywords>
     *
     * @param string $value
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function addNotificationKeywords( $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <project_id> has a value
     *
     * @return boolean
     */
    public function hasProjectId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <project_id> value
     *
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function clearProjectId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <project_id> value
     *
     * @return string
     */
    public function getProjectId(){
      return $this->_get(6);
    }
    
    /**
     * Set <project_id> value
     *
     * @param string $value
     * @return \google\devtools\build\v1\PublishLifecycleEventRequest
     */
    public function setProjectId( $value){
      return $this->_set(6, $value);
    }
  }
}

namespace google\devtools\build\v1 {

  class PublishBuildToolEventStreamResponse extends \DrSlump\Protobuf\Message {

    /**  @var \google\devtools\build\v1\StreamId */
    public $stream_id = null;
    
    /**  @var int */
    public $sequence_number = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.build.v1.PublishBuildToolEventStreamResponse');

      // OPTIONAL MESSAGE stream_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "stream_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\devtools\build\v1\StreamId';
      $descriptor->addField($f);

      // OPTIONAL INT64 sequence_number = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "sequence_number";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <stream_id> has a value
     *
     * @return boolean
     */
    public function hasStreamId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <stream_id> value
     *
     * @return \google\devtools\build\v1\PublishBuildToolEventStreamResponse
     */
    public function clearStreamId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <stream_id> value
     *
     * @return \google\devtools\build\v1\StreamId
     */
    public function getStreamId(){
      return $this->_get(1);
    }
    
    /**
     * Set <stream_id> value
     *
     * @param \google\devtools\build\v1\StreamId $value
     * @return \google\devtools\build\v1\PublishBuildToolEventStreamResponse
     */
    public function setStreamId(\google\devtools\build\v1\StreamId $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <sequence_number> has a value
     *
     * @return boolean
     */
    public function hasSequenceNumber(){
      return $this->_has(2);
    }
    
    /**
     * Clear <sequence_number> value
     *
     * @return \google\devtools\build\v1\PublishBuildToolEventStreamResponse
     */
    public function clearSequenceNumber(){
      return $this->_clear(2);
    }
    
    /**
     * Get <sequence_number> value
     *
     * @return int
     */
    public function getSequenceNumber(){
      return $this->_get(2);
    }
    
    /**
     * Set <sequence_number> value
     *
     * @param int $value
     * @return \google\devtools\build\v1\PublishBuildToolEventStreamResponse
     */
    public function setSequenceNumber( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\devtools\build\v1 {

  class OrderedBuildEvent extends \DrSlump\Protobuf\Message {

    /**  @var \google\devtools\build\v1\StreamId */
    public $stream_id = null;
    
    /**  @var int */
    public $sequence_number = null;
    
    /**  @var \google\devtools\build\v1\BuildEvent */
    public $event = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.build.v1.OrderedBuildEvent');

      // OPTIONAL MESSAGE stream_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "stream_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\devtools\build\v1\StreamId';
      $descriptor->addField($f);

      // OPTIONAL INT64 sequence_number = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "sequence_number";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE event = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "event";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\devtools\build\v1\BuildEvent';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <stream_id> has a value
     *
     * @return boolean
     */
    public function hasStreamId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <stream_id> value
     *
     * @return \google\devtools\build\v1\OrderedBuildEvent
     */
    public function clearStreamId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <stream_id> value
     *
     * @return \google\devtools\build\v1\StreamId
     */
    public function getStreamId(){
      return $this->_get(1);
    }
    
    /**
     * Set <stream_id> value
     *
     * @param \google\devtools\build\v1\StreamId $value
     * @return \google\devtools\build\v1\OrderedBuildEvent
     */
    public function setStreamId(\google\devtools\build\v1\StreamId $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <sequence_number> has a value
     *
     * @return boolean
     */
    public function hasSequenceNumber(){
      return $this->_has(2);
    }
    
    /**
     * Clear <sequence_number> value
     *
     * @return \google\devtools\build\v1\OrderedBuildEvent
     */
    public function clearSequenceNumber(){
      return $this->_clear(2);
    }
    
    /**
     * Get <sequence_number> value
     *
     * @return int
     */
    public function getSequenceNumber(){
      return $this->_get(2);
    }
    
    /**
     * Set <sequence_number> value
     *
     * @param int $value
     * @return \google\devtools\build\v1\OrderedBuildEvent
     */
    public function setSequenceNumber( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <event> has a value
     *
     * @return boolean
     */
    public function hasEvent(){
      return $this->_has(3);
    }
    
    /**
     * Clear <event> value
     *
     * @return \google\devtools\build\v1\OrderedBuildEvent
     */
    public function clearEvent(){
      return $this->_clear(3);
    }
    
    /**
     * Get <event> value
     *
     * @return \google\devtools\build\v1\BuildEvent
     */
    public function getEvent(){
      return $this->_get(3);
    }
    
    /**
     * Set <event> value
     *
     * @param \google\devtools\build\v1\BuildEvent $value
     * @return \google\devtools\build\v1\OrderedBuildEvent
     */
    public function setEvent(\google\devtools\build\v1\BuildEvent $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\devtools\build\v1 {

  class PublishBuildEventClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }
    /**
     * @param google\devtools\build\v1\PublishLifecycleEventRequest $input
     */
    public function PublishLifecycleEvent(\google\devtools\build\v1\PublishLifecycleEventRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.devtools.build.v1.PublishBuildEvent/PublishLifecycleEvent', $argument, '\google\protobuf\Empty::deserialize', $metadata, $options);
    }
    /**
     * @param google\devtools\build\v1\OrderedBuildEvent $input
     */
    public function PublishBuildToolEventStream($metadata = array(), $options = array()) {
      return $this->_bidiRequest('/google.devtools.build.v1.PublishBuildEvent/PublishBuildToolEventStream', '\google\devtools\build\v1\PublishBuildToolEventStreamResponse::deserialize', $metadata, $options);
    }
  }
}
