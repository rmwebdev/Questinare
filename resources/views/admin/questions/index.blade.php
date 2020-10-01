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
                    <h4 class="header-title">
                        @can('questionare_create')
                        <a class="btn btn-success" href="{{$questionare->id}}/questions/create">
                           Tambah Pertanyaan
                        </a>
                        @endcan

                       

                    </h4>
                    <p class="sub-header">
                    </p>

                    @foreach ($questionare->questions as $question)
                    <div class="card mt-4">
                        <div class="card-header">{{$question->question}} (Score : {{ $question->score }})</div>
                        <div class="card-body">
                        <ul class="list-group">
                            @foreach ($question->answers as $answer)
                            <li class="list-group-item d-flex justify-content-between">
                                <div>{{ $answer->answer }} </div>
                                {{-- @if($question->responses->count())
                                <div>{{ intval(($answer->responses->count() * 100) / $question->responses->count()) }} %</div>
                                @endif --}}
                            </li>
                            @endforeach
                          </ul>
                        </div>
                        <div class="card-footer">
                        <form action="{{url('admin/questionares/'.$questionare->id. '/questions/'.$question->id)}}" method="post">
                                @csrf 
                                @method('DELETE')
        
                                <button type="submit" class="btn btn-danger btn-small">Hapus Pertanyaan</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
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
