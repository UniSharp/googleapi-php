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
namespace Google\Api\Servicecontrol\V1 {

  // [Google Service Control API](/service-control/overview)
  //
  // Lets clients check and report operations against
  // a [managed service][google.api.servicemanagement.v1.ManagedService].
  class ServiceControllerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Checks an operation with Google Service Control to decide whether
     * the given operation should proceed. It should be called before the
     * operation is executed.
     *
     * If feasible, the client should cache the check results and reuse them for
     * up to 60s. In case of server errors, the client may rely on the cached
     * results for longer time.
     *
     * This method requires the `servicemanagement.services.check` permission
     * on the specified service. For more information, see
     * [Google Cloud IAM](https://cloud.google.com/iam).
     * @param \Google\Api\Servicecontrol\V1\CheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Check(\Google\Api\Servicecontrol\V1\CheckRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.api.servicecontrol.v1.ServiceController/Check',
      $argument,
      ['\Google\Api\Servicecontrol\V1\CheckResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Reports operations to Google Service Control. It should be called
     * after the operation is completed.
     *
     * If feasible, the client should aggregate reporting data for up to 5s to
     * reduce API traffic. Limiting aggregation to 5s is to reduce data loss
     * during client crashes. Clients should carefully choose the aggregation
     * window to avoid data loss risk more than 0.01% for business and
     * compliance reasons.
     *
     * This method requires the `servicemanagement.services.report` permission
     * on the specified service. For more information, see
     * [Google Cloud IAM](https://cloud.google.com/iam).
     * @param \Google\Api\Servicecontrol\V1\ReportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Report(\Google\Api\Servicecontrol\V1\ReportRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.api.servicecontrol.v1.ServiceController/Report',
      $argument,
      ['\Google\Api\Servicecontrol\V1\ReportResponse', 'decode'],
      $metadata, $options);
    }

  }

}
