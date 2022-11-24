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

    public function store(Request $request)
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
        // return $famillycard;

        $famillycardmember = new FamillyCardMember();
        $famillycardmember->no_nik = $d['no_kk'];
        $famillycardmember->no_kk = $d['no_nik'];
        $famillycardmember->nama = $d['nama'];
        $famillycardmember->jenkel = $d['jenkel'];
        $famillycardmember->tgl_lahir = $d['tgl_lahir'];
        $famillycardmember->tmpt_lahir = $d['tmpt_lahir'];
        $famillycardmember->agama = $d['agama'];
        $famillycardmember->pendidikan = $d['pendidikan'];
        $famillycardmember->jns_pekerjaan = $d['jns_pekerjaan'];
        $famillycardmember->gol_darah = $d['gol_darah'];
        $famillycardmember->sts_perkawinan = $d['sts_perkawinan'];
        $famillycardmember->tgl_perkawinan = $d['tgl_perkawinan'];
        $famillycardmember->sts_hub_kel = $d['sts_hub_kel'];
        $famillycardmember->sts_kwn = $d['sts_kwn'];
        $famillycardmember->nm_ayah = $d['nm_ayah'];
        $famillycardmember->nm_ibu = $d['nm_ibu'];
        $famillycardmember->nik_ayah = $d['nik_ayah'];
        $famillycardmember->nik_ibu = $d['nik_ibu'];
        $famillycardmember->sts_mati = 0;
        $famillycardmember->no_paspor = $d['no_paspor'];
        $famillycardmember->no_kitap = $d['no_kitap'];
        $famillycardmember->user_id = \Auth::user()->id;
        $famillycard->famillycardmembers()->save($famillycardmember);

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

    public function update(Request $request, $kepala_keluarga)
    {
        
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