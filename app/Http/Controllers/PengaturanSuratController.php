<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengaturanSurat;
use App\Http\Controllers\Controller;

class PengaturanSuratController extends Controller
{
    public function index()
    {
        $pengaturansurat = PengaturanSurat::get();
        
        return view('backend.layanan_surat.pengaturan_surat.index', compact('pengaturansurat'));
    }
    
    public function create()
    {
        return view('backend.layanan_surat.pengaturan_surat.create');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $pengaturan = new PengaturanSurat();
        $pengaturan->kop_srt = $request->kop_srt;
        $pengaturan->save();
    }
}