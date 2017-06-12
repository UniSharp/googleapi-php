<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Appengine\V1;

/**
 * <pre>
 * Redirect codes.
 * </pre>
 *
 * Protobuf enum <code>google.appengine.v1.UrlMap.RedirectHttpResponseCode</code>
 */
class UrlMap_RedirectHttpResponseCode
{
    /**
     * <pre>
     * Not specified. `302` is assumed.
     * </pre>
     *
     * <code>REDIRECT_HTTP_RESPONSE_CODE_UNSPECIFIED = 0;</code>
     */
    const REDIRECT_HTTP_RESPONSE_CODE_UNSPECIFIED = 0;
    /**
     * <pre>
     * `301 Moved Permanently` code.
     * </pre>
     *
     * <code>REDIRECT_HTTP_RESPONSE_CODE_301 = 1;</code>
     */
    const REDIRECT_HTTP_RESPONSE_CODE_301 = 1;
    /**
     * <pre>
     * `302 Moved Temporarily` code.
     * </pre>
     *
     * <code>REDIRECT_HTTP_RESPONSE_CODE_302 = 2;</code>
     */
    const REDIRECT_HTTP_RESPONSE_CODE_302 = 2;
    /**
     * <pre>
     * `303 See Other` code.
     * </pre>
     *
     * <code>REDIRECT_HTTP_RESPONSE_CODE_303 = 3;</code>
     */
    const REDIRECT_HTTP_RESPONSE_CODE_303 = 3;
    /**
     * <pre>
     * `307 Temporary Redirect` code.
     * </pre>
     *
     * <code>REDIRECT_HTTP_RESPONSE_CODE_307 = 4;</code>
     */
    const REDIRECT_HTTP_RESPONSE_CODE_307 = 4;
}
