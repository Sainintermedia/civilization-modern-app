<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\FamillyCard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        $famillycards = FamillyCard::withCount('famillycardmembers')->get();
        $jenispekerjaan = Work::orderBy('nama')->get();
        // return $jenispekerjaan;
        return view('dashboard.index', compact('famillycards','jenispekerjaan'));
    }
}