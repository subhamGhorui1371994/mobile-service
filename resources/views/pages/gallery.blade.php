@extends('layouts.template')
@section('title', 'Gallery')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(assets/images/background/6.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Gallery</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Projects Section -->
    <section class="projects-section alternate">
        <div class="outer-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters text-center clearfix">
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
                    <div class="project-item all mix laptop mobile col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/1.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/1.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer mobile tablet col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/2.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/2.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile computer laptop col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/3.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/3.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer tablet col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/4.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/4.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile laptop col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/5.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/5.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer tablet col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/6.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/6.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div
                        class="project-item all mix computer laptop mobile tablet col-xl-3 laptop col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/7.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('project-detail') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('project-detail') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/7.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer laptop mobile col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/8.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('assets/images/gallery/8.jpg') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('assets/images/gallery/8.jpg') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ 'assets/images/gallery/8.jpg' }}" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer mobile tablet col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/9.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('assets/images/gallery/8.jpg') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('assets/images/gallery/8.jpg') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/9.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile computer laptop col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/10.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('assets/images/gallery/8.jpg') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('assets/images/gallery/8.jpg') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/10.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer tablet col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/11.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('assets/images/gallery/8.jpg') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('assets/images/gallery/8.jpg') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/11.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile laptop col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('assets/images/gallery/12.jpg') }}" alt="">
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="{{ url('assets/images/gallery/8.jpg') }}">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="{{ url('assets/images/gallery/8.jpg') }}" class="link"><span
                                            class="icon la la-link"></span></a>
                                    <a href="{{ url('assets/images/gallery/12.jpg') }}" class="link"
                                        data-fancybox="gallery" data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-box text-center">
                <a href="{{ url('projects') }}" class="theme-btn btn-style-two">More View</a>
            </div>
        </div>
    </section>
    <!--End Projects Section -->

    <!--Clients Section-->
    <section class="clients-section alternate">
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
    </section>
    <!--End Clients Section-->
@endsection
