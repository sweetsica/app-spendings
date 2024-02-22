<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>App Spending Sweetsica ♥</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="An app to tracking spending" name="description" />
    <meta content="Sweetsica" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

</head>
@php
    if(\Illuminate\Support\Facades\Session::get('user_id') == ''){
        \Illuminate\Support\Facades\Redirect::route('login');
    }
@endphp
<body class="account-body">
    @yield('content')


    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/waves.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script>
        $("document").ready(function(){
            setTimeout(function(){
                $("div.alert-mess").remove();
            }, 3000 );

        });
    </script>
</body>
</html>
