@extends('layouts.survey')
@section('csstyles')
<style>

    #nama_karyawan{
        text-transform: capitalize !important;
        color: #2F318B !important;
    }
    .form-control[readonly]{
        background-color: #ffffff !important;
        pointer-events: auto !important;
    }

    .alert-warning {
        color: none !important;
    background-color: none !important;
    border-color: none !important;
        color: red !important;
    }
  
</style>

@endsection
@section('content_survey')                   
<div class="row row-div"> 
    <div class="col-lg-6" style="margin:auto; padding:0;">

        <div class="card-box" style="border-radius: 0;">
            <div id="top-wizard">
                        {{-- @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block" style="font-size:10px !important; height:10px !important;">
                            <button type="button" class="close" data-dismiss="alert" style="font-size:10px !important;">×</button> 
                            <p>{{ $message }}</p>
                        </div>
                        @endif --}}

                     

                        @if ($message = Session::get('warning'))
                        <div class="alert alert-warning alert-block"style="font-size:10px !important; height:10px !important; margin-top: -18px; background-color:none !important; border:none !important">
                            <button type="button" class="close" data-dismiss="alert" style="font-size:10px !important;">×</button> 
                            <p style="text-align:justify center; ">{{ $message }}</p>
                        </div>
                        @endif

                <h4 class="header_title" style="text-align: center;">Self Health Declaration</h4>
                <p class="sub-header" style="text-align: center;">Puninar Group</p>

                <div class="gambar">
                    <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xl rounded-circle">
                </div>
            </div>
            <form class="parsley-examples" action="{{ route('kuisioner-1-harian-step-2')}}" method="post"novalidate="false" id="dataKaryawan">
                @csrf
               
                <input type="hidden" name="questionare_id" value="1" id="questionare_id">
                <div class="form-group">
                    <label>Tanggal Bekerja</label>
                    <div>
                    <div class="input-group">
                    
                    <input type="text" class="form-control" style="width: 100% !important;" placeholder="dd-mm-yyyy" id="tgl_bekerja" required name="tgl_kerja" autocomplete="off" readonly   />
                    {{-- <div class="input-group-append"><span class="input-group-text"><i class=""></i></span>
                    </div> --}}
                    </div><!-- input-group -->
                    </div>
                </div>

                <div class="form-group">
                    <label>Sistem Kerja</label>
                    <div>
                    
                    <select class="form-control select2" data-toggle="select2" id="sistem_kerja" required name="sistem_kerja">
                        <option></option>
                        <option val="wfo">WFO (Work From Office)</option>
                        <option val="wfh">WFH (Work From Home)</option>
                    </select>
                   
                    </div>
                </div>
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <div>
                        <input type="text" class="form-control" minlength="4" maxlength="25" placeholder="Masukan nama" required name="name" id="nama_karyawan" />
                    </div>
                </div>
                 
                <div class="form-group">
                    <label>NIK</label>
                    <div>
                        <input  type="text" minlength="4" maxlength="10"  class="form-control" required placeholder="19XXXXX" name="npk"style="text-transform:uppercase" onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)" />
                    </div>
                </div>

                <div class="form-group">
                    <label>Pilih Perusahaan</label>
                    <div>
                <select class="form-control select2" data-toggle="select2" id="pilih_perusahaan" required name="perusahaan">
                    <option></option>
                    @foreach($perusahaan as $p)
                    <option>{{$p->name}}</option>
                    @endforeach
                    
                </select>
                    </div>
                </div>

                <div class="form-group" style="display:none;">
                    <label>Pilih Divisi</label>
                    <div>
                <select class="form-control select2" data-toggle="select2" id="pilih_divisi" required name="divisi">
                    <option></option>
                    <option selected="true">Divisi</option>
                    @foreach($divisi as $d)
                    <option>{{ $d->name}}</option>
                    @endforeach
                </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>No Ponsel</label>
                    <div>
                        <input  type="text" class="form-control" minlength="9" maxlength="16" required placeholder="081-XXX-XXX-XX " name="no_ponsel" id="no_ponsel"  onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)" />
                    </div>
                </div>

                <div class="form-group" style="display:none;">
                    <label>Alamat Tinggal</label>
                    <div>
                        <input  type="text" class="form-control" required placeholder="Tulis alamat tinggal " value="Puninar Cakung" name="alamat_tinggal" id="alamat_tinggal" />
                    </div>
                </div>
                <div class="form-group mb-0" style="">
                    <div>
                        <button type="submit" class="btn_custom btn btn-primary btn-block waves-effect waves-light mr-1" id="btn_masuk">
                            MASUK
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jsricpt')   
<script> 
$(document).ready(function() {

    var date = new Date();
      var today = date.getTime(); 
      var nextday = new Date(today+86400000);                       
  $("#tgl_bekerja").datepicker({
      autoclose: !0,
      todayHighlight: !0,
      format: 'dd-mm-yyyy',
      startDate: new Date(),
      endDate: nextday,

     
  });  

  $('#sistem_kerja').select2({
      placeholder: "Pilih sistem kerja",
  });

  $('#pilih_divisi').select2({
      placeholder: "Pilih divisi",
  });
  $('#pilih_perusahaan').select2({
      placeholder: "Pilih perusahaan",
  });

 



  function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
      textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
          this.value = "";
      }
      });
  });
  }

  setInputFilter(document.getElementById("nama_karyawan"), function(value) {
  return /^[a-z ]*$/i.test(value); 
  });
  setInputFilter(document.getElementById("no_ponsel"), function(value) {
  return /^\d*$/.test(value); 
  });

 

      
       javascript:window.history.forward(1);
  })
</script>
                   
@endsection