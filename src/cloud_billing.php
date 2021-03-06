<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/cloud/billing/v1/cloud_billing.proto
//   Date: 2017-06-13 04:23:52

namespace google\cloud\billing\v1 {

  class BillingAccount extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var boolean */
    public $open = null;
    
    /**  @var string */
    public $display_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.billing.v1.BillingAccount');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL open = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "open";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING display_name = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "display_name";
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
     * @return \google\cloud\billing\v1\BillingAccount
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
     * @return \google\cloud\billing\v1\BillingAccount
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <open> has a value
     *
     * @return boolean
     */
    public function hasOpen(){
      return $this->_has(2);
    }
    
    /**
     * Clear <open> value
     *
     * @return \google\cloud\billing\v1\BillingAccount
     */
    public function clearOpen(){
      return $this->_clear(2);
    }
    
    /**
     * Get <open> value
     *
     * @return boolean
     */
    public function getOpen(){
      return $this->_get(2);
    }
    
    /**
     * Set <open> value
     *
     * @param boolean $value
     * @return \google\cloud\billing\v1\BillingAccount
     */
    public function setOpen( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <display_name> has a value
     *
     * @return boolean
     */
    public function hasDisplayName(){
      return $this->_has(3);
    }
    
    /**
     * Clear <display_name> value
     *
     * @return \google\cloud\billing\v1\BillingAccount
     */
    public function clearDisplayName(){
      return $this->_clear(3);
    }
    
    /**
     * Get <display_name> value
     *
     * @return string
     */
    public function getDisplayName(){
      return $this->_get(3);
    }
    
    /**
     * Set <display_name> value
     *
     * @param string $value
     * @return \google\cloud\billing\v1\BillingAccount
     */
    public function setDisplayName( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\cloud\billing\v1 {

  class ProjectBillingInfo extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $project_id = null;
    
    /**  @var string */
    public $billing_account_name = null;
    
    /**  @var boolean */
    public $billing_enabled = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.billing.v1.ProjectBillingInfo');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING project_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "project_id";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING billing_account_name = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "billing_account_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL billing_enabled = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "billing_enabled";
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
     * @return \google\cloud\billing\v1\ProjectBillingInfo
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
     * @return \google\cloud\billing\v1\ProjectBillingInfo
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <project_id> has a value
     *
     * @return boolean
     */
    public function hasProjectId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <project_id> value
     *
     * @return \google\cloud\billing\v1\ProjectBillingInfo
     */
    public function clearProjectId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <project_id> value
     *
     * @return string
     */
    public function getProjectId(){
      return $this->_get(2);
    }
    
    /**
     * Set <project_id> value
     *
     * @param string $value
     * @return \google\cloud\billing\v1\ProjectBillingInfo
     */
    public function setProjectId( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <billing_account_name> has a value
     *
     * @return boolean
     */
    public function hasBillingAccountName(){
      return $this->_has(3);
    }
    
    /**
     * Clear <billing_account_name> value
     *
     * @return \google\cloud\billing\v1\ProjectBillingInfo
     */
    public function clearBillingAccountName(){
      return $this->_clear(3);
    }
    
    /**
     * Get <billing_account_name> value
     *
     * @return string
     */
    public function getBillingAccountName(){
      return $this->_get(3);
    }
    
    /**
     * Set <billing_account_name> value
     *
     * @param string $value
     * @return \google\cloud\billing\v1\ProjectBillingInfo
     */
    public function setBillingAccountName( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <billing_enabled> has a value
     *
     * @return boolean
     */
    public function hasBillingEnabled(){
      return $this->_has(4);
    }
    
    /**
     * Clear <billing_enabled> value
     *
     * @return \google\cloud\billing\v1\ProjectBillingInfo
     */
    public function clearBillingEnabled(){
      return $this->_clear(4);
    }
    
    /**
     * Get <billing_enabled> value
     *
     * @return boolean
     */
    public function getBillingEnabled(){
      return $this->_get(4);
    }
    
    /**
     * Set <billing_enabled> value
     *
     * @param boolean $value
     * @return \google\cloud\billing\v1\ProjectBillingInfo
     */
    public function setBillingEnabled( $value){
      return $this->_set(4, $value);
    }
  }
}

namespace google\cloud\billing\v1 {

  class GetBillingAccountRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.billing.v1.GetBillingAccountRequest');

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
     * @return \google\cloud\billing\v1\GetBillingAccountRequest
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
     * @return \google\cloud\billing\v1\GetBillingAccountRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\cloud\billing\v1 {

  class ListBillingAccountsRequest extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $page_size = null;
    
    /**  @var string */
    public $page_token = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.billing.v1.ListBillingAccountsRequest');

      // OPTIONAL INT32 page_size = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "page_size";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING page_token = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
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
     * Check if <page_size> has a value
     *
     * @return boolean
     */
    public function hasPageSize(){
      return $this->_has(1);
    }
    
    /**
     * Clear <page_size> value
     *
     * @return \google\cloud\billing\v1\ListBillingAccountsRequest
     */
    public function clearPageSize(){
      return $this->_clear(1);
    }
    
    /**
     * Get <page_size> value
     *
     * @return int
     */
    public function getPageSize(){
      return $this->_get(1);
    }
    
    /**
     * Set <page_size> value
     *
     * @param int $value
     * @return \google\cloud\billing\v1\ListBillingAccountsRequest
     */
    public function setPageSize( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <page_token> has a value
     *
     * @return boolean
     */
    public function hasPageToken(){
      return $this->_has(2);
    }
    
    /**
     * Clear <page_token> value
     *
     * @return \google\cloud\billing\v1\ListBillingAccountsRequest
     */
    public function clearPageToken(){
      return $this->_clear(2);
    }
    
    /**
     * Get <page_token> value
     *
     * @return string
     */
    public function getPageToken(){
      return $this->_get(2);
    }
    
    /**
     * Set <page_token> value
     *
     * @param string $value
     * @return \google\cloud\billing\v1\ListBillingAccountsRequest
     */
    public function setPageToken( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\cloud\billing\v1 {

  class ListBillingAccountsResponse extends \DrSlump\Protobuf\Message {

    /**  @var \google\cloud\billing\v1\BillingAccount[]  */
    public $billing_accounts = array();
    
    /**  @var string */
    public $next_page_token = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.billing.v1.ListBillingAccountsResponse');

      // REPEATED MESSAGE billing_accounts = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "billing_accounts";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\cloud\billing\v1\BillingAccount';
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
     * Check if <billing_accounts> has a value
     *
     * @return boolean
     */
    public function hasBillingAccounts(){
      return $this->_has(1);
    }
    
    /**
     * Clear <billing_accounts> value
     *
     * @return \google\cloud\billing\v1\ListBillingAccountsResponse
     */
    public function clearBillingAccounts(){
      return $this->_clear(1);
    }
    
    /**
     * Get <billing_accounts> value
     *
     * @param int $idx
     * @return \google\cloud\billing\v1\BillingAccount
     */
    public function getBillingAccounts($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <billing_accounts> value
     *
     * @param \google\cloud\billing\v1\BillingAccount $value
     * @return \google\cloud\billing\v1\ListBillingAccountsResponse
     */
    public function setBillingAccounts(\google\cloud\billing\v1\BillingAccount $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <billing_accounts>
     *
     * @return \google\cloud\billing\v1\BillingAccount[]
     */
    public function getBillingAccountsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <billing_accounts>
     *
     * @param \google\cloud\billing\v1\BillingAccount $value
     * @return \google\cloud\billing\v1\ListBillingAccountsResponse
     */
    public function addBillingAccounts(\google\cloud\billing\v1\BillingAccount $value){
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
     * @return \google\cloud\billing\v1\ListBillingAccountsResponse
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
     * @return \google\cloud\billing\v1\ListBillingAccountsResponse
     */
    public function setNextPageToken( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\cloud\billing\v1 {

  class ListProjectBillingInfoRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var int */
    public $page_size = null;
    
    /**  @var string */
    public $page_token = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.billing.v1.ListProjectBillingInfoRequest');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 page_size = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "page_size";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \google\cloud\billing\v1\ListProjectBillingInfoRequest
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
     * @return \google\cloud\billing\v1\ListProjectBillingInfoRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <page_size> has a value
     *
     * @return boolean
     */
    public function hasPageSize(){
      return $this->_has(2);
    }
    
    /**
     * Clear <page_size> value
     *
     * @return \google\cloud\billing\v1\ListProjectBillingInfoRequest
     */
    public function clearPageSize(){
      return $this->_clear(2);
    }
    
    /**
     * Get <page_size> value
     *
     * @return int
     */
    public function getPageSize(){
      return $this->_get(2);
    }
    
    /**
     * Set <page_size> value
     *
     * @param int $value
     * @return \google\cloud\billing\v1\ListProjectBillingInfoRequest
     */
    public function setPageSize( $value){
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
     * @return \google\cloud\billing\v1\ListProjectBillingInfoRequest
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
     * @return \google\cloud\billing\v1\ListProjectBillingInfoRequest
     */
    public function setPageToken( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\cloud\billing\v1 {

  class ListProjectBillingInfoResponse extends \DrSlump\Protobuf\Message {

    /**  @var \google\cloud\billing\v1\ProjectBillingInfo[]  */
    public $project_billing_info = array();
    
    /**  @var string */
    public $next_page_token = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.billing.v1.ListProjectBillingInfoResponse');

      // REPEATED MESSAGE project_billing_info = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "project_billing_info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\cloud\billing\v1\ProjectBillingInfo';
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
     * Check if <project_billing_info> has a value
     *
     * @return boolean
     */
    public function hasProjectBillingInfo(){
      return $this->_has(1);
    }
    
    /**
     * Clear <project_billing_info> value
     *
     * @return \google\cloud\billing\v1\ListProjectBillingInfoResponse
     */
    public function clearProjectBillingInfo(){
      return $this->_clear(1);
    }
    
    /**
     * Get <project_billing_info> value
     *
     * @param int $idx
     * @return \google\cloud\billing\v1\ProjectBillingInfo
     */
    public function getProjectBillingInfo($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <project_billing_info> value
     *
     * @param \google\cloud\billing\v1\ProjectBillingInfo $value
     * @return \google\cloud\billing\v1\ListProjectBillingInfoResponse
     */
    public function setProjectBillingInfo(\google\cloud\billing\v1\ProjectBillingInfo $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <project_billing_info>
     *
     * @return \google\cloud\billing\v1\ProjectBillingInfo[]
     */
    public function getProjectBillingInfoList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <project_billing_info>
     *
     * @param \google\cloud\billing\v1\ProjectBillingInfo $value
     * @return \google\cloud\billing\v1\ListProjectBillingInfoResponse
     */
    public function addProjectBillingInfo(\google\cloud\billing\v1\ProjectBillingInfo $value){
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
     * @return \google\cloud\billing\v1\ListProjectBillingInfoResponse
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
     * @return \google\cloud\billing\v1\ListProjectBillingInfoResponse
     */
    public function setNextPageToken( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\cloud\billing\v1 {

  class GetProjectBillingInfoRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.billing.v1.GetProjectBillingInfoRequest');

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
     * @return \google\cloud\billing\v1\GetProjectBillingInfoRequest
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
     * @return \google\cloud\billing\v1\GetProjectBillingInfoRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\cloud\billing\v1 {

  class UpdateProjectBillingInfoRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var \google\cloud\billing\v1\ProjectBillingInfo */
    public $project_billing_info = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.billing.v1.UpdateProjectBillingInfoRequest');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE project_billing_info = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "project_billing_info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\billing\v1\ProjectBillingInfo';
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
     * @return \google\cloud\billing\v1\UpdateProjectBillingInfoRequest
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
     * @return \google\cloud\billing\v1\UpdateProjectBillingInfoRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <project_billing_info> has a value
     *
     * @return boolean
     */
    public function hasProjectBillingInfo(){
      return $this->_has(2);
    }
    
    /**
     * Clear <project_billing_info> value
     *
     * @return \google\cloud\billing\v1\UpdateProjectBillingInfoRequest
     */
    public function clearProjectBillingInfo(){
      return $this->_clear(2);
    }
    
    /**
     * Get <project_billing_info> value
     *
     * @return \google\cloud\billing\v1\ProjectBillingInfo
     */
    public function getProjectBillingInfo(){
      return $this->_get(2);
    }
    
    /**
     * Set <project_billing_info> value
     *
     * @param \google\cloud\billing\v1\ProjectBillingInfo $value
     * @return \google\cloud\billing\v1\UpdateProjectBillingInfoRequest
     */
    public function setProjectBillingInfo(\google\cloud\billing\v1\ProjectBillingInfo $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\cloud\billing\v1 {

  class CloudBillingClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }
    /**
     * @param google\cloud\billing\v1\GetBillingAccountRequest $input
     */
    public function GetBillingAccount(\google\cloud\billing\v1\GetBillingAccountRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.cloud.billing.v1.CloudBilling/GetBillingAccount', $argument, '\google\cloud\billing\v1\BillingAccount::deserialize', $metadata, $options);
    }
    /**
     * @param google\cloud\billing\v1\ListBillingAccountsRequest $input
     */
    public function ListBillingAccounts(\google\cloud\billing\v1\ListBillingAccountsRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.cloud.billing.v1.CloudBilling/ListBillingAccounts', $argument, '\google\cloud\billing\v1\ListBillingAccountsResponse::deserialize', $metadata, $options);
    }
    /**
     * @param google\cloud\billing\v1\ListProjectBillingInfoRequest $input
     */
    public function ListProjectBillingInfo(\google\cloud\billing\v1\ListProjectBillingInfoRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.cloud.billing.v1.CloudBilling/ListProjectBillingInfo', $argument, '\google\cloud\billing\v1\ListProjectBillingInfoResponse::deserialize', $metadata, $options);
    }
    /**
     * @param google\cloud\billing\v1\GetProjectBillingInfoRequest $input
     */
    public function GetProjectBillingInfo(\google\cloud\billing\v1\GetProjectBillingInfoRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.cloud.billing.v1.CloudBilling/GetProjectBillingInfo', $argument, '\google\cloud\billing\v1\ProjectBillingInfo::deserialize', $metadata, $options);
    }
    /**
     * @param google\cloud\billing\v1\UpdateProjectBillingInfoRequest $input
     */
    public function UpdateProjectBillingInfo(\google\cloud\billing\v1\UpdateProjectBillingInfoRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.cloud.billing.v1.CloudBilling/UpdateProjectBillingInfo', $argument, '\google\cloud\billing\v1\ProjectBillingInfo::deserialize', $metadata, $options);
    }
  }
}
