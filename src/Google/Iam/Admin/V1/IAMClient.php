<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2016 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Iam\Admin\V1 {

  // Creates and manages service account objects.
  //
  // Service account is an account that belongs to your project instead
  // of to an individual end user. It is used to authenticate calls
  // to a Google API.
  //
  // To create a service account, specify the `project_id` and `account_id`
  // for the account.  The `account_id` is unique within the project, and used
  // to generate the service account email address and a stable
  // `unique_id`.
  //
  // All other methods can identify accounts using the format
  // `projects/{project}/serviceAccounts/{account}`.
  // Using `-` as a wildcard for the project will infer the project from
  // the account. The `account` value can be the `email` address or the
  // `unique_id` of the service account.
  class IAMClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists [ServiceAccounts][google.iam.admin.v1.ServiceAccount] for a project.
     * @param \Google\Iam\Admin\V1\ListServiceAccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListServiceAccounts(\Google\Iam\Admin\V1\ListServiceAccountsRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/ListServiceAccounts',
      $argument,
      ['\Google\Iam\Admin\V1\ListServiceAccountsResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Gets a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Google\Iam\Admin\V1\GetServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetServiceAccount(\Google\Iam\Admin\V1\GetServiceAccountRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/GetServiceAccount',
      $argument,
      ['\Google\Iam\Admin\V1\ServiceAccount', 'decode'],
      $metadata, $options);
    }

    /**
     * Creates a [ServiceAccount][google.iam.admin.v1.ServiceAccount]
     * and returns it.
     * @param \Google\Iam\Admin\V1\CreateServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateServiceAccount(\Google\Iam\Admin\V1\CreateServiceAccountRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/CreateServiceAccount',
      $argument,
      ['\Google\Iam\Admin\V1\ServiceAccount', 'decode'],
      $metadata, $options);
    }

    /**
     * Updates a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Currently, only the following fields are updatable:
     * `display_name` .
     * The `etag` is mandatory.
     * @param \Google\Iam\Admin\V1\ServiceAccount $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateServiceAccount(\Google\Iam\Admin\V1\ServiceAccount $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/UpdateServiceAccount',
      $argument,
      ['\Google\Iam\Admin\V1\ServiceAccount', 'decode'],
      $metadata, $options);
    }

    /**
     * Deletes a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Google\Iam\Admin\V1\DeleteServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteServiceAccount(\Google\Iam\Admin\V1\DeleteServiceAccountRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/DeleteServiceAccount',
      $argument,
      ['\Google\Protobuf\Empty', 'decode'],
      $metadata, $options);
    }

    /**
     * Lists [ServiceAccountKeys][google.iam.admin.v1.ServiceAccountKey].
     * @param \Google\Iam\Admin\V1\ListServiceAccountKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListServiceAccountKeys(\Google\Iam\Admin\V1\ListServiceAccountKeysRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/ListServiceAccountKeys',
      $argument,
      ['\Google\Iam\Admin\V1\ListServiceAccountKeysResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Gets the [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey]
     * by key id.
     * @param \Google\Iam\Admin\V1\GetServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetServiceAccountKey(\Google\Iam\Admin\V1\GetServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/GetServiceAccountKey',
      $argument,
      ['\Google\Iam\Admin\V1\ServiceAccountKey', 'decode'],
      $metadata, $options);
    }

    /**
     * Creates a [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey]
     * and returns it.
     * @param \Google\Iam\Admin\V1\CreateServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateServiceAccountKey(\Google\Iam\Admin\V1\CreateServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/CreateServiceAccountKey',
      $argument,
      ['\Google\Iam\Admin\V1\ServiceAccountKey', 'decode'],
      $metadata, $options);
    }

    /**
     * Deletes a [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey].
     * @param \Google\Iam\Admin\V1\DeleteServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteServiceAccountKey(\Google\Iam\Admin\V1\DeleteServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/DeleteServiceAccountKey',
      $argument,
      ['\Google\Protobuf\Empty', 'decode'],
      $metadata, $options);
    }

    /**
     * Signs a blob using a service account's system-managed private key.
     * @param \Google\Iam\Admin\V1\SignBlobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SignBlob(\Google\Iam\Admin\V1\SignBlobRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/SignBlob',
      $argument,
      ['\Google\Iam\Admin\V1\SignBlobResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Returns the IAM access control policy for a
     * [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Google\Iam\V1\GetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Iam\V1\GetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/GetIamPolicy',
      $argument,
      ['\Google\Iam\V1\Policy', 'decode'],
      $metadata, $options);
    }

    /**
     * Sets the IAM access control policy for a
     * [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Google\Iam\V1\SetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Iam\V1\SetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/SetIamPolicy',
      $argument,
      ['\Google\Iam\V1\Policy', 'decode'],
      $metadata, $options);
    }

    /**
     * Tests the specified permissions against the IAM access control policy
     * for a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Google\Iam\V1\TestIamPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Iam\V1\TestIamPermissionsRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/TestIamPermissions',
      $argument,
      ['\Google\Iam\V1\TestIamPermissionsResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Queries roles that can be granted on a particular resource.
     * A role is grantable if it can be used as the role in a binding for a policy
     * for that resource.
     * @param \Google\Iam\Admin\V1\QueryGrantableRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function QueryGrantableRoles(\Google\Iam\Admin\V1\QueryGrantableRolesRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.iam.admin.v1.IAM/QueryGrantableRoles',
      $argument,
      ['\Google\Iam\Admin\V1\QueryGrantableRolesResponse', 'decode'],
      $metadata, $options);
    }

  }

}
