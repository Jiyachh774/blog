<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!--
THEME: Constra - Construction Html5 Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/constra-construction-template/
DEMO: https://demo.themefisher.com/constra/
GITHUB: https://github.com/themefisher/Constra-Bootstrap-Construction-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>@yield('title') | {{  env('APP_NAME')}} </title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="constra" />

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick/slick-theme.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/color-box.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css ') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css ') }}">



</head>

<body>
    <div class="body-inner">

        @include('layouts.frontend.partials.topbar')
        <!--/ Topbar end -->

        <!-- Header start -->
        @include('layouts.frontend.partials.header')
        <!--/ Header end -->
        @yield('content')

        @include('layouts.frontend.partials.footer')
        ><!-- Footer end -->

        <!-- Javascript Files
  ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="{{ asset('assets/frontend/js/jquery.min.js ') }}"></script>
        <!-- Bootstrap jQuery -->
        <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}" defer></script>
        <!-- Slick Carousel -->
        <script src="{{ asset('assets/frontend/js/slick/slick.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/slick/slick-animation.min.js') }}"></script>
        <!-- Color box -->
        <script src="{{ asset('assets/frontend/js/jquery.colorbox.js') }}"></script>
        <!-- shuffle -->
        <script src="{{ asset('assets/frontend/js/shuffle.min.js') }}" defer></script>

        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <!-- Google Map Plugin-->
        <script src="{{ asset('assets/frontend/js/google-map.js') }}" defer></script>

        <!-- Template custom -->
        <script src="{{ asset('assets/frontend/js/script.js') }}"></script>

    </div><!-- Body inner end -->
</body>

</html>
