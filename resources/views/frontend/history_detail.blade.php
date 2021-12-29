@extends('layouts.frontend_app')
@section('history')
    active
@endsection
@section('title')
    History-Detail | TRINITY Official Website
@endsection
@section('frontend_content')

    <!-- history-details-body start -->
    <section id="history-details-body">
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

        <div class="row">
            <div class="col-lg-12 mobile-version">
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
                <div class="cross-part">
                    <a href="{{ route('history.details') }}">&#10005;</a>
                </div>
            </div>
        </div>



        <div class="container year-details-box">
            <div class="row first-year-details" id="first-year-details">

                <div class="col-lg-6 text-center mobile-view">
                    <div class="text-part">
                        <h4>1991</h4>
                        <h3>Birth of TRINITY <br> DANG</h3>
                        <p>Trinity is born on March 14th, 1991 in
                            sunnyside California.</p>
                    </div>
                </div>

                <div class="col-lg-5 col-12 text-center">
                    <div class="img-part">
                        <img class="first-img" src="{{ asset('frontend_asset') }}/images/history/01.jpg" alt="">
                        <p>Trinity is born 1991 in
                            sunnyside California, March 14th</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center desktop-view">
                    <div class="text-part">
                        <h4>1991</h4>
                        <h3>Birth of TRINITY <br> DANG</h3>
                        <p>Trinity is born on March 14th, 1991 in
                            sunnyside California.</p>
                    </div>
                </div>
                <div class="col-lg-1 cross-part">
                    <a href="{{ route('history.details') }}">&#10005;</a>
                </div>
                <div class="next-prev">
                    <a href="#">NEXT - 1910 <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- history-details-body ends -->






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
                        <a href="{{ $movement->link }}" target="_blank"><img src="{{ asset('uploads/movement') }}/{{ $movement->photo }}" alt="{{ $movement->photo }}"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- insta-canvas ends -->
@endsection