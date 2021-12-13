@extends('layouts.frontend_app')
@section('history')
    active
@endsection
@section('frontend_content')
    
    <!-- history-banner start -->
    <section id="history-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto text-center">
                    <img src="{{ asset('frontend_asset') }}/images/admin.jpg" alt="">
                </div>
            </div>
            <div class="row lower-parts">
                <div class="col-lg-7 m-auto text-center">
                    <h3>
                        “AM SO BLESSED TO HAVE LEARNED SO MUCH,
                        YET THERE IS SO MUCH MORE I ASPIRE TO GROW.”
                    </h3>
                    <p><i>-TRINITY DANG 2021</i></p>

                    <p class="main-description">Amongst many things, Trinity Dang is a self made
                        model, entrepreneur, author, and international
                        television host. Growing up in almost every part of
                        the world, Trinity has embodied a deep spirit of
                        culture, curiosity, and particularly, an extremely unique
                        perspective. As a young adult, Trinity lived in over 6
                        different countries and traveled to over 100 different
                        cities. Studying under some of the world’s most
                        successful entrepreneurs, Trinity was integrated in
                        building over a dozen start up companies. Online,
                        she is a social phenomenon seen in commercials,
                        magazines, and television series across the globe.
                        Offline, Trinity is the co-founder of Mission Strategy:
                        MSTRAT, a strategic consulting and production
                        company where she consults, strategizes, recreates,
                        and helps in building businesses from start to finish.
                        She published Her Memoriae, a poetry, prose, and
                        photo book sharing some of the most intimate
                        thoughts from her personal journal, hoping to model
                        transparency, vulnerability, and strength in courage,
                        inspiring this younger generation everywhere. She is
                        also the founder and CEO of The Still Project, a
                        platform that brings global awareness to mental
                        health and mindful living.
                        Trinity is a full time humanitarian, mental health
                        advocate, and holistic health activist. Serving to
                        bridge the gap between East and West -- Trinity is a
                        voice for this generation, a beacon of love, hope, and
                        light, fighting to break through the stigmatism
                        surrounding mental health. Today, she aspires to
                        continue sharing her story and investing in serving
                        others, as well as building platforms that help support
                        individuals along their own personal journeys.</p>
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
                        <img class="image-one" src="{{ asset('frontend_asset') }}/images/history/01.jpg" alt="">
                        <h2>1991</h2>
                        <a href="{{ route('history.details') }}">DISCOVER<i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="row common-year-space" id="year-two">
                    <div class="col-lg-7 col-7 ">
                        <img class="image-one" src="{{ asset('frontend_asset') }}/images/history/2.jpg" alt="">
                        <img class="image-three" src="{{ asset('frontend_asset') }}/images/history/4.jpg" alt="">

                    </div>
                    <div class="col-lg-5 col-5">
                        <img class="image-two" src="{{ asset('frontend_asset') }}/images/history/3.jpg" alt="">
                        <img class="image-four" src="{{ asset('frontend_asset') }}/images/history/5.jpg" alt="">
                    </div>
                    <h2>2000</h2>
                    <a href="{{ route('history.details') }}">DISCOVER<i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="row common-year-space" id="year-three">
                    <div class="col-lg-5 col-md-5 col-5">
                        <img class="image-one" src="{{ asset('frontend_asset') }}/images/history/6.jpg" alt="">
                        <img class="image-three" src="{{ asset('frontend_asset') }}/images/history/8.jpg" alt="">
                    </div>
                    <div class="col-lg-7 col-md-7 col-7">
                        <img class="image-two" src="{{ asset('frontend_asset') }}/images/history/7.jpg" alt="">
                        <img class="image-four" src="{{ asset('frontend_asset') }}/images/history/10.jpg" alt="">
                        <img class="image-five" src="{{ asset('frontend_asset') }}/images/history/11.jpg" alt="">
                    </div>
                    <h2>2001</h2>
                    <a href="{{ route('history.details') }}">DISCOVER<i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="row common-year-space" id="year-two">
                    <div class="col-lg-7 col-md-7 col-7 text-right">
                        <img class="image-one" src="{{ asset('frontend_asset') }}/images/history/2.jpg" alt="">
                        <img class="image-three" src="{{ asset('frontend_asset') }}/images/history/4.jpg" alt="">

                    </div>
                    <div class="col-lg-5 col-md-5 col-5">
                        <img class="image-two" src="{{ asset('frontend_asset') }}/images/history/3.jpg" alt="">
                        <img class="image-four" src="{{ asset('frontend_asset') }}/images/history/5.jpg" alt="">
                    </div>
                    <h2>2002</h2>
                    <a href="{{ route('history.details') }}">DISCOVER<i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="row common-year-space" id="year-three">
                    <div class="col-lg-5 col-md-5 col-5 text-right">
                        <img class="image-one" src="{{ asset('frontend_asset') }}/images/history/6.jpg" alt="">
                        <img class="image-three" src="{{ asset('frontend_asset') }}/images/history/8.jpg" alt="">
                    </div>
                    <div class="col-lg-7 col-md-7 col-7">
                        <img class="image-two" src="{{ asset('frontend_asset') }}/images/history/7.jpg" alt="">
                        <img class="image-four" src="{{ asset('frontend_asset') }}/images/history/10.jpg" alt="">
                        <img class="image-five" src="{{ asset('frontend_asset') }}/images/history/11.jpg" alt="">
                    </div>
                    <h2>2003</h2>
                    <a href="{{ route('history.details') }}">DISCOVER<i class="fas fa-chevron-right"></i></a>
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