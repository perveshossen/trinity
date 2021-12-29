@extends('layouts.frontend_app')
@section('title')
    TRINITY Official Website
@endsection
@section('index')
    active
@endsection
@section('frontend_content')
    
    <!-- banner-part start -->
    <section id="banner-part">
        <video autoplay muted loop class="myVideo">
            <source src="{{ asset('frontend_asset') }}/video/TRINITY AND CO LANDING PAGE VIDEO.mp4" type="video/mp4">
        </video>
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h1>TRINITY DANG</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-part ends -->

    <!-- about-part start -->
    @foreach ($banners as $banner)
    <section id="about-part">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('uploads/home_banner') }}/{{ $banner->bg }}" alt="{{ $banner->bg }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h2>{{ $banner->heading }}</h2>
                        <h5><a  href="{{ $banner->button_link }}">SEE MORE</a></h5>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @endforeach
    <!-- about-part ends -->


    <!-- publications-part start -->
    {{-- <section id="publications-part">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/coffee.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h2>BOOK / PUBLICATIONS</h2>
                            <h5><a href="#">SEE MORE</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- publications-part ends -->

    <!-- project-part start -->
    {{-- <section id="project-part">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/project.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h2>THE STILL PROJECT</h2>
                            <h5><a href="#">SEE MORE</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- project-part ends -->

    <!-- service-part start -->
    {{-- <section id="service-part">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/service.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h2>SERVICES / ELEVATE WITH TRINITY</h2>
                            <h5><a href="#">SEE MORE</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- service-part ends -->

    <!-- initiative-part start -->
    {{-- <section id="initiative-part">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/initiative.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h2>TRINITY MENTEE INITIATIVE</h2>
                            <h5><a href="#">SEE MORE</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- initiative-part ends -->

    <!-- travel-part start -->
    {{-- <section id="travel-part">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/travel.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h2>TRAVEL WITH TRINITY</h2>
                            <h5><a href="#">SEE MORE</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- travel-part ends -->

    <!-- shop-part start -->
    {{-- <section id="shop-part">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/shop.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h2>SHOP TRINITY + CO</h2>
                            <h5><a href="#">SEE MORE</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- shop-part ends -->

    <!-- insider-part start -->
    {{-- <section id="insider-part">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/insider.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h2>INSIDER / TRINITY TALKS</h2>
                            <h5><a href="#">SEE MORE</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- insider-part ends -->

    <!-- video part start-->
    <section id="video-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12 col-md-6">
                    <h2>{{ $presentation->heading }}</h2>
                    <p>{{ $presentation->description }}</p>
                </div>
                <div class="col-lg-7 col-12 col-md-6">
                    <div class="video-head">
                        <a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="{{ $presentation->video_link }}"><i class="fas fa-play"></i></a>
                        <img src="{{ asset('uploads/home_video') }}/{{ $presentation->video_thumbnail }}" alt="{{ $presentation->video_thumbnail }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--video-part ends-->

    <!-- mail-part start -->
    <section id="mail-part">
        <div class="mail-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <h2>SIGN UP / LOVE LETTERS FROM TRINITY</h2>
                        @if (session('send_newsletter'))
                        <li class="text-success">{{ session('send_newsletter') }}</li>
                        @endif
                        <br>
                        <form action="{{ route('signup.letter') }}" method="POST">
                            @csrf
                            <input name="email" type="text" placeholder="Your email address">
                            <h6><button type="submit" class="link-button">SIGN UP</button></h6>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mail-part ends -->

    <!-- insta-canvas start -->
    <section id="insta-canvas">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto insta-head text-center">
                    <h2>Join The Movement</h2>
                    <p>Follow us on <a href="https://www.instagram.com/trinitydang/" target="_blank">@TRINITYDANG</a>
                        Share your Tridal
                        trying moments.</p>
                </div>
            </div>
            <div class="row insta-slide">
                @foreach ($movements as $movement)
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="{{ $movement->link }}" target="_blank"><img src="{{ asset('uploads/movement') }}/{{ $movement->photo }}"
                                alt="{{ $movement->photo }}"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- insta-canvas ends -->

@endsection
