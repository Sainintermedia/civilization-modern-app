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
use App\Http\Requests\FamillyCardRequestStore;

class FamillyCardController extends Controller
{
    public function index()
    {
        $famillycardmembers = FamillyCardMember::with('famillycard.village.district')->where('sts_hub_kel', '=', 1)->where('sts_mati', '=', 0)->paginate(10);
        // return $famillycardmembers;
        return view('backend.kependudukan.keluarga.index', compact('famillycardmembers'));
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
        $rtrw = RtRw::get();

        return view('backend.kependudukan.keluarga.create', compact('provinces','works','marries','relations','bloods','educations','religions','citizens','sexes','rtrw'));

    }

    public function store(FamillyCardRequestStore $request)
    {
        $d = $request->all();
        $famillycard = new FamillyCard();
        $famillycard->no_kk = $d['no_kk'];
        $famillycard->kp = $d['kp'];
        $famillycard->rt = $d['rt'];
        $famillycard->rw = $d['rw'];
        $famillycard->kodepos = $d['kodepos'];
        $famillycard->desa = $d['desa'];
        $famillycard->kecamatan = $d['kecamatan'];
        $famillycard->kabkot = $d['kabkot'];
        $famillycard->provinsi = $d['provinsi'];
        $famillycard->user_id = \Auth::user()->id;
        $famillycard->save();

        $famillycardmembers = new FamillyCardMember();
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
        $famillycard->famillycardmembers()->save($famillycardmembers);

        Alert::success('Success', 'Data berhasil disimpan !');
        return redirect()
            ->route('siode.kependudukan.kepala-keluarga.index')
            ->with('store', 'Data saved successfully');
        
    }

    public function show($kepala_keluarga)
    {
        $famillycardmember = FamillyCardMember::with('famillycard')->findOrFail($kepala_keluarga);
        return $famillycardmember;
    }

    public function edit($kepala_keluarga)
    {
        $famillycardmember = FamillyCardMember::with('famillycard')->findOrFail($kepala_keluarga);
        $provinces = Province::where('code', '36')->pluck('name', 'code');
        $works = Work::orderBy('nama', 'ASC')->pluck('nama', 'id');
        $marries = Marry::orderBy('id', 'ASC')->pluck('nama', 'id');
        $relations = Relation::orderBy('id', 'ASC')->pluck('nama', 'id');
        $bloods = Blood::orderBy('id', 'ASC')->pluck('nama', 'id');
        $educations = Education::orderBy('id', 'ASC')->pluck('nama', 'id');
        $religions = Religion::orderBy('id', 'ASC')->pluck('nama', 'id');
        $citizens = Citizen::orderBy('id', 'ASC')->pluck('nama', 'id');
        $sexes = Sex::orderBy('id', 'ASC')->pluck('nama', 'id');
        $rtrw = RtRw::get();

        return view('backend.kependudukan.keluarga.edit', compact('famillycardmember','provinces','works','marries','relations','bloods','educations','religions','citizens','sexes','rtrw'));

    }

    public function update(FamillyCardRequestStore $request, $kepala_keluarga)
    {
        // return $request->all();
        $famillycard = FamillyCard::findOrFail($kepala_keluarga);
        $famillycardmember = FamillyCardMember::findOrFail($kepala_keluarga);
        return $famillycardmember;
    }

    public function destroy($kepala_keluarga)
    {
        $famillycardmember = FamillyCardMember::findOrFail($kepala_keluarga);
        $famillycardmember->delete();
        return redirect()
            ->route('siode.kependudukan.kepala-keluarga.index')
            ->with('store', 'Data saved successfully');
    }

    public function viewDelete()
    {
        $famillycardmembers = FamillyCardMember::onlyTrashed()->paginate(10);
        return view('backend.kependudukan.keluarga.delete', compact('famillycardmembers'));
    }

    public function restore($kepala_keluarga)
    {
        $famillycardmembers = FamillyCardMember::withTrashed()->findOrFail($kepala_keluarga);
        $famillycardmembers->restore();

        Alert::success('Success', 'Data berhasil direstore !');
        return redirect()
            ->back()
            ->with('restore', 'Postingan Anda Berhasil Direstore (Silahkan cek list post)');
    }

    public function kill($kepala_keluarga)
    {
        $famillycardmembers = FamillyCardMember::withTrashed()->findOrFail($kepala_keluarga);
        $famillycardmembers->forceDelete();

        Alert::success('Success', 'Data berhasil berhasil dihapus secara permanent !');
        return redirect()
            ->back()
            ->with('kill', 'Postingan Anda Berhasil Dihapus Secara Permanent');
    }
}