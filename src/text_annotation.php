<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: google/cloud/vision/v1/text_annotation.proto
//   Date: 2017-06-13 04:24:43

namespace google\cloud\vision\v1\TextAnnotation {

  class DetectedLanguage extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $language_code = null;
    
    /**  @var float */
    public $confidence = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.vision.v1.TextAnnotation.DetectedLanguage');

      // OPTIONAL STRING language_code = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "language_code";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL FLOAT confidence = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "confidence";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <language_code> has a value
     *
     * @return boolean
     */
    public function hasLanguageCode(){
      return $this->_has(1);
    }
    
    /**
     * Clear <language_code> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedLanguage
     */
    public function clearLanguageCode(){
      return $this->_clear(1);
    }
    
    /**
     * Get <language_code> value
     *
     * @return string
     */
    public function getLanguageCode(){
      return $this->_get(1);
    }
    
    /**
     * Set <language_code> value
     *
     * @param string $value
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedLanguage
     */
    public function setLanguageCode( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <confidence> has a value
     *
     * @return boolean
     */
    public function hasConfidence(){
      return $this->_has(2);
    }
    
    /**
     * Clear <confidence> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedLanguage
     */
    public function clearConfidence(){
      return $this->_clear(2);
    }
    
    /**
     * Get <confidence> value
     *
     * @return float
     */
    public function getConfidence(){
      return $this->_get(2);
    }
    
    /**
     * Set <confidence> value
     *
     * @param float $value
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedLanguage
     */
    public function setConfidence( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\cloud\vision\v1\TextAnnotation\DetectedBreak {

  class BreakType extends \DrSlump\Protobuf\Enum {
    const UNKNOWN = 0;
    const SPACE = 1;
    const SURE_SPACE = 2;
    const EOL_SURE_SPACE = 3;
    const HYPHEN = 4;
    const LINE_BREAK = 5;
  }
}
namespace google\cloud\vision\v1\TextAnnotation {

  class DetectedBreak extends \DrSlump\Protobuf\Message {

    /**  @var int - \google\cloud\vision\v1\TextAnnotation\DetectedBreak\BreakType */
    public $type = null;
    
    /**  @var boolean */
    public $is_prefix = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.vision.v1.TextAnnotation.DetectedBreak');

      // OPTIONAL ENUM type = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\TextAnnotation\DetectedBreak\BreakType';
      $descriptor->addField($f);

      // OPTIONAL BOOL is_prefix = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "is_prefix";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(1);
    }
    
    /**
     * Clear <type> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedBreak
     */
    public function clearType(){
      return $this->_clear(1);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \google\cloud\vision\v1\TextAnnotation\DetectedBreak\BreakType
     */
    public function getType(){
      return $this->_get(1);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \google\cloud\vision\v1\TextAnnotation\DetectedBreak\BreakType $value
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedBreak
     */
    public function setType( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <is_prefix> has a value
     *
     * @return boolean
     */
    public function hasIsPrefix(){
      return $this->_has(2);
    }
    
    /**
     * Clear <is_prefix> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedBreak
     */
    public function clearIsPrefix(){
      return $this->_clear(2);
    }
    
    /**
     * Get <is_prefix> value
     *
     * @return boolean
     */
    public function getIsPrefix(){
      return $this->_get(2);
    }
    
    /**
     * Set <is_prefix> value
     *
     * @param boolean $value
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedBreak
     */
    public function setIsPrefix( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\cloud\vision\v1\TextAnnotation {

  class TextProperty extends \DrSlump\Protobuf\Message {

    /**  @var \google\cloud\vision\v1\TextAnnotation\DetectedLanguage[]  */
    public $detected_languages = array();
    
    /**  @var \google\cloud\vision\v1\TextAnnotation\DetectedBreak */
    public $detected_break = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.vision.v1.TextAnnotation.TextProperty');

      // REPEATED MESSAGE detected_languages = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "detected_languages";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\cloud\vision\v1\TextAnnotation\DetectedLanguage';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE detected_break = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "detected_break";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\TextAnnotation\DetectedBreak';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <detected_languages> has a value
     *
     * @return boolean
     */
    public function hasDetectedLanguages(){
      return $this->_has(1);
    }
    
    /**
     * Clear <detected_languages> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\TextProperty
     */
    public function clearDetectedLanguages(){
      return $this->_clear(1);
    }
    
    /**
     * Get <detected_languages> value
     *
     * @param int $idx
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedLanguage
     */
    public function getDetectedLanguages($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <detected_languages> value
     *
     * @param \google\cloud\vision\v1\TextAnnotation\DetectedLanguage $value
     * @return \google\cloud\vision\v1\TextAnnotation\TextProperty
     */
    public function setDetectedLanguages(\google\cloud\vision\v1\TextAnnotation\DetectedLanguage $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <detected_languages>
     *
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedLanguage[]
     */
    public function getDetectedLanguagesList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <detected_languages>
     *
     * @param \google\cloud\vision\v1\TextAnnotation\DetectedLanguage $value
     * @return \google\cloud\vision\v1\TextAnnotation\TextProperty
     */
    public function addDetectedLanguages(\google\cloud\vision\v1\TextAnnotation\DetectedLanguage $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <detected_break> has a value
     *
     * @return boolean
     */
    public function hasDetectedBreak(){
      return $this->_has(2);
    }
    
    /**
     * Clear <detected_break> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\TextProperty
     */
    public function clearDetectedBreak(){
      return $this->_clear(2);
    }
    
    /**
     * Get <detected_break> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\DetectedBreak
     */
    public function getDetectedBreak(){
      return $this->_get(2);
    }
    
    /**
     * Set <detected_break> value
     *
     * @param \google\cloud\vision\v1\TextAnnotation\DetectedBreak $value
     * @return \google\cloud\vision\v1\TextAnnotation\TextProperty
     */
    public function setDetectedBreak(\google\cloud\vision\v1\TextAnnotation\DetectedBreak $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\cloud\vision\v1 {

  class TextAnnotation extends \DrSlump\Protobuf\Message {

    /**  @var \google\cloud\vision\v1\Page[]  */
    public $pages = array();
    
    /**  @var string */
    public $text = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.vision.v1.TextAnnotation');

      // REPEATED MESSAGE pages = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "pages";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\cloud\vision\v1\Page';
      $descriptor->addField($f);

      // OPTIONAL STRING text = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "text";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <pages> has a value
     *
     * @return boolean
     */
    public function hasPages(){
      return $this->_has(1);
    }
    
    /**
     * Clear <pages> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation
     */
    public function clearPages(){
      return $this->_clear(1);
    }
    
    /**
     * Get <pages> value
     *
     * @param int $idx
     * @return \google\cloud\vision\v1\Page
     */
    public function getPages($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <pages> value
     *
     * @param \google\cloud\vision\v1\Page $value
     * @return \google\cloud\vision\v1\TextAnnotation
     */
    public function setPages(\google\cloud\vision\v1\Page $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <pages>
     *
     * @return \google\cloud\vision\v1\Page[]
     */
    public function getPagesList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <pages>
     *
     * @param \google\cloud\vision\v1\Page $value
     * @return \google\cloud\vision\v1\TextAnnotation
     */
    public function addPages(\google\cloud\vision\v1\Page $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <text> has a value
     *
     * @return boolean
     */
    public function hasText(){
      return $this->_has(2);
    }
    
    /**
     * Clear <text> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation
     */
    public function clearText(){
      return $this->_clear(2);
    }
    
    /**
     * Get <text> value
     *
     * @return string
     */
    public function getText(){
      return $this->_get(2);
    }
    
    /**
     * Set <text> value
     *
     * @param string $value
     * @return \google\cloud\vision\v1\TextAnnotation
     */
    public function setText( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\cloud\vision\v1 {

  class Page extends \DrSlump\Protobuf\Message {

    /**  @var \google\cloud\vision\v1\TextAnnotation\TextProperty */
    public $property = null;
    
    /**  @var int */
    public $width = null;
    
    /**  @var int */
    public $height = null;
    
    /**  @var \google\cloud\vision\v1\Block[]  */
    public $blocks = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.vision.v1.Page');

      // OPTIONAL MESSAGE property = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "property";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\TextAnnotation\TextProperty';
      $descriptor->addField($f);

      // OPTIONAL INT32 width = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "width";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 height = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "height";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE blocks = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "blocks";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\cloud\vision\v1\Block';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <property> has a value
     *
     * @return boolean
     */
    public function hasProperty(){
      return $this->_has(1);
    }
    
    /**
     * Clear <property> value
     *
     * @return \google\cloud\vision\v1\Page
     */
    public function clearProperty(){
      return $this->_clear(1);
    }
    
    /**
     * Get <property> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\TextProperty
     */
    public function getProperty(){
      return $this->_get(1);
    }
    
    /**
     * Set <property> value
     *
     * @param \google\cloud\vision\v1\TextAnnotation\TextProperty $value
     * @return \google\cloud\vision\v1\Page
     */
    public function setProperty(\google\cloud\vision\v1\TextAnnotation\TextProperty $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <width> has a value
     *
     * @return boolean
     */
    public function hasWidth(){
      return $this->_has(2);
    }
    
    /**
     * Clear <width> value
     *
     * @return \google\cloud\vision\v1\Page
     */
    public function clearWidth(){
      return $this->_clear(2);
    }
    
    /**
     * Get <width> value
     *
     * @return int
     */
    public function getWidth(){
      return $this->_get(2);
    }
    
    /**
     * Set <width> value
     *
     * @param int $value
     * @return \google\cloud\vision\v1\Page
     */
    public function setWidth( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <height> has a value
     *
     * @return boolean
     */
    public function hasHeight(){
      return $this->_has(3);
    }
    
    /**
     * Clear <height> value
     *
     * @return \google\cloud\vision\v1\Page
     */
    public function clearHeight(){
      return $this->_clear(3);
    }
    
    /**
     * Get <height> value
     *
     * @return int
     */
    public function getHeight(){
      return $this->_get(3);
    }
    
    /**
     * Set <height> value
     *
     * @param int $value
     * @return \google\cloud\vision\v1\Page
     */
    public function setHeight( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <blocks> has a value
     *
     * @return boolean
     */
    public function hasBlocks(){
      return $this->_has(4);
    }
    
    /**
     * Clear <blocks> value
     *
     * @return \google\cloud\vision\v1\Page
     */
    public function clearBlocks(){
      return $this->_clear(4);
    }
    
    /**
     * Get <blocks> value
     *
     * @param int $idx
     * @return \google\cloud\vision\v1\Block
     */
    public function getBlocks($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <blocks> value
     *
     * @param \google\cloud\vision\v1\Block $value
     * @return \google\cloud\vision\v1\Page
     */
    public function setBlocks(\google\cloud\vision\v1\Block $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <blocks>
     *
     * @return \google\cloud\vision\v1\Block[]
     */
    public function getBlocksList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <blocks>
     *
     * @param \google\cloud\vision\v1\Block $value
     * @return \google\cloud\vision\v1\Page
     */
    public function addBlocks(\google\cloud\vision\v1\Block $value){
     return $this->_add(4, $value);
    }
  }
}

namespace google\cloud\vision\v1\Block {

  class BlockType extends \DrSlump\Protobuf\Enum {
    const UNKNOWN = 0;
    const TEXT = 1;
    const TABLE = 2;
    const PICTURE = 3;
    const RULER = 4;
    const BARCODE = 5;
  }
}
namespace google\cloud\vision\v1 {

  class Block extends \DrSlump\Protobuf\Message {

    /**  @var \google\cloud\vision\v1\TextAnnotation\TextProperty */
    public $property = null;
    
    /**  @var \google\cloud\vision\v1\BoundingPoly */
    public $bounding_box = null;
    
    /**  @var \google\cloud\vision\v1\Paragraph[]  */
    public $paragraphs = array();
    
    /**  @var int - \google\cloud\vision\v1\Block\BlockType */
    public $block_type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.vision.v1.Block');

      // OPTIONAL MESSAGE property = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "property";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\TextAnnotation\TextProperty';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE bounding_box = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "bounding_box";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\BoundingPoly';
      $descriptor->addField($f);

      // REPEATED MESSAGE paragraphs = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "paragraphs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\cloud\vision\v1\Paragraph';
      $descriptor->addField($f);

      // OPTIONAL ENUM block_type = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "block_type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\Block\BlockType';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <property> has a value
     *
     * @return boolean
     */
    public function hasProperty(){
      return $this->_has(1);
    }
    
    /**
     * Clear <property> value
     *
     * @return \google\cloud\vision\v1\Block
     */
    public function clearProperty(){
      return $this->_clear(1);
    }
    
    /**
     * Get <property> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\TextProperty
     */
    public function getProperty(){
      return $this->_get(1);
    }
    
    /**
     * Set <property> value
     *
     * @param \google\cloud\vision\v1\TextAnnotation\TextProperty $value
     * @return \google\cloud\vision\v1\Block
     */
    public function setProperty(\google\cloud\vision\v1\TextAnnotation\TextProperty $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <bounding_box> has a value
     *
     * @return boolean
     */
    public function hasBoundingBox(){
      return $this->_has(2);
    }
    
    /**
     * Clear <bounding_box> value
     *
     * @return \google\cloud\vision\v1\Block
     */
    public function clearBoundingBox(){
      return $this->_clear(2);
    }
    
    /**
     * Get <bounding_box> value
     *
     * @return \google\cloud\vision\v1\BoundingPoly
     */
    public function getBoundingBox(){
      return $this->_get(2);
    }
    
    /**
     * Set <bounding_box> value
     *
     * @param \google\cloud\vision\v1\BoundingPoly $value
     * @return \google\cloud\vision\v1\Block
     */
    public function setBoundingBox(\google\cloud\vision\v1\BoundingPoly $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <paragraphs> has a value
     *
     * @return boolean
     */
    public function hasParagraphs(){
      return $this->_has(3);
    }
    
    /**
     * Clear <paragraphs> value
     *
     * @return \google\cloud\vision\v1\Block
     */
    public function clearParagraphs(){
      return $this->_clear(3);
    }
    
    /**
     * Get <paragraphs> value
     *
     * @param int $idx
     * @return \google\cloud\vision\v1\Paragraph
     */
    public function getParagraphs($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <paragraphs> value
     *
     * @param \google\cloud\vision\v1\Paragraph $value
     * @return \google\cloud\vision\v1\Block
     */
    public function setParagraphs(\google\cloud\vision\v1\Paragraph $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <paragraphs>
     *
     * @return \google\cloud\vision\v1\Paragraph[]
     */
    public function getParagraphsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <paragraphs>
     *
     * @param \google\cloud\vision\v1\Paragraph $value
     * @return \google\cloud\vision\v1\Block
     */
    public function addParagraphs(\google\cloud\vision\v1\Paragraph $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <block_type> has a value
     *
     * @return boolean
     */
    public function hasBlockType(){
      return $this->_has(4);
    }
    
    /**
     * Clear <block_type> value
     *
     * @return \google\cloud\vision\v1\Block
     */
    public function clearBlockType(){
      return $this->_clear(4);
    }
    
    /**
     * Get <block_type> value
     *
     * @return int - \google\cloud\vision\v1\Block\BlockType
     */
    public function getBlockType(){
      return $this->_get(4);
    }
    
    /**
     * Set <block_type> value
     *
     * @param int - \google\cloud\vision\v1\Block\BlockType $value
     * @return \google\cloud\vision\v1\Block
     */
    public function setBlockType( $value){
      return $this->_set(4, $value);
    }
  }
}

namespace google\cloud\vision\v1 {

  class Paragraph extends \DrSlump\Protobuf\Message {

    /**  @var \google\cloud\vision\v1\TextAnnotation\TextProperty */
    public $property = null;
    
    /**  @var \google\cloud\vision\v1\BoundingPoly */
    public $bounding_box = null;
    
    /**  @var \google\cloud\vision\v1\Word[]  */
    public $words = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.vision.v1.Paragraph');

      // OPTIONAL MESSAGE property = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "property";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\TextAnnotation\TextProperty';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE bounding_box = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "bounding_box";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\BoundingPoly';
      $descriptor->addField($f);

      // REPEATED MESSAGE words = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "words";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\cloud\vision\v1\Word';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <property> has a value
     *
     * @return boolean
     */
    public function hasProperty(){
      return $this->_has(1);
    }
    
    /**
     * Clear <property> value
     *
     * @return \google\cloud\vision\v1\Paragraph
     */
    public function clearProperty(){
      return $this->_clear(1);
    }
    
    /**
     * Get <property> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\TextProperty
     */
    public function getProperty(){
      return $this->_get(1);
    }
    
    /**
     * Set <property> value
     *
     * @param \google\cloud\vision\v1\TextAnnotation\TextProperty $value
     * @return \google\cloud\vision\v1\Paragraph
     */
    public function setProperty(\google\cloud\vision\v1\TextAnnotation\TextProperty $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <bounding_box> has a value
     *
     * @return boolean
     */
    public function hasBoundingBox(){
      return $this->_has(2);
    }
    
    /**
     * Clear <bounding_box> value
     *
     * @return \google\cloud\vision\v1\Paragraph
     */
    public function clearBoundingBox(){
      return $this->_clear(2);
    }
    
    /**
     * Get <bounding_box> value
     *
     * @return \google\cloud\vision\v1\BoundingPoly
     */
    public function getBoundingBox(){
      return $this->_get(2);
    }
    
    /**
     * Set <bounding_box> value
     *
     * @param \google\cloud\vision\v1\BoundingPoly $value
     * @return \google\cloud\vision\v1\Paragraph
     */
    public function setBoundingBox(\google\cloud\vision\v1\BoundingPoly $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <words> has a value
     *
     * @return boolean
     */
    public function hasWords(){
      return $this->_has(3);
    }
    
    /**
     * Clear <words> value
     *
     * @return \google\cloud\vision\v1\Paragraph
     */
    public function clearWords(){
      return $this->_clear(3);
    }
    
    /**
     * Get <words> value
     *
     * @param int $idx
     * @return \google\cloud\vision\v1\Word
     */
    public function getWords($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <words> value
     *
     * @param \google\cloud\vision\v1\Word $value
     * @return \google\cloud\vision\v1\Paragraph
     */
    public function setWords(\google\cloud\vision\v1\Word $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <words>
     *
     * @return \google\cloud\vision\v1\Word[]
     */
    public function getWordsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <words>
     *
     * @param \google\cloud\vision\v1\Word $value
     * @return \google\cloud\vision\v1\Paragraph
     */
    public function addWords(\google\cloud\vision\v1\Word $value){
     return $this->_add(3, $value);
    }
  }
}

namespace google\cloud\vision\v1 {

  class Word extends \DrSlump\Protobuf\Message {

    /**  @var \google\cloud\vision\v1\TextAnnotation\TextProperty */
    public $property = null;
    
    /**  @var \google\cloud\vision\v1\BoundingPoly */
    public $bounding_box = null;
    
    /**  @var \google\cloud\vision\v1\Symbol[]  */
    public $symbols = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.vision.v1.Word');

      // OPTIONAL MESSAGE property = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "property";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\TextAnnotation\TextProperty';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE bounding_box = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "bounding_box";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\BoundingPoly';
      $descriptor->addField($f);

      // REPEATED MESSAGE symbols = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "symbols";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\cloud\vision\v1\Symbol';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <property> has a value
     *
     * @return boolean
     */
    public function hasProperty(){
      return $this->_has(1);
    }
    
    /**
     * Clear <property> value
     *
     * @return \google\cloud\vision\v1\Word
     */
    public function clearProperty(){
      return $this->_clear(1);
    }
    
    /**
     * Get <property> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\TextProperty
     */
    public function getProperty(){
      return $this->_get(1);
    }
    
    /**
     * Set <property> value
     *
     * @param \google\cloud\vision\v1\TextAnnotation\TextProperty $value
     * @return \google\cloud\vision\v1\Word
     */
    public function setProperty(\google\cloud\vision\v1\TextAnnotation\TextProperty $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <bounding_box> has a value
     *
     * @return boolean
     */
    public function hasBoundingBox(){
      return $this->_has(2);
    }
    
    /**
     * Clear <bounding_box> value
     *
     * @return \google\cloud\vision\v1\Word
     */
    public function clearBoundingBox(){
      return $this->_clear(2);
    }
    
    /**
     * Get <bounding_box> value
     *
     * @return \google\cloud\vision\v1\BoundingPoly
     */
    public function getBoundingBox(){
      return $this->_get(2);
    }
    
    /**
     * Set <bounding_box> value
     *
     * @param \google\cloud\vision\v1\BoundingPoly $value
     * @return \google\cloud\vision\v1\Word
     */
    public function setBoundingBox(\google\cloud\vision\v1\BoundingPoly $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <symbols> has a value
     *
     * @return boolean
     */
    public function hasSymbols(){
      return $this->_has(3);
    }
    
    /**
     * Clear <symbols> value
     *
     * @return \google\cloud\vision\v1\Word
     */
    public function clearSymbols(){
      return $this->_clear(3);
    }
    
    /**
     * Get <symbols> value
     *
     * @param int $idx
     * @return \google\cloud\vision\v1\Symbol
     */
    public function getSymbols($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <symbols> value
     *
     * @param \google\cloud\vision\v1\Symbol $value
     * @return \google\cloud\vision\v1\Word
     */
    public function setSymbols(\google\cloud\vision\v1\Symbol $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <symbols>
     *
     * @return \google\cloud\vision\v1\Symbol[]
     */
    public function getSymbolsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <symbols>
     *
     * @param \google\cloud\vision\v1\Symbol $value
     * @return \google\cloud\vision\v1\Word
     */
    public function addSymbols(\google\cloud\vision\v1\Symbol $value){
     return $this->_add(3, $value);
    }
  }
}

namespace google\cloud\vision\v1 {

  class Symbol extends \DrSlump\Protobuf\Message {

    /**  @var \google\cloud\vision\v1\TextAnnotation\TextProperty */
    public $property = null;
    
    /**  @var \google\cloud\vision\v1\BoundingPoly */
    public $bounding_box = null;
    
    /**  @var string */
    public $text = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.cloud.vision.v1.Symbol');

      // OPTIONAL MESSAGE property = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "property";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\TextAnnotation\TextProperty';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE bounding_box = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "bounding_box";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\cloud\vision\v1\BoundingPoly';
      $descriptor->addField($f);

      // OPTIONAL STRING text = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "text";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <property> has a value
     *
     * @return boolean
     */
    public function hasProperty(){
      return $this->_has(1);
    }
    
    /**
     * Clear <property> value
     *
     * @return \google\cloud\vision\v1\Symbol
     */
    public function clearProperty(){
      return $this->_clear(1);
    }
    
    /**
     * Get <property> value
     *
     * @return \google\cloud\vision\v1\TextAnnotation\TextProperty
     */
    public function getProperty(){
      return $this->_get(1);
    }
    
    /**
     * Set <property> value
     *
     * @param \google\cloud\vision\v1\TextAnnotation\TextProperty $value
     * @return \google\cloud\vision\v1\Symbol
     */
    public function setProperty(\google\cloud\vision\v1\TextAnnotation\TextProperty $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <bounding_box> has a value
     *
     * @return boolean
     */
    public function hasBoundingBox(){
      return $this->_has(2);
    }
    
    /**
     * Clear <bounding_box> value
     *
     * @return \google\cloud\vision\v1\Symbol
     */
    public function clearBoundingBox(){
      return $this->_clear(2);
    }
    
    /**
     * Get <bounding_box> value
     *
     * @return \google\cloud\vision\v1\BoundingPoly
     */
    public function getBoundingBox(){
      return $this->_get(2);
    }
    
    /**
     * Set <bounding_box> value
     *
     * @param \google\cloud\vision\v1\BoundingPoly $value
     * @return \google\cloud\vision\v1\Symbol
     */
    public function setBoundingBox(\google\cloud\vision\v1\BoundingPoly $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <text> has a value
     *
     * @return boolean
     */
    public function hasText(){
      return $this->_has(3);
    }
    
    /**
     * Clear <text> value
     *
     * @return \google\cloud\vision\v1\Symbol
     */
    public function clearText(){
      return $this->_clear(3);
    }
    
    /**
     * Get <text> value
     *
     * @return string
     */
    public function getText(){
      return $this->_get(3);
    }
    
    /**
     * Set <text> value
     *
     * @param string $value
     * @return \google\cloud\vision\v1\Symbol
     */
    public function setText( $value){
      return $this->_set(3, $value);
    }
  }
}

