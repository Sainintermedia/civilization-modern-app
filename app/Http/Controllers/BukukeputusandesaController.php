<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukukeputusandesaController extends Controller
{
    public function index()
    {
        return view('backend.info_desa.pemerintahandesa.bukukeputusandesa');
    }
}
