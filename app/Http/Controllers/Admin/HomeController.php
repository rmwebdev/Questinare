<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Survey;
use Illuminate\Support\Facades\DB;

class HomeController
{
    public function index()
    {
        $tgl_hari_ini = date('d-m-Y H:i:s');

        $tgl_kerja = date('Y-m-d');

        $tgl_kerja1 = date('d-m-Y');

        $ttl_res = Survey::where('tgl_kerja', $tgl_kerja)
        ->count();

        $ttl_res_pulog = Survey::where('tgl_kerja', $tgl_kerja)->where('perusahaan', 'PULOG (PSR, Multiland, Puninar Jaya)')->count();
        $ttl_res_lsbl = Survey::where('tgl_kerja', $tgl_kerja)->where('perusahaan', 'LSBL (Lintas Samudra Borneo Line)')->count();
        $ttl_res_puma = Survey::where('tgl_kerja', $tgl_kerja)->where('perusahaan', 'PUMA (Puninar Mitra Abadi)')->count();
        $ttl_res_pir = Survey::where('tgl_kerja', $tgl_kerja)->where('perusahaan', 'PIR (Puninar Infinite Raya)')->count();
        $ttl_res_pfu = Survey::where('tgl_kerja', $tgl_kerja)->where('perusahaan', 'PFU (Puninar Fueller)')->count();

       

        return view('home', compact(['tgl_hari_ini', 'ttl_res','ttl_res_pulog','ttl_res_lsbl','ttl_res_puma','ttl_res_pir','ttl_res_pfu','tgl_kerja1']));
    }

    public function dataDashboard()
    {
        $data = DB::table('surveys as sv')
                ->select('*')
                ->leftJoin('answer_details AS ans', 'sv.id', 'ans.survey_id')
                ->orderBy('sv.created_at', 'ASC')
                ->get();

        return json_encode($data);
    }
}