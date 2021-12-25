@extends('layouts.frontend_app')
@section('service')
    active
@endsection
@section('title')
    Services | TRINITY Official Website
@endsection
@section('frontend_content')

    <!-- service-banner start -->
    <section id="service-banner" style="background: url('{{ asset('uploads/service_banner') }}/{{ $service_banner->bg }}');  background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <h2>{{ $service_banner->heading }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- service-banner ends -->


    <!-- service-description start -->
    <section id="service-description">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 large-device">
                    <img src="{{ asset('uploads/service_detail') }}/{{ $service_detail->thumbnail }}" alt="{{ $service_detail->thumbnail }}">
                </div>
            </div>
        </div>
        <div class="text-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="medium-device">
                            <img src="{{ asset('uploads/service_detail') }}/{{ $service_detail->thumbnail }}" alt="{{ $service_detail->thumbnail }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="text">
                            <p>{{ $service_detail->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-description ends -->


    <!-- elevate start -->
    {{-- <section id="elevate">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center ">
                        <h2>“STRATEGY + PRODUCTION /
                            ELEVATE YOUR BUSINESS”</h2>
                        <a href="#">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- elevate ends -->

    <!-- mindful start -->
    @foreach ($banners as $banner)
    <section id="mindful">
        <div class="jarallax">
            <img class="jarallax-img" src="{{ asset('uploads/service_more_banner') }}/{{ $banner->bg }}" alt="{{ $banner->bg }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center ">
                        <h2>{{ $banner->heading }}</h2>
                        <a href="{{ $banner->button_link }}">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- mindful ends -->

    <!-- words start -->
    {{-- <section id="words">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center ">
                        <h2>“WORDS + INSPIRATION / HER
                            MEMORIAE THE BOOK”</h2>
                        <a href="#">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- words ends -->










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