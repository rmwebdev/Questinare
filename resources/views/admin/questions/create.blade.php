@extends('layouts.admin')
@section('styles')
<style>
.dt-buttons {
    display: none !important;
}
#DataTables_Table_0_length{
    display: none !important; 
}

</style>
@endsection
@section('content')

<div class="container-fluid">

    @if(session('status'))
    <div class="alert alert-success" role="alert">
    {{ session('status') }}
    </div>
    @endif

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Kuesioner {{$questionare->title}}</hh4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">

                    <div class="card-body">
                        <form method="post" action="{{ url('admin/questionares/'. $questionare->id. '/questions')}}">
                            @csrf
                            @method('POST')
    
                            <div class="form-group">
                                <legend class="">Pertanyaan</legend>
                                <input type="text" class="form-control" name="question[question]" 
                            value="{{ old('question.question')}}" id="question" aria-describedby="questionHelp" placeholder="Tulis pertayaan">
                            @error('question.question') <small  class=" text-danger">{{$message}}</small>@enderror
                              </div>
    
                              <div class="form-group">
                                <fieldset>
                                    <legend class="">Jawaban</legend>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="answer1">Jawaban 1</label>
                                            <input type="text" class="form-control" name="answers[][answer]" 
                                            value="{{ old('answer.0.answer')}}"id="answer1"aria-describedby="choichesHelp" placeholder="Enter answer 1">
    
    
                                            @error('answers.0.answer') 
                                            <small  class=" text-danger" style="color:red !important">{{$message}}</small>
                                            @enderror
                                          </div>
                                    </div>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="answer">Jawaban 2</label>
                                            <input type="text" class="form-control" name="answers[][answer]" 
                                            value="{{ old('answer.1.answer')}}"id="answer2"aria-describedby="choichesHelp" placeholder="Enter answer 2">
    
    
                                            @error('answers.1.answer') 
                                            <small class="text-danger" style="color:red !important">{{$message}}</small>
                                            @enderror
                                          </div>
                                    </div>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="score">Score </label>
                                            <input type="number" class="form-control" name="question[score]" 
                                            value="{{ old('question.score')}}"id="score"aria-describedby="choichesHelp" placeholder="Tulis score">
    
    
                                            @error('question.score')
                                            <small  class="text-danger" style="color:red !important">{{$message}}</small>
                                            @enderror
                                          </div>
                                    </div>

                                </fieldset>
                              </div>
                             
                              <button type="submit" class="btn btn-primary">Tambah Pertayaan</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
        <!-- end row -->
</div>

@endsection
@section('scripts')




@parent
<script>

$(document).ready(function() {
        


    });

</script>
@endsection
