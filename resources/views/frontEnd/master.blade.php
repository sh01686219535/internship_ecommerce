
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/monsta-preview/monsta/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:50:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEndAsset')}}/assets/img/favicon.ico">

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets/css/style.css">
</head>

<body>

<!-- Main Wrapper Start -->
<!--Offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>

<!--header area end-->
@include('frontEnd.include.header')

@yield('content')
<!--footer area start-->
@include('frontEnd.include.footer')



<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{asset('frontEndAsset')}}/assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="{{asset('frontEndAsset')}}/assets/js/main.js"></script>



</body>


<!-- Mirrored from demo.hasthemes.com/monsta-preview/monsta/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:50:32 GMT -->
</html>
