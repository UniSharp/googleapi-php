<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents a phrase in the text that is a known entity, such as
 * a person, an organization, or location. The API associates information, such
 * as salience and mentions, with entities.
 * </pre>
 *
 * Protobuf type <code>google.cloud.language.v1.Entity</code>
 */
class Entity extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The representative name for the entity.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The entity type.
     * </pre>
     *
     * <code>.google.cloud.language.v1.Entity.Type type = 2;</code>
     */
    private $type = 0;
    /**
     * <pre>
     * Metadata associated with the entity.
     * Currently, Wikipedia URLs and Knowledge Graph MIDs are provided, if
     * available. The associated keys are "wikipedia_url" and "mid", respectively.
     * </pre>
     *
     * <code>map&lt;string, string&gt; metadata = 3;</code>
     */
    private $metadata;
    /**
     * <pre>
     * The salience score associated with the entity in the [0, 1.0] range.
     * The salience score for an entity provides information about the
     * importance or centrality of that entity to the entire document text.
     * Scores closer to 0 are less salient, while scores closer to 1.0 are highly
     * salient.
     * </pre>
     *
     * <code>float salience = 4;</code>
     */
    private $salience = 0.0;
    /**
     * <pre>
     * The mentions of this entity in the input document. The API currently
     * supports proper noun mentions.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1.EntityMention mentions = 5;</code>
     */
    private $mentions;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The representative name for the entity.
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
     * The representative name for the entity.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * The entity type.
     * </pre>
     *
     * <code>.google.cloud.language.v1.Entity.Type type = 2;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <pre>
     * The entity type.
     * </pre>
     *
     * <code>.google.cloud.language.v1.Entity.Type type = 2;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1\Entity_Type::class);
        $this->type = $var;
    }

    /**
     * <pre>
     * Metadata associated with the entity.
     * Currently, Wikipedia URLs and Knowledge Graph MIDs are provided, if
     * available. The associated keys are "wikipedia_url" and "mid", respectively.
     * </pre>
     *
     * <code>map&lt;string, string&gt; metadata = 3;</code>
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * <pre>
     * Metadata associated with the entity.
     * Currently, Wikipedia URLs and Knowledge Graph MIDs are provided, if
     * available. The associated keys are "wikipedia_url" and "mid", respectively.
     * </pre>
     *
     * <code>map&lt;string, string&gt; metadata = 3;</code>
     */
    public function setMetadata(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;
    }

    /**
     * <pre>
     * The salience score associated with the entity in the [0, 1.0] range.
     * The salience score for an entity provides information about the
     * importance or centrality of that entity to the entire document text.
     * Scores closer to 0 are less salient, while scores closer to 1.0 are highly
     * salient.
     * </pre>
     *
     * <code>float salience = 4;</code>
     */
    public function getSalience()
    {
        return $this->salience;
    }

    /**
     * <pre>
     * The salience score associated with the entity in the [0, 1.0] range.
     * The salience score for an entity provides information about the
     * importance or centrality of that entity to the entire document text.
     * Scores closer to 0 are less salient, while scores closer to 1.0 are highly
     * salient.
     * </pre>
     *
     * <code>float salience = 4;</code>
     */
    public function setSalience($var)
    {
        GPBUtil::checkFloat($var);
        $this->salience = $var;
    }

    /**
     * <pre>
     * The mentions of this entity in the input document. The API currently
     * supports proper noun mentions.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1.EntityMention mentions = 5;</code>
     */
    public function getMentions()
    {
        return $this->mentions;
    }

    /**
     * <pre>
     * The mentions of this entity in the input document. The API currently
     * supports proper noun mentions.
     * </pre>
     *
     * <code>repeated .google.cloud.language.v1.EntityMention mentions = 5;</code>
     */
    public function setMentions(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Language\V1\EntityMention::class);
        $this->mentions = $arr;
    }

}

