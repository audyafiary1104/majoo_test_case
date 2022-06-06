<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />

    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('css/responsive.css')}}" type="text/css" rel="stylesheet">

    <!-- Font CSS -->
    <link href="{{asset('css/gogle_sans_font.css')}}" type="text/css" rel="stylesheet">

    <!--  For icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
    <!-- Page Title -->
    <title></title>

    <!--
	 Owl-carousel CSS 
	<link href="css/owl.carousel.min.css" type="text/css" rel="stylesheet">
-->

</head>
    <body id="page_dashboard">
            <!-- Header Start -->
    @include('header')
    <div class="header_spacebar"></div>
    <!-- Header End -->
        @yield('content')

        
    </body>
</html>
