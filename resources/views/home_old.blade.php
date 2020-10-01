@extends('layouts.admin')
@section('title', 'Dashboard CMS KUESIONER')
@section('styles')

<link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />


<link href="{{ asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
<link href="{{ asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
<style>

    #datatable-buttons_filter{
        display: none !important; 
    }
    
    .select2-container{
        width: 100% !important;
        height: 50px !important;
        
    }
    .select2-selection__rendered {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 12px;
    }
    .select2-container .select2-selection--single {
        height: 36px !important;
        }
    
    .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 36px !important;
        }
    
    #datatable-buttons_info {
        display: none !important;
    }
    
    #datatable-buttons_paginate{
        width: 50% !important;
        float: right !important;
        margin-top: 10px !important;
    }
    .btn-secondary{
        background-color: #64c5b1 !important;
        border: #64c5b1 solid ;
        margin-top: 10px !important;
        height: 36px !important;
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
                <h4 class="page-title">Dashboard &nbsp; <span class="" style="color: #1A1B50; ">{{ $tgl_hari_ini }}</span></h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

    <div class="row" style="">

        <div class="col-xl-2 col-sm-4">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    {{-- <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                    </div> --}}
                    {{-- 'tgl_hari_ini', 'ttl_res','ttl_res_pulog' --}}
                    <div class="wigdet-two-content media-body">
                        <p class="m-0 font-weight-medium text-truncate" title="Statistics">Total Response All</p>
                        <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{ $ttl_res}}</span></h3>
                        <p class="m-0">Tanggal Kerja : {{ $tgl_kerja1 }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-sm-4">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    {{-- <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                    </div> --}}

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 font-weight-medium text-truncate" title="Statistics">Total Response PULOG</p>
                        <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">{{ $ttl_res_pulog}}</span></h3>
                        <p class="m-0">Tanggal Kerja : {{ $tgl_kerja1 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-4">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    {{-- <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                    </div> --}}
                    <div class="wigdet-two-content media-body">
                        <p class="m-0 font-weight-medium text-truncate" title="Statistics">Total Response LSBL</p>
                        <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">{{ $ttl_res_lsbl }}</span></h3>
                        <p class="m-0">Tanggal Kerja : {{ $tgl_kerja1 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-4">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    {{-- <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                    </div> --}}

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 font-weight-medium text-truncate" title="Statistics">Total Response PUMA</p>
                        <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">{{$ttl_res_puma}}</span></h3>
                        <p class="m-0">Tanggal Kerja : {{ $tgl_kerja1 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-4">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    {{-- <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                    </div> --}}

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 font-weight-medium text-truncate" title="Statistics">Total Response PIR</p>
                        <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">{{ $ttl_res_pir}}</span></h3>
                        <p class="m-0">Tanggal Kerja : {{ $tgl_kerja1 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-4">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    {{-- <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                    </div> --}}

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 font-weight-medium text-truncate" title="Statistics">Total Response PFU</p>
                        <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">{{ $ttl_res_pfu }}</span></h3>
                        <p class="m-0">Tanggal Kerja : {{ $tgl_kerja1 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        
    </div>
        <div class="card-box table-responsive" style="min-height:500px !important;">

            <div class="clearfix mt-2" id="selectFilter" style="display: inline-flex; width:100% !important; margin:auto;">
                <div class="" style="margin-right:5px; width:19% !important;">
                <select name="selTglKerja" id="selTglKerja"
                    class="form-control selectreport" >
                    <option value="" selected="selected">FILTER TGL KERJA</option>
                   
                </select>
                </div>
                <div class="" style="margin-right:5px; width:19% !important;">
                <select name="selKaryawan" id="selKaryawan" class="form-control selectreport">
                    <option value="" selected="selected">FILTER KARYAWAN</option>
                </select>
                </div>
                <div class="" style="margin-right:5px; width:19% !important;">
                    <select name="selSitemKerja" id="selSitemKerja" class="form-control selectreport">
                        <option value="" selected="selected">FILTER SISTEM KERJA</option>
                    </select>
                </div>
                <div class="" style="margin-right:5px; width:19% !important;">
                    <select name="selSuggestion" id="selSuggestion" class="form-control selectreport" onClick="getExportFileName();">
                        <option value="" selected="selected">FILTER PERUSAHAAN</option>
                    </select>
                </div>
                <div class="" style="margin-right:5px; width:19% !important;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pencarian..." aria-label="Search" name="pencarian" id="pencarian" title="Cari data record di taable" >
                    {{-- <input type="text" class="form-control" style="display: inline !important;width:200px !important;vertical-align:middle !important;height: 30px; margin-bottom:10px; " placeholder="Pencarian" id="pencarian"/> --}}
                    </div>
                <div class="" style="width:20px; margin-right:6px; float:right">
                    <button type="button" class="btn" id="resetTable" style="background:transparent;border-color:transparent;" onClick="resetSearchDatatable()" title="Reset semua"><i class="fa fa-undo" style="color:#8d8ea4;"></i></button>
                </div>
                
            </div>
        <table id="datatable-buttons" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        </table>
        </div>
    </div>

    @endsection
    @section('scripts')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment-with-locales.min.js"></script>
    {{-- <script src="assets/libs/moment/moment.min.js"></script> --}}
    <script src="{{ asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('assets/libs/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    
    @parent
<script>
var table;  
$(document).ready(function() {
    $('.selectreport').select2({});
    table = $('#datatable-buttons').DataTable({ 
        info: true,
      
        ajax: {
        url: "/admin/getDataDashboard", 
        type:'POST',
        dataSrc:'',
        data : {
            type: 1,
            "_token": "{{ csrf_token() }}",
            
            }
        },
        destroy:true,
        "lengthChange": false,
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
        },
        columns: [
            { data:'id', title:'NO', className:'dt-td-center' },
            { data:'tgl_kerja', title:'Tanggal Bekerja', className:'dt-td-center',
        
        render: function(data, type, full, meta){
                if(data != ''){
                    return moment(new Date(data)).format('DD-MM-YYYY');
                    }
                    
                }
            },
            { data:'name', title:'Nama Karyawan', className:'dt-td-center' },
            { data:'npk', title:'NIK', className:'dt-td-center' },
            { data:'no_ponsel', title:'No Ponsel', className:'dt-td-center' },
            { data:'sistem_kerja', title:'Sistem Kerja', className:'dt-td-center' },
            { data:'perusahaan', title:'Company', className:'dt-td-center' },
            { data:'wfh_wfo', title:'Suggestion', className:'dt-td-center' },
            { data:'question_1', title:'1', className:'dt-td-center',
            render: function(data, type, full, meta){
                if(data == '0'){
                    return 'Tidak';
                    }
                    else if(data == null){
                        return '-';
                    }else{
                    return 'Ya';          
                    }
                }
            },
            { data:'subject_1', title:'Sub', className:'dt-td-center'},
            { data:'question_2', title:'2', className:'dt-td-center',
            render: function(data, type, full, meta){
                if(data == '0'){
                    return 'Tidak';
                    }
                    else if(data == null){
                        return '-';
                    }else{
                    return 'Ya';          
                    }
                }
            },
            { data:'subject_2', title:'Sub', className:'dt-td-center'},
            { data:'question_3', title:'3', className:'dt-td-center',
            render: function(data, type, full, meta){
                if(data == '0'){
                    return 'Tidak';
                    }
                    else if(data == null){
                        return '-';
                    }else{
                    return 'Ya';          
                    }
                }
            },
            { data:'subject_3', title:'Sub', className:'dt-td-center'},
            { data:'question_4', title:'4', className:'dt-td-center',
            render: function(data, type, full, meta){
                if(data == '0'){
                    return 'Tidak';
                    }
                    else if(data == null){
                        return '-';
                    }else{
                    return 'Ya';          
                    }
                }
            },
            { data:'subject_4', title:'Sub', className:'dt-td-center'},
            { data:'question_5', title:'5', className:'dt-td-center',
            render: function(data, type, full, meta){
                if(data == '0'){
                    return 'Tidak';
                    }
                    else if(data == null){
                        return '-';
                    }else{
                    return 'Ya';          
                    }
                }
            },
            { data:'subject_5', title:'Sub', className:'dt-td-center'},
            { data:'question_6', title:'6', className:'dt-td-center',
            render: function(data, type, full, meta){
                if(data == '0'){
                    return 'Tidak';
                    }
                    else if(data == null){
                        return '-';
                    }else{
                    return 'Ya';          
                    }
                }
            },
            { data:'subject_6', title:'Sub', className:'dt-td-center'},
            { data:'question_7', title:'7', className:'dt-td-center',
            render: function(data, type, full, meta){
                if(data == '0'){
                    return 'Tidak';
                    }
                    else if(data == null){
                        return '-';
                    }else{
                    return 'Ya';          
                    }
                }
            },
            { data:'subject_7', title:'Sub', className:'dt-td-center'},
            { data:'question_8', title:'8', className:'dt-td-center',
            render: function(data, type, full, meta){
                if(data == '0'){
                    return 'Tidak';
                    }
                    else if(data == null){
                        return '-';
                    }else{
                    return 'Ya';          
                    }
                }
            },
            { data:'subject_8', title:'Sub', className:'dt-td-center'},
            { data:'question_9', title:'9', className:'dt-td-center',
            render: function(data, type, full, meta){
                if(data == '0'){
                    return 'Tidak';
                    }
                    else if(data == null){
                        return '-';
                    }else{
                    return 'Ya';          
                    }
                }
            },
            { data:'subject_9', title:'Sub', className:'dt-td-center'},
            
        ],
        

        initComplete: function() {

        var column = this.api().column(1);

        var select = $('#selTglKerja').on('change', function() {
            var val = $(this).val();
            if(val == '' ){
                column.search('').draw();
            }
            //column.search(val ? '^' + $(this).val() + '$' : val, true, false).draw();
            column.search(val).draw();
            });

        var tgl_kerja = []; 
        column.data().toArray().forEach(function(s) {
                s = s.split(',');
            s.forEach(function(d) {
                if (!~tgl_kerja.indexOf(d)) {
                    tgl_kerja.push(d)
                select.append('<option value="' + moment(new Date(d)).format('DD-MM-YYYY') + '">' + moment(new Date(d)).format('DD-MM-YYYY') + '</option>');                     
                }
            })
        })    
        var column2 = this.api().column(2);

        var select = $('#selKaryawan').on('change', function() {
            var val2 = $(this).val();
            
            if(val2 == '' ){
                column2.search('').draw();
            } 
            column2.search(val2).draw();
            });
            

        var name = []; 
        column2.data().toArray().forEach(function(s) {
                s = s.split(',');
            s.forEach(function(d) {
                if (!~name.indexOf(d)) {
                    name.push(d)
                select.append('<option value="' + d + '">' + d + '</option>');                      
            }
            })
        }) 
        var column3 = this.api().column(5);

        var select = $('#selSitemKerja').on('change', function() {
            var val3 = $(this).val();
            if(val3 == '' ){
                column3.search('').draw();
            } 
            column3.search(val3).draw();
            });
            

        var sistem_kerja = []; 
        column3.data().toArray().forEach(function(s) {
                s = s.split(',');
            s.forEach(function(d) {
                if (!~sistem_kerja.indexOf(d)) {
                    sistem_kerja.push(d)
                select.append('<option value="' + d + '">' + d + '</option>');                     
                }
            })
        })
        var column4 = this.api().column(6);

        var select = $('#selSuggestion').on('change', function() {
            var val4 = $(this).val();
            if(val4 == '' ){
                column4.search('').draw();
            } 
            column4.search(val4).draw();
            });
            

        var perusahaan = []; 
        column4.data().toArray().forEach(function(s) {
                s = s.split('-');
            s.forEach(function(d) {
                if (!~perusahaan.indexOf(d)) {
                    perusahaan.push(d)
                select.append('<option value="' + d + '">' + d + '</option>');                     
                }
            })
        })   


        },



        });


    table.on('order.dt search.dt', function () {
            table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
            table.cell(cell).invalidate('dom');
        });
    }).draw();

    $('#pencarian').on( 'keyup', function () {
        table.search( this.value ).draw();
    });
})


    
    function resetSearchDatatable() {
        $('#pencarian').val('');
        location.reload();
        // $('#datatable-buttons').DataTable().ajax.reload();
        }

    </script>
    @endsection
    