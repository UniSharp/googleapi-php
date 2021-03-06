<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A Cloud Spanner database.
 * </pre>
 *
 * Protobuf type <code>google.spanner.admin.database.v1.Database</code>
 */
class Database extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The name of the database. Values are of the form
     * `projects/&lt;project&gt;/instances/&lt;instance&gt;/databases/&lt;database&gt;`,
     * where `&lt;database&gt;` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Output only. The current database state.
     * </pre>
     *
     * <code>.google.spanner.admin.database.v1.Database.State state = 2;</code>
     */
    private $state = 0;

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The name of the database. Values are of the form
     * `projects/&lt;project&gt;/instances/&lt;instance&gt;/databases/&lt;database&gt;`,
     * where `&lt;database&gt;` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
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
     * Required. The name of the database. Values are of the form
     * `projects/&lt;project&gt;/instances/&lt;instance&gt;/databases/&lt;database&gt;`,
     * where `&lt;database&gt;` is as specified in the `CREATE DATABASE`
     * statement. This name can be passed to other API methods to
     * identify the database.
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
     * Output only. The current database state.
     * </pre>
     *
     * <code>.google.spanner.admin.database.v1.Database.State state = 2;</code>
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <pre>
     * Output only. The current database state.
     * </pre>
     *
     * <code>.google.spanner.admin.database.v1.Database.State state = 2;</code>
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Spanner\Admin\Database\V1\Database_State::class);
        $this->state = $var;
    }

}

