<?php

class Speedometer
{
    public const CONVERSION = 1.60934;

    public static function convertToKm(int $miles): float
    {
        return $miles * self::CONVERSION;
    }

    public static function convertToMiles(int $km): float
    {
        return $km / self::CONVERSION;
    }

}