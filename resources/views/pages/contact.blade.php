@extends('layouts.template')
@section('title', 'Contact')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(assets/images/my-images/background/bs.png);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="sec-title">
                            <h2>Contact Info</h2>
                        </div>
                        <ul class="contact-info">
                            <li>
                                <span class="icon la la-home"></span>
                                <p>
                                    <strong>Address</strong><br>
                                    {{ env('OFFICE_ADDRESS', 'Gopalpur, Keshiary, Paschim Midnapur, West Bengal 721133') }}
                                </p>
                            </li>

                            <li>
                                <span class="icon la la-phone"></span>
                                <p><strong>Call Us</strong></p>
                                <p>{{ env('OFFICE_PHONE', '8759983102') }}</p>
                            </li>

                            <li>
                                <span class="icon la la-envelope"></span>
                                <p><strong>Mail Us</strong></p>
                                <p>
                                    <a href="mailto:{{ env('OFFICE_EMAIL', 'doorservice.wb@gmail.com') }}?subject = Feedback Or Contact&body = Message">{{ env('OFFICE_EMAIL', 'doorservice.wb@gmail.com') }}</a>
                                </p>
                            </li>

                            <li>
                                <span class="icon la la-clock-o"></span>
                                <p><strong>{{ env('OFFICE_DAY', 'Mon - Sat') }}</strong></p>
                                <p>{{ env('OFFICE_TIME', '09:00 To 18:00') }}</p>
                            </li>
                        </ul>

                        {{-- <ul class="social-icon-four">
                            <li class="title">Follow Us :</li>
                            <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                            <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                        </ul> --}}
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="contact-form-two">
                        <div class="sec-title">
                            <h2>Get in Touch</h2>
                        </div>
                        {{-- <form method="post" action="sendemail.php" id="contact-form"> --}}
                        {{ Form::open(['url' => url('submit-contact-form'), 'id' => 'contact-form']) }}
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="name" id="name" placeholder="Name" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="phone" id="phone" placeholder="Phone" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" id="email" placeholder="Email" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="subject" id="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                    Submit Now
                                </button>
                            </div>
                        </div>
                        {{ Form::close() }}
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

    <!-- Map Section -->
    {{-- <section class="map-section">
        <div class="map-outer">
            <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
                data-hue="#ffc400" data-title="Envato" data-icon-path="assets/images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section> --}}
    <!-- End Map Section -->

@section('clients-section')

@endsection
@endsection
