@extends('layouts.frontend_app')
@section('publication')
    active
@endsection
@section('title')
    Publication | TRINITY Official Website
@endsection
@section('frontend_content')

    <!-- publications-part start -->
    <section id="publication-banner" style="background: url('{{ asset('uploads/publication_banner') }}/{{ $banner->bg }}'); background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h2>{{ $banner->heading }}</h2>
                        <p>{{ $banner->description }}</p>
                        <h5><a href="{{ $banner->button_link }}">SEE MORE</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- publications-part ends -->


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

    <!-- shop start -->
    <section id="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto insta-head text-center">
                    <h2>shop by category</h2>
                </div>
            </div>
            <div class="row shop-slide">
                @foreach ($categories as $category)
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img
                                src="{{ asset('uploads/shop_category') }}/{{ $category->thumbnail }}" alt=""></a>
                        <figcaption>
                            <h3>{{ $category->name }}</h3>
                            <a class="hover-btn" href="{{ $category->button_link }}">Shop</a>
                        </figcaption>
                    </div>
                </div>
                @endforeach
            </div>
            <i class="fas fa-chevron-left right"></i>
            <i class="fas fa-chevron-right left"></i>
        </div>

    </section>
    <!-- shop ends -->

    <!-- picture-part start -->
    <section id="picture-part">
        <div class="container">
            <div class="row">
                @foreach ($memoriaes as $memoriae)
                
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
                @if ($display === 'right')
                <div class="col-lg-6 col-md-6">
                    <div class="img-part top-cut">
                        <img src="{{ asset('uploads/memoriae_photo') }}/{{ $memoriae->photo }}" alt="{{ $memoriae->photo }}">
                    </div>
                </div>
                @endif
                
                <div class="col-lg-6 col-md-6">
                    <div class="text-part text-center large-display">
                        <h5>{{ $memoriae->heading }}</h5>
                        <a href="{{ $memoriae->button_link }}">Shop Now</a>
                    </div>
                </div>
                
                @if ($display === 'left')
                <div class="col-lg-6 col-md-6">
                    <div class="img-part ">
                        <img src="{{ asset('uploads/memoriae_photo') }}/{{ $memoriae->photo }}" alt="{{ $memoriae->photo }}">
                    </div>
                </div>
                @endif
                <div class="col-lg-6 col-md-6  small-display">
                    <div class="text-part text-center">
                        <h5>{{ $memoriae->heading }}</h5>
                        <a href="{{ $memoriae->button_link }}">Shop Now</a>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-lg-6 col-md-6  small-display">
                    <div class="text-part text-center">
                        <h5>Her MEMORIAE II</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-6 col-md-6">
                    <div class="img-part top-cut">
                        <img src="{{ asset('frontend_asset') }}/images/insider-07.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="text-part text-center">
                        <h5>Her MEMORIAE III</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="text-part text-center large-display">
                        <h5>Her MEMORIAE IV</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="img-part top-cut">
                        <img src="{{ asset('frontend_asset') }}/images/morning-ga9c434a24_1920.jpg" alt="">
                    </div>
                </div> --}}
                {{-- <div class="col-lg-6">
                    <div class="text-part text-center small-display col-md-6">
                        <h5>Her MEMORIAE IV</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- picture-part ends -->

    <!-- testimonials-part start -->
    <section id="testimonials-part">
        <div class="overlay">
            <div class="container text-center">
                <h2>Testimonials.</h2>
                <div class="row testimonials-slide">
                    @foreach ($testimonials as $testimonial)
                    <div class="col-lg-7 m-auto text-center">
                        <div class="slide-item">

                            <h4>" {{ $testimonial->review }} "</h4>

                            <div class="client-overview">
                                <img style="height: 70px; width: 70px;" src="{{ asset('uploads/testimonial_photo') }}/{{ $testimonial->thumbnail }}" alt="{{ $testimonial->thumbnail }}">
                                <h6>{{ $testimonial->name }}</h6>
                                <p>{{ $testimonial->designation }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials-part ends -->


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