@extends('layouts.template')
@section('title', 'Services Details')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(../assets/images/my-images/background/bs.png);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Service Detail</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Service Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Service Detail Section -->
    <div class="service-detail-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side order-last col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <!-- Image Box -->
                        <div class="image-box wow fadeIn"><img
                                src="{{ URL::asset(checkAndRenderImage($serviceDetails->banner_image, 'assets/images/resource/service-2.jpg')) }}"
                                alt=""></div>

                        <div class="lower-content">
                            {!! html_entity_decode($serviceDetails->description) !!}
{{--                            <div class="two-column">--}}
{{--                                <div class="row clearfix">--}}
{{--                                    <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">--}}
{{--                                        <h3>We Fix It</h3>--}}
{{--                                        <p>Bring in your smartphone or tablet and we can repair cracked screens, buttons,--}}
{{--                                            built in cameras, charge ports, speakers, headphone jacks, and more. We install--}}
{{--                                            new batteries and can even install a screen protector to keep your Tablet Repair--}}
{{--                                            device safe from future damage. Visit your nearest store today.</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">--}}
{{--                                        <div class="image wow fadeIn"><a--}}
{{--                                                href="{{ url('assets/images/resource/image-3.jpg') }}"--}}
{{--                                                class="lightbox-image"><img--}}
{{--                                                    src="{{ url('assets/images/resource/image-3.jpg') }}"--}}
{{--                                                    alt=""></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div><!-- Service Detail -->
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">

                        <!-- Services Cat List -->
{{--                        <div class="sidebar-widget categories">--}}
{{--                            <ul class="services--list">--}}
{{--                                <li class="active"><a href="{{ url('service-detail') }}">Desktop Repair</a></li>--}}
{{--                                <li><a href="{{ url('service-detail') }}">Printers Repair</a></li>--}}
{{--                                <li><a href="{{ url('service-detail') }}">Tablets / IPAD Repair</a></li>--}}
{{--                                <li><a href="{{ url('service-detail') }}">Smart Phone Repair</a></li>--}}
{{--                                <li><a href="{{ url('service-detail') }}">Laptop / MAC Repair</a></li>--}}
{{--                                <li><a href="{{ url('service-detail') }}">Game Console Repair</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                        <!-- Brochure -->
                        <div class="sidebar-widget brochure">
                            <div class="brochure-box">
                                <span>Quick Contact</span>
                                <h4>Get Solution</h4>
                                <p>
                                    Contact Us at Our Physical Office or Submit a Business Inquiry Online.
                                </p>
                                <a href="{{ url('contact') }}" class="theme-btn btn-style-one">Contact</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Detail Section -->

    <!--Clients Section-->
    {{-- <section class="clients-section alternate">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/1.png') }}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/2.png') }}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/3.png') }}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/4.png') }}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/5.png') }}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/1.png') }}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/2.png') }}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/3.png') }}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/4.png') }}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="{{ url('#') }}"><img
                                src="{{ url('assets/images/clients/5.png') }}" alt=""></a></figure>
                </li>
            </ul>
        </div>
    </section> --}}
    <!--End Clients Section-->
@endsection
