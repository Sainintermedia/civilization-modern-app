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
use App\Models\FamillyCard;
use Illuminate\Http\Request;
use App\Models\FamillyCardMember;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravolt\Indonesia\Models\Province;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\FamillyCardMemberRequestStore;
use App\Http\Requests\FamillyCardMemberRequestUpdate;

class FamillyCardMemberController extends Controller
{
    public function index()
    {
        // $starttime = microtime(true); //untuk test speed query
        $famillycardmembers = FamillyCardMember::latest()
            ->with([
                'famillycard' => function ($q) {
                    $q->with(['districts', 'villages']);
                },
            ])
            ->paginate(10);
        // $endtime = microtime(true);
        // $timediff = $endtime - $starttime;
        // $hasil = "Halaman diproses dalam " . sprintf('%0.2f', $timediff) . " detik";

        return view('backend.kependudukan.keluarga-anggota.index', compact('famillycardmembers'));
    }

    public function create()
    {
        $famillycardmembers = FamillyCardMember::whereSts_hub_kel(1)
            ->with([
                'famillycard' => function ($q) {
                    $q->with(['provinces', 'cities', 'districts', 'villages']);
                },
            ])
            ->get();
        // return $famillycardmembers;

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

    public function store(FamillyCardMemberRequestStore $request)
    {
        $d = $request->all();
        $famillycardmembers = new FamillyCardMember();
        $famillycardmembers->no_kk = $d['no_kk'];
        $famillycardmembers->no_nik = $d['no_nik'];
        $famillycardmembers->nama = $d['nama'];
        $famillycardmembers->jenkel = $d['jenkel'];
        $famillycardmembers->tgl_lahir = $d['tgl_lahir'];
        $famillycardmembers->tmpt_lahir = $d['tmpt_lahir'];
        $famillycardmembers->agama = $d['agama'];
        $famillycardmembers->pendidikan = $d['pendidikan'];
        $famillycardmembers->jns_pekerjaan = $d['jns_pekerjaan'];
        $famillycardmembers->gol_darah = $d['gol_darah'];
        $famillycardmembers->sts_perkawinan = $d['sts_perkawinan'];
        $famillycardmembers->tgl_perkawinan = $d['tgl_perkawinan'];
        $famillycardmembers->sts_hub_kel = $d['sts_hub_kel'];
        $famillycardmembers->sts_kwn = $d['sts_kwn'];
        $famillycardmembers->nm_ayah = $d['nm_ayah'];
        $famillycardmembers->nm_ibu = $d['nm_ibu'];
        $famillycardmembers->nik_ayah = $d['nik_ayah'];
        $famillycardmembers->nik_ibu = $d['nik_ibu'];
        $famillycardmembers->sts_mati = 0;
        $famillycardmembers->no_paspor = $d['no_paspor'];
        $famillycardmembers->no_kitap = $d['no_kitap'];
        $famillycardmembers->user_id = \Auth::user()->id;
        $famillycardmembers->sts = 0;
        $famillycardmembers->save();

        Alert::success('Success', 'Data berhasil disimpan !');
        return redirect()
            ->route('siode.kependudukan.anggota-keluarga.index')
            ->with('store', 'Data saved successfully');
    }

    public function edit($anggota_keluarga)
    {
        $r = FamillyCard::where('id', $anggota_keluarga)->with('famillycardmembers')->get();
        return $r;

        // $famillycardmembers = FamillyCardMember::whereSts_hub_kel(1)
        //     ->with([
        //         'famillycard' => function ($q) {
        //             $q->with(['provinces', 'cities', 'districts', 'villages']);
        //         },
        //     ])
        //     ->get();
        
        // $f = FamillyCardMember::with('famillycard')->findOrFail($anggota_keluarga);
        // $provinces = Province::where('code', '36')->pluck('name', 'code');
        // $works = Work::orderBy('nama', 'ASC')->pluck('nama', 'id');
        // $marries = Marry::orderBy('id', 'ASC')->pluck('nama', 'id');
        // $relations = Relation::orderBy('id', 'ASC')->pluck('nama', 'id');
        // $bloods = Blood::orderBy('id', 'ASC')->pluck('nama', 'id');
        // $educations = Education::orderBy('id', 'ASC')->pluck('nama', 'id');
        // $religions = Religion::orderBy('id', 'ASC')->pluck('nama', 'id');
        // $citizens = Citizen::orderBy('id', 'ASC')->pluck('nama', 'id');
        // $sexes = Sex::orderBy('id', 'ASC')->pluck('nama', 'id');
        // $rtrw = RtRw::get();
        // return view('backend.kependudukan.keluarga-anggota.edit', compact('famillycardmember','famillycardmembers', 'provinces', 'works', 'marries', 'relations', 'bloods', 'educations', 'religions', 'citizens', 'sexes', 'rtrw'));
        
    }

    public function update(FamillyCardMemberRequestUpdate $request)
    {
    }
}