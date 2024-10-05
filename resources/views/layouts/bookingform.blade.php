<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel | Pemesanan</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/linearicons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<style>
    .booking-form {
        border: 2px solid #ae9548;
        padding: 55px 68px 47px 60px;
        margin: 50px auto;
        max-width: 600px;
        background-color: #f9f9f9;
        border-radius: 10px;
    }

    .booking-form h5 {
        font-size: 36px;
        font-weight: 400;
        color: #081624;
        line-height: 50px;
        margin-bottom: 20px;
        text-align: center;
    }

    .booking-form form p {
        font-size: 14px;
        color: #242424;
        line-height: 42px;
        letter-spacing: 0.4px;
        margin-left: 12px;
    }

    .booking-form form input,
    .booking-form form select{
        width: 100%;
        font-size: 14px;
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        color: #242424;
        letter-spacing: 1.2px;
        opacity: 0.8;
        position: relative;
        line-height: 42px;
        border: none;
        padding: 0 10px;
        background: #fff;
        border-radius: 5px;
        margin-top: 0;
        margin-bottom: 15px;
    }

    .booking-form form input::placeholder,
    .booking-form form select::placeholder {
        text-transform: uppercase;
    }

    .booking-form form textarea {
        width: 100%;
        font-size: 14px;
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        color: #242424;
        letter-spacing: 1.2px;
        opacity: 0.5;
        border: none;
        resize: none;
        height: 81px;
        line-height: 2;
        padding: 10px;
        border-radius: 5px;
        background: #fff;
        margin-bottom: 15px;
    }

    .booking-form form button {
        font-size: 18px;
        color: #081624;
        text-transform: uppercase;
        font-family: "Open Sans", sans-serif;
        font-weight: 700;
        background: transparent;
        border: none;
        cursor: pointer;
        position: relative;
        padding: 10px 20px;
        border: 2px solid #ae9548;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .booking-form form button:hover {
        background-color: #ae9548;
        color: white;
    }

    .booking-form form button i {
        line-height: 16px;
        margin-left: 10px;
        font-size: 20px;
        color: #AE9548;
    }

    .booking-form form .input-group {
        position: relative;
        margin-bottom: 10px;
    }

    .booking-form form .input-group:after {
        position: absolute;
        left: 0;
        top: 48px;
        width: 100%;
        height: 1px;
        background: #000;
        content: "";
    }

    .booking-form form .input-group.phone-num img {
        top: 10px;
    }

    /* Additional Styling */
    .hidden {
        display: none;
    }

    .switcher {
        display: none; /* Dihilangkan karena tidak diperlukan lagi */
    }

    /* Responsif */
    @media (max-width: 768px) {
        .booking-form {
            padding: 30px 20px 20px 20px;
            margin: 20px auto;
            max-width: 100%;
        }

        .booking-form h5 {
            font-size: 28px;
        }
    }
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section other-page">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="container">
                    <nav class="main-menu mobile-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about-us.html">About</a></li>
                            <li><a href="./rooms.html">Rooms</a></li>
                            <li><a href="#">Facilities</a>
                                <ul class="drop-menu">
                                    <li><a href="#">Junior Suit</a></li>
                                    <li><a href="#">Double Room</a></li>
                                    <li><a href="#">Senior Suit</a></li>
                                    <li><a href="#">Single Room</a></li>
                                </ul>
                            </li>
                            <li><a href="./news.html">News</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


@yield('scripts')



</body>

</html>