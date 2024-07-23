<!DOCTYPE html>
<html lang="en">



<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buildco - Factory, Industrial & Construction Template">

    <!-- ========== Page Title ========== -->
    <title>Code Tech International</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link href="assets/css/Century-Gothic.css "  rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>


<body>

   

     <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark one-line text-light ">
        <div class="container">
            <div class="row">
                <div class="col-md-9 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map"></i> Office No.01, Second Floor Kondhwa, Pune
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i> mak@codetechinternational.com
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> +91 9970921382
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="social text-right col-md-3">
                    <div class="theme-bg">
                        <ul>
                        <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>

                                    
                                    <li>
                                        <a href="https://www.linkedin.com/company/code-tech-international/"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="">
                                            <img class="twittericon" src="assets/img/twitter.png">
                                        </i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->


     <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                       
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{asset('/')}}">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                    
                   
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">



                         <li>
                            <a href="{{asset('/')}}">Home</a>
                        </li>

                        <li>
                            <a  href="{{asset('/about')}}">About Us</a>
                            
                            
                        </li>

                        
                        
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Designs</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{asset('/skidpackages')}}">Skid Packagesg</a></li>
                                <li><a href="{{asset('/pipingsystems')}}">Piping System</a></li>
                                <li><a 
                                href="{{asset('/pressurevessels')}}">Pressure Vessels</a></li>
                                <li><a href="{{asset('/heatexchangers')}}">Heat Exchangers</a></li>
                                <li><a href="{{asset('/storagetanks')}}">Storage Tanks</a></li>
                                <li><a 
                                href="{{asset('/steelstructures')}}">Steel Structures</a></li>
                                  <li><a
                                  href="{{asset('/staticequipment')}}">Static Equipment</a></li>
                                <li><a href="{{asset('/ansysFEA')}}">Ansys FEA</a></li>
                            </ul>
                        </li>
                        
                         <li>
                            <a href="{{asset('/projects')}}">Projects</a>
                        </li>
                       
                        <li>
                            <a href="{{asset('/client')}}">Clients</a>
                        </li>
                       
                        <li>
                            <a href="{{asset('/gallery')}}">Gallery</a>
                        </li>
                        <li>
                           
                             <a href="{{asset('/contact')}}">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->