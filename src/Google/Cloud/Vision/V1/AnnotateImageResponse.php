<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response to an image annotation request.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.AnnotateImageResponse</code>
 */
class AnnotateImageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * If present, face detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.FaceAnnotation face_annotations = 1;</code>
     */
    private $face_annotations;
    /**
     * <pre>
     * If present, landmark detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation landmark_annotations = 2;</code>
     */
    private $landmark_annotations;
    /**
     * <pre>
     * If present, logo detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation logo_annotations = 3;</code>
     */
    private $logo_annotations;
    /**
     * <pre>
     * If present, label detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation label_annotations = 4;</code>
     */
    private $label_annotations;
    /**
     * <pre>
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation text_annotations = 5;</code>
     */
    private $text_annotations;
    /**
     * <pre>
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * This annotation provides the structural hierarchy for the OCR detected
     * text.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.TextAnnotation full_text_annotation = 12;</code>
     */
    private $full_text_annotation = null;
    /**
     * <pre>
     * If present, safe-search annotation has completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.SafeSearchAnnotation safe_search_annotation = 6;</code>
     */
    private $safe_search_annotation = null;
    /**
     * <pre>
     * If present, image properties were extracted successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.ImageProperties image_properties_annotation = 8;</code>
     */
    private $image_properties_annotation = null;
    /**
     * <pre>
     * If present, crop hints have completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.CropHintsAnnotation crop_hints_annotation = 11;</code>
     */
    private $crop_hints_annotation = null;
    /**
     * <pre>
     * If present, web detection has completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.WebDetection web_detection = 13;</code>
     */
    private $web_detection = null;
    /**
     * <pre>
     * If set, represents the error message for the operation.
     * Note that filled-in image annotations are guaranteed to be
     * correct, even when `error` is set.
     * </pre>
     *
     * <code>.google.rpc.Status error = 9;</code>
     */
    private $error = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * If present, face detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.FaceAnnotation face_annotations = 1;</code>
     */
    public function getFaceAnnotations()
    {
        return $this->face_annotations;
    }

    /**
     * <pre>
     * If present, face detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.FaceAnnotation face_annotations = 1;</code>
     */
    public function setFaceAnnotations(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\FaceAnnotation::class);
        $this->face_annotations = $var;
    }

    /**
     * <pre>
     * If present, landmark detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation landmark_annotations = 2;</code>
     */
    public function getLandmarkAnnotations()
    {
        return $this->landmark_annotations;
    }

    /**
     * <pre>
     * If present, landmark detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation landmark_annotations = 2;</code>
     */
    public function setLandmarkAnnotations(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->landmark_annotations = $var;
    }

    /**
     * <pre>
     * If present, logo detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation logo_annotations = 3;</code>
     */
    public function getLogoAnnotations()
    {
        return $this->logo_annotations;
    }

    /**
     * <pre>
     * If present, logo detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation logo_annotations = 3;</code>
     */
    public function setLogoAnnotations(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->logo_annotations = $var;
    }

    /**
     * <pre>
     * If present, label detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation label_annotations = 4;</code>
     */
    public function getLabelAnnotations()
    {
        return $this->label_annotations;
    }

    /**
     * <pre>
     * If present, label detection has completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation label_annotations = 4;</code>
     */
    public function setLabelAnnotations(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->label_annotations = $var;
    }

    /**
     * <pre>
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation text_annotations = 5;</code>
     */
    public function getTextAnnotations()
    {
        return $this->text_annotations;
    }

    /**
     * <pre>
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * </pre>
     *
     * <code>repeated .google.cloud.vision.v1.EntityAnnotation text_annotations = 5;</code>
     */
    public function setTextAnnotations(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->text_annotations = $var;
    }

    /**
     * <pre>
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * This annotation provides the structural hierarchy for the OCR detected
     * text.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.TextAnnotation full_text_annotation = 12;</code>
     */
    public function getFullTextAnnotation()
    {
        return $this->full_text_annotation;
    }

    /**
     * <pre>
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * This annotation provides the structural hierarchy for the OCR detected
     * text.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.TextAnnotation full_text_annotation = 12;</code>
     */
    public function setFullTextAnnotation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\TextAnnotation::class);
        $this->full_text_annotation = $var;
    }

    /**
     * <pre>
     * If present, safe-search annotation has completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.SafeSearchAnnotation safe_search_annotation = 6;</code>
     */
    public function getSafeSearchAnnotation()
    {
        return $this->safe_search_annotation;
    }

    /**
     * <pre>
     * If present, safe-search annotation has completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.SafeSearchAnnotation safe_search_annotation = 6;</code>
     */
    public function setSafeSearchAnnotation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\SafeSearchAnnotation::class);
        $this->safe_search_annotation = $var;
    }

    /**
     * <pre>
     * If present, image properties were extracted successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.ImageProperties image_properties_annotation = 8;</code>
     */
    public function getImagePropertiesAnnotation()
    {
        return $this->image_properties_annotation;
    }

    /**
     * <pre>
     * If present, image properties were extracted successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.ImageProperties image_properties_annotation = 8;</code>
     */
    public function setImagePropertiesAnnotation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\ImageProperties::class);
        $this->image_properties_annotation = $var;
    }

    /**
     * <pre>
     * If present, crop hints have completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.CropHintsAnnotation crop_hints_annotation = 11;</code>
     */
    public function getCropHintsAnnotation()
    {
        return $this->crop_hints_annotation;
    }

    /**
     * <pre>
     * If present, crop hints have completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.CropHintsAnnotation crop_hints_annotation = 11;</code>
     */
    public function setCropHintsAnnotation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\CropHintsAnnotation::class);
        $this->crop_hints_annotation = $var;
    }

    /**
     * <pre>
     * If present, web detection has completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.WebDetection web_detection = 13;</code>
     */
    public function getWebDetection()
    {
        return $this->web_detection;
    }

    /**
     * <pre>
     * If present, web detection has completed successfully.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.WebDetection web_detection = 13;</code>
     */
    public function setWebDetection(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\WebDetection::class);
        $this->web_detection = $var;
    }

    /**
     * <pre>
     * If set, represents the error message for the operation.
     * Note that filled-in image annotations are guaranteed to be
     * correct, even when `error` is set.
     * </pre>
     *
     * <code>.google.rpc.Status error = 9;</code>
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * <pre>
     * If set, represents the error message for the operation.
     * Note that filled-in image annotations are guaranteed to be
     * correct, even when `error` is set.
     * </pre>
     *
     * <code>.google.rpc.Status error = 9;</code>
     */
    public function setError(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;
    }

}

