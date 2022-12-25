@extends('front.layouts.app')
@section('content')
       <!-- Page Header Start -->
       <div class="page-header">
       <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>خدماتنا</h2>
                    </div>
                    <div class="col-12">
                    <a href="">الرئيسية</a>
                    <a href="">خدماتنا</a>
              
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p> خدماتنا</p>
               
                </div>
                <div class="row justify-content-end" >
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <!-- <img src="img/blog-1.jpg" alt="Image"> -->
                                <img  src=" {{asset('custom/front/img/price3.jfif')}}">
                                <div class="meta-date">
                                <a class="btn btn-custom" href="">Book Now</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                               
                                <img  src=" {{asset('custom/front/img/price2.jfif')}}">
                                <div class="meta-date">
                                <a class="btn btn-custom" href="">Book Now</a>
                                </div>
                            </div>
                         
                         
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('custom/front/img/price1.jfif')}}" alt="Image">
                                <div class="meta-date">
                                <a class="btn btn-custom" href="">Book Now</a>
                                </div>
                            </div>
                          
                          
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('custom/front/img/price4.jfif')}}" alt="Image">
                                <div class="meta-date">
                                <a class="btn btn-custom" href="">Book Now</a>
                                </div>
                            </div>
                           
                          
                        </div>
                    </div>
                
                </div>
           
            </div>
        </div>
        <!-- Blog End -->
@endsection