<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/api/usage.proto
//   Date: 2017-06-13 04:23:09

namespace google\api {

  class Usage extends \DrSlump\Protobuf\Message {

    /**  @var string[]  */
    public $requirements = array();
    
    /**  @var \google\api\UsageRule[]  */
    public $rules = array();
    
    /**  @var string */
    public $producer_notification_channel = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.Usage');

      // REPEATED STRING requirements = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "requirements";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED MESSAGE rules = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "rules";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\api\UsageRule';
      $descriptor->addField($f);

      // OPTIONAL STRING producer_notification_channel = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "producer_notification_channel";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <requirements> has a value
     *
     * @return boolean
     */
    public function hasRequirements(){
      return $this->_has(1);
    }
    
    /**
     * Clear <requirements> value
     *
     * @return \google\api\Usage
     */
    public function clearRequirements(){
      return $this->_clear(1);
    }
    
    /**
     * Get <requirements> value
     *
     * @param int $idx
     * @return string
     */
    public function getRequirements($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <requirements> value
     *
     * @param string $value
     * @return \google\api\Usage
     */
    public function setRequirements( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <requirements>
     *
     * @return string[]
     */
    public function getRequirementsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <requirements>
     *
     * @param string $value
     * @return \google\api\Usage
     */
    public function addRequirements( $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <rules> has a value
     *
     * @return boolean
     */
    public function hasRules(){
      return $this->_has(6);
    }
    
    /**
     * Clear <rules> value
     *
     * @return \google\api\Usage
     */
    public function clearRules(){
      return $this->_clear(6);
    }
    
    /**
     * Get <rules> value
     *
     * @param int $idx
     * @return \google\api\UsageRule
     */
    public function getRules($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <rules> value
     *
     * @param \google\api\UsageRule $value
     * @return \google\api\Usage
     */
    public function setRules(\google\api\UsageRule $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <rules>
     *
     * @return \google\api\UsageRule[]
     */
    public function getRulesList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <rules>
     *
     * @param \google\api\UsageRule $value
     * @return \google\api\Usage
     */
    public function addRules(\google\api\UsageRule $value){
     return $this->_add(6, $value);
    }
    
    /**
     * Check if <producer_notification_channel> has a value
     *
     * @return boolean
     */
    public function hasProducerNotificationChannel(){
      return $this->_has(7);
    }
    
    /**
     * Clear <producer_notification_channel> value
     *
     * @return \google\api\Usage
     */
    public function clearProducerNotificationChannel(){
      return $this->_clear(7);
    }
    
    /**
     * Get <producer_notification_channel> value
     *
     * @return string
     */
    public function getProducerNotificationChannel(){
      return $this->_get(7);
    }
    
    /**
     * Set <producer_notification_channel> value
     *
     * @param string $value
     * @return \google\api\Usage
     */
    public function setProducerNotificationChannel( $value){
      return $this->_set(7, $value);
    }
  }
}

namespace google\api {

  class UsageRule extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $selector = null;
    
    /**  @var boolean */
    public $allow_unregistered_calls = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.UsageRule');

      // OPTIONAL STRING selector = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "selector";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL allow_unregistered_calls = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "allow_unregistered_calls";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <selector> has a value
     *
     * @return boolean
     */
    public function hasSelector(){
      return $this->_has(1);
    }
    
    /**
     * Clear <selector> value
     *
     * @return \google\api\UsageRule
     */
    public function clearSelector(){
      return $this->_clear(1);
    }
    
    /**
     * Get <selector> value
     *
     * @return string
     */
    public function getSelector(){
      return $this->_get(1);
    }
    
    /**
     * Set <selector> value
     *
     * @param string $value
     * @return \google\api\UsageRule
     */
    public function setSelector( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <allow_unregistered_calls> has a value
     *
     * @return boolean
     */
    public function hasAllowUnregisteredCalls(){
      return $this->_has(2);
    }
    
    /**
     * Clear <allow_unregistered_calls> value
     *
     * @return \google\api\UsageRule
     */
    public function clearAllowUnregisteredCalls(){
      return $this->_clear(2);
    }
    
    /**
     * Get <allow_unregistered_calls> value
     *
     * @return boolean
     */
    public function getAllowUnregisteredCalls(){
      return $this->_get(2);
    }
    
    /**
     * Set <allow_unregistered_calls> value
     *
     * @param boolean $value
     * @return \google\api\UsageRule
     */
    public function setAllowUnregisteredCalls( $value){
      return $this->_set(2, $value);
    }
  }
}

