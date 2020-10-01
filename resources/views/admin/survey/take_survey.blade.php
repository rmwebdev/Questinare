

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Puninar Group , etc." name="description" />
    <meta content="puninar" name="sysdev" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Survey Internal Puninar Group</title>
    <meta Http-Equiv="Cache-Control" Content="no-cache">
    <meta Http-Equiv="Pragma" Content="no-cache">
    <meta Http-Equiv="Expires" Content="0"> 

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- BASE CSS -->
    <link href="{{ asset('form_wizard/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('form_wizard/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('form_wizard/style.css') }}" rel="stylesheet">
    <link href="{{ asset('form_wizard/vendors.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->

    <!-- MODERNIZR MENU -->
    <script src="{{ asset('form_wizard/modernizr.js') }}"></script>
        <!-- COMMON SCRIPTS -->
        <script src="{{ asset('form_wizard/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('form_wizard/common_scripts.min.js') }}"></script>
        <script src="{{ asset('form_wizard/velocity.min.js') }}"></script>
        <script src="{{ asset('form_wizard/common_functions.js') }}"></script>
    
        <!-- Wizard script-->
        <script src="{{ asset('form_wizard/func_1.js') }}"></script>

<style>

 body{

background-color: #f3f5f6;
height: 100%;
    margin: 0;
    padding: 0;
    font-family: 'Rubik', sans-serif;
        color: #1A1B50 !important;
        font-size: 12px !important;
            }

#wizard_container {
            color: #1d1e4b !important;
    }
        input[type="text"]{
        border-radius: 0px !important;
        border-top:0px !important;
        border-right:0px !important;
        border-left:0px !important;
    }
    .div_wizard{
            padding-right: 0px !important;
            padding-left: 0px !important;
    }
    /* .{
            margin-top: -5% !important;
    } */
    .main_question{
    margin: 0 !important;
     margin-bottom: 3% !important;
     font-size: 3vw !important;
        }
    .container_radio{
    margin: 0 !important;
        border: 0 !important;
        }
    .form-group{
            margin-top: -3% !important;
            
        }
    .text-muted {
            font-style: italic !important;
            /* font-weight:bold !important; */
            font-size: 12px !important;
            
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
    .btn_custom{

        border-radius: 15px !important;
    }

    body, html {
  height: 100%;
  margin-bottom: 0 !important;
}

#wizard_container{ 
    padding: 40px !important;
    
    box-shadow:none !important;
    -webkit-box-shadow:0px !important;
    min-height:657px !important;
}



#bottom-wizard{
    position: absolute;
    bottom: 5px !important;
    width: 90% !important;
    justify-content: center;
    padding: 0;
    margin: auto !important;
}

@media only screen
  and (device-width: 411px) 
  and (device-height: 731) {
body{ 
    background-color: white !important;
}
}
@media only screen 
  and (min-device-width: 375px) 
  and (max-device-width: 667px) 
  and (-webkit-min-device-pixel-ratio: 2) { 
    body{ 
    background-color: white !important;
    
    margin-left: -5% !important;
}

}@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 568px)
  and (-webkit-min-device-pixel-ratio: 2) {
    body{ 
    background-color: white !important;
    
    margin-left: -5% !important;
}#bottom-wizard{
    position: absolute;
    bottom: 5px !important;
    justify-content: center;
    padding: 0;
    margin: auto !important;
}
}
@media only screen 
  and (min-device-width: 280px) 
  and (max-device-width: 720px) 
  and (-webkit-min-device-pixel-ratio: 1) {
    html { font-size: 3vw; }

    .wizard_container{
        width: 100% !important;

    }
}


.btn-polos {
    height: 30px !important;
    background:none !important;
    margin-left: -4% !important;
    text-align: center !important;
    
}
.btn {
    border: none !important;
}
.btn_kembali{
    border: none;
    background:none;
}

