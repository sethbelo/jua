<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Edumel- Education Html Template by dreambuzz">
    <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
    <meta name="author" content="dreambuzz">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="description" content="Université Holistique, avec système des crédits heures, certification international sur le curriculum de Gaia et les Standards du Réseau Mondial des Eco villages, Jua, c’est aussi des jumelages avec des universités holistiques et des sciences d’écologie de l’Afrique du Monde">
    <meta name="author" content="Belocorp">
    <title>jua universite</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('/images/logo/favicon.ico')}}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <!-- Iconfont Css -->
    <link rel="stylesheet" href="{{asset('/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-gilroy.css')}}">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('/css/woocomerce.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('/css/icons.min.css')}}">

    </head>
    <body>
        <!-- Entete de pagese-->
        <header class="header-style-1"> 
            @include('includes.header')
        </header> 
         <!--main page halo -->
        <div >
            @yield('content')
        </div>
        <!-- footer -->
        <section class="footer footer-3">
            @include('includes.footer')	
        </section>


    <!-- Essential Scripts=====================================-->
    
    <!-- Main jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap 5:0 -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Counterup -->
    <script src="js/waypoint.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/ammap.js" id="-lib-3-ammap-js-js"></script>
    <script src="js/amdark.js" id="-lib-3-ammap-js-js"></script>
    <!--  Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Isotope -->
    <script src="js/jquery.isotope.js"></script>
    <script src="js/imagelaoded.min.js"></script>
    <!-- Animated Headline -->
    <script src="js/animated-headline.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>
