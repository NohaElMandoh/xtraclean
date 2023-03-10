<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Najem al-raghwa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link href="{{asset('custom/front/img/favicon.ico')}}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('custom/front/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('custom/front/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('custom/front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('custom/front/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('custom/front/slick/slick.css')}}"/>
<!-- // Add the new slick-theme.css if you want the default styling -->
<link rel="stylesheet" type="text/css" href="{{asset('custom/front/slick/slick-theme.css')}}"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
    </style>
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center" style="float:right ;">

                <div class="logo" style='width: 100%;height: 300%;'>
                    <a href="{{route('home')}}">
                        <!-- <h1 style="text-align: right;"> ?????? <span>????????????</span></h1> -->
                        <img style='width: 100%;height: 300%;' src="{{asset('custom/front/img/logo.jfif')}}" alt="Logo">
                    </a>
                </div>


            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar" style="background-color: red;">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto" style="font-size:20px">
                        <a href="" class="nav-item nav-link ">???????? ???????????? </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>
                        <a href="#" class="nav-item nav-link "> </a>

                        <!-- <a href="#" class="nav-item nav-link ">???? ???????????? </a> -->

                        <!-- <a href="#" class="nav-item nav-link ">???????? ?????????????? </a> -->

                        <a href="{{route('contactUs')}}" class="nav-item nav-link ">?????????? ????????</a>
                        <a href="{{route('services')}}" class="nav-item nav-link">??????????????</a>
                        <!-- <a href="#" class="nav-item nav-link">?????? ???????? </a> -->
                        <a href="{{route('home')}}" class="nav-item nav-link active">????????????????</a>

                    </div>
                    <!-- <div class="ml-auto">
                            <a class="btn btn-custom" href="">??Admin</a>
                        </div> -->
                </div>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>


            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    @yield('content')

    


    <!-- Footer Start -->
    <div class="footer" style="padding-top:0%">

        <div class="container copyright">
            <p>&copy; 2022 <a href="#">Najem al-raghwa</a>,???????? ???????????? ???????????? <a href=""></a></p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('custom/front/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('custom/front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('custom/front/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('custom/front/lib/counterup/counterup.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('custom/front/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('custom/front/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('custom/front/js/main.js')}}"></script>
    <script src="{{ asset('front/js/single_custom.js.download')}}"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('custom/front/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>

$(document).ready(function(){
    $('.footer_slider').slick({
        dots: true,
  infinite: true,
  speed: 100,
  fade: true,
  cssEase: 'linear'
});
});

	

        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 6000); // Change image every 2 seconds
        }
    </script>
@yield('scripts')
</body>

</html>