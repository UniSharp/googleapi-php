<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/spanner/v1/mutation.proto
//   Date: 2017-06-13 04:26:37

namespace google\spanner\v1\Mutation {

  class Write extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $table = null;
    
    /**  @var string[]  */
    public $columns = array();
    
    /**  @var \google\protobuf\ListValue[]  */
    public $values = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.Mutation.Write');

      // OPTIONAL STRING table = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "table";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED STRING columns = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "columns";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED MESSAGE values = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\protobuf\ListValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <table> has a value
     *
     * @return boolean
     */
    public function hasTable(){
      return $this->_has(1);
    }
    
    /**
     * Clear <table> value
     *
     * @return \google\spanner\v1\Mutation\Write
     */
    public function clearTable(){
      return $this->_clear(1);
    }
    
    /**
     * Get <table> value
     *
     * @return string
     */
    public function getTable(){
      return $this->_get(1);
    }
    
    /**
     * Set <table> value
     *
     * @param string $value
     * @return \google\spanner\v1\Mutation\Write
     */
    public function setTable( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <columns> has a value
     *
     * @return boolean
     */
    public function hasColumns(){
      return $this->_has(2);
    }
    
    /**
     * Clear <columns> value
     *
     * @return \google\spanner\v1\Mutation\Write
     */
    public function clearColumns(){
      return $this->_clear(2);
    }
    
    /**
     * Get <columns> value
     *
     * @param int $idx
     * @return string
     */
    public function getColumns($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <columns> value
     *
     * @param string $value
     * @return \google\spanner\v1\Mutation\Write
     */
    public function setColumns( $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <columns>
     *
     * @return string[]
     */
    public function getColumnsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <columns>
     *
     * @param string $value
     * @return \google\spanner\v1\Mutation\Write
     */
    public function addColumns( $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <values> has a value
     *
     * @return boolean
     */
    public function hasValues(){
      return $this->_has(3);
    }
    
    /**
     * Clear <values> value
     *
     * @return \google\spanner\v1\Mutation\Write
     */
    public function clearValues(){
      return $this->_clear(3);
    }
    
    /**
     * Get <values> value
     *
     * @param int $idx
     * @return \google\protobuf\ListValue
     */
    public function getValues($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <values> value
     *
     * @param \google\protobuf\ListValue $value
     * @return \google\spanner\v1\Mutation\Write
     */
    public function setValues(\google\protobuf\ListValue $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <values>
     *
     * @return \google\protobuf\ListValue[]
     */
    public function getValuesList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <values>
     *
     * @param \google\protobuf\ListValue $value
     * @return \google\spanner\v1\Mutation\Write
     */
    public function addValues(\google\protobuf\ListValue $value){
     return $this->_add(3, $value);
    }
  }
}

namespace google\spanner\v1\Mutation {

  class Delete extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $table = null;
    
    /**  @var \google\spanner\v1\KeySet */
    public $key_set = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.Mutation.Delete');

      // OPTIONAL STRING table = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "table";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_set = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "key_set";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\KeySet';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <table> has a value
     *
     * @return boolean
     */
    public function hasTable(){
      return $this->_has(1);
    }
    
    /**
     * Clear <table> value
     *
     * @return \google\spanner\v1\Mutation\Delete
     */
    public function clearTable(){
      return $this->_clear(1);
    }
    
    /**
     * Get <table> value
     *
     * @return string
     */
    public function getTable(){
      return $this->_get(1);
    }
    
    /**
     * Set <table> value
     *
     * @param string $value
     * @return \google\spanner\v1\Mutation\Delete
     */
    public function setTable( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <key_set> has a value
     *
     * @return boolean
     */
    public function hasKeySet(){
      return $this->_has(2);
    }
    
    /**
     * Clear <key_set> value
     *
     * @return \google\spanner\v1\Mutation\Delete
     */
    public function clearKeySet(){
      return $this->_clear(2);
    }
    
    /**
     * Get <key_set> value
     *
     * @return \google\spanner\v1\KeySet
     */
    public function getKeySet(){
      return $this->_get(2);
    }
    
    /**
     * Set <key_set> value
     *
     * @param \google\spanner\v1\KeySet $value
     * @return \google\spanner\v1\Mutation\Delete
     */
    public function setKeySet(\google\spanner\v1\KeySet $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\spanner\v1 {

  class Mutation extends \DrSlump\Protobuf\Message {

    /**  @var \google\spanner\v1\Mutation\Write */
    public $insert = null;
    
    /**  @var \google\spanner\v1\Mutation\Write */
    public $update = null;
    
    /**  @var \google\spanner\v1\Mutation\Write */
    public $insert_or_update = null;
    
    /**  @var \google\spanner\v1\Mutation\Write */
    public $replace = null;
    
    /**  @var \google\spanner\v1\Mutation\Delete */
    public $delete = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.Mutation');

      // OPTIONAL MESSAGE insert = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "insert";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\Mutation\Write';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE update = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "update";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\Mutation\Write';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE insert_or_update = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "insert_or_update";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\Mutation\Write';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE replace = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "replace";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\Mutation\Write';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\Mutation\Delete';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <insert> has a value
     *
     * @return boolean
     */
    public function hasInsert(){
      return $this->_has(1);
    }
    
    /**
     * Clear <insert> value
     *
     * @return \google\spanner\v1\Mutation
     */
    public function clearInsert(){
      return $this->_clear(1);
    }
    
    /**
     * Get <insert> value
     *
     * @return \google\spanner\v1\Mutation\Write
     */
    public function getInsert(){
      return $this->_get(1);
    }
    
    /**
     * Set <insert> value
     *
     * @param \google\spanner\v1\Mutation\Write $value
     * @return \google\spanner\v1\Mutation
     */
    public function setInsert(\google\spanner\v1\Mutation\Write $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <update> has a value
     *
     * @return boolean
     */
    public function hasUpdate(){
      return $this->_has(2);
    }
    
    /**
     * Clear <update> value
     *
     * @return \google\spanner\v1\Mutation
     */
    public function clearUpdate(){
      return $this->_clear(2);
    }
    
    /**
     * Get <update> value
     *
     * @return \google\spanner\v1\Mutation\Write
     */
    public function getUpdate(){
      return $this->_get(2);
    }
    
    /**
     * Set <update> value
     *
     * @param \google\spanner\v1\Mutation\Write $value
     * @return \google\spanner\v1\Mutation
     */
    public function setUpdate(\google\spanner\v1\Mutation\Write $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <insert_or_update> has a value
     *
     * @return boolean
     */
    public function hasInsertOrUpdate(){
      return $this->_has(3);
    }
    
    /**
     * Clear <insert_or_update> value
     *
     * @return \google\spanner\v1\Mutation
     */
    public function clearInsertOrUpdate(){
      return $this->_clear(3);
    }
    
    /**
     * Get <insert_or_update> value
     *
     * @return \google\spanner\v1\Mutation\Write
     */
    public function getInsertOrUpdate(){
      return $this->_get(3);
    }
    
    /**
     * Set <insert_or_update> value
     *
     * @param \google\spanner\v1\Mutation\Write $value
     * @return \google\spanner\v1\Mutation
     */
    public function setInsertOrUpdate(\google\spanner\v1\Mutation\Write $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <replace> has a value
     *
     * @return boolean
     */
    public function hasReplace(){
      return $this->_has(4);
    }
    
    /**
     * Clear <replace> value
     *
     * @return \google\spanner\v1\Mutation
     */
    public function clearReplace(){
      return $this->_clear(4);
    }
    
    /**
     * Get <replace> value
     *
     * @return \google\spanner\v1\Mutation\Write
     */
    public function getReplace(){
      return $this->_get(4);
    }
    
    /**
     * Set <replace> value
     *
     * @param \google\spanner\v1\Mutation\Write $value
     * @return \google\spanner\v1\Mutation
     */
    public function setReplace(\google\spanner\v1\Mutation\Write $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete> has a value
     *
     * @return boolean
     */
    public function hasDelete(){
      return $this->_has(5);
    }
    
    /**
     * Clear <delete> value
     *
     * @return \google\spanner\v1\Mutation
     */
    public function clearDelete(){
      return $this->_clear(5);
    }
    
    /**
     * Get <delete> value
     *
     * @return \google\spanner\v1\Mutation\Delete
     */
    public function getDelete(){
      return $this->_get(5);
    }
    
    /**
     * Set <delete> value
     *
     * @param \google\spanner\v1\Mutation\Delete $value
     * @return \google\spanner\v1\Mutation
     */
    public function setDelete(\google\spanner\v1\Mutation\Delete $value){
      return $this->_set(5, $value);
    }
  }
}
