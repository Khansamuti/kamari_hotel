<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel | Payment</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    
</head>


<body>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="/"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="main-menu mobile-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/aboutus">About</a></li>
                                    <li><a href="/rooms">Rooms</a></li>
                                    <li><a href="/services">Services</a>
                                    </li>
                                    <li><a href="/news">News</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li><a href="#">Log in</a>
                                        <ul class="drop-menu">
                                            <li><a href="/login"  data-toggle="modal" data-target="#GuestloginModal">as Guest</a></li>
                                            <li><a href="#">as Staff</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>

                            <!-- Modal-->
                            <!--<div class="modal" id="GuestloginModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Login as Guest</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Log in</button>
                                            </form>
                                            <div class="mt-3">
                                                <p>Don't have an account? <a href="#" id="showSign">Sign up here</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            
                            <!-- Sign Up Modal -->
                            <!--<div class="modal" id="GuestsignUpModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Sign Up</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="newUsername">Username</label>
                                                    <input type="text" class="form-control" id="newUsername" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="newPassword">Password</label>
                                                    <input type="password" class="form-control" id="newPassword" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="confirmPassword">Confirm Password</label>
                                                    <input type="password" class="form-control" id="confirmPassword" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sign Up</button>
                                            </form>
                                            <div class="mt-3">
                                                <p>Already have an account? <a href="#" id="showLogin">Log in here</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            
                            <!-- JavaScript to Handle Modal Switching -->
                            <!--<script>
                                document.getElementById('showSignUp').onclick = function() {
                                    $('#GuestloginModal').modal('hide');
                                    $('#GuestsignUpModal').modal('show');
                                };
                                
                                document.getElementById('showLogin').onclick = function() {
                                    $('#GuestsignUpModal').modal('hide');
                                    $('#GuestloginModal').modal('show');
                                };
                            </script> -->

                            <!-- <div class="top-info">
                                <img src="img/placeholder.png" alt="">
                                <span>1525 Boring Lane, Los Angeles, CA</span>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header-section {
            position: fixed; /* Membuat header menempel di bagian atas */
            top: 0; /* Letakkan di bagian atas halaman */
            width: 100%; /* Pastikan header mengambil lebar penuh */
            z-index: 1000; /* Pastikan header berada di depan elemen lain */
            background-color: #333; /* Tambahkan warna latar agar lebih jelas */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan untuk efek */
        }

        /* Payment Section */
        .payment-section-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 50px;
            padding: 20px;
            gap: 20px;
            background-color: #ffffff;
            padding-top: 100px; /* Tambahkan padding cukup besar sesuai tinggi header */

        }

        .payment-details-container {
            width: 45%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .payment-room-preview {
            position: relative; /* Allows for absolute positioning of the image */
            overflow: hidden; /* Ensures that any overflow is hidden */
        }

        .payment-room-preview img {
            width: calc(100% + 40px); /* Increase width to account for padding */
            height: auto; /* Maintain aspect ratio */
            position: relative; /* Position relative for proper layering */
            left: -20px; /* Shift image left to compensate for padding */
            border-radius: 0px; /* No rounding */
        }




        .payment-details-container h4 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .payment-room-preview p {
            font-size: 16px;
            margin-bottom: 10px;
            color: #555;
        }

        .payment-details-container {
            width: 45%; /* Ukuran elemen container */
            background-color: #fff; /* Warna latar */
            padding: 10px; /* Jarak antara konten dan border */
            border-radius: 0px; /* Membuat sudut border melengkung */
            border: 2px solid #ae9548; /* Border emas di sekeliling */
            margin: 25px 10px; /* Jarak antara container */
        }


        .payment-details-container h4 {
            text-align: center;
        }

        .payment-price-details p {
            display: flex;
            justify-content: space-between;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .payment-total {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .payment-btn-block {
            width: 100%;
            padding: 10px;
            background-color: #ae9548;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 30px;
        }

        .payment-btn-block:hover {
            background-color: #333;
        }

        /* Style for form inputs */
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        /* Style for the bank selection and virtual account input */
        .payment-bank-selection,
        .payment-virtual-account {
            margin-top: 20px; /* Space above each section */
        }

        .payment-bank-selection label,
        .payment-virtual-account label {
            font-size: 16px;
            margin-bottom: 5px; /* Space below the label */
            color: #333; /* Label color */
        }

        .payment-bank-selection select,
        .payment-virtual-account input[type="text"] {
            width: 100%; /* Full width for inputs */
            padding: 10px; /* Padding for comfort */
            border-radius: 4px; /* Rounded corners */
            border: 1px solid #ccc; /* Border style */
            font-size: 16px; /* Font size for readability */
        }

        /* Style for the placeholder text in the virtual account input */
        .payment-virtual-account input[type="text"]::placeholder {
            color: #aaa; /* Placeholder color */
            font-style: italic; /* Italic style for placeholder */
        }


    </style>

    @yield('content')



    <!-- Footer Room Pic Section Begin -->
    <div class="footer-room-pic">
        <div class="container-fluid">
            <div class="row">
                <img src="img/room-footer-pic/room-1.jpg" alt="">
                <img src="img/room-footer-pic/room-2.jpg" alt="">
                <img src="img/room-footer-pic/room-3.jpg" alt="">
                <img src="img/room-footer-pic/room-4.jpg" alt="">
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    @yield('scripts')
</body>
</html>