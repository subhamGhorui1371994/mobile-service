@extends('layouts.template')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(assets/images/background/6.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href={{ url('/') }}>Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Us -->
    <section class="about-us alternate">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>About Us</h2>
                        </div>
                        <div class="text">Our commitment to bring professionalism, good service & trust to the Phone
                            repair service & maintenance business. We take immense pride in sending some of the most of
                            professional technicians to yours phone to fix things that aren't workings.</div>

                        <div class="message">Save time, Save money, With Quality Phone <br> Repair Service, <span>Purchase
                                - RepairPlus</span></div>

                        <div class="link-box">
                            <a href={{ url('about') }} class="theme-btn btn-style-two">Contact Us</a>
                            <a href={{ url('#') }} class="theme-btn call-btn"><i class="icon la la-phone"></i> + 62 867
                                6872</a>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12 wow fadeIn">
                    <div class="inner-column">
                        <div class="float-text">I am a Computer and Mobile Expart</div>
                        <figure class="image"><img src={{ url('assets/images/resource/image-2.jpg') }} alt="">
                        </figure>
                        <div class="link-box"><a href="https://www.youtube.com/watch?v=e_WOEL6F1YE" class="link"
                                data-fancybox="gallery" data-caption=""><span class="icon la la-play"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!--Fluid Section One-->
    <section class="fluid-section-one">
        <div class="outer-container clearfix">
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Why Choose US</h2>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block">
                        <div class="inner-box">
                            <span class="icon la la-wrench"></span>
                            <h5><a href={{ url('services') }}>Free Diagnostics</a></h5>
                            <div class="text">We is a quick and easy way of checking the set up on your Mobile Phones,
                                Desktop & Laptop, Acessories and ect... We done its free of cost.</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block">
                        <div class="inner-box">
                            <span class="icon la la-cog"></span>
                            <h5><a href={{ url('services') }}>Quick Repair Process</a></h5>
                            <div class="text">WThe repair process is fast and convenient & our expert teams of Mr.Fixit
                                repair, If you see a phone symbol in the top left corner of the screen.</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block">
                        <div class="inner-box">
                            <span class="icon la la-clock-o"></span>
                            <h5><a href={{ url('services') }}>24/7 Customer Support</a></h5>
                            <div class="text">24x7 techsupport is one of the best services in the Mr.Fixit. 24x7 tech
                                support providing quality services at anytime, anywhere in the world.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Image Column-->
            <div class="image-column wow fadeIn" style="background-image:url(assets/images/resource/image-1.jpg);">
                <figure class="image-box"><img src={{ url('assets/images/resource/image-1.jpg') }} alt="">
                </figure>
            </div>
        </div>
    </section>
    <!-- End Fluid Section -->

    <!-- Process Section -->
    <section class="process-section alternate">
        <div class="auto-container">
            <div class="row">
                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon la la-wrench"></span></div>
                        <h4>Technical Staff</h4>
                        <div class="text">Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore
                            mque </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon la la-unlock-alt"></span></div>
                        <h4>Quick Repair Process</h4>
                        <div class="text">Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore
                            mque </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon la la-plane"></span></div>
                        <h4>On Time Delivery</h4>
                        <div class="text">Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore
                            mque </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Process Section -->

    <!-- Fun Fact Section -->
    <section class="fun-fact-section" style="background-image: url(assets/images/background/4.jpg);">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="count-box">
                            <span class="count-text" data-speed="3000" data-stop="2456">0</span>
                            <h4 class="counter-title">Mobiles Repaired</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="count-box">
                            <span class="count-text" data-speed="3000" data-stop="1465">0</span>
                            <h4 class="counter-title">Expert Technicians</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="count-box">
                            <span class="count-text" data-speed="3000" data-stop="8781">0</span>
                            <h4 class="counter-title">Completed Deals</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="count-box">
                            <span class="count-text" data-speed="3000" data-stop="8536">0</span>
                            <h4 class="counter-title">Happy Customers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Expert Worker</h2>
            </div>

            <div class="row">
                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src={{ url('assets/images/resource/team-1.jpg') }}
                                    alt="">
                            </figure>
                            <div class="overlay-box">
                                <a href={{ url('team') }} class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href={{ url('#') }}><i class="la la-facebook"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-twitter"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-google-plus"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-dribbble"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href={{ url('team') }}>Roban Kosata</a></h4>
                            <span class="designation">Computer Hardwere Enginer</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src={{ url('assets/images/resource/team-2.jpg') }}
                                    alt="">
                            </figure>
                            <div class="overlay-box">
                                <a href={{ url('team') }} class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href={{ url('#') }}><i class="la la-facebook"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-twitter"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-google-plus"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-dribbble"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href={{ url('team') }}>Moneib Rabora</a></h4>
                            <span class="designation">Mobile Phone Hardwere Enginer</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src={{ url('assets/images/resource/team-3.jpg') }}
                                    alt="">
                            </figure>
                            <div class="overlay-box">
                                <a href={{ url('team') }} class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href={{ url('#') }}><i class="la la-facebook"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-twitter"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-google-plus"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-dribbble"></i></a></li>
                                    <li><a href={{ url('#') }}><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href={{ url('team') }}>Kartian Monaja</a></h4>
                            <span class="designation">Computer Hardwere Enginer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section -->
@endsection
