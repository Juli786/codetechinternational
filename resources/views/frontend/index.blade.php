
@extends('frontend.layouts.main')


@section('main.container')


    <!-- Start Banner -->
          
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"> 
    <img src="public/assets/img/banner/home_banner.jpg" class="d-block w-100" alt="...">
      <div class="background-overlay"></div>
      <div class="carousel-caption heading-uppercase">
         <h1 class="display-4 h4-md mb-4 font-weight-bold title">Coded &  Non-coded Designing  & Analysis
        </h1>
    </div>
    </div>
   
  </div>
  </div>

    <!-- End Banner -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area inc-video default-padding">
        <div class="container">
            <div class="row">
                <!-- Start About -->
                <div class="about-content">
                    <div class="col-md-6 col-sm-12 ">
                        <div class="ratio ratio-16x9 ">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/STp_QqHknwo?si=_cyhb5RxAVoYUX8H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 info-content ">
                        <h1>About Us</h1>
                        <p>
                        Established in 2009, Code Tech International is a one-stop solution center for the coded as well as non-coded design and analysis of skid packages, piping systems, pressure vessels, heat exchangers, storage tanks, other static equipment and all types steel structures.
                        </p>
                        <p>Our services extend to clients from across industry segments including but not limited to Oil & Gas, Power, Water, Chemicals and Manufacturing. Irrespective of geographical location, we can deliver exactly as per your specific work environment.At Code Tech International our commitment is to simplifying the gamut of engineering standards and consistently delivering a quality output that our clients can rely on. </p>
                        
                       
                    </div>
                </div>
                <!-- End About -->
            </div>
        </div>
    </div>
    <!-- End Our About -->
    
    
    
    
     <!-- Start Services
    ============================================= -->
    <div class="services-area flex-icon bg-gray default-padding bottom-less">
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                       
                        <h2>Our Designs</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-items">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('/skidpackages')}}"><img src="public/assets/img/services/1.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="title">
                                        <a href="{{asset('/skidpackages')}}">
                                            <i class="flaticon-valve"></i>
                                            <h4>Skid Packages</h4>
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('/pipingsystems')}}"><img src="public/assets/img/services/2.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="title">
                                        <a href="{{asset('/pipingsystems')}}">
                                            <i class="flaticon-tractor-1"></i>
                                            <h4>Piping Systems</h4>
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('/pressurevessels')}}"><img src="public/assets/img/services/3.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="title">
                                        <a href="{{asset('/pressurevessels')}}">
                                            <i class="flaticon-mayan-pyramid"></i>
                                            <h4>Pressure Vessels</h4>
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('/heatexchangers')}}"><img src="public/assets/img/services/5.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="title">
                                        <a href="{{asset('/heatexchangers')}}">
                                            <i class="flaticon-bridge-2"></i>
                                            <h4>Heat Exchangers</h4>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('/storagetanks')}}"><img src="public/assets/img/services/6.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="title">
                                        <a href="{{asset('/storagetanks')}}">
                                            <i class="flaticon-work-time"></i>
                                            <h4>Storage Tanks</h4>
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('/staticequipment')}}"><img src="public/assets/img/services/8.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="title">
                                        <a href="{{asset('/staticequipment')}}">
                                            <i class="flaticon-solar-panel"></i>
                                            <h4>Static Equipment</h4>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a  href="{{asset('/steelstructures')}}"><img src="public/assets/img/services/4.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="title">
                                        <a  href="{{asset('/steelstructures')}}">
                                            <i class="flaticon-work-time"></i>
                                            <h4>Steel Structures</h4>
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a  href="{{asset('/ansysFEA')}}"><img src="public/assets/img/services/9.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="title">
                                        <a  href="{{asset('/ansysFEA')}}">
                                            <i class="flaticon-work-time"></i>
                                            <h4>Ansys FEA</h4>
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->
    
    
    
    
     <!-- Start Why Chose Us
    ============================================= -->
  
    <div class="services-area flex-icon default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        
                        <h2>why Choose Us</h2>
                      <!--<p>-->
                      <!--    Here are just some of the reasons to partner with Code Tech-->
                      <!--</p>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-items">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <div class="content why_chooseusbox">
                                    <div class="title">
                                        <a href="#">
                                            <i class="flaticon-valve"></i>
                                            <h4>Absolute Precision</h4>
                                        </a>
                                    </div>
                                    <p>
                                        Drawing a member oriented from left to right or bottom to top instead of the other way round can make all the difference in the world. At Code Tech it is these little things that we ensure are always done correctly, so that your work may proceed unimpeded.

 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <div class="content why_chooseusbox">
                                    <div class="title">
                                        <a href="#">
                                            <i class="flaticon-tractor-1"></i>
                                            <h4>Competitive Prices</h4>
                                        </a>
                                    </div>
                                    <p>
                                       Our profitability we believe should not be at your expense. By constantly streamlining our operations we are able to offer amongst the most competitive prices on the market, without sacrificing either the quality of our work or the integrity of the way we do it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <div class="content why_chooseusbox">
                                    <div class="title">
                                        <a href="#">
                                            <i class="flaticon-mayan-pyramid"></i>
                                            <h4>Punctuality</h4>
                                        </a>
                                    </div>
                                    <p>
                                       Patience of course is an excellent virtue. We promise, however, to never test yours. Our designers go above and beyond to ensure that they meet every deadline, so that you never miss one of yours.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <div class="content why_chooseusbox">
                                    <div class="title">
                                        <a href="#">
                                            <i class="flaticon-bridge-2"></i>
                                            <h4>Licensed Software</h4>
                                        </a>
                                    </div>
                                    <p>
                                        Every single project entrusted to us is completed using valid software licenses. We value the trust that your customers repose in your honesty and ethics and promise to always uphold it as if our very own.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <div class="content why_chooseusbox">
                                    <div class="title">
                                        <a href="#">
                                            <i class="flaticon-work-time"></i>
                                            <h4>Experience & Drive</h4>
                                        </a>
                                    </div>
                                    <p>
                                       Every project presents its own set of novel challenges, and we have acquired over two decades worth of experience, delivering on some of the most novel projects across the globe. We look forward to learning from every project and to engineering something new every day. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <div class="content why_chooseusbox">
                                    <div class="title">
                                        <a href="#">
                                            <i class="flaticon-solar-panel"></i>
                                            <h4>One-stop Solution Center</h4>
                                        </a>
                                    </div>
                                    <p>
                                        We offers services on ANSYS, CADWorx, CAESAR II, PV Elite, BricsCAD, Smart P&ID, AutoCAD, Inventor, STAAD.Pro, RAM Connection and Foundation Advanced. We also undertake steel detailing on Tekla Structures through our vertical, Max Structures. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
   
    
    <!-- End Why Chose Us -->

   
   