h3.main_question {
    margin: 0 0 25px 0;
    padding: 0;
    font-weight: 400 !important;
    font-size: 15px !important;
    font-size: 1.01rem !important;
    line-height: 1.4;
    position: relative;
}

/* #loader { 
            border: 12px solid #f3f3f3; 
            border-radius: 50%; 
            border-top: 12px solid #444444; 
            width: 70px; 
            height: 70px; 
            animation: spin 1s linear infinite; 
        } 
          
        @keyframes spin { 
            100% { 
                transform: rotate(360deg); 
            } 
        } 
          
        .center_spin { 
            position: absolute; 
            top: 0; 
            bottom: 0; 
            left: 0; 
            right: 0; 
            margin: auto; 
        }  */


</style>
</head>

<body>
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div>
    {{-- <div id="loader" class="center_spin"></div> --}}

<div class="col-lg-6 div_wizard" style="margin:auto; background-color:#ffffff; border:none !important; ">
    
    <div id="wizard_container" >
        <!-- /top-wizard -->
        <div class="row" style="margin-top: -5% !important;">
            
    
        <div class="col-lg-12" >
        <a href="{{ url('/')}}" type="button" name="backward" class="btn btn-default btn_kembali"><img src="{{ asset('assets/images/icon_back.jpg')}}" class="img_"></a><label class="judul">KUESIONER</label>
        </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
        
        <div id="progressbar" style="border-bottom: 1px solid gainsboro"></div>
        
       
        <div>
        <span id="location" class="float-right" style="margin-top:-2%; margin-right:-3%;"></span>
        <span class="float-left mb-2">Harian</span>
        </div>
        </div>
        </div>


        
        <form method="post" action="{{ route('kuisioner-1-harian-step-3')}}">
        @csrf
        <input type="hidden" value="{{$data_survey['tgl_kerja']}}" name="tgl_kerja">
        <input type="hidden" value="{{$data_survey['sistem_kerja']}}" name="sistem_kerja">
        <input type="hidden" value="{{$data_survey['name']}}" name="name">
        <input type="hidden" value="{{$data_survey['npk']}}" name="npk">
        <input type="hidden" value="{{$data_survey['no_ponsel']}}" name="no_ponsel">
        <input type="hidden" value="{{$data_survey['divisi']}}" name="divisi">
        <input type="hidden" value="{{$data_survey['alamat_tinggal']}}" name="alamat_tinggal">
        <input type="hidden" value="{{$data_survey['perusahaan']}}" name="perusahaan">
        
        <input id="website" name="website" type="text" value="">
    <!-- Leave for security protection, read docs for details -->
    
        <div class="step" id="step">
            <h3 class="main_question"><strong>1. </strong>Apakah suhu tubuh anda diatas 37.2*C?</h3>
            <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                <label class="container_radio version_2">Ya
                <input type="radio" name="question_1" value="5" id="question_1_y" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group">
                <label class="container_radio version_2">Tidak
                <input type="radio" name="question_1" value="0" id="question_1_n" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group ">
                <input type="text" name="question_1_text" id="question_1_text" class="form-control ">
                <small class="text-muted">Jika ya berapa suhu tubuh anda ? <span style="color:red;">*</span></small>
                </div>
                </div>

            </div>
            <h3 class="main_question"><strong>2. </strong>Apakah hari ini Anda mengalami gejala demam/batuk/pilek/sesak nafas/sakit tenggorokan/berkurangnya fungsi penciuman?</h3>
            <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                <label class="container_radio version_2">Ya
                <input type="radio" name="question_2" value="5" id="question_2_y" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group">
                <label class="container_radio version_2">Tidak
                <input type="radio" name="question_2" value="0" id="question_2_n" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group ">
                <input type="text" name="question_2_text" id="question_2_text" class="form-control ">
                <small class="text-muted">Jika ya, sebutkan gejala yang anda alami<span style="color:red;">*</span></small>
                </div>
                </div>

            </div><!-- /row -->
        </div><!-- /step-->

        <div class="step">
            <h3 class="main_question"><strong>3. </strong>Apakah hari ini anda memiliki riwayat kontak erat dengan orang yang dinyatakan sebagai ODP, 
                PDP atau Positif Covid-19 seperti berjabat tangan, berbicara langsung, berada dalam satu ruangan, satu rumah?</h3>
            <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                <label class="container_radio version_2">Ya
                <input type="radio" name="question_3" value="5" id="question_3_y" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group">
                <label class="container_radio version_2">Tidak
                <input type="radio" name="question_3" value="0" id="question_3_n" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group ">
                <input type="text" name="question_3_text" id="question_3_text" class="form-control ">
                <small class="text-muted">Jika ya tuliskan bentuk interaksi lain yang tidak tertera pada poin diatas<span style="color:red;">*</span></small>
                </div>
                </div>

            </div>
            <h3 class="main_question"><strong>4. </strong> Apakah hari ini anda menggunakan transportasi umum (ojek, ojek online, 
                angkutan umum, bus, kopaja, transjakarta,KRL,MRT, Taxi, Taxi Online,dll) untuk berpergian?</h3>
            <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                <label class="container_radio version_2">Ya
                <input type="radio" name="question_4" value="1" id="question_4_y" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group">
                <label class="container_radio version_2">Tidak
                <input type="radio" name="question_4" value="0" id="question_4_n" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group ">
                <input type="text" name="question_4_text" id="question_4_text" class="form-control ">
                <small class="text-muted">Jika ya sebutkan transportasi umum yang anda gunakan ? <span style="color:red;">*</span></small>
                </div>
                </div>

            </div><!-- /row -->
        </div><!-- /step-->

        <div class="step">
            <h3 class="main_question"><strong>5. </strong>Apakah anda konsisten dalam menerapkan protokol kesehatan?(3M: memakai masker dengan benar , rajin mencuci tangan, dan menjaga jarak minimal 1.5 Meter)</h3>
            <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                <label class="container_radio version_2">Ya
                <input type="radio" name="question_5" value="00" id="question_5_y" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group">
                <label class="container_radio version_2">Tidak
                <input type="radio" name="question_5" value="0" id="question_5_n" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group " style="display:none;">
                <input type="text" name="question_5_text" id="question_5_text" class="form-control ">
                <small class="text-muted">Jika tidak sebuatkan alasan anda ? <span style="color:red;">*</span></small>
                </div>
                </div>

            </div>
            <h3 class="main_question"><strong>6. </strong>Apakah anda memiliki riwayat penyakit penyerta (komorbid, misalnya kelainan jantung, auto imun, kelainan ginjal, 
                diabetes, gangguan pernapasan dan penyakit dalam lain)?</h3>
            <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                <label class="container_radio version_2">Ya
                <input type="radio" name="question_6" value="1" id="question_6_y" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group">
                <label class="container_radio version_2">Tidak
                <input type="radio" name="question_6" value="0" id="question_6_n" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group ">
                <input type="text" name="question_6_text" id="question_6_text" class="form-control ">
                <small class="text-muted">Jika ya mohon sebutkan <span style="color:red;">*</span></small>
                </div>
                </div>

            </div><!-- /row -->
        </div><!-- /step-->

        <div class="step">
            <h3 class="main_question"><strong>7. </strong>Apakah hari ini anda melakukan perjalanan ke luar kota (area jabodetabek) /internasional? </h3>
            <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                <label class="container_radio version_2">Ya
                <input type="radio" name="question_7" value="5" id="question_7_y" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group">
                <label class="container_radio version_2">Tidak
                <input type="radio" name="question_7" value="0" id="question_7_n" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group ">
                <input type="text" name="question_7_text" id="question_7_text" class="form-control ">
                <small class="text-muted">Jika Ya, sebutkan kota tujuan anda!<span style="color:red;">*</span></small>
                </div>
                </div>

            </div>
            <h3 class="main_question"><strong>8. </strong>Apakah hari ini anda mengunjungi tempat-tempat umum berikut ini? Fasilitas pelayanan kesehatan, pasar, mall, minimartket/supermarket, 
                Restaurant (makan ditempat dengan ruangan tertutup)</h3>
            <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                <label class="container_radio version_2">Ya
                <input type="radio" name="question_8" value="1" id="question_8_y" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group">
                <label class="container_radio version_2">Tidak
                <input type="radio" name="question_8" value="0" id="question_8_n" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group ">
                <input type="text" name="question_8_text" id="question_8_text" class="form-control ">
                <small class="text-muted">Jika ya uraikan kemana!<span style="color:red;">*</span></small>
                </div>
                </div>

            </div><!-- /row -->
        </div><!-- /step-->

        <div class="step">
            <h3 class="main_question"><strong>9. </strong>Apakah hari ini anda mengikuti kegiatan yang melibatkan interaksi banyak orang (>10 orang) secara langsung?
                 (ibadah, pengajian,halal bihalal, arisan, rapat, dan lain lain) </h3>
            <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                <label class="container_radio version_2">Ya
                <input type="radio" name="question_9" value="1" id="question_9_y" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group">
                <label class="container_radio version_2">Tidak
                <input type="radio" name="question_9" value="0" id="question_9_n" class="required">
                <span class="checkmark"></span>
                </label>
                </div>
                <div class="form-group ">
                <input type="text" name="question_9_text" id="question_9_text" class="form-control ">
                <small class="text-muted">Jika Ya, sebutkan nama kegiatan tersebut!<span style="color:red;">*</span></small>
                </div>
                </div>

            </div>
            
        </div><!-- /step-->


    <div class="submit step mt2" id="end">
    <div class="summary">
    <div class="wrapper">
        <p style="font-size: 15px">Pengisian formulir ini saya lakukan dengan jujur dan tanpa paksaan dari pihak manapun. 
            Jika dikemudian hari ditemukan informasi yang di isi tidak sesuai dengan kondisi yang sesungguhnya, 
            maka saya bersedia menerima sanksi yang berlaku di Puninar Group. Semua informasi yang saya sampaikan adalah untuk kesehatan 
            dan keselamatan bersama dan saya bersedia memberikan informasi lebih lanjut kepada Komite Mitigasi Covid-19 Puninar Group jika diminta dan diperlukan.</p>
    </div>
    <div class="text-center">
    <div class="form-group terms">
    <label class="container_check">Centang ini <a href="#"></a> sebelum Kirim
    <input type="checkbox" name="terms" value="Yes" class="required">
    <span class="checkmark"></span>
    </label>
    </div>
    </div>
    </div>
    </div>

    {{-- <input type="hidden" name="scoreSurvey" id="scoreSurvey"> --}}
    <!-- /step last-->
    <!-- /middle-wizard -->
    <div id="bottom-wizard"  style="position: absolute; bottom:0; width:100%; margin-top:20px !important; justify-content: center; padding:0; margin-left:-10px !important">
    <button type="button" name="backward" class="backward btn btn-block btn_custom">SEBELUMNYA</button>
    <button type="button" name="forward" class="forward btn btn-block btn_custom">SELANJUTNYA</button>
    <button type="submit" name="process" class="submit btn btn-block btn_custom">KIRIM</button>
    </div>
                            <!-- /bottom-wizard -->
    </form>
    </div>
                    <!-- /Wizard container -->
