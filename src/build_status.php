<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/devtools/build/v1/build_status.proto
//   Date: 2017-06-13 04:25:03

namespace google\devtools\build\v1\BuildStatus {

  class Result extends \DrSlump\Protobuf\Enum {
    const UNKNOWN_STATUS = 0;
    const COMMAND_SUCCEEDED = 1;
    const COMMAND_FAILED = 2;
    const USER_ERROR = 3;
    const SYSTEM_ERROR = 4;
    const RESOURCE_EXHAUSTED = 5;
    const INVOCATION_DEADLINE_EXCEEDED = 6;
    const REQUEST_DEADLINE_EXCEEDED = 8;
    const CANCELLED = 7;
  }
}
namespace google\devtools\build\v1 {

  class BuildStatus extends \DrSlump\Protobuf\Message {

    /**  @var int - \google\devtools\build\v1\BuildStatus\Result */
    public $result = null;
    
    /**  @var \google\protobuf\Any */
    public $details = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.devtools.build.v1.BuildStatus');

      // OPTIONAL ENUM result = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "result";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\devtools\build\v1\BuildStatus\Result';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE details = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "details";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Any';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <result> has a value
     *
     * @return boolean
     */
    public function hasResult(){
      return $this->_has(1);
    }
    
    /**
     * Clear <result> value
     *
     * @return \google\devtools\build\v1\BuildStatus
     */
    public function clearResult(){
      return $this->_clear(1);
    }
    
    /**
     * Get <result> value
     *
     * @return int - \google\devtools\build\v1\BuildStatus\Result
     */
    public function getResult(){
      return $this->_get(1);
    }
    
    /**
     * Set <result> value
     *
     * @param int - \google\devtools\build\v1\BuildStatus\Result $value
     * @return \google\devtools\build\v1\BuildStatus
     */
    public function setResult( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <details> has a value
     *
     * @return boolean
     */
    public function hasDetails(){
      return $this->_has(2);
    }
    
    /**
     * Clear <details> value
     *
     * @return \google\devtools\build\v1\BuildStatus
     */
    public function clearDetails(){
      return $this->_clear(2);
    }
    
    /**
     * Get <details> value
     *
     * @return \google\protobuf\Any
     */
    public function getDetails(){
      return $this->_get(2);
    }
    
    /**
     * Set <details> value
     *
     * @param \google\protobuf\Any $value
     * @return \google\devtools\build\v1\BuildStatus
     */
    public function setDetails(\google\protobuf\Any $value){
      return $this->_set(2, $value);
    }
  }
}

