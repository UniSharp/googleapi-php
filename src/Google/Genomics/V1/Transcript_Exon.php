<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/annotations.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.genomics.v1.Transcript.Exon</code>
 */
class Transcript_Exon extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The start position of the exon on this annotation's reference sequence,
     * 0-based inclusive. Note that this is relative to the reference start, and
     * **not** the containing annotation start.
     * </pre>
     *
     * <code>int64 start = 1;</code>
     */
    private $start = 0;
    /**
     * <pre>
     * The end position of the exon on this annotation's reference sequence,
     * 0-based exclusive. Note that this is relative to the reference start, and
     * *not* the containing annotation start.
     * </pre>
     *
     * <code>int64 end = 2;</code>
     */
    private $end = 0;
    /**
     * <pre>
     * The frame of this exon. Contains a value of 0, 1, or 2, which indicates
     * the offset of the first coding base of the exon within the reading frame
     * of the coding DNA sequence, if any. This field is dependent on the
     * strandedness of this annotation (see
     * [Annotation.reverse_strand][google.genomics.v1.Annotation.reverse_strand]).
     * For forward stranded annotations, this offset is relative to the
     * [exon.start][google.genomics.v1.Transcript.Exon.start]. For reverse
     * strand annotations, this offset is relative to the
     * [exon.end][google.genomics.v1.Transcript.Exon.end] `- 1`.
     * Unset if this exon does not intersect the coding sequence. Upon creation
     * of a transcript, the frame must be populated for all or none of the
     * coding exons.
     * </pre>
     *
     * <code>.google.protobuf.Int32Value frame = 3;</code>
     */
    private $frame = null;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Annotations::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The start position of the exon on this annotation's reference sequence,
     * 0-based inclusive. Note that this is relative to the reference start, and
     * **not** the containing annotation start.
     * </pre>
     *
     * <code>int64 start = 1;</code>
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * <pre>
     * The start position of the exon on this annotation's reference sequence,
     * 0-based inclusive. Note that this is relative to the reference start, and
     * **not** the containing annotation start.
     * </pre>
     *
     * <code>int64 start = 1;</code>
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;
    }

    /**
     * <pre>
     * The end position of the exon on this annotation's reference sequence,
     * 0-based exclusive. Note that this is relative to the reference start, and
     * *not* the containing annotation start.
     * </pre>
     *
     * <code>int64 end = 2;</code>
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * <pre>
     * The end position of the exon on this annotation's reference sequence,
     * 0-based exclusive. Note that this is relative to the reference start, and
     * *not* the containing annotation start.
     * </pre>
     *
     * <code>int64 end = 2;</code>
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;
    }

    /**
     * <pre>
     * The frame of this exon. Contains a value of 0, 1, or 2, which indicates
     * the offset of the first coding base of the exon within the reading frame
     * of the coding DNA sequence, if any. This field is dependent on the
     * strandedness of this annotation (see
     * [Annotation.reverse_strand][google.genomics.v1.Annotation.reverse_strand]).
     * For forward stranded annotations, this offset is relative to the
     * [exon.start][google.genomics.v1.Transcript.Exon.start]. For reverse
     * strand annotations, this offset is relative to the
     * [exon.end][google.genomics.v1.Transcript.Exon.end] `- 1`.
     * Unset if this exon does not intersect the coding sequence. Upon creation
     * of a transcript, the frame must be populated for all or none of the
     * coding exons.
     * </pre>
     *
     * <code>.google.protobuf.Int32Value frame = 3;</code>
     */
    public function getFrame()
    {
        return $this->frame;
    }

    /**
     * <pre>
     * The frame of this exon. Contains a value of 0, 1, or 2, which indicates
     * the offset of the first coding base of the exon within the reading frame
     * of the coding DNA sequence, if any. This field is dependent on the
     * strandedness of this annotation (see
     * [Annotation.reverse_strand][google.genomics.v1.Annotation.reverse_strand]).
     * For forward stranded annotations, this offset is relative to the
     * [exon.start][google.genomics.v1.Transcript.Exon.start]. For reverse
     * strand annotations, this offset is relative to the
     * [exon.end][google.genomics.v1.Transcript.Exon.end] `- 1`.
     * Unset if this exon does not intersect the coding sequence. Upon creation
     * of a transcript, the frame must be populated for all or none of the
     * coding exons.
     * </pre>
     *
     * <code>.google.protobuf.Int32Value frame = 3;</code>
     */
    public function setFrame(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->frame = $var;
    }

}

