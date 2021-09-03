<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
   

    <!-- Styles -->
   <!--  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Styles login -->
    <link rel="icon" type="image/png" href="{{URL::asset('asset/Login_v17/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v17/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v17/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v17/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v17/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="Login_v17/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v17/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v17/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="Login_v17/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v17/css/util.css">
    <link rel="stylesheet" type="text/css" href="Login_v17/css/main.css">
</head>
<body>
            <main class="py-4">
            @yield('content')
        </main>
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<!--Scripts login -->
    
<!--===============================================================================================-->
    <script src="Login_v17/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="Login_v17/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="Login_v17/vendor/bootstrap/js/popper.js"></script>
    <script src="Login_v17/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="Login_v17/vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
<!--===============================================================================================-->
    <script src="Login_v17/vendor/daterangepicker/moment.min.js"></script>
    <script src="Login_v17/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="Login_v17/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="Login_v17/js/main.js"></script>

</body>
</html>