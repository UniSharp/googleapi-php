<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/bigtable/admin/v2/instance.proto
//   Date: 2017-06-13 04:23:40

namespace google\bigtable\admin\v2\Instance {

  class State extends \DrSlump\Protobuf\Enum {
    const STATE_NOT_KNOWN = 0;
    const READY = 1;
    const CREATING = 2;
  }
}
namespace google\bigtable\admin\v2\Instance {

  class Type extends \DrSlump\Protobuf\Enum {
    const TYPE_UNSPECIFIED = 0;
    const PRODUCTION = 1;
  }
}
namespace google\bigtable\admin\v2 {

  class Instance extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $display_name = null;
    
    /**  @var int - \google\bigtable\admin\v2\Instance\State */
    public $state = null;
    
    /**  @var int - \google\bigtable\admin\v2\Instance\Type */
    public $type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.Instance');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING display_name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "display_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM state = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "state";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\v2\Instance\State';
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\v2\Instance\Type';
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
     * @return \google\bigtable\admin\v2\Instance
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
     * @return \google\bigtable\admin\v2\Instance
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <display_name> has a value
     *
     * @return boolean
     */
    public function hasDisplayName(){
      return $this->_has(2);
    }
    
    /**
     * Clear <display_name> value
     *
     * @return \google\bigtable\admin\v2\Instance
     */
    public function clearDisplayName(){
      return $this->_clear(2);
    }
    
    /**
     * Get <display_name> value
     *
     * @return string
     */
    public function getDisplayName(){
      return $this->_get(2);
    }
    
    /**
     * Set <display_name> value
     *
     * @param string $value
     * @return \google\bigtable\admin\v2\Instance
     */
    public function setDisplayName( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <state> has a value
     *
     * @return boolean
     */
    public function hasState(){
      return $this->_has(3);
    }
    
    /**
     * Clear <state> value
     *
     * @return \google\bigtable\admin\v2\Instance
     */
    public function clearState(){
      return $this->_clear(3);
    }
    
    /**
     * Get <state> value
     *
     * @return int - \google\bigtable\admin\v2\Instance\State
     */
    public function getState(){
      return $this->_get(3);
    }
    
    /**
     * Set <state> value
     *
     * @param int - \google\bigtable\admin\v2\Instance\State $value
     * @return \google\bigtable\admin\v2\Instance
     */
    public function setState( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(4);
    }
    
    /**
     * Clear <type> value
     *
     * @return \google\bigtable\admin\v2\Instance
     */
    public function clearType(){
      return $this->_clear(4);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \google\bigtable\admin\v2\Instance\Type
     */
    public function getType(){
      return $this->_get(4);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \google\bigtable\admin\v2\Instance\Type $value
     * @return \google\bigtable\admin\v2\Instance
     */
    public function setType( $value){
      return $this->_set(4, $value);
    }
  }
}

namespace google\bigtable\admin\v2\Cluster {

  class State extends \DrSlump\Protobuf\Enum {
    const STATE_NOT_KNOWN = 0;
    const READY = 1;
    const CREATING = 2;
    const RESIZING = 3;
    const DISABLED = 4;
  }
}
namespace google\bigtable\admin\v2 {

  class Cluster extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $location = null;
    
    /**  @var int - \google\bigtable\admin\v2\Cluster\State */
    public $state = null;
    
    /**  @var int */
    public $serve_nodes = null;
    
    /**  @var int - \google\bigtable\admin\v2\StorageType */
    public $default_storage_type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.Cluster');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING location = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "location";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM state = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "state";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\v2\Cluster\State';
      $descriptor->addField($f);

      // OPTIONAL INT32 serve_nodes = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "serve_nodes";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM default_storage_type = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "default_storage_type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\v2\StorageType';
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
     * @return \google\bigtable\admin\v2\Cluster
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
     * @return \google\bigtable\admin\v2\Cluster
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <location> has a value
     *
     * @return boolean
     */
    public function hasLocation(){
      return $this->_has(2);
    }
    
    /**
     * Clear <location> value
     *
     * @return \google\bigtable\admin\v2\Cluster
     */
    public function clearLocation(){
      return $this->_clear(2);
    }
    
    /**
     * Get <location> value
     *
     * @return string
     */
    public function getLocation(){
      return $this->_get(2);
    }
    
    /**
     * Set <location> value
     *
     * @param string $value
     * @return \google\bigtable\admin\v2\Cluster
     */
    public function setLocation( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <state> has a value
     *
     * @return boolean
     */
    public function hasState(){
      return $this->_has(3);
    }
    
    /**
     * Clear <state> value
     *
     * @return \google\bigtable\admin\v2\Cluster
     */
    public function clearState(){
      return $this->_clear(3);
    }
    
    /**
     * Get <state> value
     *
     * @return int - \google\bigtable\admin\v2\Cluster\State
     */
    public function getState(){
      return $this->_get(3);
    }
    
    /**
     * Set <state> value
     *
     * @param int - \google\bigtable\admin\v2\Cluster\State $value
     * @return \google\bigtable\admin\v2\Cluster
     */
    public function setState( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <serve_nodes> has a value
     *
     * @return boolean
     */
    public function hasServeNodes(){
      return $this->_has(4);
    }
    
    /**
     * Clear <serve_nodes> value
     *
     * @return \google\bigtable\admin\v2\Cluster
     */
    public function clearServeNodes(){
      return $this->_clear(4);
    }
    
    /**
     * Get <serve_nodes> value
     *
     * @return int
     */
    public function getServeNodes(){
      return $this->_get(4);
    }
    
    /**
     * Set <serve_nodes> value
     *
     * @param int $value
     * @return \google\bigtable\admin\v2\Cluster
     */
    public function setServeNodes( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <default_storage_type> has a value
     *
     * @return boolean
     */
    public function hasDefaultStorageType(){
      return $this->_has(5);
    }
    
    /**
     * Clear <default_storage_type> value
     *
     * @return \google\bigtable\admin\v2\Cluster
     */
    public function clearDefaultStorageType(){
      return $this->_clear(5);
    }
    
    /**
     * Get <default_storage_type> value
     *
     * @return int - \google\bigtable\admin\v2\StorageType
     */
    public function getDefaultStorageType(){
      return $this->_get(5);
    }
    
    /**
     * Set <default_storage_type> value
     *
     * @param int - \google\bigtable\admin\v2\StorageType $value
     * @return \google\bigtable\admin\v2\Cluster
     */
    public function setDefaultStorageType( $value){
      return $this->_set(5, $value);
    }
  }
}

