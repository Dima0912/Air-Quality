<?php

namespace App\Http\Controllers;

use App\Models\AirQuality;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AirQualityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'hello';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$air = AirQuality::all();
dd($air) ;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(AirQuality $airs)
    {
        $response = Http::get('https://api.waqi.info/feed/@11622/?token=832dffc28e45298ba9243129e78099b79ace538f');
        $airQualityArray = json_decode($response, true);

        $airQualityModel = new AirQuality();
        $airQualityModel->name = $airQualityArray['data']['city']['name'];
        $airQualityModel->geo = $airQualityArray['data']['city']['geo'][0];
        $airQualityModel->pm_2_5 = $airQualityArray['data']['iaqi']['pm25']['v'];
        $airQualityModel->pm_1_0 = $airQualityArray['data']['iaqi']['pm10']['v'];
        $airQualityModel->city_id = 1;

        $airQualityModel->save();


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
