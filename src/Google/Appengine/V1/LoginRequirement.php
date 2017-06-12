<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Appengine\V1;

/**
 * <pre>
 * Methods to restrict access to a URL based on login status.
 * </pre>
 *
 * Protobuf enum <code>google.appengine.v1.LoginRequirement</code>
 */
class LoginRequirement
{
    /**
     * <pre>
     * Not specified. `LOGIN_OPTIONAL` is assumed.
     * </pre>
     *
     * <code>LOGIN_UNSPECIFIED = 0;</code>
     */
    const LOGIN_UNSPECIFIED = 0;
    /**
     * <pre>
     * Does not require that the user is signed in.
     * </pre>
     *
     * <code>LOGIN_OPTIONAL = 1;</code>
     */
    const LOGIN_OPTIONAL = 1;
    /**
     * <pre>
     * If the user is not signed in, the `auth_fail_action` is taken.
     * In addition, if the user is not an administrator for the
     * application, they are given an error message regardless of
     * `auth_fail_action`. If the user is an administrator, the handler
     * proceeds.
     * </pre>
     *
     * <code>LOGIN_ADMIN = 2;</code>
     */
    const LOGIN_ADMIN = 2;
    /**
     * <pre>
     * If the user has signed in, the handler proceeds normally. Otherwise, the
     * auth_fail_action is taken.
     * </pre>
     *
     * <code>LOGIN_REQUIRED = 3;</code>
     */
    const LOGIN_REQUIRED = 3;
}
