@extends('layouts.frontend_app')
@section('contact')
    active
@endsection
@section('frontend_content')
  


    <!-- contact-banner start -->
    <section id="contact-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <h2>Contact's</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-banner ends -->


    <!-- box-images-part start -->
    <section id="box-images-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="first-one">
                        <figure class="snip1104">
                            <img src="{{ asset('frontend_asset') }}/images/box-one.jpeg" alt="">
                            <figcaption>
                                <h2>APPEARANCES +<span> SPEAKING ENGAGEMENTS</span></h2>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="first-one">
                        <figure class="snip1104">
                            <img src="{{ asset('frontend_asset') }}/images/box-two.jpeg" alt="">
                            <figcaption>
                                <h2> <span> PARTNERSHIPS</span></h2>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="first-one">
                        <figure class="snip1104 ">
                            <img src="{{ asset('frontend_asset') }}/images/box-three.jpeg" alt="">
                            <figcaption>
                                <h2> <span> NEWS + MEDIA</span></h2>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="first-one">
                        <figure class="snip1104">
                            <img src="{{ asset('frontend_asset') }}/images/box-four.jpeg" alt="">
                            <figcaption>
                                <h2> <span>BUSINESS INQUIRIES</span></h2>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- box-images-part ends -->

    <!-- mail-part start -->
    <section id="mail-part-contact">
        <div class="mail-overlay">
            <h2>SIGN UP / LOVE LETTERS FROM TRINITY</h2>
            <input type="text" placeholder="Your email address">
            <a class="link-button" href="" target="_blank">SIGN UP</a>
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