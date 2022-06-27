<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Adjust For - Mobiles & Computers Repair HTML Template | Home Page 02</title>
    <!-- Stylesheets -->
    <link href={{ url('assets/css/bootstrap.css') }} rel="stylesheet">
    <link href={{ url('assets/plugins/revolution/css/settings.css') }} rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href={{ url('assets/plugins/revolution/css/layers.css') }} rel="stylesheet" type="text/css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href={{ url('assets/plugins/revolution/css/navigation.css') }} rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href={{ url('assets/css/style.css') }} rel="stylesheet">
    <link href={{ url('assets/css/responsive.css') }} rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href={{ url('assets/css/color-themes/default-theme.css') }} rel="stylesheet">

    <link rel="shortcut icon" href={{ url('assets/images/favicon.png') }} type="image/x-icon">
    <link rel="icon" href={{ url('assets/images/favicon.png') }} type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        @include('layouts.template-header')

        @yield('content')

        @include('layouts.template-footer')



    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-double-up"></span></div>


    <script src={{ url('assets/js/jquery.js') }}></script>
    <script src={{ url('assets/js/popper.min.js') }}></script>
    <script src={{ url('assets/js/bootstrap.min.js') }}></script>
    <!--Revolution Slider-->
    <script src={{ url('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}></script>
    <script src={{ url('assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}></script>
    <script src={{ url('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}></script>
    <script src={{ url('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}></script>
    <script src={{ url('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}></script>
    <script src={{ url('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}></script>
    <script src={{ url('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}></script>
    <script src={{ url('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}></script>
    <script src={{ url('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}></script>
    <script src={{ url('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}></script>
    <script src={{ url('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}></script>
    <script src={{ url('assets/js/main-slider-script.js') }}></script>
    <!--End Revolution Slider-->
    <script src={{ url('assets/js/jquery.fancybox.js') }}></script>
    <script src={{ url('assets/js/owl.js') }}></script>
    <script src={{ url('assets/js/wow.js') }}></script>
    <script src={{ url('assets/js/appear.js') }}></script>
    <script src={{ url('assets/js/mixitup.js') }}></script>
    <script src={{ url('assets/js/script.js') }}></script>
</body>

</html>
