@extends('layouts.frontend_app')
@section('home')
    active
@endsection
@section('frontend_content')
    
    <!-- banner-part start -->
    <section id="banner-part">
        <video autoplay muted loop class="myVideo">
            <source src="{{ asset('frontend_asset') }}/images/TRINITY AND CO LANDING PAGE VIDEO.mp4" type="video/mp4">
        </video>
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2>TRINITY DANG</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-part ends -->

    <!-- about-part start -->
    <section id="about-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="">
                        <h2>ABOUT / THE HISTORY</h2>
                        <h5><a href="#">SEE MORE</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-part ends -->


    <!-- publications-part start -->
    <section id="publications-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <h2>BOOK / PUBLICATIONS</h>
                        <h5><a href="#">SEE MORE</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- publications-part ends -->

    <!-- project-part start -->
    <section id="project-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <h2>THE STILL PROJECT</h>
                        <h5><a href="#">SEE MORE</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- project-part ends -->

    <!-- service-part start -->
    <section id="service-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <h2>SERVICES / ELEVATE WITH TRINITY</h2>
                        <h5><a href="#">SEE MORE</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- service-part ends -->

    <!-- initiative-part start -->
    <section id="initiative-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <h2>TRINITY MENTEE INITIATIVE</h>
                        <h5><a href="#">SEE MORE</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- initiative-part ends -->

    <!-- travel-part start -->
    <section id="travel-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <h2>TRAVEL WITH TRINITY</h>
                        <h5><a href="#">SEE MORE</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- travel-part ends -->

    <!-- shop-part start -->
    <section id="shop-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <h2>SHOP TRINITY + CO</h>
                        <h5><a href="#">SEE MORE</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-part ends -->

    <!-- insider-part start -->
    <section id="insider-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <h2>INSIDER / TRINITY TALKS</h>
                        <h5><a href="#">SEE MORE</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- insider-part ends -->

    <!-- video part start-->
    <section id="video-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12 col-md-6">
                    <h2>Welcome to Trinity Video Presentation</h2>
                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius, qui sequitur
                        mutationem consuetudium.</p>
                </div>
                <div class="col-lg-7 col-12 col-md-6">
                    <div class="video-head">
                        <a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="https://www.youtube.com/watch?v=JaUCiKTNBxQ"><i class="fas fa-play"></i></a>
                        <img src="{{ asset('frontend_asset') }}/images/video.jpg" alt="">
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
                        <input type="text" placeholder="Your email address">
                        <h6><a class="link-button" href="" target="_blank">SIGN UP</a></h6>
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
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img src="{{ asset('frontend_asset') }}/images/insta/1.jpg"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img src="{{ asset('frontend_asset') }}/images/insta/2.jpg"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img src="{{ asset('frontend_asset') }}/images/insta/3.jpg"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img src="{{ asset('frontend_asset') }}/images/insta/4.jpg"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img src="{{ asset('frontend_asset') }}/images/insta/5.jpg"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img src="{{ asset('frontend_asset') }}/images/insta/6.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- insta-canvas ends -->

@endsection
