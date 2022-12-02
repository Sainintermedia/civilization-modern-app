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
        // return $rt1;
        // $rt2 = FamillyCard::whereRt(2)->count();
        // $rt3 = FamillyCard::whereRt(3)->count();
        // $rt4 = FamillyCard::whereRt(4)->count();
        // $rt5 = FamillyCard::whereRt(5)->count();
        // $rt6 = FamillyCard::whereRt(6)->count();
        return view('dashboard.index', compact('famillycards', 'famillycardmembers','jenispekerjaan', 'rt1', 'rw'));
    }
}