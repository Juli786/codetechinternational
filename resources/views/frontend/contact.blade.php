
@extends('frontend.layouts.main')


@section('main.container')



      <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(public/assets/img/banner/18.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contact </h1>
                    <ul class="breadcrumb">
                        <li><a href="{{asset('/')}}"><i class="fas fa-home"></i> Home</a></li>
                       
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->



     <!-- Start Contact
    ============================================= -->
    <div class="contact-area item-flex default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 thumb bg-cover">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.1344071538215!2d73.88744471436816!3d18.477570075311696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea7d7a11cab1%3A0x2cae1d2651b32be2!2sCodetech+India!5e0!3m2!1sen!2sin!4v1561761066848!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <!-- Start Contact Form -->
                <div class="col-md-6 contact-items">
                    <div class="heading">
                        <h2>Get in Touch</h2>
                       
                    </div>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info">
                                <span>Hotline</span> +91 9970921382
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="info">
                                <span>Emergency Email</span> mak@codetechinternational.com
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Start Contact Form -->
            </div>
        </div>
    </div>
    <!-- End Contact Area --> 


    @endsection   