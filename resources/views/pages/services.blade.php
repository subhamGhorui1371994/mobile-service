@extends('layouts.template')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(assets/images/background/6.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Services</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href={{ url('/') }}>Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Services Section -->
    <section class="services-section-two alternate">
        <div class="auto-container">
            <div class="row">
                <!-- Service Block -->
                @if($services)
                    @foreach($services as $key => $service)
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img
                                            src="{{ URL::asset(checkAndRenderImage($service['display_image'], 'assets/images/resource/service-2.jpg')) }}" alt=""></figure>
                                    <div class="overlay-box"><a href={{ url('service-detail/'.$service['id']) }} class="read-more">Read More</a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href={{ url('service-detail/'.$service['id']) }}>{{$service['title']}}</a></h4>
                                    {!!html_entity_decode($service['small_description'])!!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--End Services Section -->

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
