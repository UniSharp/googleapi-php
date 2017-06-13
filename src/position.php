<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/genomics/v1/position.proto
//   Date: 2017-06-13 04:25:43

namespace google\genomics\v1 {

  class Position extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $reference_name = null;
    
    /**  @var int */
    public $position = null;
    
    /**  @var boolean */
    public $reverse_strand = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.genomics.v1.Position');

      // OPTIONAL STRING reference_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "reference_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 position = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "position";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL reverse_strand = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "reverse_strand";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <reference_name> has a value
     *
     * @return boolean
     */
    public function hasReferenceName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <reference_name> value
     *
     * @return \google\genomics\v1\Position
     */
    public function clearReferenceName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <reference_name> value
     *
     * @return string
     */
    public function getReferenceName(){
      return $this->_get(1);
    }
    
    /**
     * Set <reference_name> value
     *
     * @param string $value
     * @return \google\genomics\v1\Position
     */
    public function setReferenceName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <position> has a value
     *
     * @return boolean
     */
    public function hasPosition(){
      return $this->_has(2);
    }
    
    /**
     * Clear <position> value
     *
     * @return \google\genomics\v1\Position
     */
    public function clearPosition(){
      return $this->_clear(2);
    }
    
    /**
     * Get <position> value
     *
     * @return int
     */
    public function getPosition(){
      return $this->_get(2);
    }
    
    /**
     * Set <position> value
     *
     * @param int $value
     * @return \google\genomics\v1\Position
     */
    public function setPosition( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <reverse_strand> has a value
     *
     * @return boolean
     */
    public function hasReverseStrand(){
      return $this->_has(3);
    }
    
    /**
     * Clear <reverse_strand> value
     *
     * @return \google\genomics\v1\Position
     */
    public function clearReverseStrand(){
      return $this->_clear(3);
    }
    
    /**
     * Get <reverse_strand> value
     *
     * @return boolean
     */
    public function getReverseStrand(){
      return $this->_get(3);
    }
    
    /**
     * Set <reverse_strand> value
     *
     * @param boolean $value
     * @return \google\genomics\v1\Position
     */
    public function setReverseStrand( $value){
      return $this->_set(3, $value);
    }
  }
}
