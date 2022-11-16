<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemerintahandesaController extends Controller
{
 
    public function index()
    {
        //
        return view('backend.info_desa.pemerintahandesa.index');
        //('backend.info_desa.pemerintahan_desa.index');
    }
    
   
}
