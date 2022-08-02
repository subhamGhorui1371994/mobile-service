<!-- Main Header-->
<header class="main-header header-style-two">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="logo-outer">
                    <div class="logo"><a href="{{ url('/') }}"><img
                                src="{{ url('assets/images/my-images/main-logo.png') }}" alt="main-logo.png"
                                style="width: 195px; height: 50px" title=""></a>
                    </div>
                </div>

                <div class="upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="la la-home"></span></div>
                        <ul>
                            <li><span>Visit Us</span></li>
                            <li>{{ env('OFFICE_SMALL_ADDRESS', 'OFFICE_SMALL_ADDRESS') }}</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="la la-phone"></span></div>
                        <ul>
                            <li><span>Call Us</span></li>
                            <li>{{ env('OFFICE_PHONE', '8759983102') }}</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="la la-clock-o"></span></div>
                        <ul>
                            <li><span>{{ env('OFFICE_DAY', 'Mon - Sat') }}</span></li>
                            <li>{{ env('OFFICE_TIME', '09:00 To 18:00') }}</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box btn-box">
                        <a href="{{ url('contact') }}" class="theme-btn btn-style-four">Get Free Quote</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Header Upper -->

    <!--Header-lower-->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-dark">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-1"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{ url('/') }}">Home</a>
                                    {{-- <ul>
                                        <li><a href="index">Home page 01</a></li>
                                        <li><a href="index-2">Home page 02</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index">Header Style One</a></li>
                                                <li><a href="index-2">Header Style Two</a></li>
                                            </ul>
                                        </li>
                                    </ul> --}}
                                </li>
                                {{-- <li class="dropdown"><a href="{{url("/")}}">About Us</a> --}}
                                {{-- <ul> --}}
                                {{-- <li><a href="{{url("about-us")}}">About Us</a></li> --}}
                                {{-- <li><a href="{{url("team")}}">Team</a></li> --}}
                                {{-- <li><a href="{{url("faq")}}">FAQ's</a></li> --}}
                                {{-- <li><a href="{{url("pricing")}}">Price List</a></li> --}}
                                {{-- </ul> --}}
                                {{-- </li> --}}
                                <li class="dropdown"><a href="{{ url('#') }}">Services</a>
                                    <ul>
                                        <li><a href="{{ url('services') }}">Services</a></li>
                                        @if ($services)
                                            @foreach ($services as $id => $service)
                                                <li><a
                                                        href="{{ url('service-detail/' . $id) }}">{{ $service }}</a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                                {{-- <li><a href="{{url("gallery")}}">Gallery</a></li> --}}

                                {{-- <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog">Blog</a></li>
                                        <li><a href="blog-detail">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">shop</a>
                                    <ul>
                                        <li><a href="products">Our Products</a></li>
                                        <li><a href="product-single">Product Details</a></li>
                                        <li><a href="shopping-cart">Shopping Cart</a></li>
                                        <li><a href="checkout">Checkout</a></li>
                                        <li><a href="login">Register / Login</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer Box -->
                    <div class="outer-box">
                        {{-- <ul class="social-icon-three clearfix"> --}}
                        {{-- <li><a href="{{url("#")}}"><i class="la la-facebook-official"></i></a></li> --}}
                        {{-- <li><a href="{{url("#")}}"><i class="la la-twitter"></i></a></li> --}}
                        {{-- <li><a href="{{url("#")}}"><i class="la la-google-plus"></i></a></li> --}}
                        {{-- <li><a href="{{url("#")}}"><i class="la la-dribbble"></i></a></li> --}}
                        {{-- <li><a href="{{url("#")}}"><i class="la la-pinterest"></i></a></li> --}}
                        {{-- </ul> --}}

                        <!--Search Box-->
                        {{-- <div class="search-box-outer"> --}}
                        {{-- <div class="dropdown"> --}}
                        {{-- <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" --}}
                        {{-- data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span --}}
                        {{-- class="la la-search"></span></button> --}}
                        {{-- <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3"> --}}
                        {{-- <li class="panel-outer"> --}}
                        {{-- <div class="form-container"> --}}
                        {{-- <form method="post" action="blog"> --}}
                        {{-- <div class="form-group"> --}}
                        {{-- <input type="search" name="field-name" value="" --}}
                        {{-- placeholder="Search Here" required> --}}
                        {{-- <button type="submit" class="search-btn"><span --}}
                        {{-- class="la la-search"></span></button> --}}
                        {{-- </div> --}}
                        {{-- </form> --}}
                        {{-- </div> --}}
                        {{-- </li> --}}
                        {{-- </ul> --}}
                        {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ url('/') }}" title=""><img
                        src="{{ url('assets/images/my-images/main-logo.png') }}" alt="main-logo.png"
                        title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{ url('/') }}">Home</a>
                                {{-- <ul>
                                    <li><a href="index">Home page 01</a></li>
                                    <li><a href="index-2">Home page 02</a></li>
                                    <li class="dropdown"><a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="index">Header Style One</a></li>
                                            <li><a href="index-2">Header Style Two</a></li>
                                        </ul>
                                    </li>
                                </ul> --}}
                            </li>
                            {{-- <li class="dropdown"><a href="{{ url('#') }}">About Us</a>
                                <ul>
                                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                                    <li><a href="{{ url('team') }}">Team</a></li>
                                    <li><a href="{{ url('faq') }}">FAQ's</a></li>
                                    <li><a href="{{ url('pricing') }}">Price List</a></li>
                                </ul>
                            </li> --}}
                            <li class="dropdown"><a href="{{ url('#') }}">Services</a>
                                <ul>
                                    <li><a href="{{ url('services') }}">Services</a></li>
                                    {{-- <li><a href="{{ url('service-detail') }}">Desktop Repair</a></li>
                                    <li><a href="{{ url('service-detail') }}">Laptop Repair</a></li>
                                    <li><a href="{{ url('service-detail') }}">Tablets Repair</a></li>
                                    <li><a href="{{ url('service-detail') }}">Smart Phone Repair</a></li>
                                    <li><a href="{{ url('service-detail') }}">Services Detail</a></li> --}}
                                    @if ($services)
                                        @foreach ($services as $id => $service)
                                            <li><a href="{{ url('service-detail/' . $id) }}">{{ $service }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            {{-- <li><a href="{{ url('gallery') }}">Gallery</a></li>
                            <li class="dropdown"><a href="{{ url('#') }}">Blog</a>
                                <ul>
                                    <li><a href="{{ url('blog') }}">Blog</a></li>
                                    <li><a href="{{ url('blog-detail') }}">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{ url('#') }}">shop</a>
                                <ul>
                                    <li><a href="{{ url('products') }}">Our Products</a></li>
                                    <li><a href="{{ url('product-single') }}">Product Details</a></li>
                                    <li><a href="{{ url('shopping-cart') }}">Shopping Cart</a></li>
                                    <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                    <li><a href="{{ url('login') }}">Register / Login</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
<!--End Main Header -->
