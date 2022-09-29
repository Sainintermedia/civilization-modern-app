<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use App\Http\Controllers\Controller;
use Laravolt\Indonesia\Models\Village;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;

class DependentDropdownController extends Controller
{
    public function index()
    {
        $provinces = Province::where('code', '36')->pluck('name', 'code');

        return view('dependent-dropdown.index', [
            'provinces' => $provinces,
        ]);
    }

    public function store(Request $request)
    {
        $cities = City::where('province_code', $request->get('id'))
            ->pluck('name', 'code');
            return response()->json($cities);
            dd($cities);
    }

    public function storeDistrict(Request $request)
    {
        $districts = District::where('city_code', $request->get('id'))
            ->pluck('name', 'code');

        return response()->json($districts);
    }

    public function storeVillage(Request $request)
    {
        $villages = Village::where('district_code', $request->get('id'))
            ->pluck('name', 'code');

        return response()->json($villages);
    }
}