@extends('layouts.frontend_app')
@section('still')
    active
@endsection
@section('title')
    Still | TRINITY Official Website
@endsection
@section('frontend_content')
    <!-- still-banner start -->
    <div id="still-banner" style="background: url('{{ asset('uploads/still_banner') }}/{{ $still_banner->bg }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <h2>{{ $still_banner->heading }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- still-banner ends -->

    <!-- still-details-banner start -->
    <div id="still-details-banner">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('uploads/still_banner_two') }}/{{ $still_banner_two->bg }}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h4>{{ $still_banner_two->description }}</h4>
                        <h5><a href="{{ $still_banner_two->button_link }}">Click Here</a></h5>
                    </div>
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
                            href="{{ $story->video_link }}"><i class="fas fa-play"></i></a>
                        <img src="{{ asset('frontend_asset') }}/images/video-bg2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-5 text-part col-md-6">
                    <h2>{{ $story->heading }}</h2>
                    <p>{{ $story->description }}</p>
                    <h5><a href="{{ $story->button_link }}">YESSS</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- publication-video-part ends-->


    <!-- still-offering start-->
    <section id="still-offering">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('uploads/still_focus') }}/{{ $focus->bg }}" alt="{{ $focus->bg }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>{{ $focus->heading }}</h4>
                        <a href="{{ $focus->btn_1 }}">Click Here</a>
                        <a href="{{ $focus->btn_2 }}">Essentials</a>
                        <a href="{{ $focus->btn_3 }}">Gateways</a>
                    </div>
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
                            @if (session('join_community'))
                            <li class="text-success">{{ session('join_community') }}</li>
                            @endif
                            <form action="{{ route('join.our.community') }}" method="POST">
                                @csrf
                                <input class="name" type="text" id="fname" name="name" placeholder="Your Name"><br><br>
                                <input name="email" type="text" class="email" placeholder="Your email address"> <br> <br>
                                <button class="link-button" type="submit">Submit</button>
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
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/still-to-date.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center m-auto">
                        <h4>STAY UP TO DATE WITH STILL!</h4>
                        <a href="#">Let's Go.. </a>
                    </div>
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