</div>

<script>
$(document).ready(function() {

    // javascript:window.history.forward(2); 
   


$('input:text[name="question_1_text"]').change(
    function() {
        if ($('input:radio[name="question_1"]').is(':checked') && $('input:radio[name="question_1"]').val() == '5') {
            $('#question_1_text').attr('required', true);
        } else {
            $('#question_1_text').attr('required', false);
        }
});
$('input:text[name="question_2_text"]').change(
    function() {
        if ($('input:radio[name="question_2"]').is(':checked') && $('input:radio[name="question_2"]').val() == '5') {
            $('#question_2_text').attr('required', true);
        } else {
            $('#question_2_text').attr('required', false);
        }
});
$('input:text[name="question_3_text"]').change(
    function() {
        if ($('input:radio[name="question_3"]').is(':checked') && $('input:radio[name="question_3"]').val() == '5') {
            $('#question_3_text').attr('required', true);
        } else {
            $('#question_3_text').attr('required', false);
        }
});
$('input:text[name="question_4_text"]').change(
    function() {
        if ($('input:radio[name="question_4"]').is(':checked') && $('input:radio[name="question_4"]').val() == '1') {
            $('#question_4_text').attr('required', true);
        } else {
            $('#question_4_text').attr('required', false);
        }
});
$('input:text[name="question_6_text"]').change(
    function() {
        if ($('input:radio[name="question_6"]').is(':checked') && $('input:radio[name="question_6"]').val() == '1') {
            $('#question_6_text').attr('required', true);
        } else {
            $('#question_6_text').attr('required', false);
        }
});
$('input:text[name="question_7_text"]').change(
    function() {
        if ($('input:radio[name="question_7"]').is(':checked') && $('input:radio[name="question_7"]').val() == '5') {
            $('#question_7_text').attr('required', true);
        } else {
            $('#question_7_text').attr('required', false);
        }
});
$('input:text[name="question_9_text"]').change(
    function() {
        if ($('input:radio[name="question_9"]').is(':checked') && $('input:radio[name="question_9"]').val() == '1') {
            $('#question_9_text').attr('required', true);
        } else {
            $('#question_9_text').attr('required', false);
        }
});
$('input:text[name="question_8_text"]').change(
    function() {
        if ($('input:radio[name="question_8"]').is(':checked') && $('input:radio[name="question_8"]').val() == '1') {
            $('#question_8_text').attr('required', true);
        } else {
            $('#question_8_text').attr('required', false);
        }
});

$('input:text[name="question_1_text"]').change(
    function() {
        if ($('input:radio[name="question_1"]').is(':checked') && $('input:radio[name="question_1"]').val() == '5') {
            $('#question_1_text').attr('required', true);
        } else {
            $('#question_1_text').attr('required', false);
        }
});

$('input:radio[name="question_1"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == '5') {
            $('#question_1_text').attr('required', true);
        } else {
            $('#question_1_text').attr('required', false);
        }

});

