<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>Survey Internal Puninar Logistic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="PUNINAR GROUP SELF HEALT DECLARATION." name="description" />
        <meta content="puninar" name="sysdev" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta Http-Equiv="Cache-Control" Content="no-cache">
        <meta Http-Equiv="Pragma" Content="no-cache">
        <meta Http-Equiv="Expires" Content="0"> 
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;800&display=swap" rel="stylesheet">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <link href="{{ asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('css/select2.min.css')}}" rel="stylesheet" />

        <link href="{{ asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <link href="{{ asset('form_wizard/media_all.css') }}" rel="stylesheet" />
@yield('csstyles')

<style>
    .content-page {
    padding: 0px !important;
    margin-left: 0 !important;
}

body {
    background-color: #568ab4;
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: 'Rubik', sans-serif;
    color: #1A1B50 !important;
    font-weight:400px !important;
}
.row {
    margin-bottom:-2%;
}
.parsley-required{
    color: red !important;
}
.enlarged .content-page {
    margin-left: 0px !important;
}

#loader { 
            border: 12px solid #f3f3f3; 
            border-radius: 50%; 
            border-top: 2px solid #444444; 
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
        } 

</style>


    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">



            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container">

                        
            
                        <div id="loader" class="center_spin"></div>
                        @yield('content_survey')

                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
             
                <!-- end Footer -->
                
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <!-- Plugin js-->
        <script src="{{ asset('assets/libs/parsleyjs/parsley.min.js') }}"></script>

        <!-- Validation init js-->
        <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script> 


        
        <script src="{{ asset('js/select2.min.js')}}"></script>
        @yield('jsricpt')

<script>
    // $(document).ready(function() {


        //  javascript:window.history.forward(2);    
    // })
//     window.addEventListener( "pageshow", function ( event ) {
//   var historyTraversal = event.persisted || 
//                          ( typeof window.performance != "undefined" && 
//                               window.performance.navigation.type === 2 );
//   if ( historyTraversal ) {
//     // Handle page restore.
//     window.location.reload();
//   }
// });

// $(window).unload(function(e){
//    e.preventDefault();
//    alert("Back was pressed!");
// });
    
    document.onreadystatechange = function() { 
         
            
                if (document.readyState !== "complete") { 
                document.querySelector( 
                  "body").style.visibility = "hidden"; 
                document.querySelector( 
                  "#loader").style.visibility = "visible"; 
            } else { 
                document.querySelector( 
                  "#loader").style.display = "none"; 
                document.querySelector( 
                  "body").style.visibility = "visible"; 
            }
}; 

$("#loader").data('timeout', window.setTimeout(function(){ $("#loader").show()}, 20000));

</script>
        
    </body>
    
</html>