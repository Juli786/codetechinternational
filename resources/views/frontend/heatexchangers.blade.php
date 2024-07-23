 
 @extends('frontend.layouts.main')


@section('main.container')
 
 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(public/assets/img/banner/15.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Heat Exchangers</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{asset('/')}}"><i class="fas fa-home"></i> Home</a></li>
                      
                        <li class="active">Heat Exchangers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


<section class="single-service-area">
    <div class="container">
        <div class="row">
            <div class=" col-lg-8 col-md-12 col-sm-12">
                <div class="single-service-top">
                    <div class="sec-title-box">
                        <h2>Heat Exchangers</h2>
                        
                    </div>
                    <div class="text">
                        <p>Welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or  obligations of business it will frequently occur that pleasures have to be repudiated &amp; annoyances that accepted. The wise man therefore always holds in these matters to this principle.</p>
                    </div>
                    <div class="img-holder">
                        <img src="https://st.ourhtmldemo.com/new/Screwer-Demo/images/services/service-single/single-service-1.jpg" alt="Awesome Image">
                       
                    </div>
                    
                    
                     <div class="text services_alighnmnet">
                        <p>Welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or  obligations of business it will frequently occur that pleasures have to be repudiated &amp; annoyances that accepted. The wise man therefore always holds in these matters to this principle.</p>
                   
                    <p>Welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or  obligations of business it will frequently occur that pleasures have to be repudiated &amp; annoyances that accepted. The wise man therefore always holds in these matters to this principle.</p>
                   
                    </div>
                    
                </div>
                
                
               
               
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="single-service-sidebar">
                    <!--Start Single sidebar-->
                    <div class="single-sidebar">
                        <div class="service-sidebar-title">
                            <h3>Our Services</h3>
                        </div>
                        <ul class="service-pages">
                             <li><a href="{{asset('/skidpackages')}}">Skid Packagesg</a></li>
                                <li><a href="{{asset('/pipingsystems')}}">Piping System</a></li>
                                <li><a href="{{asset('/pressurevessels')}}">Pressure Vessels</a></li>
                                <li class="active"><a href="{{asset('/heatexchangers')}}">Heat Exchangers</a></li>
                                <li><a href="{{asset('/storagetanks')}}">Storage Tanks</a></li>
                                <li><a href="{{asset('/steelstructures')}}">Steel Structures</a></li>
                                  <li><a href="{{asset('/staticequipment')}}">Static Equipment</a></li>
                                <li><a href="{{asset('/ansysFEA')}}">Ansys FEA</a></li>
                        </ul>
                    </div>
                    <!--End Single sidebar-->
                    
                   
                    <!--Start Single sidebar-->
                  <div class="single-sidebar">
                        <div class="service-sidebar-title">
                            <h3>Our Brochures</h3>
                        </div>
                        <ul class="our-brochures">
                            <li>
                                <div class="icon-holder">
                                    <span class="icon-text"></span>    
                                </div>
                                <div class="title-holder">
                                    <h3>Company Profile <span>(1.5mb)</span></h3>
                                    <a class="btn-two" href="#">Download<span class="icon-thin-right-arrow"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <span class="icon-document-1"></span>    
                                </div>
                                <div class="title-holder">
                                    <h3>Service Overview <span>(1.3mb)</span></h3>
                                    <a class="btn-two" href="#">Download<span class="icon-thin-right-arrow"></span></a>
                                </div>
                            </li> 
                        </ul>
                    </div>
                    <!--End Single sidebar-->
                </div>    
            </div>
        </div>
    </div>    
</section>


   
    @endsection   