<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/latlng.proto

namespace Google\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * An object representing a latitude/longitude pair. This is expressed as a pair
 * of doubles representing degrees latitude and degrees longitude. Unless
 * specified otherwise, this must conform to the
 * &lt;a href="http://www.unoosa.org/pdf/icg/2012/template/WGS_84.pdf"&gt;WGS84
 * standard&lt;/a&gt;. Values must be within normalized ranges.
 * Example of normalization code in Python:
 *     def NormalizeLongitude(longitude):
 *       """Wraps decimal degrees longitude to [-180.0, 180.0]."""
 *       q, r = divmod(longitude, 360.0)
 *       if r &gt; 180.0 or (r == 180.0 and q &lt;= -1.0):
 *         return r - 360.0
 *       return r
 *     def NormalizeLatLng(latitude, longitude):
 *       """Wraps decimal degrees latitude and longitude to
 *       [-90.0, 90.0] and [-180.0, 180.0], respectively."""
 *       r = latitude % 360.0
 *       if r &lt;= 90.0:
 *         return r, NormalizeLongitude(longitude)
 *       elif r &gt;= 270.0:
 *         return r - 360, NormalizeLongitude(longitude)
 *       else:
 *         return 180 - r, NormalizeLongitude(longitude + 180.0)
 *     assert 180.0 == NormalizeLongitude(180.0)
 *     assert -180.0 == NormalizeLongitude(-180.0)
 *     assert -179.0 == NormalizeLongitude(181.0)
 *     assert (0.0, 0.0) == NormalizeLatLng(360.0, 0.0)
 *     assert (0.0, 0.0) == NormalizeLatLng(-360.0, 0.0)
 *     assert (85.0, 180.0) == NormalizeLatLng(95.0, 0.0)
 *     assert (-85.0, -170.0) == NormalizeLatLng(-95.0, 10.0)
 *     assert (90.0, 10.0) == NormalizeLatLng(90.0, 10.0)
 *     assert (-90.0, -10.0) == NormalizeLatLng(-90.0, -10.0)
 *     assert (0.0, -170.0) == NormalizeLatLng(-180.0, 10.0)
 *     assert (0.0, -170.0) == NormalizeLatLng(180.0, 10.0)
 *     assert (-90.0, 10.0) == NormalizeLatLng(270.0, 10.0)
 *     assert (90.0, 10.0) == NormalizeLatLng(-270.0, 10.0)
 * </pre>
 *
 * Protobuf type <code>google.type.LatLng</code>
 */
class LatLng extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The latitude in degrees. It must be in the range [-90.0, +90.0].
     * </pre>
     *
     * <code>double latitude = 1;</code>
     */
    private $latitude = 0.0;
    /**
     * <pre>
     * The longitude in degrees. It must be in the range [-180.0, +180.0].
     * </pre>
     *
     * <code>double longitude = 2;</code>
     */
    private $longitude = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Type\Latlng::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The latitude in degrees. It must be in the range [-90.0, +90.0].
     * </pre>
     *
     * <code>double latitude = 1;</code>
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * <pre>
     * The latitude in degrees. It must be in the range [-90.0, +90.0].
     * </pre>
     *
     * <code>double latitude = 1;</code>
     */
    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;
    }

    /**
     * <pre>
     * The longitude in degrees. It must be in the range [-180.0, +180.0].
     * </pre>
     *
     * <code>double longitude = 2;</code>
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * <pre>
     * The longitude in degrees. It must be in the range [-180.0, +180.0].
     * </pre>
     *
     * <code>double longitude = 2;</code>
     */
    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;
    }

}

