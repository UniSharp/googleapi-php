<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/model_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for the SetDefaultVersion request.
 * </pre>
 *
 * Protobuf type <code>google.cloud.ml.v1.SetDefaultVersionRequest</code>
 */
class SetDefaultVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The name of the version to make the default for the model. You
     * can get the names of all the versions of a model by calling
     * [projects.models.versions.list](/ml/reference/rest/v1/projects.models.versions/list).
     * Authorization: requires `Editor` role on the parent project.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1\ModelService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The name of the version to make the default for the model. You
     * can get the names of all the versions of a model by calling
     * [projects.models.versions.list](/ml/reference/rest/v1/projects.models.versions/list).
     * Authorization: requires `Editor` role on the parent project.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * Required. The name of the version to make the default for the model. You
     * can get the names of all the versions of a model by calling
     * [projects.models.versions.list](/ml/reference/rest/v1/projects.models.versions/list).
     * Authorization: requires `Editor` role on the parent project.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}

