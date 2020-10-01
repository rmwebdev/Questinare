@extends('layouts.admin')
@section('styles')
<style>
/* .dt-buttons {
    display: none !important;
} */
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
                <h4 class="page-title">KUESIONER</hh4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="header-title">
                        @can('questionare_create')
                        <a class="btn btn-success" href="{{ route('admin.questionares.create') }}">
                           Tambah Kuesioner
                        </a>
                        @endcan
                    </h4>
                    <p class="sub-header">
                    </p>

                    <table id="tbl_questionare" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                            <tr>
                                <th width="10">No</th>
                                <th>Tanggal Buat</th>
                                <th>Nama Kuesioner</th>
                                <th>Link Kuesioner</th>
                                <th>Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questionares as $key => $questionare)
                            <tr>
                                
                                <td>{{ $key+1 }}</td>
                                <td>{{date('d-m-yy', strtotime($questionare->created_at))}}</td>
                                <td>{{$questionare->title}}</td>
                                <td>{{ $questionare->publicPath() }}</td>
                                <td>
                                    @can('questionare_show')
                                    <a class="btn btn-xs btn-primary" href="{{ $questionare->publicPath() }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('questionare_edit')
                                    <a class="btn btn-xs btn-warning" href="">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('question_create')
                                    <a class="btn btn-xs btn-info" href="{{ $questionare->path() }}">
                                        Buat Pertanyaan
                                    </a>
                                @endcan
                                </td>                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
        <!-- end row -->
</div>

@endsection
@section('scripts')
@parent
<script>
$(function () {
  let table = $('#tbl_questionare').DataTable({
        
        "lengthChange": false,
        // sort:false,
        "serverSide": false,
        "searching": true,
        info:false,
        fixedHeader: false,
        responsive:false,
        "bAutoWidth": false,
        pageLength : 10,
        "sScrollX": true,
        "sScrollXInner": "100%",
        "bScrollCollapse": true,
        "oLanguage": {
            "oPaginate": {
                "sPrevious": "<<",
                "sNext" : ">>"
            }
        }
  })


})
</script>
@endsection
