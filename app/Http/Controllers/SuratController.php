<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\SuratSub;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuratController extends Controller
{
    public function index()
    {
        $surats = Surat::with('suratsub')->get();
        // $pluk = Surat::with('suratsub')->pluck('no_srt');
        // return $pluk;
        $sub = SuratSub::with('surats')->whereNo_srt(001)->get();
        return $sub;
        return view('backend.layanan_surat.pengaturan_surat.index', compact('surats'));
    }

    public function edit($surat)
    {
        $nik = '16516518156';
        // $srt = Surat::with('suratsub:id,no_srt,jns_srt')->findOrFail($surat);
        // $srt = Surat::with(['suratsub' => function ($q){
        //     $q->select('id','jns_srt','no_srt', 'nik')->whereNik('5131513651');
        // }])->findOrFail($surat);
        $srt = Surat::with(['suratsub' => function ($q) use ($nik){
            $q->select('id','jns_srt','no_srt', 'nik')->whereNik($nik);
        }])->findOrFail($surat);
        return $srt;
    }
}