<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdentitasDesa;
use App\Http\Controllers\Controller;

class IdentitasController extends Controller
{
    public function index()
    {
        $identitas = IdentitasDesa::first();
        // return $identitas;
        return view('backend.info_desa.identitas_desa.index', compact('identitas'));
    }

    public function create()
    {
        return view('backend.info_desa.identitas_desa.create');
    }

    public function edit($identitas_desa)
    {
        $provinces = Province::where('code', '36')->pluck('name', 'code');
        $identitas = IdentitasDesa::findOrFail($identitas_desa);
        return view('backend.info_desa.identitas_desa.edit', compact('identitas', 'provinces'));
    }
}