@extends('layouts.frontend_app')
@section('title')
    History | TRINITY Official Website
@endsection
@section('history')
    active
@endsection
@section('frontend_content')



    <!-- history-banner start -->
    <section id="history-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto text-center">
                    <img src="{{ asset('uploads/history_banner') }}/{{ $his_banner->photo }}" alt="">
                </div>
            </div>
            <div class="row lower-parts">
                <div class="col-lg-7 m-auto text-center">
                    <h3>{{ $his_banner->heading }}</h3>
                    <p><i>-TRINITY DANG 2021</i></p>

                    <p class="main-description">{{ $his_banner->description }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- history-banner ends -->


    <!-- history-body start -->
    <section id="history-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>THE HISTORY</h2>
                </div>
                <div class="col-lg-12 text-center mobile-version">
                    <ul class="menu">
                        <li>
                            <a href="#">1991</a>

                            <ul>
                                <li><a href="#year-one">1991</a></li>
                                <li><a href="#year-two">2010</a></li>
                                <li><a href="#year-three">2011</a></li>
                                <li><a href="#year-four">2012</a></li>
                                <li><a href="#year-five">2013</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="left-bar">
                <ul>
                    <li><a href="#year-one">1991</a></li>
                    <li><a href="#year-two">2010</a></li>
                    <li><a href="#year-three">2011</a></li>
                    <li><a href="#year-four">2012</a></li>
                    <li><a href="#year-five">2013</a></li>
                    <li><a href="#year-six">2014</a></li>
                    <li><a href="#year-seven">2015</a></li>
                    <li><a href="#year-eight">2016</a></li>
                    <li><a href="#year-eight">2017</a></li>
                    <li><a href="#year-eight">2018</a></li>
                    <li><a href="#year-eight">2019</a></li>
                    <li><a href="#year-eight">2020</a></li>
                    <li><a href="#year-eight">2021</a></li>
                </ul>
            </div>
            <div class="year-details">
                <div class="row common-year-space" id="year-one">
                    <div class="col-lg-5 col-md-5 m-auto text-center">
                        <img class="image-one" src="{{ asset('frontend_asset') }}/images/history/1991.jpeg" alt="">
                        <h2>1991</h2>
                        <a href="{{ route('history.details') }}">DISCOVER<i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="row common-year-space" id="year-two">
                    <div class="col-lg-7 col-7 ">
                        <img class="image-one" src="{{ asset('frontend_asset') }}/images/history/1920-01.jpeg" alt="">

                    </div>
                    <div class="col-lg-5 col-5">
                        <img class="image-two" src="{{ asset('frontend_asset') }}/images/history/1920-02.jpeg" alt="">
                    </div>
                    <h2>1920</h2>
                    <a href="#">DISCOVER<i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="row common-year-space" id="year-four">
                    <div class="col-lg-4 col-4">
                        <img class="image-one" src="{{ asset('frontend_asset') }}/images/history/2010-01.jpeg" alt="">
                    </div>
                    <div class="col-lg-7 col-7">
                        <img class="image-two" src="{{ asset('frontend_asset') }}/images/history/2010-02.jpeg" alt="">
                        <img class="image-three" src="{{ asset('frontend_asset') }}/images/history/2010-03.jpeg" alt="">
                    </div>
                    <h2>2010</h2>
                    <a href="#">DISCOVER<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>


    </section>

    <!-- history-body ends -->







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