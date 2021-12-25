@extends('layouts.frontend_app')
@section('contact')
    active
@endsection
@section('title')
    Contact | TRINITY Official Website
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
                @foreach ($boxes as $box)
                <div class="col-lg-6 col-md-6">
                    <div class="first-one">
                        <figure class="snip1104">
                            <img src="{{ asset('uploads/contact_box') }}/{{ $box->bg }}" alt="{{ $box->bg }}">
                            <figcaption>
                                <h2> <span>{{ $box->heading }}</span> </h2>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-6 col-md-6">
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
                </div> --}}
            </div>
        </div>
    </section>
    <!-- box-images-part ends -->

    <!-- mail-part start -->
    <section id="mail-part-contact">
        <div class="mail-overlay">
            <h2>SIGN UP / LOVE LETTERS FROM TRINITY</h2>
            @if (session('send_newsletter'))
            <li class="text-success">{{ session('send_newsletter') }}</li>
            @endif
            <form action="{{ route('signup.letter') }}" method="post">
                @csrf
                <input name="email" type="text" placeholder="Your email address">
                <button  class="link-button" type="submit">SIGN UP</button>
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