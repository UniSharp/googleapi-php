<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/bytestream/bytestream.proto
//   Date: 2017-06-13 04:23:49

namespace google\bytestream {

  class ReadRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $resource_name = null;
    
    /**  @var int */
    public $read_offset = null;
    
    /**  @var int */
    public $read_limit = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bytestream.ReadRequest');

      // OPTIONAL STRING resource_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "resource_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 read_offset = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "read_offset";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 read_limit = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "read_limit";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <resource_name> has a value
     *
     * @return boolean
     */
    public function hasResourceName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <resource_name> value
     *
     * @return \google\bytestream\ReadRequest
     */
    public function clearResourceName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <resource_name> value
     *
     * @return string
     */
    public function getResourceName(){
      return $this->_get(1);
    }
    
    /**
     * Set <resource_name> value
     *
     * @param string $value
     * @return \google\bytestream\ReadRequest
     */
    public function setResourceName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <read_offset> has a value
     *
     * @return boolean
     */
    public function hasReadOffset(){
      return $this->_has(2);
    }
    
    /**
     * Clear <read_offset> value
     *
     * @return \google\bytestream\ReadRequest
     */
    public function clearReadOffset(){
      return $this->_clear(2);
    }
    
    /**
     * Get <read_offset> value
     *
     * @return int
     */
    public function getReadOffset(){
      return $this->_get(2);
    }
    
    /**
     * Set <read_offset> value
     *
     * @param int $value
     * @return \google\bytestream\ReadRequest
     */
    public function setReadOffset( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <read_limit> has a value
     *
     * @return boolean
     */
    public function hasReadLimit(){
      return $this->_has(3);
    }
    
    /**
     * Clear <read_limit> value
     *
     * @return \google\bytestream\ReadRequest
     */
    public function clearReadLimit(){
      return $this->_clear(3);
    }
    
    /**
     * Get <read_limit> value
     *
     * @return int
     */
    public function getReadLimit(){
      return $this->_get(3);
    }
    
    /**
     * Set <read_limit> value
     *
     * @param int $value
     * @return \google\bytestream\ReadRequest
     */
    public function setReadLimit( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\bytestream {

  class ReadResponse extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $data = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bytestream.ReadResponse');

      // OPTIONAL BYTES data = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(10);
    }
    
    /**
     * Clear <data> value
     *
     * @return \google\bytestream\ReadResponse
     */
    public function clearData(){
      return $this->_clear(10);
    }
    
    /**
     * Get <data> value
     *
     * @return string
     */
    public function getData(){
      return $this->_get(10);
    }
    
    /**
     * Set <data> value
     *
     * @param string $value
     * @return \google\bytestream\ReadResponse
     */
    public function setData( $value){
      return $this->_set(10, $value);
    }
  }
}

namespace google\bytestream {

  class WriteRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $resource_name = null;
    
    /**  @var int */
    public $write_offset = null;
    
    /**  @var boolean */
    public $finish_write = null;
    
    /**  @var string */
    public $data = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bytestream.WriteRequest');

      // OPTIONAL STRING resource_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "resource_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 write_offset = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "write_offset";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL finish_write = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "finish_write";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BYTES data = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <resource_name> has a value
     *
     * @return boolean
     */
    public function hasResourceName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <resource_name> value
     *
     * @return \google\bytestream\WriteRequest
     */
    public function clearResourceName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <resource_name> value
     *
     * @return string
     */
    public function getResourceName(){
      return $this->_get(1);
    }
    
    /**
     * Set <resource_name> value
     *
     * @param string $value
     * @return \google\bytestream\WriteRequest
     */
    public function setResourceName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <write_offset> has a value
     *
     * @return boolean
     */
    public function hasWriteOffset(){
      return $this->_has(2);
    }
    
    /**
     * Clear <write_offset> value
     *
     * @return \google\bytestream\WriteRequest
     */
    public function clearWriteOffset(){
      return $this->_clear(2);
    }
    
    /**
     * Get <write_offset> value
     *
     * @return int
     */
    public function getWriteOffset(){
      return $this->_get(2);
    }
    
