@extends('layouts.template')
@section('title','Team')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(assets/images/background/6.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Team</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href={{ url('/') }}>Home</a></li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="row">
                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src={{ url('assets/images/resource/team-1.jpg') }} alt="">
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
                            <figure class="image"><img src={{ url('assets/images/resource/team-2.jpg') }} alt="">
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


                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src={{ url('assets/images/resource/team-4.jpg') }}
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
                            <figure class="image"><img src={{ url('assets/images/resource/team-5.jpg') }}
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
                            <figure class="image"><img src={{ url('assets/images/resource/team-6.jpg') }}
                                    alt=""></figure>
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

    <!--Clients Section-->
    <section class="clients-section alternate">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item">
                    <figure class="image-box"><a href={{ url('#') }}><img
                                src={{ url('assets/images/clients/1.png') }} alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href={{ url('#') }}><img
                                src={{ url('assets/images/clients/2.png') }} alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href={{ url('#') }}><img
                                src={{ url('assets/images/clients/3.png') }} alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href={{ url('#') }}><img
                                src={{ url('assets/images/clients/4.png') }} alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href={{ url('#') }}><img
                                src={{ url('assets/images/clients/5.png') }} alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href={{ url('#') }}><img
                                src={{ url('assets/images/clients/1.png') }} alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href={{ url('#') }}><img
                                src={{ url('assets/images/clients/2.png') }} alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href={{ url('#') }}><img
                                src={{ url('assets/images/clients/3.png') }} alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href={{ url('#') }}><img
                                src={{ url('assets/images/clients/4.png') }} alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href={{ url('#') }}><img
                                src={{ url('assets/images/clients/5.png') }} alt=""></a></figure>
                </li>
            </ul>
        </div>
    </section>
    <!--End Clients Section-->
@endsection
