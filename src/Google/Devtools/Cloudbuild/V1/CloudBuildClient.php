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
namespace Google\Devtools\Cloudbuild\V1 {

  // Manages container image build requests in the cloud.
  //
  // The main concept used by this API is a Build, which describes the location of
  // the source to build, how to build the source into a container image, and what
  // tag to apply to the built image when it is pushed to Google Container
  // Registry.
  //
  // A user can list previously-requested builds or get builds by their ID to
  // determine the status of the build.
  class CloudBuildClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Starts a build with the specified configuration.
     *
     * The long-running Operation returned by this method will include the ID of
     * the build, which can be passed to GetBuild to determine its status (e.g.,
     * success or failure).
     * @param \Google\Devtools\Cloudbuild\V1\CreateBuildRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateBuild(\Google\Devtools\Cloudbuild\V1\CreateBuildRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.devtools.cloudbuild.v1.CloudBuild/CreateBuild',
      $argument,
      ['\Google\Longrunning\Operation', 'decode'],
      $metadata, $options);
    }

    /**
     * Returns information about a previously requested build.
     *
     * The Build that is returned includes its status (e.g., success or failure,
     * or in-progress), and timing information.
     * @param \Google\Devtools\Cloudbuild\V1\GetBuildRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetBuild(\Google\Devtools\Cloudbuild\V1\GetBuildRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.devtools.cloudbuild.v1.CloudBuild/GetBuild',
      $argument,
      ['\Google\Devtools\Cloudbuild\V1\Build', 'decode'],
      $metadata, $options);
    }

    /**
     * Lists previously requested builds.
     *
     * Previously requested builds may still be in-progress, or may have finished
     * successfully or unsuccessfully.
     * @param \Google\Devtools\Cloudbuild\V1\ListBuildsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListBuilds(\Google\Devtools\Cloudbuild\V1\ListBuildsRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.devtools.cloudbuild.v1.CloudBuild/ListBuilds',
      $argument,
      ['\Google\Devtools\Cloudbuild\V1\ListBuildsResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Cancels a requested build in progress.
     * @param \Google\Devtools\Cloudbuild\V1\CancelBuildRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CancelBuild(\Google\Devtools\Cloudbuild\V1\CancelBuildRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.devtools.cloudbuild.v1.CloudBuild/CancelBuild',
      $argument,
      ['\Google\Devtools\Cloudbuild\V1\Build', 'decode'],
      $metadata, $options);
    }

    /**
     * Creates a new BuildTrigger.
     *
     * This API is experimental.
     * @param \Google\Devtools\Cloudbuild\V1\CreateBuildTriggerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateBuildTrigger(\Google\Devtools\Cloudbuild\V1\CreateBuildTriggerRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.devtools.cloudbuild.v1.CloudBuild/CreateBuildTrigger',
      $argument,
      ['\Google\Devtools\Cloudbuild\V1\BuildTrigger', 'decode'],
      $metadata, $options);
    }

    /**
     * Gets information about a BuildTrigger.
     *
     * This API is experimental.
     * @param \Google\Devtools\Cloudbuild\V1\GetBuildTriggerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetBuildTrigger(\Google\Devtools\Cloudbuild\V1\GetBuildTriggerRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.devtools.cloudbuild.v1.CloudBuild/GetBuildTrigger',
      $argument,
      ['\Google\Devtools\Cloudbuild\V1\BuildTrigger', 'decode'],
      $metadata, $options);
    }

    /**
     * Lists existing BuildTrigger.
     *
     * This API is experimental.
     * @param \Google\Devtools\Cloudbuild\V1\ListBuildTriggersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListBuildTriggers(\Google\Devtools\Cloudbuild\V1\ListBuildTriggersRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.devtools.cloudbuild.v1.CloudBuild/ListBuildTriggers',
      $argument,
      ['\Google\Devtools\Cloudbuild\V1\ListBuildTriggersResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Deletes an BuildTrigger by its project ID and trigger ID.
     *
     * This API is experimental.
     * @param \Google\Devtools\Cloudbuild\V1\DeleteBuildTriggerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteBuildTrigger(\Google\Devtools\Cloudbuild\V1\DeleteBuildTriggerRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.devtools.cloudbuild.v1.CloudBuild/DeleteBuildTrigger',
      $argument,
      ['\Google\Protobuf\Empty', 'decode'],
      $metadata, $options);
    }

    /**
     * Updates an BuildTrigger by its project ID and trigger ID.
     *
     * This API is experimental.
     * @param \Google\Devtools\Cloudbuild\V1\UpdateBuildTriggerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateBuildTrigger(\Google\Devtools\Cloudbuild\V1\UpdateBuildTriggerRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.devtools.cloudbuild.v1.CloudBuild/UpdateBuildTrigger',
      $argument,
      ['\Google\Devtools\Cloudbuild\V1\BuildTrigger', 'decode'],
      $metadata, $options);
    }

  }

}