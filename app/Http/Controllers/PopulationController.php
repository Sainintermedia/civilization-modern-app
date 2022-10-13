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
        $populationsubs = PopulationSub::select('id', 'no_nik', 'nama', 'jenkel', 'tmpt_lahir', 'tgl_lahir', 'created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
        return view('backend.kependudukan.populations.index', compact('populationsubs'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $populationsubs = PopulationSub::select('id', 'no_nik', 'nama', 'jenkel', 'tmpt_lahir', 'tgl_lahir', 'created_at')
            ->where('no_nik', 'like', '%' . $search . '%')
            ->orWhere('nama', 'like', '%' . $search . '%')
            ->orWhere('tmpt_lahir', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'DESC')
            ->paginate();
        return view('backend.kependudukan.populations.index', compact('populationsubs'));
    }

    public function create()
    {
        $famillies = Population::all();
        $works = Work::orderBy('nama', 'ASC')->pluck('nama', 'id');
        $marries = Marry::orderBy('id', 'ASC')->pluck('nama', 'id');
        $relations = Relation::orderBy('id', 'ASC')->pluck('nama', 'id');
        $bloods = Blood::orderBy('id', 'ASC')->pluck('nama', 'id');
        $educations = Education::orderBy('id', 'ASC')->pluck('nama', 'id');
        $religions = Religion::orderBy('id', 'ASC')->pluck('nama', 'id');
        $citizens = Citizen::orderBy('id', 'ASC')->pluck('nama', 'id');
        $sexes = Sex::orderBy('id', 'ASC')->pluck('nama', 'id');

        return view('backend.kependudukan.populations.create', [
            'works' => $works,
            'marries' => $marries,
            'relations' => $relations,
            'bloods' => $bloods,
            'educations' => $educations,
            'religions' => $religions,
            'citizens' => $citizens,
            'sexes' => $sexes,
            'famillies' => $famillies,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // return $data;

        $populationsub = new PopulationSub();
        $populationsub->no_nik = $data['no_nik'];
        $populationsub->no_kk_id = $data['no_kk_id'];
        $populationsub->nama = $data['nama'];
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
        $populationsub->no_paspor = $data['no_paspor'];
        $populationsub->no_kitap = $data['no_kitap'];
        $populationsub->nm_ayah = $data['nm_ayah'];
        $populationsub->nm_ibu = $data['nm_ibu'];
        $populationsub->jenkel = $data['jenkel'];
        $populationsub->save();

        return redirect()
            ->route('siode.kependudukan.penduduk.index')
            ->with('store', 'Data saved successfully');
    }

    public function edit($id)
    {
        $populationsubs = PopulationSub::findOrFail($id);
        $famillies = Population::all();
        $works = Work::orderBy('nama', 'ASC')->pluck('nama', 'id');
        $marries = Marry::orderBy('id', 'ASC')->pluck('nama', 'id');
        $relations = Relation::orderBy('id', 'ASC')->pluck('nama', 'id');
        $bloods = Blood::orderBy('id', 'ASC')->pluck('nama', 'id');
        $educations = Education::orderBy('id', 'ASC')->pluck('nama', 'id');
        $religions = Religion::orderBy('id', 'ASC')->pluck('nama', 'id');
        $citizens = Citizen::orderBy('id', 'ASC')->pluck('nama', 'id');
        $sexes = Sex::orderBy('id', 'ASC')->pluck('nama', 'id');

        return view('backend.kependudukan.populations.edit', [
            'works' => $works,
            'marries' => $marries,
            'relations' => $relations,
            'bloods' => $bloods,
            'educations' => $educations,
            'religions' => $religions,
            'citizens' => $citizens,
            'sexes' => $sexes,
            'famillies' => $famillies,
            'populationsubs' => $populationsubs,
        ]);
    }

    public function update(Request $request, PopulationSub $penduduk)
    {
        $penduduk->no_kk_id = $request->no_kk_id;
        $penduduk->nama = $request->nama;
        $penduduk->jenkel = $request->jenkel;
        $penduduk->tmpt_lahir = $request->tmpt_lahir;
        $penduduk->tgl_lahir = $request->tgl_lahir;
        $penduduk->agama = $request->agama;
        $penduduk->pendidikan = $request->pendidikan;
        $penduduk->jns_pekerjaan = $request->jns_pekerjaan;
        $penduduk->gol_darah = $request->gol_darah;
        $penduduk->sts_perkawinan = $request->sts_perkawinan;
        $penduduk->tgl_perkawinan = $request->tgl_perkawinan;
        $penduduk->sts_hub_kel = $request->sts_hub_kel;
        $penduduk->kwn = $request->kwn;
        $penduduk->no_paspor = $request->no_paspor;
        $penduduk->no_kitap = $request->no_kitap;
        $penduduk->nm_ayah = $request->nm_ayah;
        $penduduk->nm_ibu = $request->nm_ibu;
        $penduduk->update();
        return redirect()
            ->route('siode.kependudukan.penduduk.index')
            ->with('store', 'Data saved successfully');
    }

    public function destroy($id)
    {
        PopulationSub::findOrFail($id)->delete();
        return redirect()
            ->route('siode.kependudukan.penduduk.index')
            ->with('store', 'Data saved successfully');
    }
}