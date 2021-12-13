@extends('layouts.frontend_app')
@section('gateway')
    active
@endsection
@section('frontend_content')
  

    <!-- gateway-banner start -->
    <section id="gateway-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <h2>STILL GETAWAYS</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- gateway-banner ends -->

    <!-- slider-text-canvas start -->
    <div id="slider-text-canvas">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="text">
                        <h4>Growing Up Embedded In Different Cities,
                            Countries, And Cultures, Trinity Created A
                            Unique Travel Experience That Combines And
                            Cultivates Both The Jet Setters Dream With A
                            Holistic Mindful Lifestyle.</h4>
                    </div>
                    <img class="d-block w-100" src="{{ asset('frontend_asset') }}/images/slider-3.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <div class="text">
                        <h4>"Our Getaways Are Carefully Curated To
                            Cultivate Both Mindfulness And Luxury Living.
                            Through Years Of Travel And Research, Having
                            The Opportunity To Personally Share What I’ve
                            Experienced With The Rest Of The World, Is An
                            Absolute Dream."</h4>
                    </div>
                    <img class="d-block w-100" src="{{ asset('frontend_asset') }}/images/banner.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <div class="text">
                        <h4>“still Getaways Is The Result Of A
                            Dream Concept That Was Brought To Reality After
                            Years Of Planning And Preparation. With Still
                            Getaways, We Strive To Provide A Lax-lux Experience.
                            We Provide 7 Days Accommodation In A Breathtaking
                            Tropical Location, Serving With The Intent To
                            Disconnect In Order To Reconnect.”</h4>
                    </div>
                    <img class="d-block w-100" src="{{ asset('frontend_asset') }}/images/slider-2.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- slider-text-canvas ends -->

    <!-- video part start-->
    <section id="video-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <h2>STILL GETAWAY PROMO VIDEO</h2>
                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius, qui sequitur
                        mutationem consuetudium.</p>
                </div>
                <div class="col-lg-7 col-md-7">
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

    <!-- still-offering start-->
    <section id="still-offering">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h4>Focus on Helping People with our services</h4>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- still-offering ends-->

    <!-- apply-now start -->
    <section id="apply-now">
        <div class="row text-center">
            <div class="col-lg-6">
                <div class="first-part">
                    <h4>APPLY NOW TO GETAWAY</h4>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="second-part">
                    <h4>APPLY NOW TO GETAWAY</h4>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- apply-now ends -->


    <!-- mail-part start -->
    <section id="mail-part-contact">
        <div class="mail-overlay">
            <h2>‘STAY UP TO DATE WITH STILL!’</h2>
            <input type="text" placeholder="Your email address">
            <a class="link-button" href="" target="_blank">SIGN UP</a>
        </div>
    </section>
    <!-- mail-part ends -->

    <!-- insta-canvas start -->
    <section id="insta-canvas">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto insta-head text-center">
                    <h2>Join The Movement</h2>
                    <p>Follow us on <a href="https://www.instagram.com/trinitydang/">@TRINITYDANG</a> Share your Tridal
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