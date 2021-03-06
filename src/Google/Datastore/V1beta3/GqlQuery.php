<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/query.proto

namespace Google\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A [GQL query](https://cloud.google.com/datastore/docs/apis/gql/gql_reference).
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1beta3.GqlQuery</code>
 */
class GqlQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A string of the format described
     * [here](https://cloud.google.com/datastore/docs/apis/gql/gql_reference).
     * </pre>
     *
     * <code>string query_string = 1;</code>
     */
    private $query_string = '';
    /**
     * <pre>
     * When false, the query string must not contain any literals and instead must
     * bind all values. For example,
     * `SELECT * FROM Kind WHERE a = 'string literal'` is not allowed, while
     * `SELECT * FROM Kind WHERE a = &#64;value` is.
     * </pre>
     *
     * <code>bool allow_literals = 2;</code>
     */
    private $allow_literals = false;
    /**
     * <pre>
     * For each non-reserved named binding site in the query string, there must be
     * a named parameter with that name, but not necessarily the inverse.
     * Key must match regex `[A-Za-z_$][A-Za-z_$0-9]*`, must not match regex
     * `__.*__`, and must not be `""`.
     * </pre>
     *
     * <code>map&lt;string, .google.datastore.v1beta3.GqlQueryParameter&gt; named_bindings = 5;</code>
     */
    private $named_bindings;
    /**
     * <pre>
     * Numbered binding site &#64;1 references the first numbered parameter,
     * effectively using 1-based indexing, rather than the usual 0.
     * For each binding site numbered i in `query_string`, there must be an i-th
     * numbered parameter. The inverse must also be true.
     * </pre>
     *
     * <code>repeated .google.datastore.v1beta3.GqlQueryParameter positional_bindings = 4;</code>
     */
    private $positional_bindings;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A string of the format described
     * [here](https://cloud.google.com/datastore/docs/apis/gql/gql_reference).
     * </pre>
     *
     * <code>string query_string = 1;</code>
     */
    public function getQueryString()
    {
        return $this->query_string;
    }

    /**
     * <pre>
     * A string of the format described
     * [here](https://cloud.google.com/datastore/docs/apis/gql/gql_reference).
     * </pre>
     *
     * <code>string query_string = 1;</code>
     */
    public function setQueryString($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_string = $var;
    }

    /**
     * <pre>
     * When false, the query string must not contain any literals and instead must
     * bind all values. For example,
     * `SELECT * FROM Kind WHERE a = 'string literal'` is not allowed, while
     * `SELECT * FROM Kind WHERE a = &#64;value` is.
     * </pre>
     *
     * <code>bool allow_literals = 2;</code>
     */
    public function getAllowLiterals()
    {
        return $this->allow_literals;
    }

    /**
     * <pre>
     * When false, the query string must not contain any literals and instead must
     * bind all values. For example,
     * `SELECT * FROM Kind WHERE a = 'string literal'` is not allowed, while
     * `SELECT * FROM Kind WHERE a = &#64;value` is.
     * </pre>
     *
     * <code>bool allow_literals = 2;</code>
     */
    public function setAllowLiterals($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_literals = $var;
    }

    /**
     * <pre>
     * For each non-reserved named binding site in the query string, there must be
     * a named parameter with that name, but not necessarily the inverse.
     * Key must match regex `[A-Za-z_$][A-Za-z_$0-9]*`, must not match regex
     * `__.*__`, and must not be `""`.
     * </pre>
     *
     * <code>map&lt;string, .google.datastore.v1beta3.GqlQueryParameter&gt; named_bindings = 5;</code>
     */
    public function getNamedBindings()
    {
        return $this->named_bindings;
    }

    /**
     * <pre>
     * For each non-reserved named binding site in the query string, there must be
     * a named parameter with that name, but not necessarily the inverse.
     * Key must match regex `[A-Za-z_$][A-Za-z_$0-9]*`, must not match regex
     * `__.*__`, and must not be `""`.
     * </pre>
     *
     * <code>map&lt;string, .google.datastore.v1beta3.GqlQueryParameter&gt; named_bindings = 5;</code>
     */
    public function setNamedBindings(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1beta3\GqlQueryParameter::class);
        $this->named_bindings = $arr;
    }

    /**
     * <pre>
     * Numbered binding site &#64;1 references the first numbered parameter,
     * effectively using 1-based indexing, rather than the usual 0.
     * For each binding site numbered i in `query_string`, there must be an i-th
     * numbered parameter. The inverse must also be true.
     * </pre>
     *
     * <code>repeated .google.datastore.v1beta3.GqlQueryParameter positional_bindings = 4;</code>
     */
    public function getPositionalBindings()
    {
        return $this->positional_bindings;
    }

    /**
     * <pre>
     * Numbered binding site &#64;1 references the first numbered parameter,
     * effectively using 1-based indexing, rather than the usual 0.
     * For each binding site numbered i in `query_string`, there must be an i-th
     * numbered parameter. The inverse must also be true.
     * </pre>
     *
     * <code>repeated .google.datastore.v1beta3.GqlQueryParameter positional_bindings = 4;</code>
     */
    public function setPositionalBindings(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1beta3\GqlQueryParameter::class);
        $this->positional_bindings = $arr;
    }

}

