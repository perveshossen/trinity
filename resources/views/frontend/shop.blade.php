@extends('layouts.frontend_app')
@section('shop')
    active
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
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img
                                src="{{ asset('frontend_asset') }}/images/shop/watches.jpg" alt=""></a>
                        <figcaption>
                            <h3>Watches</h3>
                            <a class="hover-btn" href="#">Shop</a>
                        </figcaption>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img
                                src="{{ asset('frontend_asset') }}/images/shop/shirts.jpg" alt=""></a>
                        <figcaption>
                            <h3>Shirts</h3>
                            <a class="hover-btn" href="#">Shop</a>
                        </figcaption>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img
                                src="{{ asset('frontend_asset') }}/images/shop/mackup.jpg" alt=""></a>
                        <figcaption>
                            <h3>Mackup</h3>
                            <a class="hover-btn" href="#">Shop</a>
                        </figcaption>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img
                                src="{{ asset('frontend_asset') }}/images/shop/pants.jpg" alt=""></a>
                        <figcaption>
                            <h3>Pants</h3>
                            <a class="hover-btn" href="#">Shop</a>
                        </figcaption>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img
                                src="{{ asset('frontend_asset') }}/images/shop/shorts.jpg" alt=""></a>
                        <figcaption>
                            <h3>Shorts</h3>
                            <a class="hover-btn" href="#">Shop</a>
                        </figcaption>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slide-item">
                        <a href="https://www.instagram.com/trinitydang/" target="_blank"><img src="{{ asset('frontend_asset') }}/images/shop/shoe.jpg"
                                alt=""></a>
                        <figcaption>
                            <h3>Shoes</h3>
                            <a class="hover-btn" href="#">Shop</a>
                        </figcaption>
                    </div>
                </div>
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
                        <img src="{{ asset('frontend_asset') }}/images/shop/1.jpg" alt="">
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
                        <img src="{{ asset('frontend_asset') }}/images/shop/6.jpeg" alt="">
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