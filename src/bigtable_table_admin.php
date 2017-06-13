<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/bigtable/admin/v2/bigtable_table_admin.proto
//   Date: 2017-06-13 04:23:37

namespace google\bigtable\admin\v2\CreateTableRequest {

  class Split extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $key = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.CreateTableRequest.Split');

      // OPTIONAL BYTES key = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "key";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \google\bigtable\admin\v2\CreateTableRequest\Split
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
     * @return \google\bigtable\admin\v2\CreateTableRequest\Split
     */
    public function setKey( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\bigtable\admin\v2 {

  class CreateTableRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $parent = null;
    
    /**  @var string */
    public $table_id = null;
    
    /**  @var \google\bigtable\admin\v2\Table */
    public $table = null;
    
    /**  @var \google\bigtable\admin\v2\CreateTableRequest\Split[]  */
    public $initial_splits = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.CreateTableRequest');

      // OPTIONAL STRING parent = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "parent";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING table_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "table_id";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "table";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\v2\Table';
      $descriptor->addField($f);

      // REPEATED MESSAGE initial_splits = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "initial_splits";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\bigtable\admin\v2\CreateTableRequest\Split';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <parent> has a value
     *
     * @return boolean
     */
    public function hasParent(){
      return $this->_has(1);
    }
    
    /**
     * Clear <parent> value
     *
     * @return \google\bigtable\admin\v2\CreateTableRequest
     */
    public function clearParent(){
      return $this->_clear(1);
    }
    
    /**
     * Get <parent> value
     *
     * @return string
     */
    public function getParent(){
      return $this->_get(1);
    }
    
    /**
     * Set <parent> value
     *
     * @param string $value
     * @return \google\bigtable\admin\v2\CreateTableRequest
     */
    public function setParent( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <table_id> has a value
     *
     * @return boolean
     */
    public function hasTableId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <table_id> value
     *
     * @return \google\bigtable\admin\v2\CreateTableRequest
     */
    public function clearTableId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <table_id> value
     *
     * @return string
     */
    public function getTableId(){
      return $this->_get(2);
    }
    
    /**
     * Set <table_id> value
     *
     * @param string $value
     * @return \google\bigtable\admin\v2\CreateTableRequest
     */
    public function setTableId( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <table> has a value
     *
     * @return boolean
     */
    public function hasTable(){
      return $this->_has(3);
    }
    
    /**
     * Clear <table> value
     *
     * @return \google\bigtable\admin\v2\CreateTableRequest
     */
    public function clearTable(){
      return $this->_clear(3);
    }
    
    /**
     * Get <table> value
     *
     * @return \google\bigtable\admin\v2\Table
     */
    public function getTable(){
      return $this->_get(3);
    }
    
    /**
     * Set <table> value
     *
     * @param \google\bigtable\admin\v2\Table $value
     * @return \google\bigtable\admin\v2\CreateTableRequest
     */
    public function setTable(\google\bigtable\admin\v2\Table $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <initial_splits> has a value
     *
     * @return boolean
     */
    public function hasInitialSplits(){
      return $this->_has(4);
    }
    
    /**
     * Clear <initial_splits> value
     *
     * @return \google\bigtable\admin\v2\CreateTableRequest
     */
    public function clearInitialSplits(){
      return $this->_clear(4);
    }
    
    /**
     * Get <initial_splits> value
     *
     * @param int $idx
     * @return \google\bigtable\admin\v2\CreateTableRequest\Split
     */
    public function getInitialSplits($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <initial_splits> value
     *
     * @param \google\bigtable\admin\v2\CreateTableRequest\Split $value
     * @return \google\bigtable\admin\v2\CreateTableRequest
     */
    public function setInitialSplits(\google\bigtable\admin\v2\CreateTableRequest\Split $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <initial_splits>
     *
     * @return \google\bigtable\admin\v2\CreateTableRequest\Split[]
     */
    public function getInitialSplitsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <initial_splits>
     *
     * @param \google\bigtable\admin\v2\CreateTableRequest\Split $value
     * @return \google\bigtable\admin\v2\CreateTableRequest
     */
    public function addInitialSplits(\google\bigtable\admin\v2\CreateTableRequest\Split $value){
     return $this->_add(4, $value);
    }
  }
}

namespace google\bigtable\admin\v2 {

  class DropRowRangeRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $row_key_prefix = null;
    
    /**  @var boolean */
    public $delete_all_data_from_table = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.DropRowRangeRequest');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BYTES row_key_prefix = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "row_key_prefix";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_all_data_from_table = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "delete_all_data_from_table";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \google\bigtable\admin\v2\DropRowRangeRequest
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
     * @return \google\bigtable\admin\v2\DropRowRangeRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <row_key_prefix> has a value
     *
     * @return boolean
     */
    public function hasRowKeyPrefix(){
      return $this->_has(2);
    }
    
    /**
     * Clear <row_key_prefix> value
     *
     * @return \google\bigtable\admin\v2\DropRowRangeRequest
     */
    public function clearRowKeyPrefix(){
      return $this->_clear(2);
    }
    
    /**
     * Get <row_key_prefix> value
     *
     * @return string
     */
    public function getRowKeyPrefix(){
      return $this->_get(2);
    }
    
    /**
     * Set <row_key_prefix> value
     *
     * @param string $value
     * @return \google\bigtable\admin\v2\DropRowRangeRequest
     */
    public function setRowKeyPrefix( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <delete_all_data_from_table> has a value
     *
     * @return boolean
     */
    public function hasDeleteAllDataFromTable(){
      return $this->_has(3);
    }
    
    /**
     * Clear <delete_all_data_from_table> value
     *
     * @return \google\bigtable\admin\v2\DropRowRangeRequest
     */
    public function clearDeleteAllDataFromTable(){
      return $this->_clear(3);
    }
    
    /**
     * Get <delete_all_data_from_table> value
     *
     * @return boolean
     */
    public function getDeleteAllDataFromTable(){
      return $this->_get(3);
    }
    
    /**
     * Set <delete_all_data_from_table> value
     *
     * @param boolean $value
     * @return \google\bigtable\admin\v2\DropRowRangeRequest
     */
    public function setDeleteAllDataFromTable( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\bigtable\admin\v2 {

  class ListTablesRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $parent = null;
    
    /**  @var int - \google\bigtable\admin\v2\Table\View */
    public $view = null;
    
    /**  @var string */
    public $page_token = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.ListTablesRequest');

      // OPTIONAL STRING parent = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "parent";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM view = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "view";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\v2\Table\View';
      $descriptor->addField($f);

      // OPTIONAL STRING page_token = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "page_token";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <parent> has a value
     *
     * @return boolean
     */
    public function hasParent(){
      return $this->_has(1);
    }
    
    /**
     * Clear <parent> value
     *
     * @return \google\bigtable\admin\v2\ListTablesRequest
     */
    public function clearParent(){
      return $this->_clear(1);
    }
    
    /**
     * Get <parent> value
     *
     * @return string
     */
    public function getParent(){
      return $this->_get(1);
    }
    
    /**
     * Set <parent> value
     *
     * @param string $value
     * @return \google\bigtable\admin\v2\ListTablesRequest
     */
    public function setParent( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <view> has a value
     *
     * @return boolean
     */
    public function hasView(){
      return $this->_has(2);
    }
    
    /**
     * Clear <view> value
     *
     * @return \google\bigtable\admin\v2\ListTablesRequest
     */
    public function clearView(){
      return $this->_clear(2);
    }
    
    /**
     * Get <view> value
     *
     * @return int - \google\bigtable\admin\v2\Table\View
     */
    public function getView(){
      return $this->_get(2);
    }
    
    /**
     * Set <view> value
     *
     * @param int - \google\bigtable\admin\v2\Table\View $value
     * @return \google\bigtable\admin\v2\ListTablesRequest
     */
    public function setView( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <page_token> has a value
     *
     * @return boolean
     */
    public function hasPageToken(){
      return $this->_has(3);
    }
    
    /**
     * Clear <page_token> value
     *
     * @return \google\bigtable\admin\v2\ListTablesRequest
     */
    public function clearPageToken(){
      return $this->_clear(3);
    }
    
    /**
     * Get <page_token> value
     *
     * @return string
     */
    public function getPageToken(){
      return $this->_get(3);
    }
    
    /**
     * Set <page_token> value
     *
     * @param string $value
     * @return \google\bigtable\admin\v2\ListTablesRequest
     */
    public function setPageToken( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\bigtable\admin\v2 {

  class ListTablesResponse extends \DrSlump\Protobuf\Message {

    /**  @var \google\bigtable\admin\v2\Table[]  */
    public $tables = array();
    
    /**  @var string */
    public $next_page_token = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.ListTablesResponse');

      // REPEATED MESSAGE tables = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "tables";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\bigtable\admin\v2\Table';
      $descriptor->addField($f);

      // OPTIONAL STRING next_page_token = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "next_page_token";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <tables> has a value
     *
     * @return boolean
     */
    public function hasTables(){
      return $this->_has(1);
    }
    
    /**
     * Clear <tables> value
     *
     * @return \google\bigtable\admin\v2\ListTablesResponse
     */
    public function clearTables(){
      return $this->_clear(1);
    }
    
    /**
     * Get <tables> value
     *
     * @param int $idx
     * @return \google\bigtable\admin\v2\Table
     */
    public function getTables($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <tables> value
     *
     * @param \google\bigtable\admin\v2\Table $value
     * @return \google\bigtable\admin\v2\ListTablesResponse
     */
    public function setTables(\google\bigtable\admin\v2\Table $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <tables>
     *
     * @return \google\bigtable\admin\v2\Table[]
     */
    public function getTablesList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <tables>
     *
     * @param \google\bigtable\admin\v2\Table $value
     * @return \google\bigtable\admin\v2\ListTablesResponse
     */
    public function addTables(\google\bigtable\admin\v2\Table $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <next_page_token> has a value
     *
     * @return boolean
     */
    public function hasNextPageToken(){
      return $this->_has(2);
    }
    
    /**
     * Clear <next_page_token> value
     *
     * @return \google\bigtable\admin\v2\ListTablesResponse
     */
    public function clearNextPageToken(){
      return $this->_clear(2);
    }
    
    /**
     * Get <next_page_token> value
     *
     * @return string
     */
    public function getNextPageToken(){
      return $this->_get(2);
    }
    
    /**
     * Set <next_page_token> value
     *
     * @param string $value
     * @return \google\bigtable\admin\v2\ListTablesResponse
     */
    public function setNextPageToken( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\bigtable\admin\v2 {

  class GetTableRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var int - \google\bigtable\admin\v2\Table\View */
    public $view = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.GetTableRequest');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM view = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "view";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\v2\Table\View';
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
     * @return \google\bigtable\admin\v2\GetTableRequest
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
     * @return \google\bigtable\admin\v2\GetTableRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <view> has a value
     *
     * @return boolean
     */
    public function hasView(){
      return $this->_has(2);
    }
    
    /**
     * Clear <view> value
     *
     * @return \google\bigtable\admin\v2\GetTableRequest
     */
    public function clearView(){
      return $this->_clear(2);
    }
    
    /**
     * Get <view> value
     *
     * @return int - \google\bigtable\admin\v2\Table\View
     */
    public function getView(){
      return $this->_get(2);
    }
    
    /**
     * Set <view> value
     *
     * @param int - \google\bigtable\admin\v2\Table\View $value
     * @return \google\bigtable\admin\v2\GetTableRequest
     */
    public function setView( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\bigtable\admin\v2 {

  class DeleteTableRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.DeleteTableRequest');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \google\bigtable\admin\v2\DeleteTableRequest
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
     * @return \google\bigtable\admin\v2\DeleteTableRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\bigtable\admin\v2\ModifyColumnFamiliesRequest {

  class Modification extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $id = null;
    
    /**  @var \google\bigtable\admin\v2\ColumnFamily */
    public $create = null;
    
    /**  @var \google\bigtable\admin\v2\ColumnFamily */
    public $update = null;
    
    /**  @var boolean */
    public $drop = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.ModifyColumnFamiliesRequest.Modification');

      // OPTIONAL STRING id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE create = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "create";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\v2\ColumnFamily';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE update = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "update";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\bigtable\admin\v2\ColumnFamily';
      $descriptor->addField($f);

      // OPTIONAL BOOL drop = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "drop";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return string
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param string $value
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <create> has a value
     *
     * @return boolean
     */
    public function hasCreate(){
      return $this->_has(2);
    }
    
    /**
     * Clear <create> value
     *
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification
     */
    public function clearCreate(){
      return $this->_clear(2);
    }
    
    /**
     * Get <create> value
     *
     * @return \google\bigtable\admin\v2\ColumnFamily
     */
    public function getCreate(){
      return $this->_get(2);
    }
    
    /**
     * Set <create> value
     *
     * @param \google\bigtable\admin\v2\ColumnFamily $value
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification
     */
    public function setCreate(\google\bigtable\admin\v2\ColumnFamily $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <update> has a value
     *
     * @return boolean
     */
    public function hasUpdate(){
      return $this->_has(3);
    }
    
    /**
     * Clear <update> value
     *
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification
     */
    public function clearUpdate(){
      return $this->_clear(3);
    }
    
    /**
     * Get <update> value
     *
     * @return \google\bigtable\admin\v2\ColumnFamily
     */
    public function getUpdate(){
      return $this->_get(3);
    }
    
    /**
     * Set <update> value
     *
     * @param \google\bigtable\admin\v2\ColumnFamily $value
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification
     */
    public function setUpdate(\google\bigtable\admin\v2\ColumnFamily $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <drop> has a value
     *
     * @return boolean
     */
    public function hasDrop(){
      return $this->_has(4);
    }
    
    /**
     * Clear <drop> value
     *
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification
     */
    public function clearDrop(){
      return $this->_clear(4);
    }
    
    /**
     * Get <drop> value
     *
     * @return boolean
     */
    public function getDrop(){
      return $this->_get(4);
    }
    
    /**
     * Set <drop> value
     *
     * @param boolean $value
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification
     */
    public function setDrop( $value){
      return $this->_set(4, $value);
    }
  }
}

namespace google\bigtable\admin\v2 {

  class ModifyColumnFamiliesRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification[]  */
    public $modifications = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bigtable.admin.v2.ModifyColumnFamiliesRequest');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE modifications = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "modifications";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification';
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
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest
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
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <modifications> has a value
     *
     * @return boolean
     */
    public function hasModifications(){
      return $this->_has(2);
    }
    
    /**
     * Clear <modifications> value
     *
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest
     */
    public function clearModifications(){
      return $this->_clear(2);
    }
    
    /**
     * Get <modifications> value
     *
     * @param int $idx
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification
     */
    public function getModifications($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <modifications> value
     *
     * @param \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification $value
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest
     */
    public function setModifications(\google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <modifications>
     *
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification[]
     */
    public function getModificationsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <modifications>
     *
     * @param \google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification $value
     * @return \google\bigtable\admin\v2\ModifyColumnFamiliesRequest
     */
    public function addModifications(\google\bigtable\admin\v2\ModifyColumnFamiliesRequest\Modification $value){
     return $this->_add(2, $value);
    }
  }
}

namespace google\bigtable\admin\v2 {

  class BigtableTableAdminClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }
    /**
     * @param google\bigtable\admin\v2\CreateTableRequest $input
     */
    public function CreateTable(\google\bigtable\admin\v2\CreateTableRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/CreateTable', $argument, '\google\bigtable\admin\v2\Table::deserialize', $metadata, $options);
    }
    /**
     * @param google\bigtable\admin\v2\ListTablesRequest $input
     */
    public function ListTables(\google\bigtable\admin\v2\ListTablesRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/ListTables', $argument, '\google\bigtable\admin\v2\ListTablesResponse::deserialize', $metadata, $options);
    }
    /**
     * @param google\bigtable\admin\v2\GetTableRequest $input
     */
    public function GetTable(\google\bigtable\admin\v2\GetTableRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/GetTable', $argument, '\google\bigtable\admin\v2\Table::deserialize', $metadata, $options);
    }
    /**
     * @param google\bigtable\admin\v2\DeleteTableRequest $input
     */
    public function DeleteTable(\google\bigtable\admin\v2\DeleteTableRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/DeleteTable', $argument, '\google\protobuf\Empty::deserialize', $metadata, $options);
    }
    /**
     * @param google\bigtable\admin\v2\ModifyColumnFamiliesRequest $input
     */
    public function ModifyColumnFamilies(\google\bigtable\admin\v2\ModifyColumnFamiliesRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/ModifyColumnFamilies', $argument, '\google\bigtable\admin\v2\Table::deserialize', $metadata, $options);
    }
    /**
     * @param google\bigtable\admin\v2\DropRowRangeRequest $input
     */
    public function DropRowRange(\google\bigtable\admin\v2\DropRowRangeRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.bigtable.admin.v2.BigtableTableAdmin/DropRowRange', $argument, '\google\protobuf\Empty::deserialize', $metadata, $options);
    }
  }
}