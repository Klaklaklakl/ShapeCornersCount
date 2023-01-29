<?php

namespace Klaklaklakl\ShapeCornersCount;

class ShapeCornersCount
{
    private const KNOWN_SHAPE = [
        'ellipse' => 0,
        'circle' => 0,
        'triangle' => 3,
        'rhombus' => 4,
        'square' => 4,
        'rectangle' => 4,
        'point' => 0,
        'plane' => 0,
        'line' => 0,
        'trapezoids' => 0,
        'pentagon' => 5,
    ];

    public static function getCornersCount(string ...$shapeName)
    {
        foreach($shapeName as $shapeNameItem) {
            echo self::getMessage($shapeNameItem);
        }
    }

    protected static function getMessage(string $shape): string
    {
        if(self::isKnownShape($shape)) {
            return $shape . ' - ' . self::KNOWN_SHAPE[$shape] . '<br />';
        }
        return $shape . ' - not defined' . '<br />';
    }

    protected static function isKnownShape(string $shape): bool
    {
        return array_key_exists($shape, self::KNOWN_SHAPE);
    }
}
