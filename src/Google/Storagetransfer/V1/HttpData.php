<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Storagetransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * An HttpData specifies a list of objects on the web to be transferred over
 * HTTP.  The information of the objects to be transferred is contained in a
 * file referenced by a URL. The first line in the file must be
 * "TsvHttpData-1.0", which specifies the format of the file.  Subsequent lines
 * specify the information of the list of objects, one object per list entry.
 * Each entry has the following tab-delimited fields:
 * * HTTP URL - The location of the object.
 * * Length - The size of the object in bytes.
 * * MD5 - The base64-encoded MD5 hash of the object.
 * For an example of a valid TSV file, see
 * [Transferring data from URLs](https://cloud.google.com/storage/transfer/#urls)
 * When transferring data based on a URL list, keep the following in mind:
 * * When an object located at `http(s)://hostname:port/&lt;URL-path&gt;` is transferred
 * to a data sink, the name of the object at the data sink is
 * `&lt;hostname&gt;/&lt;URL-path&gt;`.
 * * If the specified size of an object does not match the actual size of the
 * object fetched, the object will not be transferred.
 * * If the specified MD5 does not match the MD5 computed from the transferred
 * bytes, the object transfer will fail. For more information, see
 * [Generating MD5 hashes](https://cloud.google.com/storage/transfer/#md5)
 * * Ensure that each URL you specify is publicly accessible. For
 * example, in Google Cloud Storage you can
 * [share an object publicly]
 * (https://cloud.google.com/storage/docs/cloud-console#_sharingdata) and get
 * a link to it.
 * * Storage Transfer Service obeys `robots.txt` rules and requires the source
 * HTTP server to support `Range` requests and to return a `Content-Length`
 * header in each response.
 * * [ObjectConditions](#ObjectConditions) have no effect when filtering objects
 * to transfer.
 * </pre>
 *
 * Protobuf type <code>google.storagetransfer.v1.HttpData</code>
 */
class HttpData extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The URL that points to the file that stores the object list entries.
     * This file must allow public access.  Currently, only URLs with HTTP and
     * HTTPS schemes are supported.
     * Required.
     * </pre>
     *
     * <code>string list_url = 1;</code>
     */
    private $list_url = '';

    public function __construct() {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The URL that points to the file that stores the object list entries.
     * This file must allow public access.  Currently, only URLs with HTTP and
     * HTTPS schemes are supported.
     * Required.
     * </pre>
     *
     * <code>string list_url = 1;</code>
     */
    public function getListUrl()
    {
        return $this->list_url;
    }

    /**
     * <pre>
     * The URL that points to the file that stores the object list entries.
     * This file must allow public access.  Currently, only URLs with HTTP and
     * HTTPS schemes are supported.
     * Required.
     * </pre>
     *
     * <code>string list_url = 1;</code>
     */
    public function setListUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->list_url = $var;
    }

}

