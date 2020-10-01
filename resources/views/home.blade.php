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

     
    </div>
    </div>

    @endsection
    @section('scripts')

  
    </script>
    @endsection
    