<?php

declare(strict_types=1);

/* This file is auto-generated. Don't edit directly! */

namespace Jsor\Doctrine\PostGIS\Functions;

use Doctrine\ORM\Configuration;

use function defined;

final class Configurator
{
    public static function configure(Configuration $configuration): void
    {
        if (defined('Doctrine\ORM\Query\Lexer::T_IDENTIFIER')) {
            class_alias('Doctrine\ORM\Query\Lexer', 'Jsor\Doctrine\PostGIS\Functions\ConstantWrapper');
        } else {
            class_alias('Doctrine\ORM\Query\TokenType', 'Jsor\Doctrine\PostGIS\Functions\ConstantWrapper');
        }
        $configuration->addCustomStringFunction('Geometry', Geometry::class);
        $configuration->addCustomStringFunction('Geography', Geography::class);
        $configuration->addCustomStringFunction('ST_Box2dFromGeoHash', ST_Box2dFromGeoHash::class);
        $configuration->addCustomStringFunction('ST_GeogFromText', ST_GeogFromText::class);
        $configuration->addCustomStringFunction('ST_GeographyFromText', ST_GeographyFromText::class);
        $configuration->addCustomStringFunction('ST_GeogFromWKB', ST_GeogFromWKB::class);
        $configuration->addCustomStringFunction('ST_GeomCollFromText', ST_GeomCollFromText::class);
        $configuration->addCustomStringFunction('ST_GeomFromEWKB', ST_GeomFromEWKB::class);
        $configuration->addCustomStringFunction('ST_GeomFromEWKT', ST_GeomFromEWKT::class);
        $configuration->addCustomStringFunction('ST_GeomFromGeoHash', ST_GeomFromGeoHash::class);
        $configuration->addCustomStringFunction('ST_GeomFromGML', ST_GeomFromGML::class);
        $configuration->addCustomStringFunction('ST_GeomFromGeoJSON', ST_GeomFromGeoJSON::class);
        $configuration->addCustomStringFunction('ST_GeomFromKML', ST_GeomFromKML::class);
        $configuration->addCustomStringFunction('ST_GeomFromText', ST_GeomFromText::class);
        $configuration->addCustomStringFunction('ST_GeometryFromText', ST_GeometryFromText::class);
        $configuration->addCustomStringFunction('ST_GeomFromWKB', ST_GeomFromWKB::class);
        $configuration->addCustomStringFunction('ST_LineFromMultiPoint', ST_LineFromMultiPoint::class);
        $configuration->addCustomStringFunction('ST_LineFromText', ST_LineFromText::class);
        $configuration->addCustomStringFunction('ST_LineFromWKB', ST_LineFromWKB::class);
        $configuration->addCustomStringFunction('ST_LinestringFromWKB', ST_LinestringFromWKB::class);
        $configuration->addCustomStringFunction('ST_MakeBox2D', ST_MakeBox2D::class);
        $configuration->addCustomStringFunction('ST_3DMakeBox', ST_3DMakeBox::class);
        $configuration->addCustomStringFunction('ST_MakeLine', ST_MakeLine::class);
        $configuration->addCustomStringFunction('ST_MakeEnvelope', ST_MakeEnvelope::class);
        $configuration->addCustomStringFunction('ST_MakePolygon', ST_MakePolygon::class);
        $configuration->addCustomStringFunction('ST_MakePoint', ST_MakePoint::class);
        $configuration->addCustomStringFunction('ST_MakePointM', ST_MakePointM::class);
        $configuration->addCustomStringFunction('ST_MLineFromText', ST_MLineFromText::class);
        $configuration->addCustomStringFunction('ST_MPointFromText', ST_MPointFromText::class);
        $configuration->addCustomStringFunction('ST_MPolyFromText', ST_MPolyFromText::class);
        $configuration->addCustomStringFunction('ST_Point', ST_Point::class);
        $configuration->addCustomStringFunction('ST_PointFromGeoHash', ST_PointFromGeoHash::class);
        $configuration->addCustomStringFunction('ST_PointFromText', ST_PointFromText::class);
        $configuration->addCustomStringFunction('ST_PointFromWKB', ST_PointFromWKB::class);
        $configuration->addCustomStringFunction('ST_Polygon', ST_Polygon::class);
        $configuration->addCustomStringFunction('ST_PolygonFromText', ST_PolygonFromText::class);
        $configuration->addCustomStringFunction('GeometryType', GeometryType::class);
        $configuration->addCustomStringFunction('ST_Boundary', ST_Boundary::class);
        $configuration->addCustomNumericFunction('ST_CoordDim', ST_CoordDim::class);
        $configuration->addCustomNumericFunction('ST_Dimension', ST_Dimension::class);
        $configuration->addCustomStringFunction('ST_EndPoint', ST_EndPoint::class);
        $configuration->addCustomStringFunction('ST_Envelope', ST_Envelope::class);
        $configuration->addCustomStringFunction('ST_ExteriorRing', ST_ExteriorRing::class);
        $configuration->addCustomStringFunction('ST_GeometryN', ST_GeometryN::class);
        $configuration->addCustomStringFunction('ST_GeometryType', ST_GeometryType::class);
        $configuration->addCustomStringFunction('ST_InteriorRingN', ST_InteriorRingN::class);
        $configuration->addCustomStringFunction('ST_IsClosed', ST_IsClosed::class);
        $configuration->addCustomStringFunction('ST_IsCollection', ST_IsCollection::class);
        $configuration->addCustomStringFunction('ST_IsEmpty', ST_IsEmpty::class);
        $configuration->addCustomStringFunction('ST_IsRing', ST_IsRing::class);
        $configuration->addCustomStringFunction('ST_IsSimple', ST_IsSimple::class);
        $configuration->addCustomStringFunction('ST_IsValid', ST_IsValid::class);
        $configuration->addCustomStringFunction('ST_IsValidReason', ST_IsValidReason::class);
        $configuration->addCustomStringFunction('ST_IsValidDetail', ST_IsValidDetail::class);
        $configuration->addCustomNumericFunction('ST_M', ST_M::class);
        $configuration->addCustomNumericFunction('ST_NDims', ST_NDims::class);
        $configuration->addCustomNumericFunction('ST_NPoints', ST_NPoints::class);
        $configuration->addCustomNumericFunction('ST_NRings', ST_NRings::class);
        $configuration->addCustomNumericFunction('ST_NumGeometries', ST_NumGeometries::class);
        $configuration->addCustomNumericFunction('ST_NumInteriorRings', ST_NumInteriorRings::class);
        $configuration->addCustomNumericFunction('ST_NumInteriorRing', ST_NumInteriorRing::class);
        $configuration->addCustomNumericFunction('ST_NumPatches', ST_NumPatches::class);
        $configuration->addCustomNumericFunction('ST_NumPoints', ST_NumPoints::class);
        $configuration->addCustomStringFunction('ST_PatchN', ST_PatchN::class);
        $configuration->addCustomStringFunction('ST_PointN', ST_PointN::class);
        $configuration->addCustomNumericFunction('ST_SRID', ST_SRID::class);
        $configuration->addCustomStringFunction('ST_StartPoint', ST_StartPoint::class);
        $configuration->addCustomStringFunction('ST_Summary', ST_Summary::class);
        $configuration->addCustomNumericFunction('ST_X', ST_X::class);
        $configuration->addCustomNumericFunction('ST_XMax', ST_XMax::class);
        $configuration->addCustomNumericFunction('ST_XMin', ST_XMin::class);
        $configuration->addCustomNumericFunction('ST_Y', ST_Y::class);
        $configuration->addCustomNumericFunction('ST_YMax', ST_YMax::class);
        $configuration->addCustomNumericFunction('ST_YMin', ST_YMin::class);
        $configuration->addCustomNumericFunction('ST_Z', ST_Z::class);
        $configuration->addCustomNumericFunction('ST_ZMax', ST_ZMax::class);
        $configuration->addCustomNumericFunction('ST_Zmflag', ST_Zmflag::class);
        $configuration->addCustomNumericFunction('ST_ZMin', ST_ZMin::class);
        $configuration->addCustomStringFunction('ST_AddPoint', ST_AddPoint::class);
        $configuration->addCustomStringFunction('ST_Multi', ST_Multi::class);
        $configuration->addCustomStringFunction('ST_Scale', ST_Scale::class);
        $configuration->addCustomStringFunction('ST_SetSRID', ST_SetSRID::class);
        $configuration->addCustomStringFunction('ST_SnapToGrid', ST_SnapToGrid::class);
        $configuration->addCustomStringFunction('ST_Transform', ST_Transform::class);
        $configuration->addCustomStringFunction('ST_Translate', ST_Translate::class);
        $configuration->addCustomStringFunction('ST_TransScale', ST_TransScale::class);
        $configuration->addCustomStringFunction('ST_AsBinary', ST_AsBinary::class);
        $configuration->addCustomStringFunction('ST_AsEWKB', ST_AsEWKB::class);
        $configuration->addCustomStringFunction('ST_AsEWKT', ST_AsEWKT::class);
        $configuration->addCustomStringFunction('ST_AsGeoJSON', ST_AsGeoJSON::class);
        $configuration->addCustomStringFunction('ST_AsGML', ST_AsGML::class);
        $configuration->addCustomStringFunction('ST_AsHEXEWKB', ST_AsHEXEWKB::class);
        $configuration->addCustomStringFunction('ST_AsSVG', ST_AsSVG::class);
        $configuration->addCustomStringFunction('ST_GeoHash', ST_GeoHash::class);
        $configuration->addCustomStringFunction('ST_AsLatLonText', ST_AsLatLonText::class);
        $configuration->addCustomStringFunction('ST_AsText', ST_AsText::class);
        $configuration->addCustomStringFunction('ST_3DClosestPoint', ST_3DClosestPoint::class);
        $configuration->addCustomNumericFunction('ST_3DDistance', ST_3DDistance::class);
        $configuration->addCustomStringFunction('ST_3DDWithin', ST_3DDWithin::class);
        $configuration->addCustomStringFunction('ST_3DDFullyWithin', ST_3DDFullyWithin::class);
        $configuration->addCustomStringFunction('ST_3DIntersects', ST_3DIntersects::class);
        $configuration->addCustomStringFunction('ST_3DLongestLine', ST_3DLongestLine::class);
        $configuration->addCustomNumericFunction('ST_3DMaxDistance', ST_3DMaxDistance::class);
        $configuration->addCustomStringFunction('ST_3DShortestLine', ST_3DShortestLine::class);
        $configuration->addCustomNumericFunction('ST_Area', ST_Area::class);
        $configuration->addCustomNumericFunction('ST_Azimuth', ST_Azimuth::class);
        $configuration->addCustomStringFunction('ST_Centroid', ST_Centroid::class);
        $configuration->addCustomStringFunction('ST_ClosestPoint', ST_ClosestPoint::class);
        $configuration->addCustomStringFunction('ST_Contains', ST_Contains::class);
        $configuration->addCustomStringFunction('ST_ContainsProperly', ST_ContainsProperly::class);
        $configuration->addCustomStringFunction('ST_Covers', ST_Covers::class);
        $configuration->addCustomStringFunction('ST_CoveredBy', ST_CoveredBy::class);
        $configuration->addCustomStringFunction('ST_Crosses', ST_Crosses::class);
        $configuration->addCustomNumericFunction('ST_LineCrossingDirection', ST_LineCrossingDirection::class);
        $configuration->addCustomStringFunction('ST_Disjoint', ST_Disjoint::class);
        $configuration->addCustomNumericFunction('ST_Distance', ST_Distance::class);
        $configuration->addCustomNumericFunction('ST_HausdorffDistance', ST_HausdorffDistance::class);
        $configuration->addCustomNumericFunction('ST_MaxDistance', ST_MaxDistance::class);
        $configuration->addCustomNumericFunction('ST_DistanceSphere', ST_DistanceSphere::class);
        $configuration->addCustomNumericFunction('ST_DistanceSpheroid', ST_DistanceSpheroid::class);
        $configuration->addCustomStringFunction('ST_DFullyWithin', ST_DFullyWithin::class);
        $configuration->addCustomStringFunction('ST_DWithin', ST_DWithin::class);
        $configuration->addCustomStringFunction('ST_Equals', ST_Equals::class);
        $configuration->addCustomStringFunction('ST_HasArc', ST_HasArc::class);
        $configuration->addCustomStringFunction('ST_Intersects', ST_Intersects::class);
        $configuration->addCustomNumericFunction('ST_Length', ST_Length::class);
        $configuration->addCustomNumericFunction('ST_3DLength', ST_3DLength::class);
        $configuration->addCustomNumericFunction('ST_LengthSpheroid', ST_LengthSpheroid::class);
        $configuration->addCustomStringFunction('ST_LongestLine', ST_LongestLine::class);
        $configuration->addCustomStringFunction('ST_OrderingEquals', ST_OrderingEquals::class);
        $configuration->addCustomStringFunction('ST_Overlaps', ST_Overlaps::class);
        $configuration->addCustomNumericFunction('ST_Perimeter', ST_Perimeter::class);
        $configuration->addCustomStringFunction('ST_PointOnSurface', ST_PointOnSurface::class);
        $configuration->addCustomStringFunction('ST_Project', ST_Project::class);
        $configuration->addCustomStringFunction('ST_Relate', ST_Relate::class);
        $configuration->addCustomStringFunction('ST_ShortestLine', ST_ShortestLine::class);
        $configuration->addCustomStringFunction('ST_Touches', ST_Touches::class);
        $configuration->addCustomStringFunction('ST_Within', ST_Within::class);
        $configuration->addCustomStringFunction('ST_Buffer', ST_Buffer::class);
        $configuration->addCustomStringFunction('ST_Collect', ST_Collect::class);
        $configuration->addCustomStringFunction('ST_Difference', ST_Difference::class);
        $configuration->addCustomStringFunction('ST_FlipCoordinates', ST_FlipCoordinates::class);
        $configuration->addCustomStringFunction('ST_Intersection', ST_Intersection::class);
        $configuration->addCustomStringFunction('ST_MinimumBoundingCircle', ST_MinimumBoundingCircle::class);
        $configuration->addCustomStringFunction('ST_ShiftLongitude', ST_ShiftLongitude::class);
        $configuration->addCustomStringFunction('ST_Split', ST_Split::class);
        $configuration->addCustomStringFunction('ST_SymDifference', ST_SymDifference::class);
        $configuration->addCustomStringFunction('ST_Union', ST_Union::class);
        $configuration->addCustomStringFunction('ST_Extent', ST_Extent::class);
    }
}
