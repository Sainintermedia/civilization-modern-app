<?php

namespace App\Http\Controllers;

use Faker\Factory;
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
use Illuminate\Support\Carbon;
use App\Models\FamillyCardMember;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravolt\Indonesia\Models\Province;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\FamillyCardRequestStore;
use Symfony\Component\HttpKernel\Profiler\Profile;

class FamillyCardController extends Controller
{
    public function index()
    {
        $famillycardmembers = FamillyCardMember::whereSts_hub_kel(1)
            ->latest()
            ->with(['famillycard' => function ($q){
                $q->with(['districts','villages']);
            }])
            ->paginate(10);

        // $faker = Factory::create();
        //     $jumlahdata = 100;
        //     for ($i=1; $i <= $jumlahdata; $i++) {
        //         $data = [
        //             'no_kk' => $faker->numberBetween($min = 1, $max = 10),
        //             'no_nik' => $faker->unique()->numberBetween($min = 3603021404970001, $max = 3603021404980001),
        //             'nama' => $faker->name(),
        //             'jenkel' => $faker->numberBetween($min = 1, $max = 2),
        //             'tgl_lahir' => $faker->date('Y_m_d'),
        //             'tmpt_lahir' => $faker->city(),
        //             'agama' => $faker->numberBetween($min = 1, $max = 7),
        //             'pendidikan' => $faker->numberBetween($min = 1, $max = 20),
        //             'jns_pekerjaan' => $faker->numberBetween($min = 1, $max = 80),
        //             'sts_perkawinan' => $faker->numberBetween($min = 1, $max = 4),
        //             'tgl_perkawinan' => $faker->date('Y_m_d'),
        //             'gol_darah' => $faker->numberBetween($min = 1, $max = 13),
        //             'sts_hub_kel' => $faker->numberBetween($min = 1, $max = 11),
        //             'sts_kwn' => $faker->numberBetween($min = 1, $max = 3),
        //             'nm_ayah' => $faker->firstNameMale(),
        //             'nm_ibu' => $faker->firstNameFemale(),
        //             'nik_ayah' => $faker->unique()->numberBetween($min = 3603021505220003, $max = 3603021505221003),
        //             'nik_ibu' => $faker->unique()->numberBetween($min = 3603021505220003, $max = 3603021505221003),
        //             // 'sts_mati' => $faker->numberBetween($min = 0, $max = 1),
        //             'no_paspor' => $faker->unique()->numberBetween($min = 1000000, $max = 5000000),
        //             'no_kitap' => $faker->unique()->numberBetween($min = 1000000, $max = 5000000),
        //             'user_id' => $faker->numberBetween($min = 1, $max = 10),
        //             'created_at' => $faker->dateTime(),
        //         ];
        //         $alamat = [
        //             'no_kk' => $faker->unique()->numberBetween($min = 3603021505220003, $max = 3603021505221003),
        //             'kp' => $faker->country(),
        //             'rt' => $faker->numberBetween($min = 1, $max = 6),
        //             'rw' => $faker->numberBetween($min = 1, $max = 6),
        //             'kodepos' => $faker->numberBetween($min = 15610, $max = 19990),
        //             'desa' => $faker->numberBetween($min = 3603022001, $max = 3603022001),
        //             'kecamatan' => $faker->numberBetween($min = 360302, $max = 360302),
        //             'kabkot' => $faker->numberBetween($min = 3603, $max = 3603),
        //             'provinsi' => $faker->numberBetween($min = 36, $max = 36),
        //         ];

        //         FamillyCardMember::create($data);
        //         FamillyCard::create($alamat);
        //     }

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

        return view('backend.kependudukan.keluarga.create', compact('provinces', 'works', 'marries', 'relations', 'bloods', 'educations', 'religions', 'citizens', 'sexes', 'rtrw'));
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
        // return $kepala_keluarga;
        $famillycard = FamillyCard::with(['famillycardmembers' => function ($q){
            $q->orderBy('sts_hub_kel', 'ASC');
        }])->findOrFail($kepala_keluarga);
        $tgl = Carbon::now();
        return view('backend.kependudukan.keluarga.view', compact('famillycard', 'tgl'));
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

        return view('backend.kependudukan.keluarga.edit', compact('famillycardmember', 'provinces', 'works', 'marries', 'relations', 'bloods', 'educations', 'religions', 'citizens', 'sexes', 'rtrw'));
    }

    public function update(FamillyCardRequestStore $request, $kepala_keluarga)
    {
        $d = $request->all();
        $famillycard = FamillyCard::findOrFail($request->famillyid)->update([
            'no_kk' => $d['no_kk'],
            'kp' => $d['kp'],
            'rt' => $d['rt'],
            'rw' => $d['rw'],
            'kodepos' => $d['kodepos'],
            'desa' => $d['desa'],
            'kecamatan' => $d['kecamatan'],
            'kabkot' => $d['kabkot'],
            'provinsi' => $d['provinsi'],
        ]);
        $famillycardmember = FamillyCardMember::findOrFail($kepala_keluarga)->update([
            'no_kk' => $d['famillyid'],
            'no_nik' => $d['no_nik'],
            'nama' => $d['nama'],
            'jenkel' => $d['jenkel'],
            'tgl_lahir' => $d['tgl_lahir'],
            'tmpt_lahir' => $d['tmpt_lahir'],
            'agama' => $d['agama'],
            'pendidikan' => $d['pendidikan'],
            'jns_pekerjaan' => $d['jns_pekerjaan'],
            'gol_darah' => $d['gol_darah'],
            'sts_perkawinan' => $d['sts_perkawinan'],
            'tgl_perkawinan' => $d['tgl_perkawinan'],
            'sts_hub_kel' => $d['sts_hub_kel'],
            'sts_kwn' => $d['sts_kwn'],
            'nm_ayah' => $d['nm_ayah'],
            'nm_ibu' => $d['nm_ibu'],
            'nik_ayah' => $d['nik_ayah'],
            'nik_ibu' => $d['nik_ibu'],
            'no_paspor' => $d['no_paspor'],
            'no_kitap' => $d['no_kitap'],
        ]);
        Alert::success('Success', 'Data berhasil diupdate !');
        return redirect()
            ->route('siode.kependudukan.kepala-keluarga.index')
            ->with('store', 'Data saved successfully');
    }

    public function destroy($kepala_keluarga)
    {
        $famillycardmember = FamillyCardMember::findOrFail($kepala_keluarga);
        $famillycardmember->delete();
        return redirect()
            ->back()
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