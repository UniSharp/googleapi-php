<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/appengine/v1/operation.proto
//   Date: 2017-06-13 04:23:22

namespace google\appengine\v1 {

  class OperationMetadataV1 extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $method = null;
    
    /**  @var \google\protobuf\Timestamp */
    public $insert_time = null;
    
    /**  @var \google\protobuf\Timestamp */
    public $end_time = null;
    
    /**  @var string */
    public $user = null;
    
    /**  @var string */
    public $target = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.appengine.v1.OperationMetadataV1');

      // OPTIONAL STRING method = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "method";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE insert_time = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "insert_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Timestamp';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE end_time = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "end_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Timestamp';
      $descriptor->addField($f);

      // OPTIONAL STRING user = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "user";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING target = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "target";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <method> has a value
     *
     * @return boolean
     */
    public function hasMethod(){
      return $this->_has(1);
    }
    
    /**
     * Clear <method> value
     *
     * @return \google\appengine\v1\OperationMetadataV1
     */
    public function clearMethod(){
      return $this->_clear(1);
    }
    
    /**
     * Get <method> value
     *
     * @return string
     */
    public function getMethod(){
      return $this->_get(1);
    }
    
    /**
     * Set <method> value
     *
     * @param string $value
     * @return \google\appengine\v1\OperationMetadataV1
     */
    public function setMethod( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <insert_time> has a value
     *
     * @return boolean
     */
    public function hasInsertTime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <insert_time> value
     *
     * @return \google\appengine\v1\OperationMetadataV1
     */
    public function clearInsertTime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <insert_time> value
     *
     * @return \google\protobuf\Timestamp
     */
    public function getInsertTime(){
      return $this->_get(2);
    }
    
    /**
     * Set <insert_time> value
     *
     * @param \google\protobuf\Timestamp $value
     * @return \google\appengine\v1\OperationMetadataV1
     */
    public function setInsertTime(\google\protobuf\Timestamp $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <end_time> has a value
     *
     * @return boolean
     */
    public function hasEndTime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <end_time> value
     *
     * @return \google\appengine\v1\OperationMetadataV1
     */
    public function clearEndTime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <end_time> value
     *
     * @return \google\protobuf\Timestamp
     */
    public function getEndTime(){
      return $this->_get(3);
    }
    
    /**
     * Set <end_time> value
     *
     * @param \google\protobuf\Timestamp $value
     * @return \google\appengine\v1\OperationMetadataV1
     */
    public function setEndTime(\google\protobuf\Timestamp $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <user> has a value
     *
     * @return boolean
     */
    public function hasUser(){
      return $this->_has(4);
    }
    
    /**
     * Clear <user> value
     *
     * @return \google\appengine\v1\OperationMetadataV1
     */
    public function clearUser(){
      return $this->_clear(4);
    }
    
    /**
     * Get <user> value
     *
     * @return string
     */
    public function getUser(){
      return $this->_get(4);
    }
    
    /**
     * Set <user> value
     *
     * @param string $value
     * @return \google\appengine\v1\OperationMetadataV1
     */
    public function setUser( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <target> has a value
     *
     * @return boolean
     */
    public function hasTarget(){
      return $this->_has(5);
    }
    
    /**
     * Clear <target> value
     *
     * @return \google\appengine\v1\OperationMetadataV1
     */
    public function clearTarget(){
      return $this->_clear(5);
    }
    
    /**
     * Get <target> value
     *
     * @return string
     */
    public function getTarget(){
      return $this->_get(5);
    }
    
    /**
     * Set <target> value
     *
     * @param string $value
     * @return \google\appengine\v1\OperationMetadataV1
     */
    public function setTarget( $value){
      return $this->_set(5, $value);
    }
  }
}

