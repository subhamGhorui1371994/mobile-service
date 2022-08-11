<!-- Main Footer -->
<footer class="main-footer" style="background-image: url(assets/images/background.jpg);">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="{{ url('/') }}"><img
                                                src="{{ url('assets/images/my-images/footer/footer-logo.png') }}"
                                                alt="footer-logo.png"></a>
                                    </figure>
                                </div>

                                <div class="widget-content">
                                    <div class="text">One call your tension will gone. </div>
                                    {{-- <ul class="social-icon-two">
                                        <li>Follow Us:</li>
                                        <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                                        <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                        <li><a href="{{ url('#') }}"><i class="la la-linkedin"></i></a></li>
                                        <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                        <li><a href="{{ url('#') }}"><i class="la la-pinterest-p"></i></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Our Services</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        {{-- <li><a href="{{ url('service.html') }}">Smart Phone Repair</a></li>
                                        <li><a href="{{ url('service.html') }}">Desktop & Laptop</a></li>
                                        <li><a href="{{ url('service.html') }}">Tablets & iPad Repair</a></li>
                                        <li><a href="{{ url('service.html') }}">Desktop & Laptop</a></li>
                                        <li><a href="{{ url('service.html') }}">LCD & LED TV Repair</a></li>
                                        <li><a href="{{ url('service.html') }}">MP3 & MP4 Player</a></li> --}}

                                        @if ($services)
                                            @foreach ($services as $id => $service)
                                                <li><a href="{{ url('service-detail/' . $id) }}">{{ $service }}</a></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget recent-posts">
                                <h2 class="widget-title">Top Services</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <div class="post">
                                        <div class="thumb"><a href="{{ url('#') }}"><img
                                            src="{{ url('assets/images/my-images/footer/cctv-logo.png') }}"
                                            alt="cctv-logo.png"></a>
                                        </div>
                                        <h4><a href="{{ url('service-detail') }}">CCTV has been installed here.</a>
                                        </h4>
                                        {{-- <a href="{{ url('#') }}" class="read-more">Read More</a> --}}
                                    </div>

                                    <div class="post">
                                        <div class="thumb"><a href="{{ url('#') }}"><img
                                            src="{{ url('assets/images/my-images/footer/laptop-logo.png') }}"
                                            alt="laptop-logo.png"></a>
                                        </div>
                                        <h4><a href="{{ url('service-detail') }}">OS has been installed here.</a>
                                        </h4>
                                        {{-- <a href="{{ url('#') }}" class="read-more">Read More</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Get in Touch</h2>
                                <div class="widget-content">
                                    <ul class="contact-list">
                                        <li><span class="la la-map-marker"></span>
                                            {{ env('OFFICE_ADDRESS', 'Gopalpur, Keshiary, Paschim Midnapur, West Bengal 721133') }}
                                        </li>
                                        <li><span class="la la-envelope"></span><a
                                                href="mailto:{{ env('OFFICE_EMAIL', 'doorservice.wb@gmail.com') }}?subject = Feedback Or Contact&body = Message">{{ env('OFFICE_EMAIL', 'doorservice.wb@gmail.com') }}</a>
                                        </li>
                                        <li><span class="la la-phone"></span>
                                            {{ env('OFFICE_PHONE', '8759983102') }}</li>
                                    </ul>

                                    {{-- <div class="subscribe-form">
                                        <form method="post" action="blog.html">
                                            <div class="form-group">
                                                <input type="email" name="email" value=""
                                                    placeholder="Your Email" required="">
                                                <button type="submit"><span
                                                        class="icon la la-paper-plane"></span></button>
                                            </div>
                                        </form>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="footer-nav">
                    <ul class="clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        {{-- <li><a href="{{ url('/about-us') }}">About Us</a></li> --}}
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        {{-- <li><a href="{{ url('/gallery') }}">Gallery</a></li> --}}
                        {{-- <li><a href="{{ url('/blog') }}">Blog</a></li> --}}
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="copyright-text">
                    {{-- <p>Copyright © <a href="{{ url('/') }}">Adjust for</a> 2018. All rights reserved</p> --}}
                    <p>Copyright &copy; Adjust for 2018-{{date('Y')}}. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->
