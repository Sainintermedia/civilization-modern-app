<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Education;
use App\Models\FamillyCard;
use Khill\Lavacharts\Lavacharts;
use App\Models\FamillyCardMember;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $famillycards = FamillyCard::count();
        $famillycardmembers = FamillyCardMember::count();
        $jenispekerjaan = Work::orderBy('nama')->get();
        $rt1 = FamillyCard::get()->groupBy('rt');
        $rw = FamillyCard::get()->groupBy('rw');

        $education = Education::select('id', 'nama')
            ->get()
            ->keyBy('id', 'name')
            ->toArray();
        $pendidikan = FamillyCardMember::with('educat')
            ->selectRaw('pendidikan as pendidikan, COUNT(*) as count')
            ->groupBy(DB::raw('pendidikan'))
            ->orderBy('pendidikan', 'asc')
            ->get()
            ->toArray();

        $chart_array = [];
        foreach ($pendidikan as $key => $pend) {
            $p_dik = [];
            array_push($p_dik, $pend['educat'], $pend['count']);
            array_push($chart_array, $p_dik);
        }

        $total = FamillyCardMember::select('pendidikan')->count();
        $pen = \Lava::DataTable();
        $pen->addStringColumn('Pendidikan')
            ->addNumberColumn("Total = $total")
            ->addRows($chart_array);

        $pedi = \Lava::DonutChart('pendi', $pen, [
            'title' => 'Pendidikan',
        ]);
        $edu = \Lava::BarChart('pen', $pen);

        return view('dashboard.index', compact('famillycards', 'famillycardmembers', 'jenispekerjaan', 'rt1', 'rw'));
    }
}