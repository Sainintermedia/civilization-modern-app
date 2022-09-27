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
use App\Models\Population;
use Illuminate\Http\Request;
use App\Models\PopulationSub;
use App\Http\Controllers\Controller;

class PopulationController extends Controller
{
    public function index()
    {
        $populations = Population::with('populationsubs')->get();
        return $populations;
    }

    public function create()
    {
        $works = Work::select('id', 'nama')
            ->orderBy('nama', 'ASC')
            ->get();
        $marries = Marry::select('id', 'nama')
            ->orderBy('nama', 'ASC')
            ->get();
        $relations = Relation::select('id', 'nama')
            ->orderBy('id', 'ASC')
            ->get();
        $bloods = Blood::select('id', 'nama')
            ->orderBy('id', 'ASC')
            ->get();
        $educations = Education::select('id', 'nama')
            ->orderBy('id', 'ASC')
            ->get();
        $religions = Religion::select('id', 'nama')
            ->orderBy('id', 'ASC')
            ->get();
        $citizens = Citizen::select('id', 'nama')
            ->orderBy('id', 'ASC')
            ->get();
        $sexes = Sex::select('id', 'nama')
            ->orderBy('id', 'ASC')
            ->get();
        return view('backend.kependudukan.populations.create', compact('works', 'marries', 'relations', 'bloods', 'educations', 'religions', 'citizens', 'sexes'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return $data;
        $population = new Population();
        $population->no_kk = $data['no_kk'];
        $population->nama_kk = $data['nama_kk'];
        $population->kp = $data['kp'];
        $population->rt = $data['rt'];
        $population->rw = $data['rw'];
        $population->kodepos = $data['kodepos'];
        $population->desa = $data['desa'];
        $population->kecamatan = $data['kecamatan'];
        $population->kabkot = $data['kabkot'];
        $population->provinsi = $data['provinsi'];
        $population->save();
        $insertidpopulation = $population->id;

        $populationsub = new PopulationSub();
        $populationsub->no_nik = $data['no_nik'];
        $populationsub->no_kk_id = $insertidpopulation;
        $populationsub->nama = $data['nama_kk'];
        $populationsub->tmpt_lahir = $data['tmpt_lahir'];
        $populationsub->tgl_lahir = $data['tgl_lahir'];
        $populationsub->agama = $data['agama'];
        $populationsub->pendidikan = $data['pendidikan'];
        $populationsub->jns_pekerjaan = $data['jns_pekerjaan'];
        $populationsub->gol_darah = $data['gol_darah'];
        $populationsub->sts_perkawinan = $data['sts_perkawinan'];
        $populationsub->tgl_perkawinan = $data['tgl_perkawinan'];
        $populationsub->sts_hub_kel = $data['sts_hub_kel'];
        $populationsub->kwn = $data['kwn'];
        $populationsub->no_paspor = $data['np_paspor'];
        $populationsub->no_kitap = $data['no_kitap'];
        $populationsub->nm_ayah = $data['nm_ayah'];
        $populationsub->nm_ibu = $data['nm_ibu'];
        $populationsub->jenkel = $data['jenkel'];
        $populationsub->save();
        $insertidpopulationsub = $populationsub->id;

        return redirect()
            ->route('populations.index')
            ->with('store', 'Data saved successfully');
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }
}