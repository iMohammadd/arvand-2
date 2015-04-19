<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/droidarabicnaskh.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">

    <!--[if IE]>
        <script src="{{asset('asset/js/html5shiv.min.js')}}"></script>
        <script src="{{asset('asset/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
    <div class="container-fluid rtl naskh">
        <div class="row">
            <div class="col-md-12 top">
                <div class="container">
                    <h2>اروند خودرو</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="main">
                <section class="container">
                    @yield('main')
                </section>
            </div>
        </div>
        <div class="row">
            <section class="foot">
                <div class="container">
                    تمام حقوق بهروز
                </div>
            </section>
        </div>
    </div>

    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
</body>
</html>
