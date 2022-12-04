<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\FamillyCard;
use Illuminate\Http\Request;
use App\Models\FamillyCardMember;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        $famillycards = FamillyCard::count();
        $famillycardmembers = FamillyCardMember::count();
        $jenispekerjaan = Work::orderBy('nama')->get();
        $rt1 = FamillyCard::get()->groupBy('rt');
        $rw = FamillyCard::get()->groupBy('rw');
        return view('dashboard.index', compact('famillycards', 'famillycardmembers','jenispekerjaan', 'rt1', 'rw'));
    }
}