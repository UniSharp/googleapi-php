<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/bigtable/admin/table/v1/bigtable_table_data.proto
//   Date: 2017-06-13 04:23:32

namespace google\bigtable\admin\table\v1\Table {

  class TimestampGranularity extends \DrSlump\Protobuf\Enum {
    const MILLIS = 0;
  }
}
namespace google\bigtable\admin\table\v1\Table {

  class ColumnFamiliesEntry extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $key = null;
    
    /**  @var \google\bigtable\admin\table\v1\ColumnFamily */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.table.v1.Table.ColumnFamiliesEntry');

      // OPTIONAL STRING key = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "key";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\table\v1\ColumnFamily';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <key> has a value
     *
     * @return boolean
     */
    public function hasKey(){
      return $this->_has(1);
    }
    
    /**
     * Clear <key> value
     *
     * @return \google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry
     */
    public function clearKey(){
      return $this->_clear(1);
    }
    
    /**
     * Get <key> value
     *
     * @return string
     */
    public function getKey(){
      return $this->_get(1);
    }
    
    /**
     * Set <key> value
     *
     * @param string $value
     * @return \google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry
     */
    public function setKey( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry
     */
    public function clearValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value> value
     *
     * @return \google\bigtable\admin\table\v1\ColumnFamily
     */
    public function getValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <value> value
     *
     * @param \google\bigtable\admin\table\v1\ColumnFamily $value
     * @return \google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry
     */
    public function setValue(\google\bigtable\admin\table\v1\ColumnFamily $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\bigtable\admin\table\v1 {

  class Table extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var \google\longrunning\Operation */
    public $current_operation = null;
    
    /**  @var \google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry[]  */
    public $column_families = array();
    
    /**  @var int - \google\bigtable\admin\table\v1\Table\TimestampGranularity */
    public $granularity = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.table.v1.Table');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE current_operation = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "current_operation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\longrunning\Operation';
      $descriptor->addField($f);

      // REPEATED MESSAGE column_families = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "column_families";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry';
      $descriptor->addField($f);

      // OPTIONAL ENUM granularity = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "granularity";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\table\v1\Table\TimestampGranularity';
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
     * @return \google\bigtable\admin\table\v1\Table
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
     * @return \google\bigtable\admin\table\v1\Table
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <current_operation> has a value
     *
     * @return boolean
     */
    public function hasCurrentOperation(){
      return $this->_has(2);
    }
    
    /**
     * Clear <current_operation> value
     *
     * @return \google\bigtable\admin\table\v1\Table
     */
    public function clearCurrentOperation(){
      return $this->_clear(2);
    }
    
    /**
     * Get <current_operation> value
     *
     * @return \google\longrunning\Operation
     */
    public function getCurrentOperation(){
      return $this->_get(2);
    }
    
    /**
     * Set <current_operation> value
     *
     * @param \google\longrunning\Operation $value
     * @return \google\bigtable\admin\table\v1\Table
     */
    public function setCurrentOperation(\google\longrunning\Operation $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <column_families> has a value
     *
     * @return boolean
     */
    public function hasColumnFamilies(){
      return $this->_has(3);
    }
    
    /**
     * Clear <column_families> value
     *
     * @return \google\bigtable\admin\table\v1\Table
     */
    public function clearColumnFamilies(){
      return $this->_clear(3);
    }
    
    /**
     * Get <column_families> value
     *
     * @param int $idx
     * @return \google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry
     */
    public function getColumnFamilies($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <column_families> value
     *
     * @param \google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry $value
     * @return \google\bigtable\admin\table\v1\Table
     */
    public function setColumnFamilies(\google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <column_families>
     *
     * @return \google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry[]
     */
    public function getColumnFamiliesList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <column_families>
     *
     * @param \google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry $value
     * @return \google\bigtable\admin\table\v1\Table
     */
    public function addColumnFamilies(\google\bigtable\admin\table\v1\Table\ColumnFamiliesEntry $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <granularity> has a value
     *
     * @return boolean
     */
    public function hasGranularity(){
      return $this->_has(4);
    }
    
    /**
     * Clear <granularity> value
     *
     * @return \google\bigtable\admin\table\v1\Table
     */
    public function clearGranularity(){
      return $this->_clear(4);
    }
    
    /**
     * Get <granularity> value
     *
     * @return int - \google\bigtable\admin\table\v1\Table\TimestampGranularity
     */
    public function getGranularity(){
      return $this->_get(4);
    }
    
    /**
     * Set <granularity> value
     *
     * @param int - \google\bigtable\admin\table\v1\Table\TimestampGranularity $value
     * @return \google\bigtable\admin\table\v1\Table
     */
    public function setGranularity( $value){
      return $this->_set(4, $value);
    }
  }
}

namespace google\bigtable\admin\table\v1 {

  class ColumnFamily extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $gc_expression = null;
    
    /**  @var \google\bigtable\admin\table\v1\GcRule */
    public $gc_rule = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.table.v1.ColumnFamily');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING gc_expression = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "gc_expression";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE gc_rule = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "gc_rule";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\table\v1\GcRule';
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
     * @return \google\bigtable\admin\table\v1\ColumnFamily
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
     * @return \google\bigtable\admin\table\v1\ColumnFamily
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <gc_expression> has a value
     *
     * @return boolean
     */
    public function hasGcExpression(){
      return $this->_has(2);
    }
    
    /**
     * Clear <gc_expression> value
     *
     * @return \google\bigtable\admin\table\v1\ColumnFamily
     */
    public function clearGcExpression(){
      return $this->_clear(2);
    }
    
    /**
     * Get <gc_expression> value
     *
     * @return string
     */
    public function getGcExpression(){
      return $this->_get(2);
    }
    
    /**
     * Set <gc_expression> value
     *
     * @param string $value
     * @return \google\bigtable\admin\table\v1\ColumnFamily
     */
    public function setGcExpression( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <gc_rule> has a value
     *
     * @return boolean
     */
    public function hasGcRule(){
      return $this->_has(3);
    }
    
    /**
     * Clear <gc_rule> value
     *
     * @return \google\bigtable\admin\table\v1\ColumnFamily
     */
    public function clearGcRule(){
      return $this->_clear(3);
    }
    
    /**
     * Get <gc_rule> value
     *
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function getGcRule(){
      return $this->_get(3);
    }
    
    /**
     * Set <gc_rule> value
     *
     * @param \google\bigtable\admin\table\v1\GcRule $value
     * @return \google\bigtable\admin\table\v1\ColumnFamily
     */
    public function setGcRule(\google\bigtable\admin\table\v1\GcRule $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\bigtable\admin\table\v1\GcRule {

  class Intersection extends \DrSlump\Protobuf\Message {

    /**  @var \google\bigtable\admin\table\v1\GcRule[]  */
    public $rules = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.table.v1.GcRule.Intersection');

      // REPEATED MESSAGE rules = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "rules";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\bigtable\admin\table\v1\GcRule';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <rules> has a value
     *
     * @return boolean
     */
    public function hasRules(){
      return $this->_has(1);
    }
    
    /**
     * Clear <rules> value
     *
     * @return \google\bigtable\admin\table\v1\GcRule\Intersection
     */
    public function clearRules(){
      return $this->_clear(1);
    }
    
    /**
     * Get <rules> value
     *
     * @param int $idx
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function getRules($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <rules> value
     *
     * @param \google\bigtable\admin\table\v1\GcRule $value
     * @return \google\bigtable\admin\table\v1\GcRule\Intersection
     */
    public function setRules(\google\bigtable\admin\table\v1\GcRule $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <rules>
     *
     * @return \google\bigtable\admin\table\v1\GcRule[]
     */
    public function getRulesList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <rules>
     *
     * @param \google\bigtable\admin\table\v1\GcRule $value
     * @return \google\bigtable\admin\table\v1\GcRule\Intersection
     */
    public function addRules(\google\bigtable\admin\table\v1\GcRule $value){
     return $this->_add(1, $value);
    }
  }
}

namespace google\bigtable\admin\table\v1\GcRule {

  class Union extends \DrSlump\Protobuf\Message {

    /**  @var \google\bigtable\admin\table\v1\GcRule[]  */
    public $rules = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.table.v1.GcRule.Union');

      // REPEATED MESSAGE rules = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "rules";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\bigtable\admin\table\v1\GcRule';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <rules> has a value
     *
     * @return boolean
     */
    public function hasRules(){
      return $this->_has(1);
    }
    
    /**
     * Clear <rules> value
     *
     * @return \google\bigtable\admin\table\v1\GcRule\Union
     */
    public function clearRules(){
      return $this->_clear(1);
    }
    
    /**
     * Get <rules> value
     *
     * @param int $idx
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function getRules($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <rules> value
     *
     * @param \google\bigtable\admin\table\v1\GcRule $value
     * @return \google\bigtable\admin\table\v1\GcRule\Union
     */
    public function setRules(\google\bigtable\admin\table\v1\GcRule $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <rules>
     *
     * @return \google\bigtable\admin\table\v1\GcRule[]
     */
    public function getRulesList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <rules>
     *
     * @param \google\bigtable\admin\table\v1\GcRule $value
     * @return \google\bigtable\admin\table\v1\GcRule\Union
     */
    public function addRules(\google\bigtable\admin\table\v1\GcRule $value){
     return $this->_add(1, $value);
    }
  }
}

namespace google\bigtable\admin\table\v1 {

  class GcRule extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $max_num_versions = null;
    
    /**  @var \google\protobuf\Duration */
    public $max_age = null;
    
    /**  @var \google\bigtable\admin\table\v1\GcRule\Intersection */
    public $intersection = null;
    
    /**  @var \google\bigtable\admin\table\v1\GcRule\Union */
    public $union = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.table.v1.GcRule');

      // OPTIONAL INT32 max_num_versions = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "max_num_versions";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_age = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "max_age";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Duration';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE intersection = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "intersection";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\table\v1\GcRule\Intersection';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE union = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "union";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\table\v1\GcRule\Union';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <max_num_versions> has a value
     *
     * @return boolean
     */
    public function hasMaxNumVersions(){
      return $this->_has(1);
    }
    
    /**
     * Clear <max_num_versions> value
     *
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function clearMaxNumVersions(){
      return $this->_clear(1);
    }
    
    /**
     * Get <max_num_versions> value
     *
     * @return int
     */
    public function getMaxNumVersions(){
      return $this->_get(1);
    }
    
    /**
     * Set <max_num_versions> value
     *
     * @param int $value
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function setMaxNumVersions( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <max_age> has a value
     *
     * @return boolean
     */
    public function hasMaxAge(){
      return $this->_has(2);
    }
    
    /**
     * Clear <max_age> value
     *
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function clearMaxAge(){
      return $this->_clear(2);
    }
    
    /**
     * Get <max_age> value
     *
     * @return \google\protobuf\Duration
     */
    public function getMaxAge(){
      return $this->_get(2);
    }
    
    /**
     * Set <max_age> value
     *
     * @param \google\protobuf\Duration $value
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function setMaxAge(\google\protobuf\Duration $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <intersection> has a value
     *
     * @return boolean
     */
    public function hasIntersection(){
      return $this->_has(3);
    }
    
    /**
     * Clear <intersection> value
     *
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function clearIntersection(){
      return $this->_clear(3);
    }
    
    /**
     * Get <intersection> value
     *
     * @return \google\bigtable\admin\table\v1\GcRule\Intersection
     */
    public function getIntersection(){
      return $this->_get(3);
    }
    
    /**
     * Set <intersection> value
     *
     * @param \google\bigtable\admin\table\v1\GcRule\Intersection $value
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function setIntersection(\google\bigtable\admin\table\v1\GcRule\Intersection $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <union> has a value
     *
     * @return boolean
     */
    public function hasUnion(){
      return $this->_has(4);
    }
    
    /**
     * Clear <union> value
     *
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function clearUnion(){
      return $this->_clear(4);
    }
    
    /**
     * Get <union> value
     *
     * @return \google\bigtable\admin\table\v1\GcRule\Union
     */
    public function getUnion(){
      return $this->_get(4);
    }
    
    /**
     * Set <union> value
     *
     * @param \google\bigtable\admin\table\v1\GcRule\Union $value
     * @return \google\bigtable\admin\table\v1\GcRule
     */
    public function setUnion(\google\bigtable\admin\table\v1\GcRule\Union $value){
      return $this->_set(4, $value);
    }
  }
}

