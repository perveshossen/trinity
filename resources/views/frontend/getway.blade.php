@extends('layouts.frontend_app')
@section('getway')
    active
@endsection
@section('title')
    Getways | TRINITY Official Website
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
                @foreach ($sliders as $slider)
                <div class="carousel-item {{ $loop->index === 0 ? "active" : " "  }}">
                    <div class="text">
                        <h4>{{ $slider->description }}</h4>
                    </div>
                    <img class="d-block w-100" src="{{ asset('uploads/getway_slider') }}/{{ $slider->bg }}" alt="{{ $slider->bg }}">
                </div>
                @endforeach
                {{-- <div class="carousel-item">
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
                </div> --}}
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
                    <h2>{{ $gateway_video->heading }}</h2>
                    <p>{{ $gateway_video->description }}</p>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="video-head">
                        <a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="{{ $gateway_video->video_link  }}"><i class="fas fa-play"></i></a>
                        <img src="{{ asset('uploads/gateway_video') }}/{{ $gateway_video->video_thumbnail }}" alt="{{ $gateway_video->video_thumbnail}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--video-part ends-->


    <!-- still-offering start-->
    <section id="still-offering">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/gateway/Experiences_Beach.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>THE STILL PROJECT GATEWAY | GETAWAY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <a href="#">Click Here</a>
                        <a href="#">Essentials</a>
                        <a href="#">Gateways</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- still-offering ends-->

    <!-- still-offering start-->
    <section id="still-offering-enjoy">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/gateway/friends.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h4>ENJOY THE WEEK</h4>
                        <h5>Lorem ipsum dolor sit amet consectetur .</h5>
                        <a href="#">Click Here</a>
                    </div>
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
                    <h4>IMMERSION</h4>
                    <p>Lorem ipsum dolor sit amet,</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="second-part">
                    <h5>EXPERIENCE</h5>
                    <h4>STAR COLLECTOR</h4>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- apply-now ends -->

    <!-- still-offering-two start-->
    <section id="still-offering-two">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/gateway/gateway-04.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>EAT AND DRINK</h4>
                        <h5>THE MAIN FEATURE OF PAPAYA BEACH</h5>
                        <p>Lorem ipsum dolor sit amet,em ipsum dolor sit amet,em ipsum dolor sit amet,em ipsum dolor sit
                            amet,</p>
                        <a href="#">Click Here</a>
                        <a href="#">Essentials</a>
                        <a href="#">Gateways</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- still-offering-two ends-->

    <!-- still-offering-two start-->
    <section id="still-offering-two">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/gateway/mentee-03.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>ADVENTURE</h4>
                        <h5>THE MAIN FEATURE OF PAPAYA BEACH</h5>
                        <p>Lorem ipsum dolor sit amet,em ipsum dolor sit amet,em ipsum dolor sit amet,em ipsum dolor sit
                            amet,</p>
                        <a href="#">Click Here</a>
                        <a href="#">Essentials</a>
                        <a href="#">Gateways</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- still-offering-two ends-->

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
                            <form action="{{ route('join.our.community') }}" method="POST" >
                                @csrf
                                <input class="name" type="text" id="fname" name="name" placeholder="Your Name"><br><br>
                                <input type="text" class="email" placeholder="Your email address" name="email"> <br> <br>
                                <button class="link-button" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- join-community ends-->

    <!-- still-offering start-->
    <section id="still-offering">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/gateway/fisherman-g562916a0d_1920.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h4>FIND OUT ALL OUR BEST SERVICE</h4>
                        <h5>THE MAIN FEATURE OF PAPAYA BEACH</h5>
                        <a href="#">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- still-offering ends-->

    <!-- mail-part start -->
    <section id="mail-part-contact">
        <div class="mail-overlay">
            <h2>‘STAY UP TO DATE WITH STILL!’</h2>
            
            @if (session('send_newsletter'))
            <li class="text-success">{{ session('send_newsletter') }}</li>
            @endif
            <form action="{{ route('signup.letter') }}" method="post">
                @csrf
                <input type="text" placeholder="Your email address">
                <button class="link-button" type="submit">SIGN UP</button>
            </form>
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