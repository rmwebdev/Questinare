<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Models\Divisi;
use App\Models\Survey;
use App\Models\Perusahaan;
use App\Models\Questionare;
use App\Models\AnswerDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class SurveyController extends Controller
{
    
    public function show(Questionare $questionare)
    {


        $divisi = Divisi::all();
        $perusahaan = Perusahaan::all();
        return view('admin.survey.show_public_data', compact(['questionare', 'divisi', 'perusahaan']));


    }
    
    public function show_survey()
    {
        return view('admin.survey.take_survey');
    }

    public function survey_absen(Request  $request)
    {
        $tgl_kerja = date('Y-m-d', strtotime($request->tgl_kerja));
        $npk = strtoupper($request->npk);


        // dd($request->all());

        // dd($tgl_kerja);
        // $cheking = DB::table('surveys')->select('*')->where('tgl_kerja', $tgl_kerja)->where('name', $request->name)->where('npk', $request->npk)->count();
        $cheking = DB::table('surveys')
                    ->where('tgl_kerja', '=', $tgl_kerja)
                    ->where('npk', '=', $npk)
                    ->count();

        // dd($cheking);
        $data_survey = $request->all();

        // if($cheking < 3){

            if($request->sistem_kerja =='WFH (Work From Home)'){ 

                $survey = new Survey();
                $survey->name =strtoupper($request->name);
                $survey->tgl_kerja = date('Y-m-d', strtotime($request->tgl_kerja));
                $survey->sistem_kerja =$request->sistem_kerja;
                $survey->npk = strtoupper($request->npk);
                $survey->perusahaan =$request->perusahaan;
                $survey->divisi =$request->divisi;
                $survey->no_ponsel =$request->no_ponsel;
                $survey->questionare_id =1;
                $survey->score_ks = 0;
                $survey->wfh_wfo ='WFH (Work From Home)';
                $survey->save();
        
                $answers = new AnswerDetail();
                $answers->questionare_id = 1;
                $answers->survey_id = $survey->id;
                $answers->npk = $request->npk;
                $answers->save();

            return view('admin.survey.showWFH', compact(['data_survey']));

            } else {
            
            return view('admin.survey.take_survey', compact('data_survey'));
            }

        // } else {

        //     return redirect('/')->with(['warning' => 'Anda hanya boleh mengisi 2 kali']);;
        // }
    }

    public function save_data_response_wfh(Questionare $questionare,Request  $request)
    {
        

        return redirect('/');
    }

    public function save_survey_wfo_absen(Questionare $questionare, Request $request)
    {
        $data_survey = $request->all();
        $score = 0;
        for ($i=0; $i < 9 ; $i++) { 
            $score += intVal($request['question_'.($i+1)]);
        }


        $suggestion = 'WFO (Work From Office)';

        if($score > 4 ){
        $suggestion ='WFH (Work From Home)';
        }

        // dd(date('Y-m-d', strtotime($request->tgl_kerja)));
        $survey = new Survey();
        $survey->name =strtoupper($request->name);
        $survey->tgl_kerja = date('Y-m-d', strtotime($request->tgl_kerja));
        $survey->sistem_kerja =$request->sistem_kerja;
        $survey->npk = strtoupper($request->npk);
        $survey->perusahaan =$request->perusahaan;
        $survey->divisi =$request->divisi;
        $survey->no_ponsel =$request->no_ponsel;
        $survey->questionare_id =1;
        $survey->score_ks =$score;
        $survey->wfh_wfo =$suggestion;
        $survey->save();

        $answers = new AnswerDetail();
        $answers->questionare_id = $survey->questionare_id;
        $answers->survey_id = $survey->id;
        $answers->npk = $survey->npk;
        $answers->question_1 = $request->question_1;
        $answers->subject_1 = $request->question_1_text;
        $answers->question_2 = $request->question_2;
        $answers->subject_2 = $request->question_2_text;
        $answers->question_3 = $request->question_3;
        $answers->subject_3 = $request->question_3_text;
        $answers->question_4 = $request->question_4;
        $answers->subject_4 = $request->question_4_text;
        $answers->question_5 = $request->question_5;
        $answers->subject_5 = $request->question_5_text;
        $answers->question_6 = $request->question_6;
        $answers->subject_6 = $request->question_6_text;
        $answers->question_7 = $request->question_7;
        $answers->subject_7 = $request->question_7_text;
        $answers->question_8 = $request->question_8;
        $answers->subject_8 = $request->question_8_text;
        $answers->question_9 = $request->question_9;
        $answers->subject_9 = $request->question_9_text;
        $answers->save();

       if($score > 4 ){
        
       return view('admin.survey.showWFH', compact(['data_survey', 'score']));

       } else {

        return view('admin.survey.showWFO', compact(['data_survey', 'score']));

       }
    }

    public function save_data_response_wfo(Questionare $questionare,Request  $request)
    {
        return redirect('/');
    }
}