<!-- Start Work Process 
    ============================================= -->
    <div class="work-process-area default-padding bottom-less default-padding_tt">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Our Work Process</h4>
                        <h2>How does we work</h2>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="works-process-items">
                    <!-- Single Item -->
                    <div class="col-md-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-concept"></i>
                            </div>
                            <div class="content">
                                <div class="vertical-line">
                                    <span>01</span>
                                </div>
                                <div class="info">
                                    <h4>Project Concept</h4>
                                    <span>Your Basic Idea</span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-flasks"></i>
                            </div>
                            <div class="content">
                                <div class="vertical-line">
                                    <span>02</span>
                                </div>
                                <div class="info">
                                    <h4>Research</h4>
                                    <span>Valueable findings</span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-implement"></i>
                            </div>
                            <div class="content">
                                <div class="vertical-line">
                                    <span>03</span>
                                </div>
                                <div class="info">
                                    <h4>Implement Plan</h4>
                                    <span>Begin to Develop</span>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Process -->
    
    <!-- software-->
    
    <div class="services-area left-info flex-less inc-thumb  carousel-shadow default-padding" style="padding-top:33px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 info about-area">
                    <h2 class="liciense_title">Licensed Software</h2>
                    <div class=" info-content">
                    <ul>
                            <li>
                                Finite Element Analysis (FEA) on ANSYS Mechanical Enterprise
                            </li>
                            <li>
                               Static Equipment Design and Analysis on PV-Elite
                            </li>
                            <li>
                                Piping Stress Analysis on CAESAR II
                            </li>
                            <li>
                               Plant Layout and 3D Modelling on CADWorx
                            </li>
                            
                            <li>Structural Analysis on STAAD.Pro Connect Edition</li>
                            
                            <li>Steel Connection Design on RAM Connection</li>
                        </ul>
                        </div>
                   
                </div>
                <div class="col-md-6 carousel">
                    <div class="services-items services-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img  class="imgsoft" src="public/assets/img/licensed /1.svg" alt="Thumb">
                            </div>
                            <div class="">
                                
                                    <div class="thumb">
                                <img  class="imgsoft" src="public/assets/img/licensed /2.svg" alt="Thumb">
                            </div>
                              
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                               <img  class="imgsoft" src="public/assets/img/licensed /3.svg" alt="Thumb">
                            </div>
                            <div class="">
                                
                                    <div class="thumb">
                                <img  class="imgsoft" src="public/assets/img/licensed /4.svg" alt="Thumb">
                            </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                               <img  class="imgsoft" src="public/assets/img/licensed /5.svg" alt="Thumb">
                            </div>
                             <div class="">
                                
                                    <div class="thumb">
                                <img  class="imgsoft" src="public/assets/img/licensed /6.svg" alt="Thumb">
                            </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                              <img  class="imgsoft" src="public/assets/img/licensed /7.svg" alt="Thumb">
                            </div>
                             <div class="">
                                
                                    <div class="thumb">
                                <img  class="imgsoft" src="public/assets/img/licensed /8.svg" alt="Thumb">
                            </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!--/end software-->
    
    
     <!-- Start Portfolio 
    ============================================= -->
    <div class="portfolio-area default-padding circle-icon bottom-less bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                       
                        <h2>Recent Projects</h2>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mix-item-menu">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".industry">Oil & Gas</button>
                        <button data-filter=".renovation">Power</button>
                        <button data-filter=".petroleum">Water</button>
                        <button data-filter=".metarials">Chemicals</button>
                        <button data-filter=".construction">Manufacturing</button>
                    </div>
                    <!-- End Mixitup Nav-->
                    <div class="row masonary">
                        <div id="portfolio-grid" class="portfolio-items col-3">
                            <div class="portfolio-items">
                                <!-- Single Item -->
                                <div class="pf-item construction">
                                    <div class="item">
                                        <div class="effect-up">
                                            <img src="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" alt="Thumb">
                                            <div class="overlay">
                                                <div class="link">
                                                    <a href="public/assets/img/portfolio/Chimical-Injection-Skid.jpg" class="item popup-gallery"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-link"></i></a>
                                                </div>
                                            </div>           
                                        </div>
                                        <div class="info">
                                            <h3>Chemical Injection Skid</h3>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item metarials renovation">
                                    <div class="item">
                                        <div class="effect-up">
                                            <img src="public/assets/img/portfolio/Raw-Water-Treatment-Plant.jpg" alt="Thumb">
                                            <div class="overlay">
                                                <div class="link">
                                                    <a href="public/assets/img/portfolio/Raw-Water-Treatment-Plant.jpg" class="item popup-gallery"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-link"></i></a>
                                                </div>
                                            </div>           
                                        </div>
                                        <div class="info">
                                            <h3>Raw Water Treatment Plant</h3>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item construction industry">
                                    <div class="item">
                                        <div class="effect-up">
                                            <img src="public/assets/img/portfolio/Gas-Scrubber.jpg" alt="Thumb">
                                            <div class="overlay">
                                                <div class="link">
                                                    <a href="public/assets/img/portfolio/Gas-Scrubber.jpg" class="item popup-gallery"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-link"></i></a>
                                                </div>
                                            </div>           
                                        </div>
                                        <div class="info">
                                            <h3>Gas Scrubber 1</h3>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item metarials industry">
                                    <div class="item">
                                        <div class="effect-up">
                                            <img src="public/assets/img/portfolio/Stacked-Heat-Exchenger.jpg" alt="Thumb">
                                            <div class="overlay">
                                                <div class="link">
                                                    <a href="public/assets/img/portfolio/Stacked-Heat-Exchenger.jpg" class="item popup-gallery"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-link"></i></a>
                                                </div>
                                            </div>           
                                        </div>
                                        <div class="info">
                                            <h3>Stacked Heat Exchanger</h3>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item petroleum renovation">
                                    <div class="item">
                                        <div class="effect-up">
                                            <img src="public/assets/img/portfolio/Equlization-Tank.jpg" alt="Thumb">
                                            <div class="overlay">
                                                <div class="link">
                                                    <a href="public/assets/img/portfolio/Equlization-Tank.jpg" class="item popup-gallery"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-link"></i></a>
                                                </div>
                                            </div>           
                                        </div>
                                        <div class="info">
                                            <h3>Equalization Tank</h3>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item petroleum industry">
                                    <div class="item">
                                        <div class="effect-up">
                                            <img src="public/assets/img/portfolio/80-Meter-incinerator-stack.jpg" alt="Thumb">
                                            <div class="overlay">
                                                <div class="link">
                                                    <a href="public/assets/img/portfolio/80-Meter-incinerator-stack.jpg" class="item popup-gallery"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-link"></i></a>
                                                </div>
                                            </div>           
                                        </div>
                                        <div class="info">
                                            <h3>80 Metre Incinerator Stack</h3>
                                            
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


    <!-- Start Testimonials
    ============================================= -->

    
    <div class="testimonials-area  default-padding   " >
    <div style="background-image: url(public/assets/img/banner/2.jpg);" class="shadow dark  bg-gray bg-fixed review_client">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading less-info text-center">
                      
                        <h2>Customer Review</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="public/assets/img/team/usericon.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                   Excellent training institute to learn about the Pressure Vessels in a truly simplified and comprehensive manner. Mr. Khan with his in depth knowledge coupled with 20 years of industrial experience makes the subject more interesting and joyful. 
                                </p>
                               
                                <h4>Abhijeet Pawar</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="public/assets/img/team/usericon.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                   Codetech international is very good in teaching coaching. Mr.khan sir is giving proper guidance and training to the students as per their capabilities.I have completed training coarse in this institute which enhances my technical knowledge. 
                                </p>
                               
                                <h4>Israil Tamboli</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="public/assets/img/team/usericon.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                   Codetechindia is a esteemed engineering consultant. They provide you full support in designing from start to end. Employees have sound knowledge in their related fields and have mutual understanding. Teamwork is its key.They are fully dedicated to jobs
                                </p>
                              
                                <h4>Ali Imami</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
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
    <!-- End Testimonials -->


     <!-- Start Clients Area
    ============================================= -->
    <div class="clients-area client_tp ">
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                       
                        <h2>Our Clients</h2>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 clients-box">
                    <div class="clients-items owl-carousel owl-theme text-center">
                        <div class="single-item">
                            <a href="#"><img src="public/assets/img/clients/1.svg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="public/assets/img/clients/2.svg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="public/assets/img/clients/3.svg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="public/assets/img/clients/4.svg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="public/assets/img/clients/5.svg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="public/assets/img/clients/6.svg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="public/assets/img/clients/7.svg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="public/assets/img/clients/8.svg" alt="Clients"></a>
                        </div>
                       
                       
                        






                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Area -->
    
    
   
    @endsection   