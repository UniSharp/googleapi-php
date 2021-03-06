<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/api/experimental/experimental.proto
//   Date: 2017-06-13 04:23:07

namespace google\api {

  class Experimental extends \DrSlump\Protobuf\Message {

    /**  @var \google\api\AuthorizationConfig */
    public $authorization = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.Experimental');

      // OPTIONAL MESSAGE authorization = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "authorization";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\api\AuthorizationConfig';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <authorization> has a value
     *
     * @return boolean
     */
    public function hasAuthorization(){
      return $this->_has(8);
    }
    
    /**
     * Clear <authorization> value
     *
     * @return \google\api\Experimental
     */
    public function clearAuthorization(){
      return $this->_clear(8);
    }
    
    /**
     * Get <authorization> value
     *
     * @return \google\api\AuthorizationConfig
     */
    public function getAuthorization(){
      return $this->_get(8);
    }
    
    /**
     * Set <authorization> value
     *
     * @param \google\api\AuthorizationConfig $value
     * @return \google\api\Experimental
     */
    public function setAuthorization(\google\api\AuthorizationConfig $value){
      return $this->_set(8, $value);
    }
  }
}

