@extends('layouts.frontend_app')
@section('shop')
    active
@endsection
@section('title')
    Shop | TRINITY Official Website
@endsection
@section('frontend_content')
    <!-- shop-banner start -->
    <section id="shop-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <h2>SHOP TRINITY + CO</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-banner ends -->

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
                                src="{{ asset('uploads/shop_category') }}/{{ $category->thumbnail }}" alt="{{ $category->thumbnail }}"></a>
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
    <section id="shop-gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="shop-gallery-header">
                        <p>Trinity Product</p>
                        <h3>I AM A FORMER MODEL</h3>
                        <a href="">DISCOVER</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="img-part">
                        <img src="{{ asset('frontend_asset') }}/images/shop/8.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="text-part text-center">
                        <h5>Her MEMORIAE</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 large-device">
                    <div class="text-part text-center">
                        <h5>COCO MEMORIAE</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="img-part top-cut">
                        <img src="{{ asset('frontend_asset') }}/images/shop/8.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 small-device">
                    <div class="text-part text-center">
                        <h5>COCO MEMORIAE</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6">
                    <div class="img-part top-cut">
                        <img src="{{ asset('frontend_asset') }}/images/shop/4.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="text-part text-center ">
                        <h5>Her MEMORIAE IV</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 large-device">
                    <div class="text-part text-center ">
                        <h5>Her MEMORIAE V</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="img-part top-cut">
                        <img src="{{ asset('frontend_asset') }}/images/shop/5.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 small-device">
                    <div class="text-part text-center ">
                        <h5>Her MEMORIAE V</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- picture-part ends -->






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