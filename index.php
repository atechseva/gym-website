<?php
error_reporting(0);
if ($_GET['submit']) {
    $mass = $_GET['mass'];
    $height = $_GET['height'];
    function bmi($mass, $height)
    {
        $bmi = $mass / ($height * $height);
        return $bmi;
    }
    $bmi = bmi($mass, $height);
    if ($bmi <= 18.5) {
        $output = "Under Weight";
    } else if ($bmi > 18.5 and $bmi <= 24.9) {
        $output = "Normal Weight";
    } else if ($bmi > 24.9 and $bmi <= 29.9) {
        $output = "Over Weight";
    } else if ($bmi > 30.0) {
        $output = "OBESE";
    }
    echo "<script>alert('Your BMI value is " . $bmi . " and you are : $output');</script>";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM Website | Atechseva</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="venobox/venobox.min.css">
 
    <script src="venobox/venobox.min.js" type="text/javascript"></script>
   
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

</head>

<body>
    <section class="banner" role="banner" id="movetop">
        <header id="header">
            <div class="header-content clearfix"> <span class="logo"><a href="index.html">GYM LOGO</a></span>
                <nav class="navigation" role="navigation">
                    <ul class="primary-nav">
                        <li><a href="#movetop">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Workouts</a></li>
                        <li><a href="#package">Package</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <a href="#" class="nav-toggle">Menu<span></span></a>
            </div>
        </header>

        <div class="bg-video-wrap">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="img/video.mp4" type="video/mp4">
            </video>
        </div>

    </section>


    <section class="centered">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><span>The clock is ticking !</span><br> Are you becoming the person you want to be?</h1>
                    <h4 class="btn btn-warning">JOIN NOW</h4>
                </div>
            </div>
        </div>
    </section>






    <section id="about">
        <div class="container">

            <div class="row">
                <div class="col-md-6 wow fadeInLeft animated">
                    <h2 class="title">BEST GYM IN MEERUT</h2>
                    <p class="content mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur explicabo quod ab repellat, velit vel error voluptatum eaque corporis. Voluptatem earum ratione quae magni! Obcaecati incidunt similique necessitatibus nam error distinctio iste ipsam sequi quam provident, rem esse. Qui dolor pariatur maiores! In amet voluptatum quibusdam? Voluptatem repellat aliquam esse quo illum dolor soluta ipsum maiores, recusandae, doloribus repellendus fugit!</p>
                    <ul>
                        <li><i class="far fa-arrow-alt-circle-right"></i> 60 GYMS</li>
                        <li><i class="far fa-arrow-alt-circle-right"></i> 6+ Trainers in Every Gym</li>
                        <li><i class="far fa-arrow-alt-circle-right"></i> More than 10 experience</li>
                        <li><i class="far fa-arrow-alt-circle-right"></i> Personal Training Program</li>
                        <li><i class="far fa-arrow-alt-circle-right"></i> Group Program</li>
                    </ul>
                    <div class="btn btn-outline-warning">View More <span class="text-white"><i class="fas fa-arrow-right"></i></span></div>
                </div>
                <div class="col-md-6 mt-5 wow fadeInRight animated" data-wow-offset="250" data-wow-delay="200ms">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/about.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/about2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/about3.jpg" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section id="services" class="services service-section section-border">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Fitness Workouts</h2>
                <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 services text-center  wow fadeInUp animated" data-wow-offset="250" data-wow-delay="200ms">
                    <img src="img/icon1.png" alt="">
                    <div class="services-content">
                        <h5>Aerobic</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula
                            sagittis faucibus eget quis lacus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center wow fadeInUp animated" data-wow-offset="200" data-wow-delay="300ms"> <img src="img/icon1.png" alt="">
                    <div class="services-content">
                        <h5>Weight Loss</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula
                            sagittis faucibus eget quis lacus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center wow fadeInUp animated" data-wow-offset="150" data-wow-delay="400ms"> <img src="img/icon1.png" alt="">
                    <div class="services-content">
                        <h5>Cardio</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula
                            sagittis faucibus eget quis lacus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center wow fadeInUp animated" data-wow-offset="250" data-wow-delay="200ms"> <img src="img/icon1.png" alt="">
                    <div class="services-content">
                        <h5>Body Building</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula
                            sagittis faucibus eget quis lacus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center wow fadeInUp animated" data-wow-offset="200" data-wow-delay="300ms"><img src="img/icon1.png" alt="">
                    <div class="services-content">
                        <h5>Health Tips</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula
                            sagittis faucibus eget quis lacus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center wow fadeInUp animated" data-wow-offset="150" data-wow-delay="400ms"> <img src="img/icon1.png" alt="">
                    <div class="services-content">
                        <h5>Diet Plans</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula
                            sagittis faucibus eget quis lacus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="letconnects mb-5" id="bmi" style="background:url(../img/bmi.jpg) fixed center no-repeat; background-size:cover;">
        <div class="container">
            <div class=" row">

                <!--[]-->
                <div class="col-md-8 col-sm-6">

                    <form method="GET">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-6">

                                <input type="text" name="mass" placeholder="Mass in kilogram (kg)">
                            </div>

                            <div class="col-md-3 col-sm-6 col-6">
                                <input type="text" name="height" placeholder="Height in meter (m)">
                            </div>

                            <div class="col-md-2 col-sm-6 col-12">
                                <input type="submit" name="submit" value="Calculate">
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <div class="col-md-4 col-sm-6 col-xs-12">


                    <h3 class="cnctheading"><span>CALCULATE YOUR BMI</span> </h3>
                    <p>Enter your Accurate Weight and Height</p>
                </div>
                <!--[]-->
            </div>
        </div>
    </section>


    <!-- package section -->
    <section id="package" class="packageList">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Package</h2>
                <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <div class="package wow fadeInLeft animated" data-wow-offset="250" data-wow-delay="200ms">
                        <h5>Personal Training</h5>
                        <ul class="list-default">
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>adipiscing eliteger gravida velit quis dolo</li>
                            <li>Pellentesque elit tortor</li>
                        </ul>
                        <strong class="price"><small>$</small>38</strong>
                    </div><!-- end package -->

                    <div class="package wow fadeInLeft animated" data-wow-offset="200" data-wow-delay="300m">
                        <h5>Group Training</h5>
                        <ul class="list-default">
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>adipiscing eliteger gravida velit quis dolo</li>
                            <li>Pellentesque elit tortor</li>
                        </ul>
                        <strong class="price"><small>$</small>75</strong>
                    </div><!-- end package -->

                    <div class="package no-border wow fadeInLeft animated" data-wow-offset="150" data-wow-delay="400m">
                        <h5>Cross Fit</h5>
                        <ul class="list-default">
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>adipiscing eliteger gravida velit quis dolo</li>
                            <li>Pellentesque elit tortor</li>
                        </ul>
                        <strong class="price"><small>$</small>46</strong>
                    </div><!-- end package -->

                </div><!-- end col-md-6 -->
                <div class="col-md-6">

                    <div class="package wow fadeInRight animated" data-wow-offset="250" data-wow-delay="500m">
                        <h5>Weight Loss Pack</h5>
                        <ul class="list-default">
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>adipiscing eliteger gravida velit quis dolo</li>
                            <li>Pellentesque elit tortor</li>
                        </ul>
                        <strong class="price"><small>$</small>15</strong>
                    </div><!-- end package -->

                    <div class="package wow fadeInRight animated" data-wow-offset="200" data-wow-delay="600m">
                        <h5>Body Build Pack</h5>
                        <ul class="list-default">
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>adipiscing eliteger gravida velit quis dolo</li>
                            <li>Pellentesque elit tortor</li>
                        </ul>
                        <strong class="price"><small>$</small>84</strong>
                    </div><!-- end package -->

                    <div class="package no-border wow fadeInRight animated" data-wow-offset="150" data-wow-delay="700m">
                        <h5>Aerobic</h5>
                        <ul class="list-default">
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>adipiscing eliteger gravida velit quis dolo</li>
                            <li>Pellentesque elit tortor</li>
                        </ul>
                        <strong class="price"><small>$</small>95</strong>
                    </div><!-- end package -->

                </div><!-- end col-md-6 -->
            </div><!-- end row -->
        </div>
    </section>


    <section class="letconnects" id="contact">
        <div class="container">
            <div class=" row">
                <div class="col-md-4">


                    <h3 class="cnctheading"><span>BUY OUR GYM MEMBERSHIP TODAY</span> </h3>
                    <p>START YOU FITNESS JOURNEY TODAY</p>
                </div>
                <!--[]-->
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <form action="lets-connect" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <select name="" id="">
                                    <option value="">Morning Pack</option>
                                    <option value="">Morning Pack</option>
                                    <option value="">Morning Pack</option>

                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <input type="text" name="phone" placeholder="Phone Number" required>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <input type="submit" name="submit" value="SUBMIT">
                            </div>
                        </div>
                    </form>
                </div>
                <!--[]-->
            </div>
        </div>
    </section>

    <!-- gallery section -->
    <section id="gallery" class="gallery section mt-5 wow fadeInUp animated">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Gallery</h2>
                <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-sm-6 work"> 
               
                <a class="venobox work-box" data-vbtype="iframe" href="img/01.jpg"><img src="img/01.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><i class="fas fa-search-plus"></i></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> 
                <a class="venobox work-box" data-vbtype="iframe" href="img/02.jpg"><img src="img/02.jpg" alt="">
              
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><i class="fas fa-search-plus"></i></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                <a class="venobox work-box" data-vbtype="iframe" href="img/03.jpg"><img src="img/03.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><i class="fas fa-search-plus"></i></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                <a class="venobox work-box" data-vbtype="iframe" href="img/04.jpg"><img src="img/04.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><i class="fas fa-search-plus"></i></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                <a class="venobox work-box" data-vbtype="iframe" href="img/05.jpg"><img src="img/05.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><i class="fas fa-search-plus"></i></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> 
                <a class="venobox work-box" data-vbtype="iframe" href="img/06.jpg"><img src="img/06.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><i class="fas fa-search-plus"></i></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> 
                <a class="venobox work-box" data-vbtype="iframe" href="img/07.jpg"><img src="img/07.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><i class="fas fa-search-plus"></i></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> 
                <a class="venobox work-box" data-vbtype="iframe" href="img/08.jpg"><img src="img/08.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><i class="fas fa-search-plus"></i></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
            </div>
        </div>
    </section>


    <section class="testimonial text-center section-border wow fadeInRight animated" data-wow-offset="200" data-wow-delay="500m" id="testimonials">
        <div class="container">


            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="img/client1.png" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 1</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="img/client2.png" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 2</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="img/client3.png" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 3</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="img/client4.png" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 4</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>


    <footer class="footer-section wow fadeInLeft animated">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>your address </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-mobile-alt"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>7017742830</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>atechseva@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos voluptatum, mollitia magnam blanditiis commodi asperiores voluptatem laboriosam perspiciatis fugiat voluptates.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-instagram insta-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Package</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Testimonials</a></li>

                                <li><a href="#">Contact us</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, et.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021, All Right Reserved <a href="https:www.atechseva.com/" target="_blank">Atechseva</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#movetop" class="move-top text-center">
        <i class="fas fa-arrow-up"></i>
    </a>


</body>

</html>