<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\Questionare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionareRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\UpdateQuestionareRequest;
use App\Http\Requests\MassDestroyQuestionareRequest;

class QuestionareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'Oke';
        $questionares = Questionare::all();

        return view('admin.questionares.index', compact('questionares'));
        // return view('admin.questionares.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questionares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $questionare = auth()->user()->questionnares()->create($request->all());

        return redirect()->route('admin.questionares.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questionare  $questionare
     * @return \Illuminate\Http\Response
     */
    public function show(Questionare $questionare)
    {
        

        $questionare->load('questions.answers.responses');

        
        return view('admin.questions.index',compact('questionare'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questionare  $questionare
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionare $questionare)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionare  $questionare
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionareRequest $request, Questionare $questionare)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionare  $questionare
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionare $questionare)
    {
        
    }



    public function massDestroy(MassDestroyQuestionareRequest $request)
    {
        Questionare::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
