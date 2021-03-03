<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ravsols - Professional Web Development Agency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Ravsols is a leading software development firm empowering businesses to reach highest potential through rich web and mobile applications.">
    <!-- Begin loading animation -->
    <link href="{{asset('css/loaders/loader-pulse.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- End loading animation -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet">
    <style>
        .navbar.scrolled .navbar-brand h4 {
            color: #555 !important;
        }
    </style>
</head>

<body>
<div class="loader">
    <div class="loading-animation"></div>
</div>
@yield('content')
@include('includes.footer')
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
    window.addEventListener("load", function () {
        document.querySelector('body').classList.add('loaded');
    });
</script>

</body>

</html>
