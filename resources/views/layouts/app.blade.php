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
            background-color: #AE9548;
            border: 0px;
        }

        .btn:hover {
            background-color: #353535;
            border: 0px;
        }

        .btn:active {
            background-color: #AE9548;
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
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    <li><a href="{{ url('/bookinghistory') }}">My Booking</a></li>
                                    <li><a href="{{ url('/') }}">Logout</a></li>
                                </ul>
                            </nav>
                            <div class="top-info">
                                <img src="{{ asset('img/placeholder.png') }}" alt="">
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
                            <p>Gedung Nano<br />Universitas Airlangga, SBY</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+62-1324-5768</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+62-5678-1234</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+62-1234-5678</p>
                        </div>
                    </div>
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