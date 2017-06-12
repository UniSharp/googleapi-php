<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2017 Google Inc.
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
namespace Google\Cloud\Language\V1beta1 {

  // Provides text analysis operations such as sentiment analysis and entity
  // recognition.
  class LanguageServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Analyzes the sentiment of the provided text.
     * @param \Google\Cloud\Language\V1beta1\AnalyzeSentimentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AnalyzeSentiment(\Google\Cloud\Language\V1beta1\AnalyzeSentimentRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.cloud.language.v1beta1.LanguageService/AnalyzeSentiment',
      $argument,
      ['\Google\Cloud\Language\V1beta1\AnalyzeSentimentResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Finds named entities (currently proper names and common nouns) in the text
     * along with entity types, salience, mentions for each entity, and
     * other properties.
     * @param \Google\Cloud\Language\V1beta1\AnalyzeEntitiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AnalyzeEntities(\Google\Cloud\Language\V1beta1\AnalyzeEntitiesRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.cloud.language.v1beta1.LanguageService/AnalyzeEntities',
      $argument,
      ['\Google\Cloud\Language\V1beta1\AnalyzeEntitiesResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Analyzes the syntax of the text and provides sentence boundaries and
     * tokenization along with part of speech tags, dependency trees, and other
     * properties.
     * @param \Google\Cloud\Language\V1beta1\AnalyzeSyntaxRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AnalyzeSyntax(\Google\Cloud\Language\V1beta1\AnalyzeSyntaxRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.cloud.language.v1beta1.LanguageService/AnalyzeSyntax',
      $argument,
      ['\Google\Cloud\Language\V1beta1\AnalyzeSyntaxResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * A convenience method that provides all the features that analyzeSentiment,
     * analyzeEntities, and analyzeSyntax provide in one call.
     * @param \Google\Cloud\Language\V1beta1\AnnotateTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AnnotateText(\Google\Cloud\Language\V1beta1\AnnotateTextRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.cloud.language.v1beta1.LanguageService/AnnotateText',
      $argument,
      ['\Google\Cloud\Language\V1beta1\AnnotateTextResponse', 'decode'],
      $metadata, $options);
    }

  }

}
