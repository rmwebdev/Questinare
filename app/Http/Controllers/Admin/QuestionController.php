<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\Question;
use App\Models\Questionare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $questions = Question::all();

        return view('admin.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Questionare $questionare)
    {
        
        return view('admin.questions.create', compact('questionare'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Questionare $questionare)
    {

        
        $data = request()->validate([
            'question.question' => 'required',
            'question.score' => 'required',
            'answers.*.answer' => 'required',
        ]);

        $question = $questionare->questions()->create($data['question']);

        $question->answers()->createMany($data['answers']);

        return redirect('admin/questionares/' . $questionare->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionare $questionare, Question $question)
    {
        $question->answers()->delete();
        $question->delete();

        return redirect($questionare->path());
    }
}
