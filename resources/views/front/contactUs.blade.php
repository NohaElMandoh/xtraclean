@extends('front.layouts.app')
@section('content')

  <!-- Page Header Start -->
  <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>تواصل معنا</h2>
                    </div>
                    <div class="col-12">
                    <a href="">الرئيسية</a>
                    <a href="">تواصل معنا</a>
              
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>تواصل معنا </p>
                    <h2>الاتصال لاى استفسار</h2>
                </div>
                <div class="row">
                    
                    <div class="col-md-7">
                        <div class="contact-form" style="text-align: right;">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="الاسم" required="required" style="text-align: right;" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="البريد الاليكترونى" required="required" style="text-align: right;" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="الموضوع" required="required" style="text-align: right;" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="الرساله" required="required" style="text-align: right;" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" id="sendMessageButton">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4 " style="text-align: right;">
                        <div class="contact-info">
                            <h2>معلوماتنا</h2>
                            <div class="contact-info-item">
                              
                                <div class="contact-info-text">
                                    <h3>ساعات العمل</h3>
                                    <p>الاثنين - الجمعة, 8:00 - 9:00</p>
                                </div>
                                <div class="contact-info-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                            </div>
                            <div class="contact-info-item">
                               
                                <div class="contact-info-text">
                                    <h3>تليفون</h3>
                                    <p>+012 345 6789</p>
                                </div>
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                
                                <div class="contact-info-text">
                                    <h3>البريد الاليكترونى</h3>
                                    <p>info@example.com</p>
                                </div>

                                <div class="contact-info-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1600663868074!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


@endsection