@extends('layouts.template')
@section('content')
    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="{{ url('assets/images/main-slider/image-2.jpg') }}"
                        data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="{{ url('assets/images/my-images/2.jpg') }}">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-text-align="center"
                            data-hoffset="['0','0','15','15']" data-voffset="['-115','-115','-95','-145']"
                            data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                            data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>Well to Adjust For <br>Quickly Repair</h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-text-align="center" data-whitespace="normal"
                            data-width="['570','570','690','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['40','40','40','20']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">Using original manufactured parts and components, we are able torestore your
                                cell phones or iDevice to like-new condition.</div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['155','155','155','155']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
{{--                                <a href="{{ url('Product') }}" class="theme-btn btn-style-one"><span>Buy Now</span></a>--}}
                                <a href="{{ url('content') }}" class="theme-btn btn-style-two"><span>Contact us</span></a>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="{{ url('assets/images/main-slider/image-2.jpg') }}"
                        data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="{{ url('assets/images/main-slider/image-1.jpg') }}">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-text-align="center"
                            data-hoffset="['0','0','15','15']" data-voffset="['-115','-115','-95','-145']"
                            data-x="['right','right','left','left']" data-y="['middle','middle','middle','middle']"
                            data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>We Will Replace <br>Quality Accessories</h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-text-align="center" data-whitespace="normal"
                            data-width="['570','570','690','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['40','40','40','20']" data-x="['right','right','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">Using original manufactured parts and components, we are able torestore
                                your cell phones or iDevice to like-new condition.</div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['155','155','155','155']" data-x="['right','right','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="{{ url('Product') }}" class="theme-btn btn-style-one"><span>Buy Now</span></a>
                                <a href="{{ url('content') }}" class="theme-btn btn-style-two"><span>Contact us</span></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="arrow-down scroll-to-target" data-target="#about-us"><span class="icon-arrows"></span></div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- About Us -->
    <section class="about-us">
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
                            <a href="{{ url('about') }}" class="theme-btn btn-style-two">Contact Us</a>
                            <a class="theme-btn btn-style-two" href="https://api.whatsapp.com/send?phone=918759983102&text=Hello Doore Service, I want a service."><i class="fa fa-whatsapp" style="font-size: 26px; color:green"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12 wow fadeIn">
                    <div class="inner-column">
                        <div class="float-text">I am a Computer and Mobile Expart</div>
                        <figure class="image"><img src="{{ url('assets/images/resource/image-2.jpg') }}" alt="">
                        </figure>
                        <div class="link-box"><a href="https://www.youtube.com/watch?v=e_WOEL6F1YE" class="link"
                                data-fancybox="gallery" data-caption=""><span class="icon la la-play"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Services Section -->
    <section class="services-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>We Offer Service</h2>
            </div>

            <div class="services-carousel owl-carousel owl-theme">
                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/service-1.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('service-detail') }}" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ url('service-detail') }}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/service-2.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('service-detail') }}" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ url('service-detail') }}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/service-3.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('service-detail') }}" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ url('service-detail') }}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/service-1.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('service-detail') }}" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ url('service-detail') }}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/service-2.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('service-detail') }}" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ url('service-detail') }}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/service-3.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('service-detail') }}" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ url('service-detail') }}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/service-2.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('service-detail') }}" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ url('service-detail') }}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung,
                                Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

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

    <!-- Projects Section -->
    <section class="projects-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Projects</h2>
            </div>

            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All Items</li>
                        <li class="filter" data-role="button" data-filter=".computer">Computer</li>
                        <li class="filter" data-role="button" data-filter=".laptop">Laptop</li>
                        <li class="filter" data-role="button" data-filter=".tablet">Tablet</li>
                        <li class="filter" data-role="button" data-filter=".mobile">Mobile</li>
                    </ul>
                </div>
                <div class="filter-list row no-gutters">
                    <!-- Project item -->
                    <div class="project-item all mix laptop mobile col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/2-1.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/2-1.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer mobile tablet col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/2-2.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/2-2.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile computer laptop col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/2-3.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/2-3.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer tablet col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/2-4.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/2-4.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile laptop col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/2-5.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/2-5.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer tablet col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/2-6.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/2-6.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button Box -->
            <div class="btn-box">
                <a href="{{ url('services') }}" class="theme-btn btn-style-one">View All</a>
            </div>
        </div>
    </section>
    <!--End Projects Section -->

    <!-- Call Back Section -->
    <section class="call-back-section" style="background-image: url(assets/images/background/5.jpg);">
        <div class="outer-box">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class={{ url('content') }}>
                                <h3>Do You Need a Mobile Phone Repair?</h3>
                                <div class="text">We work on almost all of the more popular brands.<br /> Call Us at
                                    <span> +456 789 0321</span> or you can mail to reach us
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="appointment-form">
                                <div class="title-box">
                                    <h3>Make An Appointment</h3>
                                </div>
                                <form method="post" action="index">
                                    <div class="row">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" name="full_name" placeholder="Your Name*" data-msg-required="Name field is required"
                                                required>
                                            <span class="validation-errors"></span>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" name="contact_number" placeholder="Mobile Or Telephone*"
                                                   data-msg-required="Mobile Or Telephone field is required" required>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <input type="email" name="email" placeholder="E-mail Address">
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <select name="service" id="services">
                                                <option value="">Select Service</option>
                                                @if($services)
                                                    @foreach($services as $k => $service)
                                                        <option value="{{$k}}">{{$service}}</option>
                                                   @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <div class="form-group col-lg- col-md-12 col-sm-12">
                                            Date: <input type="date" name="date" placeholder="Date" data-msg-required="Date field is required"
                                                   required>
                                        </div>

                                        <div class="form-group col-lg- col-md-12 col-sm-12">
                                            <select name="tile_slot" id="tile_slot">
                                                <option value="">Select Time Slot</option>
                                                @foreach($time_slots as $time_slot)
                                                    <option value="{{$time_slot}}">{{$time_slot}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" name="location" placeholder="Location*" data-msg-required="Mobile Or Telephone field is required" required>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <textarea name="message" placeholder="Problem in Detail"></textarea>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <button class="theme-btn btn-style-two" type="submit"
                                                name="submit-form">Send Request</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Call Back Section -->

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
                            <figure class="image"><img src="{{ url('assets/images/resource/team-1.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <a href="{{ url('team') }}" class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="{{ url('team') }}">Roban Kosata</a></h4>
                            <span class="designation">Computer Hardwere Enginer</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/team-2.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <a href="{{ url('team') }}" class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="{{ url('team') }}">Moneib Rabora</a></h4>
                            <span class="designation">Mobile Phone Hardwere Enginer</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/team-3.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box">
                                <a href="{{ url('team') }}" class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="{{ url('team') }}">Kartian Monaja</a></h4>
                            <span class="designation">Computer Hardwere Enginer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title clearfix">
                <h2>Latest News</h2>
                <div class="read-more"><a href="{{ url('blog') }}">View All</a></div>
            </div>
            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/news-1.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('blog-detail') }}" class="icon"><i
                                        class="la la-link"></i></a></div>
                        </div>

                        <div class="lower-content">
                            <ul class="info">
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-user"></i> Admin</a></li>
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-calendar"></i> February 17, 2017</a>
                                </li>
                            </ul>
                            <h4><a href="{{ url('blog-detail') }}">iPad Repairs For Schools / Universities Across The Usa</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/news-2.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('blog-detail') }}" class="icon"><i
                                        class="la la-link"></i></a></div>
                        </div>

                        <div class="lower-content">
                            <ul class="info">
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-user"></i> Admin</a></li>
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-calendar"></i> February 17, 2017</a>
                                </li>
                            </ul>
                            <h4><a href="{{ url('blog-detail') }}">We offer the best in same day iPhone Repairs plymouth</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/resource/news-3.jpg') }}"
                                    alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('blog-detail') }}" class="icon"><i
                                        class="la la-link"></i></a></div>
                        </div>

                        <div class="lower-content">
                            <ul class="info">
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-user"></i> Admin</a></li>
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-calendar"></i> February 17, 2017</a>
                                </li>
                            </ul>
                            <h4><a href="{{ url('blog-detail') }}">All Software Boxes and Dongles At Best Prices</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!--Clients Section-->
    <section class="clients-section style-two">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/1.png') }}" alt=""></a>
                    </figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/2.png') }}" alt=""></a>
                    </figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/3.png') }}" alt=""></a>
                    </figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/4.png') }}" alt=""></a>
                    </figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/5.png') }}" alt=""></a>
                    </figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/1.png') }}" alt=""></a>
                    </figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/2.png') }}" alt=""></a>
                    </figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/3.png') }}" alt=""></a>
                    </figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/4.png') }}" alt=""></a>
                    </figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/5.png') }}" alt=""></a>
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <!--End Clients Section-->
@endsection
