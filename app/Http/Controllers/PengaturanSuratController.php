<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengaturanSurat;
use App\Http\Controllers\Controller;

class PengaturanSuratController extends Controller
{
    public function index()
    {
        $pengaturansurat = PengaturanSurat::paginate(10);
        
        return view('backend.layanan_surat.pengaturan_surat.index', compact('pengaturansurat'));
    }
    
    public function create()
    {
        return view('backend.layanan_surat.pengaturan_surat.create');
    }
}