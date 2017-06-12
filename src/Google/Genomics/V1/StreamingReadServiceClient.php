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
namespace Google\Genomics\V1 {

  class StreamingReadServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns a stream of all the reads matching the search request, ordered
     * by reference name, position, and ID.
     * @param \Google\Genomics\V1\StreamReadsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StreamReads(\Google\Genomics\V1\StreamReadsRequest $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/google.genomics.v1.StreamingReadService/StreamReads',
      $argument,
      ['\Google\Genomics\V1\StreamReadsResponse', 'decode'],
      $metadata, $options);
    }

  }

}