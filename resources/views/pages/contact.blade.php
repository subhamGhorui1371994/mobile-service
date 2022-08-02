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
                                    <a
                                        href="mailto:{{ env('OFFICE_EMAIL', 'doorservice.wb@gmail.com') }}?subject = Feedback Or Contact&body = Message">{{ env('OFFICE_EMAIL', 'doorservice.wb@gmail.com') }}</a>
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
                <div class="form-column col-lg-8 col-md-12 col-sm-12 make-contact-area">
                    <div class="contact-form-two">
                        <div class="sec-title">
                            <h2>Get in Touch</h2>
                        </div>

                        {{-- <form method="post" action="sendemail.php" id="contact-form"> --}}
                        <form id="contact_form">
                            {{-- {{ Form::open(['url' => url('submit-contact-form'), 'id' => 'contact-form']) }} --}}
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" id="name" placeholder="Name"
                                           data-msg-required="Name field is required" required>
                                    <span class="validation-errors"></span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" id="phone" placeholder="Phone"
                                           data-msg-required="Mobile Or Telephone field is required field is required"
                                           required>
                                    <span class="validation-errors"></span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" id="email" placeholder="Email"/>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" id="subject" placeholder="Subject"
                                           data-msg-required="Subject field is required" required>
                                    <span class="validation-errors"></span>
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
                            {{-- {{ Form::close() }} --}}
                        </form>
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
@endsection
@section('clients-section')
@endsection
@section('footer_script')
    <link href="{{ URL::asset('assets/admin/js/jquery-validation/jquery-validate.css') }}" rel="stylesheet"
          type="text/css">

    <script type="text/javascript"
            src="{{ URL::asset('assets/admin/js/jquery-validation/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/admin/js/jquery-validation/additional-methods.js') }}">
    </script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.blockUI.js') }}"></script>

    <link href="{{ URL::asset('assets/admin/js/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <script type="text/javascript" src="{{ URL::asset('assets/admin/js/select2/dist/js/select2.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#contact_form').validate({
                ignore: [],
                errorPlacement: function errorPlacement(error, element) {
                    $(element).parents('div.form-group').find('span.validation-errors').append(error);
                },
                onfocusout: false,
                highlight: function (element, errorClass) {
                    if ($(element).hasClass('select-2')) {
                        $(element).next('.select2-container').addClass(errorClass);
                    } else {
                        $(element).addClass(errorClass);
                    }
                },
                unhighlight: function (element, errorClass) {
                    if ($(element).hasClass('select-2')) {
                        $(element).next('.select2-container').removeClass(errorClass);
                    } else {
                        $(element).removeClass(errorClass);
                    }
                },
                submitHandler: function (form) {
                    if ($(form).valid()) {
                        $('.make-contact-area').block({
                            message: '<h1 style="font-size: 26px;">Processing your request. Please wait...</h1><img src="' +
                                base_url +
                                '/assets/img/loader.gif" style="width: 100px;margin-bottom: 20px">',
                            css: {
                                border: '3px solid #a00',
                                'top': '30%!important'
                            }
                        });
                        $.ajax({
                            url: base_url + '/submit-contact-form',
                            type: 'POST',
                            data: {
                                'name': $('#name').val(),
                                'phone': $('#phone').val(),
                                'email': $('#email').val(),
                                'subject': $('#subject').val(),
                                'message': $('#message').val(),
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                            dataType: 'json',
                        }).done(function (response) {
                            if (response.status === true) {
                                $('#contact_form')[0].reset();
                                showNotification('success', response.msg);
                            } else {
                                showNotification('error', response.msg);
                            }
                            $('.make-contact-area').unblock();
                        });
                    }
                }
            });

        });
    </script>
@endsection
