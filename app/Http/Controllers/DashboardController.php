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
        $rt1 = FamillyCard::whereRt(1)->count();
        $rt2 = FamillyCard::whereRt(2)->count();
        $rt3 = FamillyCard::whereRt(3)->count();
        $rt4 = FamillyCard::whereRt(4)->count();
        $rt5 = FamillyCard::whereRt(5)->count();
        return view('dashboard.index', compact('famillycards', 'famillycardmembers','jenispekerjaan', 'rt1', 'rt2','rt3','rt4','rt5'));
    }
}