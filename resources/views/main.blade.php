<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Jua </title>
 <!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
 <!-- Favicon-->
<link rel="stylesheet" href="{{asset('/admin/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('/admin/css/jquery-jvectormap-2.0.3.min.css')}}">
<link rel="stylesheet" href="{{asset('/admin/css//morris.min.css')}}">

<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('/admin/css/main.css')}}">
<link rel="stylesheet" href="{{asset('/admin/css/dropzone.css')}}">
<link rel="stylesheet" href="{{asset('/admin/css//color_skins.css')}}">
<link rel="stylesheet" href="{{asset('/css/icons.min.css')}}">

<script src="https://cdn.jsdelivr.net/emojione/2.2.7/lib/js/emojione.min.js" type="text/javascript" async="" defer=""></script>
<script src="https://cdn.jsdelivr.net/emojione/2.2.7/lib/js/emojione.min.js" type="text/javascript" async="" defer=""></script>

</head>
    <body class="theme-blush">
        <!-- Entete de pagese-->
        <div> 
            @include('includes.navbar')
        </div> 
         <!--main page halo -->
        <div >
            @yield('content')
        </div>

        <!-- Scripts -->
        <!-- <script src="{{asset('/js/libscripts.bundle.js')}}"></script>     -->
        <!-- <script src="{{asset('/js/vendorscripts.bundle.js')}}"></script> -->


        <!-- <script src="{{asset('/js/morrisscripts.bundle.js')}}"></script> -->
        <!-- <script src="{{asset('/js/jvectormap.bundle.js')}}"></script> -->
        <!-- <script src="{{asset('/js/knob.bundle.js')}}"></script> -->
        <!-- <script src="{{asset('/js/dropzone.js')}}"></script> -->
        <!-- <script src="{{asset('/js/mainscripts.bundle.js')}}"></script> -->
        <!-- <script src="{{asset('/page/js/index.js')}}"></script> -->
        <!-- <script src="{{asset('/js/infobox-1.js')}}"></script> -->
    </body>
</html>