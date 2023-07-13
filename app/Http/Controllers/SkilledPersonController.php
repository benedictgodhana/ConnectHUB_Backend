<?php

namespace App\Http\Controllers;
use Geocoder\Provider\Nominatim\Nominatim;
use Geocoder\Query\GeocodeQuery;
use Illuminate\Http\Request;

class SkilledPersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:skilledperson');
    }
}