    /**
     * Set <write_offset> value
     *
     * @param int $value
     * @return \google\bytestream\WriteRequest
     */
    public function setWriteOffset( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <finish_write> has a value
     *
     * @return boolean
     */
    public function hasFinishWrite(){
      return $this->_has(3);
    }
    
    /**
     * Clear <finish_write> value
     *
     * @return \google\bytestream\WriteRequest
     */
    public function clearFinishWrite(){
      return $this->_clear(3);
    }
    
    /**
     * Get <finish_write> value
     *
     * @return boolean
     */
    public function getFinishWrite(){
      return $this->_get(3);
    }
    
    /**
     * Set <finish_write> value
     *
     * @param boolean $value
     * @return \google\bytestream\WriteRequest
     */
    public function setFinishWrite( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(10);
    }
    
    /**
     * Clear <data> value
     *
     * @return \google\bytestream\WriteRequest
     */
    public function clearData(){
      return $this->_clear(10);
    }
    
    /**
     * Get <data> value
     *
     * @return string
     */
    public function getData(){
      return $this->_get(10);
    }
    
    /**
     * Set <data> value
     *
     * @param string $value
     * @return \google\bytestream\WriteRequest
     */
    public function setData( $value){
      return $this->_set(10, $value);
    }
  }
}

namespace google\bytestream {

  class WriteResponse extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $committed_size = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bytestream.WriteResponse');

      // OPTIONAL INT64 committed_size = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "committed_size";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <committed_size> has a value
     *
     * @return boolean
     */
    public function hasCommittedSize(){
      return $this->_has(1);
    }
    
    /**
     * Clear <committed_size> value
     *
     * @return \google\bytestream\WriteResponse
     */
    public function clearCommittedSize(){
      return $this->_clear(1);
    }
    
    /**
     * Get <committed_size> value
     *
     * @return int
     */
    public function getCommittedSize(){
      return $this->_get(1);
    }
    
    /**
     * Set <committed_size> value
     *
     * @param int $value
     * @return \google\bytestream\WriteResponse
     */
    public function setCommittedSize( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\bytestream {

  class QueryWriteStatusRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $resource_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bytestream.QueryWriteStatusRequest');

      // OPTIONAL STRING resource_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "resource_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <resource_name> has a value
     *
     * @return boolean
     */
    public function hasResourceName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <resource_name> value
     *
     * @return \google\bytestream\QueryWriteStatusRequest
     */
    public function clearResourceName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <resource_name> value
     *
     * @return string
     */
    public function getResourceName(){
      return $this->_get(1);
    }
    
    /**
     * Set <resource_name> value
     *
     * @param string $value
     * @return \google\bytestream\QueryWriteStatusRequest
     */
    public function setResourceName( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\bytestream {

  class QueryWriteStatusResponse extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $committed_size = null;
    
    /**  @var boolean */
    public $complete = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.bytestream.QueryWriteStatusResponse');

      // OPTIONAL INT64 committed_size = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "committed_size";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL complete = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "complete";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <committed_size> has a value
     *
     * @return boolean
     */
    public function hasCommittedSize(){
      return $this->_has(1);
    }
    
    /**
     * Clear <committed_size> value
     *
     * @return \google\bytestream\QueryWriteStatusResponse
     */
    public function clearCommittedSize(){
      return $this->_clear(1);
    }
    
    /**
     * Get <committed_size> value
     *
     * @return int
     */
    public function getCommittedSize(){
      return $this->_get(1);
    }
    
    /**
     * Set <committed_size> value
     *
     * @param int $value
     * @return \google\bytestream\QueryWriteStatusResponse
     */
    public function setCommittedSize( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <complete> has a value
     *
     * @return boolean
     */
    public function hasComplete(){
      return $this->_has(2);
    }
    
    /**
     * Clear <complete> value
     *
     * @return \google\bytestream\QueryWriteStatusResponse
     */
    public function clearComplete(){
      return $this->_clear(2);
    }
    
    /**
     * Get <complete> value
     *
     * @return boolean
     */
    public function getComplete(){
      return $this->_get(2);
    }
    
    /**
     * Set <complete> value
     *
     * @param boolean $value
     * @return \google\bytestream\QueryWriteStatusResponse
     */
    public function setComplete( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\bytestream {

  class ByteStreamClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }
    /**
     * @param google\bytestream\ReadRequest $input
     */
    public function Read($argument, $metadata = array(), $options = array()) {
      return $this->_serverStreamRequest('/google.bytestream.ByteStream/Read', $argument, '\google\bytestream\ReadResponse::deserialize', $metadata, $options);
    }
    /**
     * @param google\bytestream\WriteRequest $input
     */
    public function Write($metadata = array(), $options = array()) {
      return $this->_clientStreamRequest('/google.bytestream.ByteStream/Write', '\google\bytestream\WriteResponse::deserialize', $metadata, $options);
    }
    /**
     * @param google\bytestream\QueryWriteStatusRequest $input
     */
    public function QueryWriteStatus(\google\bytestream\QueryWriteStatusRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.bytestream.ByteStream/QueryWriteStatus', $argument, '\google\bytestream\QueryWriteStatusResponse::deserialize', $metadata, $options);
    }
  }
}
