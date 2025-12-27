<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>Supreme Building Maintenance</title>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome-6.css')}}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/plugins/aos.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/plugins/hover-revel.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/timepickers.min.css"> -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
   .floating-buttons {
    position: fixed;
    bottom: 30px;
    right: 30px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    z-index: 9999;
}

.floating-buttons a {
    color: #fff;
    background-color: #25D366; /* WhatsApp green for WhatsApp, will override below for phone */
    padding: 14px;
    border-radius: 100%;
    text-align: center;
    text-decoration: none;
}

.floating-buttons a.float-call {
    background-color: #007bff; /* Blue color for phone */
}

    </style>
</head>
<body class="index-electrical">
    <x-header />

@yield('content')
<div class="floating-buttons">
    <a href="https://wa.me/+971561716795" target="_blank" class="float-whatsapp">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>

    <a href="tel:+971561716795" class="float-call">
        <i class="fas fa-phone fa-2x"></i>
    </a>
</div>
<x-footer />
<div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>

    <div id="anywhere-home" class="">
    </div>


    <!-- pre loader start -->
    <div id="elevate-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->


    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- progress area end -->

 <!-- jquery js -->
    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>


    <!-- <script src="assets/js/vendor/twinmax.js"></script> -->
    <!-- <script src="assets/js/vendor/split-text.js"></script> -->
    <!-- <script src="assets/js/plugins/text-plugins.js"></script> -->
    <script src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>


    <script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waw.js') }}"></script>


    <script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrolltigger.js') }}"></script>
    <!-- <script src="assets/js/plugins/aos.js"></script> -->
    <!-- <script src="assets/js/plugins/jquery-ui.js"></script> -->
    <script src="{{ asset('assets/js/plugins/jquery-timepicker.js') }}"></script>
    <!-- <script src="assets/js/vendor/sal.min.js"></script> -->

    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <!-- <script src="assets/js/plugins/jquery-slideNav.js"></script> -->
    <!-- <script src="assets/js/plugins/hover-revel.js"></script> -->
    <!-- <script src="assets/js/plugins/contact-form.js"></script> -->

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- <script src="assets/js/plugins/swip-img.js"></script> -->
    <!-- header style two End -->
</body>

</html>
