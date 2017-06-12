<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/text_annotation.proto

namespace Google\Cloud\Vision\V1;

/**
 * <pre>
 * Type of a block (text, image etc) as identified by OCR.
 * </pre>
 *
 * Protobuf enum <code>google.cloud.vision.v1.Block.BlockType</code>
 */
class Block_BlockType
{
    /**
     * <pre>
     * Unknown block type.
     * </pre>
     *
     * <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * <pre>
     * Regular text block.
     * </pre>
     *
     * <code>TEXT = 1;</code>
     */
    const TEXT = 1;
    /**
     * <pre>
     * Table block.
     * </pre>
     *
     * <code>TABLE = 2;</code>
     */
    const TABLE = 2;
    /**
     * <pre>
     * Image block.
     * </pre>
     *
     * <code>PICTURE = 3;</code>
     */
    const PICTURE = 3;
    /**
     * <pre>
     * Horizontal/vertical line box.
     * </pre>
     *
     * <code>RULER = 4;</code>
     */
    const RULER = 4;
    /**
     * <pre>
     * Barcode block.
     * </pre>
     *
     * <code>BARCODE = 5;</code>
     */
    const BARCODE = 5;
}
