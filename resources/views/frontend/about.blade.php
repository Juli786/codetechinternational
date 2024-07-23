 
 @extends('frontend.layouts.main')


@section('main.container')
 
 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(public/assets/img/banner/15.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{asset('/')}}"><i class="fas fa-home"></i> Home</a></li>
                      
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->



    <!-- Start Our About
    ============================================= -->
    <div class="about-area inc-video default-padding">
        <div class="container">
            <div class="row">
                <!-- Start About -->
                <div class="about-content">
                    <div class="col-md-6">
                        <div class="thumb">
                            <img src="public/assets/img/about/1.jpg" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-md-6 info-content">
                        <h1>About Us</h1>
                        <p>
                          Established in 2009, Code Tech International is a one-stop solution center for the coded as well as non-coded design and analysis of skid packages, piping systems, pressure vessels, heat exchangers, storage tanks, other static equipment and all types steel structures.

In our decade long existence we have successfully delivered on numerous key projects the world over. Our intermediate and end clients include ADNOC, Emerson, Frames, GASCO, Petrofac, Sabic, Saudi Aramco, Siemens, Technip and Thermax to name a few.
                        </p>
                        <ul>
                            <li>
                                Expert Professional
                            </li>
                            <li>
                                Professional Approach
                            </li>
                            <li>
                                High Quality Work
                            </li>
                            <li>
                                Satisfaction Guarantee
                            </li>
                        </ul>
                        <div class="achivement-items">
                            <div class="item">
                                <div class="fun-fact">
                                    <i class="flaticon-research-2"></i>
                                    <div class="timer" data-to="14" data-speed="3000"></div>
                                    <span class="medium">Years of Experiance</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="fun-fact">
                                    <i class="flaticon-detective"></i>
                                    <div class="timer" data-to="89" data-speed="3000"></div>
                                    <span class="medium">Professional agents</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End About -->
            </div>
        </div>
    </div>
    <!-- End Our About -->


    <!-- Start Contact
    ============================================= -->
    <div class="contact-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 contact-items">
                    <div class="thumb">
                            <img src="public/assets/img/about/1.jpg" alt="Thumb">
                        </div>
                </div>
                <!-- Start Faq -->
                <div class="col-md-6 faq-area">
                    <div class="heading">
                        <h2>Core Values</h2>
                    </div>
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                           Making Even Parallels Meet
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            The goodwill and integrity of our clients is of paramount importance to us. At the same time, being a business ourselves, we also recognize that for our clients to grow from sustainable to profitable they must maintain a streamlined budget. 
                                        </p>
                                        <p>At Code Tech we bring these two parallel goals together by providing a team of passionate engineers who are not only experienced in the application of the relevant standards but are also experts in the use of a variety of software to deliver on your projects at the most economical prices in the market.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                           With Absolute Precision 
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Here at Code Tech we take very seriously the trust that you repose in us. We realize that even the littlest inaccuracy on our part can snowball into a major inconvenience for you.
                                        </p>
                                        <p>
                                            Our designers, therefore, adhere to a strict protocol of quality control in order to ensure that you can always deliver on your commitments to others in a cost-efficient and timely manner.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                           No Detail Too Small
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Listening is important in every relationship and our designers are trained to work in unison with you to create engineering solutions that are personalized to meet your individual needs.
                                        </p>
                                        <p>
                                             We at Code Tech guarantee that your every query, suggestion and request shall receive an equally patient ear and the promptest possible response from us.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                          Building Together
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                           The whole is always greater than the sum of its parts. We think of our clients not merely as firms that have outsourced their business to us, but as synergetic collaborators who have chosen us as their partners. We endeavor to become an essential component in helping you realize your vision for the future.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                        </div>
                    </div>
                </div>
                <!-- End Faq -->
            </div>
        </div>
    </div>
    <!-- End Contact Area -->


   
    @endsection   