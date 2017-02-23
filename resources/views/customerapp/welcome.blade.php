@extends('customerapp.layouts.app')

@section('content')
<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1>Welcome On <strong><span class="color">Cenixoft</span></strong></h1>
            <!-- <p class="lead">We are a digital agency with <strong>years of experience</strong> and with <strong>extraordinary people</strong></p> -->
            <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>

<!-- About Us Page
==========================================-->
<div id="tf-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/customerappimg/images/02.png" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <div class="section-title">
                        <h4>About us</h4>
                        <h2>Some words <strong>about us</strong></h2>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                    <p class="intro">Over 6 years, We are learn research and develop from cooperate with customer for part of growth business, our goal is pushing business SMEs for develop to stage world class.</p>
                    <!-- <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Mission</strong> - <em>We deliver uniqueness and quality</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Services Section
==========================================-->
<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Take a look at <strong>our services</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em></em></small>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-4 col-sm-6 service">
                <i class="fa fa-desktop"></i>
                <h4><strong>Website</strong></h4>

            </div>

            <div class="col-md-4 col-sm-6 service">
                <i class="fa fa-mobile"></i>
                <h4><strong>Mobile Apps</strong></h4>

            </div>

            <div class="col-md-4 col-sm-6 service">
                <i class="fa fa-camera"></i>
                <h4><strong>Design</strong></h4>

            </div>


        </div>
    </div>
</div>

<!-- Clients Section
==========================================-->
<div id="tf-clients" class="text-center">
    <div class="overlay">
        <div class="container">

            <div class="section-title center">
                <h2>Some of <strong>our Clients</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div id="clients" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="/customerappimg/images/client/01.png" style="width:auto;height:150px;">
                </div>
                <div class="item">
                    <img src="/customerappimg/images/client/02.png"  style="width:auto;height:150px;">
                </div>
                <div class="item">
                    <img src="/customerappimg/images/client/03.png"  style="width:auto;height:150px;">
                </div>
                <div class="item">
                    <img src="/customerappimg/images/client/04.png"  style="width:auto;height:150px;">
                </div>
                <div class="item">
                    <img src="/customerappimg/images/client/05.png"  style="width:auto;height:100px;">
                </div>
                <div class="item">
                    <img src="/customerappimg/images/client/06.png"  style="width:auto;height:150px;">
                </div>
                <div class="item">
                    <img src="/customerappimg/images/client/07.png"  style="width:auto;height:120px;">
                </div>
                <div class="item">
                    <img src="/customerappimg/images/client/08.png"  style="width:auto;height:150px;">
                </div>
                <div class="item">
                    <img src="/customerappimg/images/client/09.png"  style="width:auto;height:250px;">
                </div>
                <div class="item">
                    <img src="/customerappimg/images/client/10.png"  style="width:auto;height:100px;">
                </div>


            </div>

        </div>
    </div>
</div>

<!-- Portfolio Section
==========================================-->
<div id="tf-works">
    <div class="container"> <!-- Container -->
        <div class="section-title text-center center">
          <h2>Portfolio</h2>
            <!-- <h2>Take a look at <strong>our services</strong></h2> -->
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <!-- <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small> -->
        </div>
        <div class="space"></div>

        <div class="categories">

            <ul class="cat">
                <li class="pull-left"><h4>Filter by Type:</h4></li>
                <li class="pull-right">
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".web">Web Design</a></li>
                        <li><a href="#" data-filter=".logodesign">Logo Desin</a></li>
                        <li><a href="#" data-filter=".mobile" >Mobile App</a></li>

                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div id="lightbox" class="row">

          @foreach($mobiles as $mobile)
            <div class="col-sm-6 col-md-3 col-lg-3 mobile">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="{{url('/home/mobile/')}}<?php echo "/".$mobile->id ?>">
                            <div class="hover-text">
                                <h4>{{$mobile->customername}}</h4>
                                <small>Mobile App</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="/MobileImage/{{$mobile->customerlogo}}" class="img-responsive" alt="/customerappimg." >
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($websites as $website)
            <div class="col-sm-6 col-md-3 col-lg-3 web">
                <div class="portfolio-item">
                    <div class="hover-bg">
                      <a href="{{url('/home/website/')}}<?php echo "/".$website->id ?>">
                            <div class="hover-text">
                                <h4>{{$website->customername}}</h4>
                                <small>Website</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="/WebsiteImage/{{$website->customerlogo}}" class="img-responsive" alt="/customerappimg." >
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($logos as $logo)
            <div class="col-sm-6 col-md-3 col-lg-3 logodesign">
                <div class="portfolio-item">
                    <div class="hover-bg">
                      <a href="{{url('/home/logo/')}}<?php echo "/".$logo->id ?>">
                            <div class="hover-text">
                                <h4>{{$logo->customername}}</h4>
                                <small>Design</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="/LogoImage/{{$logo->customerlogo}}" class="img-responsive" alt="/customerappimg." >
                        </a>
                    </div>
                </div>
            </div>
              @endforeach



        </div>
    </div>
</div>

<!-- Testimonials Section
==========================================-->
<!-- <div id="tf-testimonials" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Education</strong> Zone</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div class="item">




                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Contact Section
==========================================-->
<!-- <div id="tf-contact" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="section-title center">
                    <h2<strong>contact us</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <small><em>48-48/1 ม. 5 ถ.เชียงใหม่-ลำปาง ต.ช้างเผือก อ.เมืองเชียงใหม่ จ.เชียงใหม่ 50300</em></small>
                </div>

            </div>
        </div>

    </div>
</div> -->

<nav id="footer">
    <div class="container">
        <div class="pull-left fnav">
            <p>ALL RIGHTS RESERVED. COPYRIGHT © 2017.</p>
        </div>
        <div class="pull-right fnav">
            <ul class="footer-social">
                <li><a href="https://www.facebook.com/cenixoft/"><i class="fa fa-facebook"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                <li><a href="https://plus.google.com/106336890932170059991"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://twitter.com/cenixoft"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

@endsection
