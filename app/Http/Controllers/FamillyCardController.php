<?php

namespace App\Http\Controllers;

use App\Models\Sex;
use App\Models\Work;
use App\Models\Blood;
use App\Models\Marry;
use App\Models\Citizen;
use App\Models\Relation;
use App\Models\Religion;
use App\Models\Education;
use App\Models\FamillyCard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravolt\Indonesia\Models\Province;

class FamillyCardController extends Controller
{
    public function index()
    {
        $famillycards = FamillyCard::where('sts_hub_kel', '=', 1)->where('sts_mati', '=', 0)->paginate(10);

        return view('backend.kependudukan.keluarga.index', compact('famillycards'));
    }

    public function create()
    {
        $provinces = Province::where('code', '36')->pluck('name', 'code');
        $works = Work::orderBy('nama', 'ASC')->pluck('nama', 'id');
        $marries = Marry::orderBy('id', 'ASC')->pluck('nama', 'id');
        $relations = Relation::orderBy('id', 'ASC')->pluck('nama', 'id');
        $bloods = Blood::orderBy('id', 'ASC')->pluck('nama', 'id');
        $educations = Education::orderBy('id', 'ASC')->pluck('nama', 'id');
        $religions = Religion::orderBy('id', 'ASC')->pluck('nama', 'id');
        $citizens = Citizen::orderBy('id', 'ASC')->pluck('nama', 'id');
        $sexes = Sex::orderBy('id', 'ASC')->pluck('nama', 'id');

        return view('backend.kependudukan.keluarga.create', compact('provinces','works','marries','relations','bloods','educations','religions','citizens','sexes'));

    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        
    }

    public function viewDelete()
    {

    }

    public function restore($id)
    {
        
    }
}