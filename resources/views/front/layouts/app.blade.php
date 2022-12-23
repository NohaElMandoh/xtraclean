<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Najem al-raghwa</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

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
    </head>

    <body>
           <!-- Top Bar Start -->
           <div class="top-bar">
            <div class="container" >
                <div class="row align-items-center" style="float:right ;">
                   
                        <div class="logo" >
                            <a href="{{route('home')}}">
                                <!-- <h1 style="text-align: right;"> نجم <span>الرغوة</span></h1> -->
                                <img  style='width: 100px;height: 300px;' src="{{asset('custom/front/img/logo.jfif')}}" alt="Logo">
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
                        <a href="{{route('admin')}}" class="nav-item nav-link ">مدير الموقع  </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">   </a>
                        <a href="#" class="nav-item nav-link ">عن الموقع  </a>

                        <a href="#" class="nav-item nav-link ">أراء الزبائن </a>

                            <a href="#" class="nav-item nav-link ">تواصل معنا</a>
                            <a href="#" class="nav-item nav-link">خدماتنا</a>
                            <a href="#" class="nav-item nav-link">حجز موعد </a>
                            <a href="#" class="nav-item nav-link active">الرئيسية</a>
                           
                        </div>
                        <!-- <div class="ml-auto">
                            <a class="btn btn-custom" href="">ِAdmin</a>
                        </div> -->
                    </div>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

               
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


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
                  
                  
                    
                   
                    <div class="col-lg-3 col-md-3"  style='text-align:center ;max-width:20%'>
                        <div class="service-item">
                        <a href=''>    <i class="fa fa-map-marker-alt" style="color: red;"></i></a>
                        <h3>5</h3>  <h3> فرع صديان</h3>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3"  style='text-align:center ;max-width:20%'>
                        <div class="service-item" >
                        <a href=''>  <i class="fa fa-map-marker-alt" style="color: red;"></i></a>
                        <h3>4</h3>    <h3>فرع النقرة</h3>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" style='text-align:center ;max-width:20%'>
                        <div class="service-item">
                        <a href='https://maps.app.goo.gl/pf9wzTiGYGrCwe4J9?g_st=ic'>  <i class="fa fa-map-marker-alt" style="color: red;"></i></a>
                        <h3>3</h3>   <h3>فرع الشفا</h3>
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3"  style='text-align:center ;max-width:20%'>
                        <div class="service-item">
                        <a href='https://maps.app.goo.gl/vTFB4tPJAzDHdiPS6?g_st=ic'>   <i class="fa fa-map-marker-alt" style="color: red;"></i></a>
                        <h3>2</h3>  <h3>فرع صبابة</h3>
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" style='text-align:center ;max-width:20%'>
                        <div class="service-item">
                            <!-- <i class="flaticon-car-wash-1"></i> -->
                        {{-- <img style='width:25%' src="{{asset('custom/front/img/location.png')}}"> --}}
                          <a href='https://maps.app.goo.gl/UDT1rcdWM4RCakNu7?g_st=ic'>  <i class="fa fa-map-marker-alt" style="color: red;"> </i></a>
                          <h3>1</h3>   <h3>فرع السلام</h3>
                           
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
    
        
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                  
                    <h2>قائمة الأسعار</h2>
                </div>
                <div class="row">
                <div class="col-md-4" style="margin-left:8%">
                        <div class="price-item">
                          <img style='width:100%'src=" {{asset('custom/front/img/price2.jfif')}}">
                           
                        </div>
                    </div> 
                    <div class="col-md-2">
                        <div class="price-item">
                       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                          <img style='width:100%'src=" {{asset('custom/front/img/price1.jfif')}}">
                        </div>
                    </div>
                   
                
                </div>

                <div class="row">
                <div class="col-md-4"style="margin-left:8%">
                        <div class="price-item">
                          <img style='width:100%'src=" {{asset('custom/front/img/price4.jfif')}}">
                           
                        </div>
                    </div> 
                    <div class="col-md-2">
                        <div class="price-item">
                       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                          <img style='width:100%'src=" {{asset('custom/front/img/price3.jfif')}}">
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
                
                    <div  >
                        <div class="service-item">
                            <!-- <i class="flaticon-car-wash-1"></i> -->
                          <a href='https://t.me/njm_alrghwah'>  <i class="fab fa-telegram fa-3x" ></i></a>
                        
                           
                        </div>
                    </div>
                    <div>
                        <div class="service-item">
                        
                     <a href='https://www.tiktok.com/@njmalrgwh?_t=8YQTWtO0RIP&_r=1'>  
                       
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License 
                        - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
Tiktok
                        <!-- 
                     <i class="fab  fa-tiktok fa-3x"></i></a> -->
                     
                        </div>
                    </div>
                    <div >
                        <div class="service-item">
                      <a href='https://wa.me/+966558755981'>  <i class="fab fa-whatsapp fa-3x"></i></a>
                          
                        </div>
                    </div>
                    <div >
                        <div class="service-item" >
                       <a href='https://www.snapchat.com/add/nim9999999'><i class="fab fa-snapchat fa-3x"></i></a>
                            
                        </div>
                    </div>
                   
            
                  
                  
                </div>
            </div>
        </div>
        <!-- Service End -->

       
        
        
      


        <!-- Footer Start -->
        <div class="footer" style="padding-top:0%">
           
            <div class="container copyright">
                <p>&copy; 2022 <a href="#">Najem al-raghwa</a>,جميع الحقوق محفوظه  <a href=""></a></p>
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
    </body>
</html>
