<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRINITY Official Website</title>

    <!-- External CSS Links -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/media.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend_asset') }}/images/logo-t.png" type="image/x-icon" sizes="16x16">
</head>

<body>

    <!-- navbar start -->
    <div class="top-border">
    </div>

    <div class="large-device-logo">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 m-auto text-center">
                    <a href="{{ route('index') }}">T R I N I T Y</a>
                </div>
            </div>
        </div>
    </div>

    <!-- <nav class="navbar navbar-expand-lg navbar-light extra-large-nav">

        <div class="container navbar-container ">
            <div class="col-lg-7 text-right">
                <a class="navbar-brand" href="index.html">T R I N I T Y</a>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-search"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-star"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-cart-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->


    <nav class="navbar navbar-expand-lg navbar-light bg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">T R I N I T Y</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('home')" href="{{ route('index') }}">HOME
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('history')" href="{{ route('history') }}">HISTORY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('publication')" href="{{ route('publication') }}">PUBLICATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('still')" href="{{ route('still') }}">STILL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('service')" href="{{ route('service') }}">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('shop')" href="{{ route('shop') }}">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('insider')" href="{{  route('insider') }}">INSIDER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('gateway')" href="{{ route('gateway') }}">GETAWAYS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="responsive-navbar">
        <div class="responsive-top-border">
        </div>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center m-auto">
                        <a href="{{ route('index') }}">T R I N I T Y</a>
                    </div>
                </div>
            </div>
        </div>
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
        </label>
        <div id="sidebarMenu">
            <ul class="sidebarMenuInner">
                <li><a class="active" href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('history') }}">HISTORY</a></li>
                <li>
                    <a href="{{ route('publication') }}">PUBLICATIONS</a>
                </li>
                <li>
                    <a href="{{ route('still') }}">STILL</a>
                </li>
                <li>
                    <a href="{{ route('service') }}">SERVICES</a>
                </li>
                <li>
                    <a href="{{ route('shop') }}">SHOP</a>
                </li>
                <li>
                    <a href="{{ route('insider') }}">INSIDER</a>
                </li>
                <li>
                    <a href="{{ route('gateway') }}">GETAWAYS</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <div id='center' class="main center">
        </div>
    </section>

    <!-- navbar ends -->






@yield('frontend_content')
    <!-- follow-part start -->
    <section id="follow-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <h2>Follow Us</h2>
                </div>
                <div class="col-lg-8 col-12 m-auto text-center follow-icons">
                    <ul>
                        <li><a href="#" class="social-icons"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="social-icons"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="social-icons"><i class="fas fa-play"></i></a></li>
                        <li><a href="#" class="social-icons"><i class="fab fa-tumblr"></i></a></li>
                        <li><a href="#" class="social-icons"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- follow-part ends -->


    <!-- info-part start -->
    <section id="info-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="first-part">
                        <h5>contact an advisor</h5>
                        <p>Available 24/7. <br>

                            To speak with Customer Care, call
                            <a href="tel:123-456-7890">1.800.550.0005</a> <br>
                            or use the chat and email services below.</p>
                        <ul>
                            <li><a href="#">Chat</a></li>
                            <li><a href="#">Email</a></li>
                            <li><a href="#">Call</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="second-part">
                        <h5>find a stor</h5>
                        <p>Enter a location to find the closest CHANEL stores</p>
                        <form action="">
                            <i class="fas fa-search"></i>
                            <input type="text" id="" name="" placeholder="search by town">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="third-part">
                        <h5>find a stor</h5>
                        <p>Enter a location to find the closest CHANEL stores</p>
                        <form action="">
                            <h6>OK</h6><i class="fas fa-chevron-right"></i>
                            <input type="text" id="" name="" placeholder="Enter your Email address">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- info-part ends -->

    <!-- footer-part start -->
    <section id="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <h2>TRINITY</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4>explore trinity</h4>
                        <ul>
                            <li><a href="#">
                                    <p>Sitemap</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Fashion</p>
                                </a></li>
                            <li><a href="#">
                                    <p>High Jewelry</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Watches</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Rode</p>
                                </a></li>

                            <li><a href="#">
                                    <p>Sitemap</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Fashion</p>
                                </a></li>
                            <li><a href="#">
                                    <p>High Jewelry</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4>Online Services</h4>
                        <ul>
                            <li><a href="#">
                                    <p>Payment Methods</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Shipping Options</p>
                                </a></li>
                            <li><a href="#">
                                    <p>My Accouts</p>
                                </a></li>
                            <li><a href="#">
                                    <p>FAQ</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Cars & Services</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4>Boutique Services</h4>
                        <ul>
                            <li><a href="#">
                                    <p>Store Locator</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Book an Appointment</p>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4>The house of CHANEL</h4>
                        <ul>
                            <li><a href="#">
                                    <p>Carers</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Legal</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Privacy</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Information About CCPA Do Not Sell</p>
                                </a></li>
                            <li><a href="#">
                                    <p>accessibility</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Report to Society</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Fighting Counterfeits</p>
                                </a></li>

                            <li><a href="#">
                                    <p>California Transparency in Supply Chains</p>
                                </a></li>

                            <li><a href="#">
                                    <p>CHANEL Racial Justice Efforts</p>
                                </a></li>
                            <li><a href="#">
                                    <p>CHANEL COVID-19 Relief Efforts</p>
                                </a></li>
                            <li><a href="#">
                                    <p>Trinity Support Black Ambition</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer-part ends -->


    <!-- bottom to up btn -->
    <a href="#" onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa fa-arrow-up"></i>
    </a>

    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>














    <!-- External JS -->
    <script src="{{ asset('frontend_asset') }}/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/venobox.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/wow.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/script.js"></script>
</body>

</html>