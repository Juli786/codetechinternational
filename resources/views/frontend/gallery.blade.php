

@extends('frontend.layouts.main')


@section('main.container')
  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(public/assets/img/banner/16.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Gallery </h1>
                    <ul class="breadcrumb">
                        <li><a href="{{asset('/')}}"><i class="fas fa-home"></i> Home</a></li>
                      
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


   <!-- Start Portfolio 
    ============================================= -->
    <div class="portfolio-area info-less default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mix-item-menu">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".industry">Industry</button>
                        <button data-filter=".renovation">Renovation</button>
                        <button data-filter=".petroleum">Petroleum</button>
                        <button data-filter=".metarials">Metarials</button>
                        <button data-filter=".construction">Construction</button>
                    </div>
                    <!-- End Mixitup Nav-->
                    <div class="row magnific-mix-gallery masonary text-left">
                        <div id="portfolio-grid" class="portfolio-items col-4">
                            <div class="portfolio-items">
                                <!-- Single Item -->
                                <div class="pf-item construction">
                                    <div class="effect-up">
                                        <img src="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <h4>Thread Grinding</h4>
                                            <div class="link">
                                                <a href="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                                <a href="#"><i class="fas fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item metarials renovation">
                                    <div class="effect-up">
                                        <img src="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <h4>Spring Renovation</h4>
                                            <div class="link">
                                                <a href="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                                <a href="#"><i class="fas fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item construction industry">
                                    <div class="effect-up">
                                        <img src="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <h4>Wind Energy Plant</h4>
                                            <div class="link">
                                                <a href="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                                <a href="#"><i class="fas fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item metarials industry">
                                    <div class="effect-up">
                                        <img src="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <h4>Petroleum Tank</h4>
                                            <div class="link">
                                                <a href="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                                <a href="#"><i class="fas fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item petroleum renovation">
                                    <div class="effect-up">
                                        <img src="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <h4>Construction Work</h4>
                                            <div class="link">
                                                <a href="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                                <a href="#"><i class="fas fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item petroleum industry">
                                    <div class="effect-up">
                                        <img src="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <h4>Mechanical Engineering</h4>
                                            <div class="link">
                                                <a href="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                                <a href="#"><i class="fas fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item metarials renovation">
                                    <div class="effect-up">
                                        <img src="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <h4>Spring Renovation</h4>
                                            <div class="link">
                                                <a href="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                                <a href="#"><i class="fas fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item metarials industry">
                                    <div class="effect-up">
                                        <img src="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" alt="Thumb">
                                        <div class="overlay">
                                            <h4>Petroleum Tank</h4>
                                            <div class="link">
                                                <a href="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                                <a href="#"><i class="fas fa-link"></i></a>
                                            </div>
                                        </div>           
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->


    @endsection   