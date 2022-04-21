<?php

namespace App\Services;

use App\Models\AirQuality;
use App\Services\Contracts\AirQualityInterface;
use Illuminate\Support\Facades\Http;

class AirQualityService implements AirQualityInterface
{
    public static function create_air_quality(AirQuality $airs)
    {
        $response = Http::get('https://api.waqi.info/feed/dnipro/?token=832dffc28e45298ba9243129e78099b79ace538f');
        $airQualityArray = json_decode($response, true);
        $airQualityModel = new AirQuality();
        $airQualityModel->name = $airQualityArray['data']['city']['name'];
        $airQualityModel->geo = $airQualityArray['data']['city']['geo'][0];
        $airQualityModel->pm_2_5 = $airQualityArray['data']['iaqi']['pm25']['v'];
        $airQualityModel->pm_1_0 = $airQualityArray['data']['iaqi']['pm10']['v'];
        $airQualityModel->dew = $airQualityArray['data']['iaqi']['dew']['v'];
        $airQualityModel->h = $airQualityArray['data']['iaqi']['h']['v'];
        $airQualityModel->p = $airQualityArray['data']['iaqi']['p']['v'];
        $airQualityModel->t = $airQualityArray['data']['iaqi']['t']['v'];
        $airQualityModel->w = $airQualityArray['data']['iaqi']['w']['v'];
        $airQualityModel->city_id = 1;
        $airQualityModel->save();

//        return $airQualityModel;
    }
}
