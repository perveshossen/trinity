@extends('layouts.frontend_app')
@section('insider')
    active
@endsection
@section('title')
    Insider | TRINITY Official Website
@endsection
@section('frontend_content')

    <!-- insider-banner start -->
    <section id="insider-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <h2>TRINITY TALKS</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- insider-banner ends -->

    <!-- insider-description start -->
    <section id="insider-description">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('frontend_asset') }}/images/insider-description.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center m-auto">
                        <p>“A Collection Of
                            Words, Videos, And Experiences For A Deeper
                            Look Into Trinity's Thoughts And Introspection.
                            Understand Her Insight, Intentions, And
                            Perception. Experience More Of Trinity's
                            Personal Journey Through Trinity Talks: The
                            Insider.”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- insider-description ends -->


    <!-- blogging-media start -->
    <section id="blogging-media">
        <div class="container">
            <div class="row">
                <div class="first-part">
                    <div class="col-lg-6 col-md-6 m-auto text-center">
                        <img src="{{ asset('frontend_asset') }}/images/insider-08.jpeg" alt="">
                        <h2>INSIDER</h2>
                        <a href="#">Discover</a>
                    </div>
                </div>
            </div>
            <div class="row insider-details">
                @foreach ($insiders as $insider)
                @php
                $width_round = round($loop->index/2);
                $width_out_round = $loop->index/2;
                @endphp
                @if ($width_out_round == $width_round)
                @php
                $display = 'left';
                @endphp
                @else   
                @php 
                $display = 'right';
                @endphp
                @endif
                @if ($display === 'left')
                <div class="col-lg-6 col-md-6">
                    <div class="img-part">
                        <img src="{{ asset('uploads/insider') }}/{{ $insider->thumbnail }}" alt="{{ $insider->thumbnail }}">
                    </div>
                </div>
                @endif
                <div class="col-lg-6 col-md-6">
                    <div class="text-part ">
                        <h5>{{ $insider->heading }}</h5>
                        <p>{{ $insider->description }}</p>
                        <h6><a href="{{ $insider->button_link }}">Explore</a></h6>
                    </div>
                </div>
                @if ($display === 'right')
                <div class="col-lg-6 col-md-6">
                    <div class="img-part top-cut">
                        <img src="{{ asset('uploads/insider') }}/{{ $insider->thumbnail }}" alt="{{ $insider->thumbnail }}">
                    </div>
                </div>
                    
                @endif
                <div class="col-lg-6 col-md-6 small-device">
                    <div class="text-part">
                        <h5>{{ $insider->heading }}</h5>
                        <p>{{ $insider->description }}</p>
                        <h6><a href="{{ $insider->button_link }}">Explore</a></h6>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="row">

                <div class="col-lg-6 col-md-6 m-auto text-center">
                    <div class="last-part">
                        <h2>The 55.55 Point </h2>
                        <img src="{{ asset('frontend_asset') }}/images/box-three.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blogging-media ends -->


    <!-- video part start-->
    <section id="video-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <h2>{{ $video->heading }}</h2>
                    <p>{{ $video->description }}</p>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="video-head">
                        <a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="{{ $video->video_link }}"><i class="fas fa-play"></i></a>
                        <img src="{{ asset('frontend_asset') }}/images/video.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--video-part ends-->



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