<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/spanner/v1/type.proto
//   Date: 2017-06-13 04:26:40

namespace google\spanner\v1 {

  class TypeCode extends \DrSlump\Protobuf\Enum {
    const TYPE_CODE_UNSPECIFIED = 0;
    const BOOL = 1;
    const INT64 = 2;
    const FLOAT64 = 3;
    const TIMESTAMP = 4;
    const DATE = 5;
    const STRING = 6;
    const BYTES = 7;
    const ARRAY = 8;
    const STRUCT = 9;
  }
}
namespace google\spanner\v1 {

  class Type extends \DrSlump\Protobuf\Message {

    /**  @var int - \google\spanner\v1\TypeCode */
    public $code = null;
    
    /**  @var \google\spanner\v1\Type */
    public $array_element_type = null;
    
    /**  @var \google\spanner\v1\StructType */
    public $struct_type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.Type');

      // OPTIONAL ENUM code = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "code";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\TypeCode';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE array_element_type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "array_element_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\Type';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE struct_type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "struct_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\StructType';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <code> has a value
     *
     * @return boolean
     */
    public function hasCode(){
      return $this->_has(1);
    }
    
    /**
     * Clear <code> value
     *
     * @return \google\spanner\v1\Type
     */
    public function clearCode(){
      return $this->_clear(1);
    }
    
    /**
     * Get <code> value
     *
     * @return int - \google\spanner\v1\TypeCode
     */
    public function getCode(){
      return $this->_get(1);
    }
    
    /**
     * Set <code> value
     *
     * @param int - \google\spanner\v1\TypeCode $value
     * @return \google\spanner\v1\Type
     */
    public function setCode( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <array_element_type> has a value
     *
     * @return boolean
     */
    public function hasArrayElementType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <array_element_type> value
     *
     * @return \google\spanner\v1\Type
     */
    public function clearArrayElementType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <array_element_type> value
     *
     * @return \google\spanner\v1\Type
     */
    public function getArrayElementType(){
      return $this->_get(2);
    }
    
    /**
     * Set <array_element_type> value
     *
     * @param \google\spanner\v1\Type $value
     * @return \google\spanner\v1\Type
     */
    public function setArrayElementType(\google\spanner\v1\Type $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <struct_type> has a value
     *
     * @return boolean
     */
    public function hasStructType(){
      return $this->_has(3);
    }
    
    /**
     * Clear <struct_type> value
     *
     * @return \google\spanner\v1\Type
     */
    public function clearStructType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <struct_type> value
     *
     * @return \google\spanner\v1\StructType
     */
    public function getStructType(){
      return $this->_get(3);
    }
    
    /**
     * Set <struct_type> value
     *
     * @param \google\spanner\v1\StructType $value
     * @return \google\spanner\v1\Type
     */
    public function setStructType(\google\spanner\v1\StructType $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\spanner\v1\StructType {

  class Field extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var \google\spanner\v1\Type */
    public $type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.StructType.Field');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\Type';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \google\spanner\v1\StructType\Field
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \google\spanner\v1\StructType\Field
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <type> value
     *
     * @return \google\spanner\v1\StructType\Field
     */
    public function clearType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <type> value
     *
     * @return \google\spanner\v1\Type
     */
    public function getType(){
      return $this->_get(2);
    }
    
    /**
     * Set <type> value
     *
     * @param \google\spanner\v1\Type $value
     * @return \google\spanner\v1\StructType\Field
     */
    public function setType(\google\spanner\v1\Type $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\spanner\v1 {

  class StructType extends \DrSlump\Protobuf\Message {

    /**  @var \google\spanner\v1\StructType\Field[]  */
    public $fields = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.StructType');

      // REPEATED MESSAGE fields = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "fields";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\spanner\v1\StructType\Field';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <fields> has a value
     *
     * @return boolean
     */
    public function hasFields(){
      return $this->_has(1);
    }
    
    /**
     * Clear <fields> value
     *
     * @return \google\spanner\v1\StructType
     */
    public function clearFields(){
      return $this->_clear(1);
    }
    
    /**
     * Get <fields> value
     *
     * @param int $idx
     * @return \google\spanner\v1\StructType\Field
     */
    public function getFields($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <fields> value
     *
     * @param \google\spanner\v1\StructType\Field $value
     * @return \google\spanner\v1\StructType
     */
    public function setFields(\google\spanner\v1\StructType\Field $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <fields>
     *
     * @return \google\spanner\v1\StructType\Field[]
     */
    public function getFieldsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <fields>
     *
     * @param \google\spanner\v1\StructType\Field $value
     * @return \google\spanner\v1\StructType
     */
    public function addFields(\google\spanner\v1\StructType\Field $value){
     return $this->_add(1, $value);
    }
  }
}

