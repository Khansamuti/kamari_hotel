<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description', 'Welcome to Your Room')">
    <meta name="keywords" content="@yield('keywords', 'Hotel, room, welcome, services')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Welcome to Your Room | Hotel Name')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <style>
        /* Adjust Navbar padding */
        .header-section {
            padding: 20px 0;
        }

        /* Add margin to welcome section */
        .welcome-section h1 {
            margin-top: 20px;
            font-size: 3rem;
        }

        .card {
            margin-bottom: 20px;
        }

        /* Ensure buttons have proper margin */
        .btn {
            margin-top: 10px;
        }

        /* Footer image alignment */
        .footer-room-pic .row img {
            width: auto;
            max-width: 25%;
            height: auto;
            margin-bottom: 10px;
        }

        /* Footer section styling */
        .single-footer-widget {
            margin-bottom: 20px;
        }
    </style>

    @yield('additional_styles')
</head>

<body>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="main-menu mobile-menu">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about-us') }}">About</a></li>
                                    <li><a href="{{ url('/rooms') }}">Rooms</a></li>
                                    <li><a href="#">Facilities</a>
                                        <ul class="drop-menu">
                                            <li><a href="#">Junior Suit</a></li>
                                            <li><a href="#">Double Room</a></li>
                                            <li><a href="#">Senior Suit</a></li>
                                            <li><a href="#">Single Room</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/news') }}">News</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="top-info">
                                <img src="{{ asset('img/placeholder.png') }}" alt="">
                                <span>1525 Boring Lane, Los Angeles, CA</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Footer Room Pic Section Begin -->
    <div class="footer-room-pic">
        <div class="container-fluid">
            <div class="row">
                <img src="{{ asset('img/room-footer-pic/room-1.jpg') }}" alt="">
                <img src="{{ asset('img/room-footer-pic/room-2.jpg') }}" alt="">
                <img src="{{ asset('img/room-footer-pic/room-3.jpg') }}" alt="">
                <img src="{{ asset('img/room-footer-pic/room-4.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Footer Room Pic Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Location</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>1525 Boring Lane, <br />Los Angeles, CA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class="privacy-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Photo Requests</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('scripts')
</body>
</html>