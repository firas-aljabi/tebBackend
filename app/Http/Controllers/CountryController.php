<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

    public function cities($id)
    {
        $country = Country::with('cities')->find($id);
        if (!$country) {
            return response()->json(['message' => 'Country not found'], 404);
        }
        return response()->json($country->cities);
    }
}
