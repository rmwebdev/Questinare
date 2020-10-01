<?php

namespace App\Http\Controllers\Admin;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReportQuesionare extends Controller
{
    public function index()
    {
        
        

        $perusahaan = Perusahaan::all();

        return view('admin.report.index', compact('perusahaan'));
    }

    public function getDataReport(Request $request)
    {
        
       
        $date_from = date('Y-m-d', strtotime($request->date_form));
        
        $date_to = date('Y-m-d', strtotime($request->date_to));

        $company = Auth::user()->perusahaan;

        if($company == 'Puninar All' || $company == ''){
        $data = DB::table('surveys as sv')
                ->select('*')
                ->leftJoin('answer_details AS ans', 'sv.id', 'ans.survey_id')
                ->whereBetween(DB::raw('DATE(sv.created_at)'), array($date_from, $date_to))
                ->orderBy('sv.created_at', 'ASC')
                ->get();
        } else if ($company == 'PUMA - LSBL') {
            $data = DB::table('surveys as sv')
                ->select('*')
                ->leftJoin('answer_details AS ans', 'sv.id', 'ans.survey_id')
                ->whereBetween(DB::raw('DATE(sv.created_at)'), array($date_from, $date_to))
                ->whereIn('sv.perusahaan', array('LSBL (Lintas Samudra Borneo Line)','PUMA (Puninar Mitra Abadi)'))
                ->orderBy('sv.created_at', 'ASC')
                ->get();
        } else{
            $data = DB::table('surveys as sv')
                ->select('*')
                ->leftJoin('answer_details AS ans', 'sv.id', 'ans.survey_id')
                ->whereBetween(DB::raw('DATE(sv.created_at)'), array($date_from, $date_to))
                ->where('sv.perusahaan', $company)
                ->orderBy('sv.created_at', 'ASC')
                ->get();
        }

        return json_encode($data);

    }

    
}
