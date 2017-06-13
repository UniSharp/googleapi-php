<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/iam/v1/iam_policy.proto
//   Date: 2017-06-13 04:26:28

namespace google\iam\v1 {

  class SetIamPolicyRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $resource = null;
    
    /**  @var \google\iam\v1\Policy */
    public $policy = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.iam.v1.SetIamPolicyRequest');

      // OPTIONAL STRING resource = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "resource";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE policy = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "policy";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\iam\v1\Policy';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <resource> has a value
     *
     * @return boolean
     */
    public function hasResource(){
      return $this->_has(1);
    }
    
    /**
     * Clear <resource> value
     *
     * @return \google\iam\v1\SetIamPolicyRequest
     */
    public function clearResource(){
      return $this->_clear(1);
    }
    
    /**
     * Get <resource> value
     *
     * @return string
     */
    public function getResource(){
      return $this->_get(1);
    }
    
    /**
     * Set <resource> value
     *
     * @param string $value
     * @return \google\iam\v1\SetIamPolicyRequest
     */
    public function setResource( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <policy> has a value
     *
     * @return boolean
     */
    public function hasPolicy(){
      return $this->_has(2);
    }
    
    /**
     * Clear <policy> value
     *
     * @return \google\iam\v1\SetIamPolicyRequest
     */
    public function clearPolicy(){
      return $this->_clear(2);
    }
    
    /**
     * Get <policy> value
     *
     * @return \google\iam\v1\Policy
     */
    public function getPolicy(){
      return $this->_get(2);
    }
    
    /**
     * Set <policy> value
     *
     * @param \google\iam\v1\Policy $value
     * @return \google\iam\v1\SetIamPolicyRequest
     */
    public function setPolicy(\google\iam\v1\Policy $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\iam\v1 {

  class GetIamPolicyRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $resource = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.iam.v1.GetIamPolicyRequest');

      // OPTIONAL STRING resource = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "resource";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <resource> has a value
     *
     * @return boolean
     */
    public function hasResource(){
      return $this->_has(1);
    }
    
    /**
     * Clear <resource> value
     *
     * @return \google\iam\v1\GetIamPolicyRequest
     */
    public function clearResource(){
      return $this->_clear(1);
    }
    
    /**
     * Get <resource> value
     *
     * @return string
     */
    public function getResource(){
      return $this->_get(1);
    }
    
    /**
     * Set <resource> value
     *
     * @param string $value
     * @return \google\iam\v1\GetIamPolicyRequest
     */
    public function setResource( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\iam\v1 {

  class TestIamPermissionsRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $resource = null;
    
    /**  @var string[]  */
    public $permissions = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.iam.v1.TestIamPermissionsRequest');

      // OPTIONAL STRING resource = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "resource";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED STRING permissions = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "permissions";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <resource> has a value
     *
     * @return boolean
     */
    public function hasResource(){
      return $this->_has(1);
    }
    
    /**
     * Clear <resource> value
     *
     * @return \google\iam\v1\TestIamPermissionsRequest
     */
    public function clearResource(){
      return $this->_clear(1);
    }
    
    /**
     * Get <resource> value
     *
     * @return string
     */
    public function getResource(){
      return $this->_get(1);
    }
    
    /**
     * Set <resource> value
     *
     * @param string $value
     * @return \google\iam\v1\TestIamPermissionsRequest
     */
    public function setResource( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <permissions> has a value
     *
     * @return boolean
     */
    public function hasPermissions(){
      return $this->_has(2);
    }
    
    /**
     * Clear <permissions> value
     *
     * @return \google\iam\v1\TestIamPermissionsRequest
     */
    public function clearPermissions(){
      return $this->_clear(2);
    }
    
    /**
     * Get <permissions> value
     *
     * @param int $idx
     * @return string
     */
    public function getPermissions($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <permissions> value
     *
     * @param string $value
     * @return \google\iam\v1\TestIamPermissionsRequest
     */
    public function setPermissions( $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <permissions>
     *
     * @return string[]
     */
    public function getPermissionsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <permissions>
     *
     * @param string $value
     * @return \google\iam\v1\TestIamPermissionsRequest
     */
    public function addPermissions( $value){
     return $this->_add(2, $value);
    }
  }
}

namespace google\iam\v1 {

  class TestIamPermissionsResponse extends \DrSlump\Protobuf\Message {

    /**  @var string[]  */
    public $permissions = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.iam.v1.TestIamPermissionsResponse');

      // REPEATED STRING permissions = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "permissions";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <permissions> has a value
     *
     * @return boolean
     */
    public function hasPermissions(){
      return $this->_has(1);
    }
    
    /**
     * Clear <permissions> value
     *
     * @return \google\iam\v1\TestIamPermissionsResponse
     */
    public function clearPermissions(){
      return $this->_clear(1);
    }
    
    /**
     * Get <permissions> value
     *
     * @param int $idx
     * @return string
     */
    public function getPermissions($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <permissions> value
     *
     * @param string $value
     * @return \google\iam\v1\TestIamPermissionsResponse
     */
    public function setPermissions( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <permissions>
     *
     * @return string[]
     */
    public function getPermissionsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <permissions>
     *
     * @param string $value
     * @return \google\iam\v1\TestIamPermissionsResponse
     */
    public function addPermissions( $value){
     return $this->_add(1, $value);
    }
  }
}

namespace google\iam\v1 {

  class IAMPolicyClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }
    /**
     * @param google\iam\v1\SetIamPolicyRequest $input
     */
    public function SetIamPolicy(\google\iam\v1\SetIamPolicyRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.iam.v1.IAMPolicy/SetIamPolicy', $argument, '\google\iam\v1\Policy::deserialize', $metadata, $options);
    }
    /**
     * @param google\iam\v1\GetIamPolicyRequest $input
     */
    public function GetIamPolicy(\google\iam\v1\GetIamPolicyRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.iam.v1.IAMPolicy/GetIamPolicy', $argument, '\google\iam\v1\Policy::deserialize', $metadata, $options);
    }
    /**
     * @param google\iam\v1\TestIamPermissionsRequest $input
     */
    public function TestIamPermissions(\google\iam\v1\TestIamPermissionsRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.iam.v1.IAMPolicy/TestIamPermissions', $argument, '\google\iam\v1\TestIamPermissionsResponse::deserialize', $metadata, $options);
    }
  }
}
