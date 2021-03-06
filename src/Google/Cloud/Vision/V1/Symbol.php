<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/text_annotation.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A single symbol representation.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.Symbol</code>
 */
class Symbol extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Additional information detected for the symbol.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     */
    private $property = null;
    /**
     * <pre>
     * The bounding box for the symbol.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     *   * when the text is horizontal it might look like:
     *      0----1
     *      |    |
     *      3----2
     *   * when it's rotated 180 degrees around the top-left corner it becomes:
     *      2----3
     *      |    |
     *      1----0
     *   and the vertice order will still be (0, 1, 2, 3).
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_box = 2;</code>
     */
    private $bounding_box = null;
    /**
     * <pre>
     * The actual UTF-8 representation of the symbol.
     * </pre>
     *
     * <code>string text = 3;</code>
     */
    private $text = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\TextAnnotation::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Additional information detected for the symbol.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * <pre>
     * Additional information detected for the symbol.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     */
    public function setProperty(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\TextAnnotation_TextProperty::class);
        $this->property = $var;
    }

    /**
     * <pre>
     * The bounding box for the symbol.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     *   * when the text is horizontal it might look like:
     *      0----1
     *      |    |
     *      3----2
     *   * when it's rotated 180 degrees around the top-left corner it becomes:
     *      2----3
     *      |    |
     *      1----0
     *   and the vertice order will still be (0, 1, 2, 3).
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_box = 2;</code>
     */
    public function getBoundingBox()
    {
        return $this->bounding_box;
    }

    /**
     * <pre>
     * The bounding box for the symbol.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     *   * when the text is horizontal it might look like:
     *      0----1
     *      |    |
     *      3----2
     *   * when it's rotated 180 degrees around the top-left corner it becomes:
     *      2----3
     *      |    |
     *      1----0
     *   and the vertice order will still be (0, 1, 2, 3).
     * </pre>
     *
     * <code>.google.cloud.vision.v1.BoundingPoly bounding_box = 2;</code>
     */
    public function setBoundingBox(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->bounding_box = $var;
    }

    /**
     * <pre>
     * The actual UTF-8 representation of the symbol.
     * </pre>
     *
     * <code>string text = 3;</code>
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * <pre>
     * The actual UTF-8 representation of the symbol.
     * </pre>
     *
     * <code>string text = 3;</code>
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;
    }

}

