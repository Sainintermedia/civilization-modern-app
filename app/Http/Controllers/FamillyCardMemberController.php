<?php

namespace App\Http\Controllers;

use App\Models\Sex;
use App\Models\RtRw;
use App\Models\Work;
use App\Models\Blood;
use App\Models\Marry;
use App\Models\Citizen;
use App\Models\Relation;
use App\Models\Religion;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\FamillyCardMember;
use App\Http\Controllers\Controller;
use Laravolt\Indonesia\Models\Province;

class FamillyCardMemberController extends Controller
{
    public function index()
    {
        $famillycardmembers = FamillyCardMember::with('famillycard.village.district')->paginate(10);

        return view('backend.kependudukan.keluarga-anggota.index', compact('famillycardmembers'));
    }

    public function create()
    {
        $famillycardmembers = FamillyCardMember::whereSts_hub_kel(1)
            ->with('famillycard.provinces.cities.village')
            ->get();
            return $famillycardmembers;

        // $provinces = Province::where('code', '36')->pluck('name', 'code');
        $works = Work::orderBy('nama', 'ASC')->pluck('nama', 'id');
        $marries = Marry::orderBy('id', 'ASC')->pluck('nama', 'id');
        $relations = Relation::orderBy('id', 'ASC')->pluck('nama', 'id');
        $bloods = Blood::orderBy('id', 'ASC')->pluck('nama', 'id');
        $educations = Education::orderBy('id', 'ASC')->pluck('nama', 'id');
        $religions = Religion::orderBy('id', 'ASC')->pluck('nama', 'id');
        $citizens = Citizen::orderBy('id', 'ASC')->pluck('nama', 'id');
        $sexes = Sex::orderBy('id', 'ASC')->pluck('nama', 'id');
        $rtrw = RtRw::get();

        return view('backend.kependudukan.keluarga-anggota.create', compact('famillycardmembers', 'works', 'marries', 'relations', 'bloods', 'educations', 'religions', 'citizens', 'sexes', 'rtrw'));
        // return $famillycardmembers;
    }
}