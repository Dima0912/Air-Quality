<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class AirQuality extends Model
{
    protected $fillable = [
        'city_id',
        'name',
        'geo',
        'pm25',
        'pm10',
        'o2',
        'so2'

    ];
    use HasFactory;

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
