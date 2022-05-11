<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(City $city) {

        $city = City::all();

        return view('home.index', compact('city'));
    }
}
