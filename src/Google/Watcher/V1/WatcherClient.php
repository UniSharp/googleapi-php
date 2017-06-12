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
namespace Google\Watcher\V1 {

  // ## API Overview
  //
  // [Watcher][] lets a client watch for updates to a named entity, such as a
  // directory or database table. For each watched entity, the client receives a
  // reliable stream of watch events, without re-ordering.
  //
  // Watching is done by sending an RPC to a service that implements the API. The
  // argument to the RPC contains the name of the entity. The result stream
  // consists of a sequence of Change messages that the service continues to
  // send until the call fails or is cancelled.
  //
  // ## Data model
  //
  // This API assumes that each *entity* has a name and a
  // set of *elements*, where each element has a name and a value. The
  // entity's name must be a unique identifier within the service, such as
  // a resource name. What constitutes an entity or element is
  // implementation-specific: for example, a file system implementation
  // might define an entity as either a directory or a file, and elements would be
  // child files or directories of that entity.
  //
  // The Watch API allows a client to watch an entity E's immediate
  // elements or the whole tree rooted at E. Elements are organized into
  // a hierarchy ("" at the top; the rest follows the natural hierarchy of the
  // namespace of elements that is being watched). For example, when
  // recursively watching a filesystem namespace, X is an ancestor of
  // X/Y and X/Y/Z).
  //
  // ## Watch request
  //
  // When a client makes a request to watch an entity, it can indicate
  // whether it wants to receive the initial state of the entity, just
  // new changes to the entity, or resume watching from a particular
  // point in a previous watch stream, specified with a `resume_marker` value.
  // It can also indicate whether it wants to watch only one entity or all
  // entities in the subtree rooted at a particular entity's name.
  //
  // On receiving a watch request for an entity, the server sends one or more
  // messages to the client. The first message informs the client that the server
  // has registered the client's request: the instant of time when the
  // client receives the event is referred to as the client's "watch
  // point" for that entity.
  //
  // ## Atomic delivery
  //
  // The response stream consists of a sequence of Change messages. Each
  // message contains an `continued` bit. A sub-sequence of Change messages with
  // `continued=true` followed by a Change message with `continued=false` forms an
  // *atomic group*. Systems that support multi-element atomic updates may
  // guarantee that all changes resulting from a single atomic
  // update are delivered in the same atomic group. It is up to the
  // documentation of a particular system that implements the Watch API to
  // document whether or not it supports such grouping. We expect that most
  // callers will ignore the notion of atomic delivery and the `continued` bit,
  // i.e., they will just process each Change message as it is received.
  //
  // ## Batching
  //
  // Multiple Change messages may be grouped into a single ChangeBatch message
  // to reduce message transfer overhead. A single ChangeBatch may contain many
  // atomic groups, or a single atomic group may be split across many
  // ChangeBatch messages.
  //
  // ## Initial State
  //
  // The first atomic group delivered by a watch call is special. It is
  // delivered as soon as possible and contains the initial state of the
  // entity being watched. The client should consider itself caught up
  // after processing this first atomic group.
  //
  // The messages in the first atomic group will either refer to the
  // entity itself (`Change.element` == "") or to elements inside the
  // entity (`Change.element` != ""). Here are the cases to consider:
  //
  // 1. `resume_marker` is "" or not specified: For every element P
  //    (including the entity itself) that exists, there will be at least
  //    one message delivered with element == P and the last such message
  //    will contain the current state of P. For every element Q
  //    (including the entity itself) that does not exist, either no
  //    message will be delivered, or the last message for Q will have
  //    state == DOES_NOT_EXIST. At least one message for element="" will
  //    be delivered.
  //
  // 2. `resume_marker` == "now": there will be exactly one message with
  //    element = "" and state INITIAL_STATE_SKIPPED. The client cannot
  //    assume whether or not the entity exists after receiving this
  //    message.
  //
  // 3. `resume_marker` has a value R from a preceding watch call on this
  //    entity: The same messages as described in (1) will be delivered to
  //    the client, except that any information implied by messages received
  //    on the preceding call up to and including R may not be
  //    delivered. The expectation is that the client will start with state
  //    it had built up from the preceding watch call, apply the changes
  //    received from this call, and build an up-to-date view of the entity
  //    without having to fetch a potentially large amount of information
  //    that has not changed. Note that some information that had already
  //    been delivered by the preceding call might be delivered again.
  //
  // ## Ordering and Reliability
  //
  // The Change messages that apply to a particular element of the entity are
  // delivered eventually in order without loss for the duration of the RPC. Note
  // however that if multiple Changes apply to the same element, the
  // implementation is free to suppress them and deliver just the last one. The
  // underlying system must provide the guarantee that any relevant update
  // received for an entity E after a client's watch point for E MUST be delivered
  // to that client.
  //
  // These tight guarantees allow for the following simplifications in the client:
  //
  //   1. The client does not need to have a separate polling loop to make up for
  //      missed updates.
  //
  //   2. The client does not need to manage timestamps/versions manually; the
  //      last update delivered corresponds to the eventual state of the entity.
  //
  // Example: a calendar entry may have elements named { "starttime", "endtime",
  // "attendees" } with corresponding values or it may have a single element name
  // "entry" with a serialized proto for the calendar entry.
  //
  // ## Ordering constraints for parents/descendants
  //
  // The Watch API provides guarantees regarding the order in which
  // messages for a parent and its descendants are delivered:
  //
  // 1. The creation of an ancestor (i.e., the first EXISTS message for
  //    the ancestor) is reported before the creation of any of its
  //    descendants.
  //
  // 2. The deletion of an ancestor (via a DOES_NOT_EXIST message)
  //    implies the deletion of all its descendants. The service will
  //    not deliver any messages for the descendants until the parent
  //    has been recreated.
  //
  // The service that a client uses to connect to the watcher system.
  // The errors returned by the service are in the canonical error space,
  // see [google.rpc.Code][].
  class WatcherClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Start a streaming RPC to get watch information from the server.
     * @param \Google\Watcher\V1\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Watch(\Google\Watcher\V1\Request $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/google.watcher.v1.Watcher/Watch',
      $argument,
      ['\Google\Watcher\V1\ChangeBatch', 'decode'],
      $metadata, $options);
    }

  }

}
