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
use Laravolt\Indonesia\Models\Province;

class FamillyController extends Controller
{
    public function index()
    {
        $populations = Population::select('id', 'no_kk', 'nama', 'kp', 'rt', 'rw', 'desa', 'kecamatan')
            ->with('populationsubs', 'village:code,name', 'district:code,name')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
        // return $populations;
        return view('backend.kependudukan.keluarga.index', compact('populations'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $populations = Population::select('id', 'no_kk', 'nama', 'kp', 'rt', 'rw', 'desa', 'kecamatan')
            ->with('populationsubs', 'village:code,name', 'district:code,name')
            ->where('no_kk', 'like', '%' . $search . '%')
            ->orWhere('nama', 'like', '%' . $search . '%')
            ->orWhere('desa', 'like', '%' . $search . '%')
            ->orWhere('kecamatan', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'DESC')
            ->paginate();
        return view('backend.kependudukan.keluarga.index', compact('populations'));
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
        return view('backend.kependudukan.keluarga.create', [
            'works' => $works,
            'marries' => $marries,
            'relations' => $relations,
            'bloods' => $bloods,
            'educations' => $educations,
            'religions' => $religions,
            'citizens' => $citizens,
            'sexes' => $sexes,
            'provinces' => $provinces,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // return $data;
        $population = new Population();
        $population->no_kk = $data['no_kk'];
        $population->nama = $data['nama'];
        $population->kp = $data['kp'];
        $population->rt = $data['rt'];
        $population->rw = $data['rw'];
        $population->kodepos = $data['kodepos'];
        $population->desa = $data['desa'];
        $population->kecamatan = $data['kecamatan'];
        $population->kabkot = $data['kabkot'];
        $population->provinsi = $data['provinsi'];
        $population->save();
        // $insertidpopulation = $population->id;

        $populationsubs = new PopulationSub();
        $populationsubs->no_nik = $data['no_nik'];
        // $populationsubs->no_kk_id = $insertidpopulation;
        $populationsubs->nama = $data['nama'];
        $populationsubs->tmpt_lahir = $data['tmpt_lahir'];
        $populationsubs->tgl_lahir = $data['tgl_lahir'];
        $populationsubs->agama = $data['agama'];
        $populationsubs->pendidikan = $data['pendidikan'];
        $populationsubs->jns_pekerjaan = $data['jns_pekerjaan'];
        $populationsubs->gol_darah = $data['gol_darah'];
        $populationsubs->sts_perkawinan = $data['sts_perkawinan'];
        $populationsubs->tgl_perkawinan = $data['tgl_perkawinan'];
        $populationsubs->sts_hub_kel = $data['sts_hub_kel'];
        $populationsubs->kwn = $data['kwn'];
        $populationsubs->no_paspor = $data['no_paspor'];
        $populationsubs->no_kitap = $data['no_kitap'];
        $populationsubs->nm_ayah = $data['nm_ayah'];
        $populationsubs->nm_ibu = $data['nm_ibu'];
        $populationsubs->jenkel = $data['jenkel'];
        $population->populationsubs()->save($populationsubs);
        // return $population;
        // $populationsub->save();
        // $insertidpopulationsub = $populationsub->id;

        return redirect()
            ->route('siode.kependudukan.keluarga.index ')
            ->with('store', 'Data saved successfully');
    }

    public function edit($id)
    {
        $populations = Population::with('populationsub')->findOrFail($id);
        // return $populations;
        $provinces = Province::where('code', '36')->pluck('name', 'code');
        $works = Work::orderBy('nama', 'ASC')->pluck('nama', 'id');
        $marries = Marry::orderBy('id', 'ASC')->pluck('nama', 'id');
        $relations = Relation::orderBy('id', 'ASC')->pluck('nama', 'id');
        $bloods = Blood::orderBy('id', 'ASC')->pluck('nama', 'id');
        $educations = Education::orderBy('id', 'ASC')->pluck('nama', 'id');
        $religions = Religion::orderBy('id', 'ASC')->pluck('nama', 'id');
        $citizens = Citizen::orderBy('id', 'ASC')->pluck('nama', 'id');
        $sexes = Sex::orderBy('id', 'ASC')->pluck('nama', 'id');
        return view('backend.kependudukan.keluarga.edit', [
            'works' => $works,
            'marries' => $marries,
            'relations' => $relations,
            'bloods' => $bloods,
            'educations' => $educations,
            'religions' => $religions,
            'citizens' => $citizens,
            'sexes' => $sexes,
            'provinces' => $provinces,
            'populations' => $populations,
        ]);
    }

    public function update(Request $request, Population $population, PopulationSub $populationsub, $id)
    {
        $population->no_kk = $request->no_kk;
        $population->provinsi = $request->provinsi;
        $population->kabkot = $request->kabkot;
        $population->kecamatan = $request->kecamatan;
        $population->desa = $request->desa;
        $population->kp = $request->kp;
        $population->rt = $request->rt;
        $population->rw = $request->rw;
        $population->kodepos = $request->kodepos;
        $population->save();
        // return $population;

        $populationsub->no_kk_id = $request->no_kk_id;
        $populationsub->nama = $request->nama;
        $populationsub->jenkel = $request->jenkel;
        $populationsub->tmpt_lahir = $request->tmpt_lahir;
        $populationsub->tgl_lahir = $request->tgl_lahir;
        $populationsub->agama = $request->agama;
        $populationsub->pendidikan = $request->pendidikan;
        $populationsub->jns_pekerjaan = $request->jns_pekerjaan;
        $populationsub->gol_darah = $request->gol_darah;
        $populationsub->sts_perkawinan = $request->sts_perkawinan;
        $populationsub->tgl_perkawinan = $request->tgl_perkawinan;
        $populationsub->sts_hub_kel = $request->sts_hub_kel;
        $populationsub->kwn = $request->kwn;
        $populationsub->no_paspor = $request->no_paspor;
        $populationsub->no_kitap = $request->no_kitap;
        $populationsub->nm_ayah = $request->nm_ayah;
        $populationsub->nm_ibu = $request->nm_ibu;
        $population->populationsub()->save($populationsub);

        return redirect()
            ->route('siode.kependudukan.keluarga.index')
            ->with('store', 'Data saved successfully');
    }

    public function destroy($id)
    {
    }
}