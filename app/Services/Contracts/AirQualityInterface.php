<?php

namespace App\Services\Contracts;

use App\Models\AirQuality;
//use Illuminate\Support\Facades\Request;

interface AirQualityInterface
{
    public static function create_air_quality(AirQuality $airQuality);
}
