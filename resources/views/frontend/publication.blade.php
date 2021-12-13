@extends('layouts.frontend_app')
@section('publication')
    active
@endsection
@section('frontend_content')
    
    <!-- publications-part start -->
    <section id="publication-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <h2>BOOK / PUBLICATIONS</h2>
                        <p>WRITTEN AND CURATED
                            BY TRINITY DANG, HER MEMORIAE IS AN INSIDE LOOK
                            ON SOME OF TRINITY’S MOST INTIMATE THOUGHTS
                            FROM HER OWN PERSONAL JOURNAL. IT IS A
                            COLLECTION OF PERSONAL POETRY PROSE AND
                            PHOTOS</p>
                        <h5><a href="#">SEE MORE</a></h5>
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
    <section id="picture-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="img-part">
                        <img src="{{ asset('frontend_asset') }}/images/girl-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="text-part text-center">
                        <h5>Her MEMORIAE</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="text-part text-center large-display">
                        <h5>Her MEMORIAE II</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="img-part top-cut">
                        <img src="{{ asset('frontend_asset') }}/images/mountains-gad15f4d84_1920.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6  small-display">
                    <div class="text-part text-center">
                        <h5>Her MEMORIAE II</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="img-part top-cut">
                        <img src="{{ asset('frontend_asset') }}/images/girl-2.jpg" alt="">
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
                </div>
                <div class="col-lg-6">
                    <div class="text-part text-center small-display col-md-6">
                        <h5>Her MEMORIAE IV</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
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
                    <div class="col-lg-7 m-auto text-center">
                        <div class="slide-item">

                            <h4>" Lorem ipsum dolor sit amet consectetur adipisicing elit. sit amet consectetur
                                adipisicing elit. Culpa nulla asperiores amet sit
                                dolore consequatur? "</h4>

                            <div class="client-overview">
                                <img src="{{ asset('frontend_asset') }}/images/testimonials-author-1.jpg" alt="">
                                <h6>Jhon Author</h6>
                                <p>Professor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 m-auto text-center">
                        <div class="slide-item">
                            <h4>" Lorem ipsum dolor sit amet consectetur adipisicing elit. sit amet consectetur
                                adipisicing elit. Culpa nulla asperiores amet sit
                                dolore consequatur? "</h4>

                            <div class="client-overview">
                                <img src="{{ asset('frontend_asset') }}/images/testimonials-author-2.jpg" alt="">
                                <h6>Jhon Author</h6>
                                <p>Professor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 m-auto text-center">
                        <div class="slide-item">
                            <h4>" Lorem ipsum dolor sit amet consectetur adipisicing elit. sit amet consectetur
                                adipisicing elit. Culpa nulla asperiores amet sit
                                dolore consequatur? "</h4>

                            <div class="client-overview">
                                <img src="{{ asset('frontend_asset') }}/images/testimonials-author-3.jpg" alt="">
                                <h6>Jhon Author</h6>
                                <p>Professor</p>
                            </div>
                        </div>
                    </div>
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