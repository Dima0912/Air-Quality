<?php

namespace App\Services;

use App\Models\AirQuality;
use App\Models\City;
use App\Services\Contracts\AirQualityInterface;
use Illuminate\Support\Facades\Http;

class AirQualityService implements AirQualityInterface
{
    public function create_air_quality()
    {
        foreach (City::all() as $city) {
            $response = Http::get('https://api.waqi.info/feed/' . $city->name . '?token=832dffc28e45298ba9243129e78099b79ace538f');

            $airQualityArray = json_decode($response, true);
            if ($airQualityArray['status'] === 'error' || $response->status() !== 200) {
                continue;
            }
            $airQualityModel = new AirQuality();
            $airQualityModel->name = $airQualityArray['data']['city']['name'];
            $airQualityModel->geo = $airQualityArray['data']['city']['geo'][0] ?? null;
            $airQualityModel->pm_2_5 = $airQualityArray['data']['iaqi']['pm25']['v'] ?? null;
            $airQualityModel->pm_1_0 = $airQualityArray['data']['iaqi']['pm10']['v'] ?? null;
            $airQualityModel->dew = $airQualityArray['data']['iaqi']['dew']['v'] ?? null;
            $airQualityModel->h = $airQualityArray['data']['iaqi']['h']['v'] ?? null;
            $airQualityModel->p = $airQualityArray['data']['iaqi']['p']['v'] ?? null;
            $airQualityModel->t = $airQualityArray['data']['iaqi']['t']['v'] ?? null;
            $airQualityModel->w = $airQualityArray['data']['iaqi']['w']['v'] ?? null;
            $airQualityModel->city_id = 1;
            $airQualityModel->save();

        }

    }
}
