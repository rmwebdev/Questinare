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
                <h4 class="page-title">PERMISSIONS</hh4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="header-title">
                        @can('permission_create')
                        <a class="btn btn-success" href="{{ route('admin.permissions.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.permission.title_singular') }}
                        </a>
                        @endcan

                    </h4>
                    <p class="sub-header">
                    </p>

                    <table id="tbl_permission" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                            <tr>
                                <th width="10">No</th>
                                <th>Nama Permission</th>
                                <th>Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permissions as $key => $permission)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $permission->title ?? '' }}</td>
                                <td>
                                    @can('permission_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.permissions.show', $permission->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('permission_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.permissions.edit', $permission->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('permission_delete')
                                    <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
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
  let table = $('#tbl_permission').DataTable({
        
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
