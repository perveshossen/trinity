@extends('layouts.frontend_app')
@section('still')
    active
@endsection
@section('frontend_content')
    
    <!-- still-banner start -->
    <div id="still-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <h2>THE
                        STILL PROJECT</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- still-banner ends -->

    <!-- still-details-banner start -->
    <div id="still-details-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <h4>THE STILL PROJECT IS A GLOBAL
                        PLATFORM DESIGNED TO HELP BRING AWARENESS TO
                        MENTAL HEALTH AND SUPPORT IN IMPLEMENTING AND
                        INCORPORATING A MORE MINDFUL DAILY LIFESTYLE.</h4>
                    <h5><a href="#">Click Here</a></h5>
                </div>
            </div>
        </div>
    </div>
    <!-- still-details-banner start -->

    <!-- publication-video-part start -->
    <section id="publication-video-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="video-head">
                        <a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="https://www.youtube.com/watch?v=JaUCiKTNBxQ"><i class="fas fa-play"></i></a>
                        <img src="{{ asset('frontend_asset') }}/images/video-bg2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-5 text-part col-md-6">
                    <h2>TRINITY INTERVIEW STORY</h2>
                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius, qui sequitur
                        mutationem consuetudium.</p>
                    <h5><a href="#">YESSS</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- publication-video-part ends-->


    <!-- still-offering start-->
    <section id="still-offering">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h4>Focus on Helping People with our services</h4>
                    <a href="#">Click Here</a>
                    <a href="#">Essentials</a>
                    <a href="#">Gateways</a>
                </div>
            </div>
        </div>
    </section>
    <!-- still-offering ends-->


    <!-- join-community start-->
    <section id="join-community">
        <div class="join-community-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-part">
                            <h4>JOIN OUR COMMUNITY</h4>
                            <p>Investigationes demonstraverunt lectoresl ectores legere me lius </p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-left">
                        <div class="right-part">
                            <form action="">
                                <input class="name" type="text" id="fname" name="fname" placeholder="Your Name"><br><br>
                                <input type="text" class="email" placeholder="Your email address"> <br> <br>
                                <a class="link-button" href="" target="_blank">Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- join-community ends-->

    <!-- still-to-date start-->
    <section id="still-to-date">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <h4>STAY UP TO DATE WITH STILL!</h4>
                    <a href="#">Let's Go.. </a>
                </div>
            </div>
        </div>
    </section>
    <!-- still-to-date ends-->






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