$('input:radio[name="question_2"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == '5') {
            $('#question_2_text').attr('required', true);
        } else {
            $('#question_2_text').attr('required', false);
        }

    });

//step 2

$('input:radio[name="question_3"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == '5') {
            $('#question_3_text').attr('required', true);
        } else {
            $('#question_3_text').attr('required', false);
        }

    });

$('input:radio[name="question_4"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == '1') {
            $('#question_4_text').attr('required', true);
        } else {
            $('#question_4_text').attr('required', false);
        }

    });

//step  3

$('input:radio[name="question_5"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == '0') {
            $('#question_5_text').attr('required', false);
        } else {
            $('#question_5_text').attr('required', false);
        }

    });

$('input:radio[name="question_6"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == '1') {
            $('#question_6_text').attr('required', true);
        } else {
            $('#question_6_text').attr('required', false);
        }

    });

//step 4

$('input:radio[name="question_7"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == '5') {
            $('#question_7_text').attr('required', true);
        } else {
            $('#question_7_text').attr('required', false);
        }

    });

$('input:radio[name="question_8"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == '1') {
            $('#question_8_text').attr('required', true);
        } else {
            $('#question_8_text').attr('required', false);
        }

    });

//step 4

$('input:radio[name="question_9"]').change(
    function() {
        if ($(this).is(':checked') && $(this).val() == '1') {
            $('#question_9_text').attr('required', true);
        } else {
            $('#question_9_text').attr('required', false);
        }

    });
    
}); 
 
// $("#preloader").data('timeout', window.setTimeout(function(){ $("#preloader").show()}, 20000));
    </script>  


</body>

</html>