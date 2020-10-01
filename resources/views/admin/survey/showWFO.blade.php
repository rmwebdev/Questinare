@extends('layouts.survey')
@section('csstyles')
<style>
.dt-buttons {
    display: none !important;
}
#DataTables_Table_0_length{
    display: none !important; 
}
.has-error .select2-selection {
    border: 1px solid #a94442;
    border-radius: 4px;
}
input[type="text"]
{

 border-radius: 0px !important;
  border-top:0px !important;
  border-right:0px !important;
  border-left:0px !important;
  color: #272687;
}
[class^='select2'] {
  border-radius: 0px !important;
  border-top:0px !important;
  border-right:0px !important;
  border-left:0px !important; 
}


.select2-selection.required {
   border-color: red !important;
}
.parsley-examples{
    color: #11101b !important;
}

.btn_custom{

border-radius: 15px !important;
}

input[type=text]:read-only {
  background: #ffffff;
}
body{
    padding:0;
}

.content-page{
    margin-top:0 !important;
}

.judul {
            font-size: 21px !important;
            font-weight: bold !important;
            columns: #007bff !important;
            
        }
        .img_ {
        margin-bottom: 8px !important;  
        margin-right: 8px !important;     
    }
    .gambar{
    width:100% !important;
}

.gambar img{
    width:72px;
    height:72px;
}
.gambar h3{
    font-size: 36px;
    font-family: 'Rubik', sans-serif;
    color:#1A1B50;
    margin-top:-2% !important;
}
.gambar label{
    font-size: 18px;
    font-family: 'Rubik', sans-serif;
    color:#1A1B50;
}
#nama_karyawan{
        text-transform: capitalize !important;
    }
</style>
@endsection
@section('content_survey')                   
<div class="row" >
    <div class="col-lg-6" style="margin:auto; padding:0;">
        
        <div class="card-box" style="border-radius:0">
            <div class="gambar" style="margin:auto; display: table; text-align: center; margin-top: -2% !important;">
                <img src="{{ asset('assets/images/icon_wfo.png')}}" alt="" class="avatar-xl rounded-circle mb-1"><br>
                <label>Anda direkomendasikan untuk</label>
                <h3>WFO</h3>
                
            </div>
            <form class="parsley-examples" action="{{ route('save_data_response_wfo')}}" method="post" novalidate="false" id="dataKaryawan">
                @csrf
                
                <div class="form-group"style="border-top: 1px solid gainsboro;">
                    <label style="text-align: justify; margin-top:10px;">Tanggal Bekerja</label>
                    <div>
                    <div class="input-group">
                    <input type="text" class="form-control" id="tgl_bekerjas" value="{{$data_survey['tgl_kerja']}}" readonly name="tgl_kerja">
                    {{-- <div class="input-group-append"><span class="input-group-text"><i class=""></i></span>
                    </div> --}}
                    </div><!-- input-group -->
                    </div>
                </div>

                <div class="form-group">
                    <label>Sistem Kerja</label>
                    <div>
                        <div class="input-group">
                        <input type="text" class="form-control" id="sistem_kerjas" value="{{$data_survey['sistem_kerja']}}" readonly name="sistem_kerja">
                        {{-- <div class="input-group-append"><span class="input-group-text"><i class=""></i></span>
                        </div> --}}
                        </div><!-- input-group -->
                        </div>
                </div>
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <div>
                        <div class="input-group">
                        <input type="text" class="form-control" id="nama_karyawan" value="{{$data_survey['name']}}" readonly name="name">
                        {{-- <div class="input-group-append"><span class="input-group-text"><i class=""></i></span>
                        </div> --}}
                        </div><!-- input-group -->
                        </div>
                </div>

                <div class="form-group">
                    <label>No NPK</label>
                    <div>
                        <div class="input-group">
                        <input type="text" class="form-control" id="no_npk" value="{{$data_survey['npk']}}" readonly name="npk" style="text-transform:uppercase">
                        {{-- <div class="input-group-append"><span class="input-group-text"><i class=""></i></span>
                        </div> --}}
                        </div><!-- input-group -->
                        </div>
                </div>

                <div class="form-group">
                    <label>Perusahaan</label>
                    <div>
                        <div class="input-group">
                        <input type="text" class="form-control" id="pilih_perusahaans" value="{{$data_survey['perusahaan']}}" readonly name="perusahaan">
                        {{-- <div class="input-group-append"><span class="input-group-text"><i class=""></i></span>
                        </div> --}}
                        </div><!-- input-group -->
                        </div>
                </div>

                <div class="form-group" style="display:none;">
                    <label>Divisi</label>
                    <div>
                        <div class="input-group">
                        <input type="text" class="form-control" id="pilih_divisi" value="{{$data_survey['divisi']}}" readonly name="divisi">
                        
                        </div><!-- input-group -->
                        </div>
                </div>
                <div class="form-group">
                    <label>No Ponsel</label>
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control ponsel_wfh" id="ponsel" value="{{$data_survey['no_ponsel']}}" readonly name="no_ponsel" style="border-bottom:2px solid #2F318B !important;">
                        {{-- <div class="input-group-append"><span class="input-group-text"><i class=""></i></span>
                        </div> --}}
                        </div><!-- input-group -->
                        </div>
                </div>

                <div class="form-group mb-0" style="">

                    <div style="background-color:#F8F8FA !important; color: #2F318B">
                        {{-- <p style="text-align: center; padding-top: 10px;">Anda dinyatakan WFH.<br/>Mohon screenshoot tampilan ini dan kirimkan ke atasan anda sebagai pertanggungjawaban.</p>
                        <hr style="width:90% !important; border:1px solid gainsboro; "> --}}
                        <p style="text-align: center;padding-bottom: 10px; padding-top: 10px;">Tetap patuhi Protokol Pencegahan Covid-19. Gunakan Masker dengan baik dan Terapkan Physical Distancing!</p>
                    </div>
                    <div>
                        <button type="submit" class=" btn_custom btn btn-primary btn-block waves-effect waves-light mr-1" id="btn_simpan">
                           KELUAR
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jsricpt')                     <!-- end row -->
<script>
    $(document).ready(function() {

});
</script>                    
@endsection