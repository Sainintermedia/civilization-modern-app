<?php

namespace App\Http\Controllers;

use App\Models\Population;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PopulationController extends Controller
{
    public function index()
    {
        return "sjdnsuo";
    }

    public function create()
    {
        
        
        return view('backend.kependudukan.populations.create');
    }

    public function store(Request $request)
    {
        $population = new Population();
        $data = $request->all();
        $population->no_kk = $data['no_kk'];
        // $population->nama_kk = $data['nama_kk'];
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
        dd($insertidpopulation);
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }
}