<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha1/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha1;

/**
 * <pre>
 * Audio encoding of the data returned in the audio message. All encodings are
 * raw audio bytes with no header, except as indicated below.
 * </pre>
 *
 * Protobuf enum <code>google.assistant.embedded.v1alpha1.AudioOutConfig.Encoding</code>
 */
class AudioOutConfig_Encoding
{
    /**
     * <pre>
     * Not specified. Will return result [google.rpc.Code.INVALID_ARGUMENT][].
     * </pre>
     *
     * <code>ENCODING_UNSPECIFIED = 0;</code>
     */
    const ENCODING_UNSPECIFIED = 0;
    /**
     * <pre>
     * Uncompressed 16-bit signed little-endian samples (Linear PCM).
     * </pre>
     *
     * <code>LINEAR16 = 1;</code>
     */
    const LINEAR16 = 1;
    /**
     * <pre>
     * MP3 audio encoding. The sample rate is encoded in the payload.
     * </pre>
     *
     * <code>MP3 = 2;</code>
     */
    const MP3 = 2;
    /**
     * <pre>
     * Opus-encoded audio wrapped in an ogg container. The result will be a
     * file which can be played natively on Android and in some browsers (such
     * as Chrome). The quality of the encoding is considerably higher than MP3
     * while using the same bitrate. The sample rate is encoded in the payload.
     * </pre>
     *
     * <code>OPUS_IN_OGG = 3;</code>
     */
    const OPUS_IN_OGG = 3;
}
