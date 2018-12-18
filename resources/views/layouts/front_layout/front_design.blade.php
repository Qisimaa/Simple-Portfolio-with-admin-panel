<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>HTML Template</title>
    <meta name="description" content="Four Boxes Slideshow: Recreating the background image slideshow seen on Atelier Serge Thoroval's website" />
    <meta name="keywords" content="background slideshow, boxes, background image, four panels, css, tutorial" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('css/front_end/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/front_end/demo.css')}}" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/front_end/bootstrap.min.css')}}" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/front_end/owl.carousel.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/front_end/owl.theme.default.css')}}" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/front_end/magnific-popup.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('css/front_end/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/front_end/component.css')}}" />

    <link type="text/css" rel="stylesheet" href="{{asset('css/front_end/style.css')}}" />
    <script src="{{asset('js/front_end/modernizr.custom.js')}}"></script>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body>

@include('layouts.front_layout.front_header')
@yield('content')
@include('layouts.front_layout.front_footer')

<!-- Footer -->

<!-- /Footer -->

<!-- Back to top -->
<div id="back-to-top"></div>
<!-- /Back to top -->

<!-- Preloader -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- /Preloader -->

<!-- jQuery Plugins -->
<script src="{{asset('js/front_end/classie.js')}}"></script>
<script src="{{asset('js/front_end/boxesFx.js')}}"></script>
<script>
    new BoxesFx( document.getElementById( 'boxgallery' ) );
</script>
<script type="text/javascript" src="{{asset('js/front_end/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/front_end/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/front_end/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/front_end/jquery.magnific-popup.js')}}"></script>
<script type="text/javascript" src="{{asset('js/front_end/main.js')}}"></script>
</body>

</html>
