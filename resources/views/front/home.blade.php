@extends('front.layouts.app')
@section('content')

<!-- Carousel Start -->
<div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{asset('custom/front/img/carousel-1.jpg')}}" alt="Image">
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{asset('custom/front/img/carousel-2.jpg')}}" alt="Image">
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{asset('custom/front/img/carousel-3.jpg')}}" alt="Image">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">

            <h1 style="text-align: center; color:red">مغسلة نجم الرغوة لغسيل السيارات</h1>

        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">

                <h2>مواقعنا</h2>
            </div>
            <div class="row">




                <div class="col-lg-3 col-md-3" style='text-align:center ;max-width:20%'>
                    <div class="service-item">
                        <a href=''> <i class="fa fa-map-marker-alt" style="color: red;"></i></a>
                        <h3>5</h3>
                        <h3> فرع صديان</h3>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3" style='text-align:center ;max-width:20%'>
                    <div class="service-item">
                        <a href=''> <i class="fa fa-map-marker-alt" style="color: red;"></i></a>
                        <h3>4</h3>
                        <h3>فرع النقرة</h3>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3" style='text-align:center ;max-width:20%'>
                    <div class="service-item">
                        <a href='https://maps.app.goo.gl/pf9wzTiGYGrCwe4J9?g_st=ic'> <i class="fa fa-map-marker-alt" style="color: red;"></i></a>
                        <h3>3</h3>
                        <h3>فرع الشفا</h3>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3" style='text-align:center ;max-width:20%'>
                    <div class="service-item">
                        <a href='https://maps.app.goo.gl/vTFB4tPJAzDHdiPS6?g_st=ic'> <i class="fa fa-map-marker-alt" style="color: red;"></i></a>
                        <h3>2</h3>
                        <h3>فرع صبابة</h3>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3" style='text-align:center ;max-width:20%'>
                    <div class="service-item">
                        <!-- <i class="flaticon-car-wash-1"></i> -->
                        {{-- <img style='width:25%' src="{{asset('custom/front/img/location.png')}}"> --}}
                        <a href='https://maps.app.goo.gl/UDT1rcdWM4RCakNu7?g_st=ic'> <i class="fa fa-map-marker-alt" style="color: red;"> </i></a>
                        <h3>1</h3>
                        <h3>فرع السلام</h3>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Price Start -->
    <div class="price">
        <div class="container">

            <div class="row">
                <div class="col-md-4" style='margin:0 140px'>
                    <div class="price-item">
                        <img style='width:100%' src=" {{asset('custom/front/img/price2.jfif')}}">

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="price-item">
                        <img style='width:100%' src=" {{asset('custom/front/img/price1.jfif')}}">
                    </div>
                </div>


            </div>

            <div class="row" style='margin-top:5px'>
                <div class="col-md-4" style='margin:0 140px'>
                    <div class="price-item">
                        <img style='width:100% ' src=" {{asset('custom/front/img/price4.jfif')}}">

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="price-item">
                        <img style='width:100% ' src=" {{asset('custom/front/img/price3.jfif')}}">
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Price End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">

                <h2>مواقع التواصل الاجتماعى</h2>
            </div>
            <div class="row" style="justify-content: space-around">

                <div>
                    <div class="service-item">
                        <!-- <i class="flaticon-car-wash-1"></i> -->
                        <a href='https://t.me/njm_alrghwah'> <i class="fab fa-telegram fa-3x"></i></a>


                    </div>
                </div>
                <div>
                    <div class="service-item">


                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                        </svg>
                        Tiktok


                    </div>
                </div>
                <div>
                    <div class="service-item">
                        <a href='https://wa.me/+966558755981'> <i class="fab fa-whatsapp fa-3x"></i></a>

                    </div>
                </div>
                <div>
                    <div class="service-item">
                        <a href='https://www.snapchat.com/add/nim9999999'><i class="fab fa-snapchat fa-3x"></i></a>

                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- Service End -->
    <div class="footer_slider" style="width: 800px ;margin-left:25%">
        <div> <img src="{{ asset('front/image/4732_1649878766_14919.png')}}" style="width: 100% ;" /></div>
        <div><img src="{{ asset('front/image/4732_1649878920_14962.png')}}"  style="width: 100% ;"/></div>
        <div> <img src="{{ asset('front/image/4732_1649888587_14965.png')}}"  style="width: 100% ;"></div>
    </div>

    

   

    @endsection