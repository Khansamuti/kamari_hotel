<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KAMARI</title>

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
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li><a href="#">Log in</a>
                                        <ul class="drop-menu">
                                            <li><a href="/login">as Guest</a></li>
                                            <li><a href="/stafflogin">as Staff</a></li>
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

    @yield('content')

    <!-- Follow Instagram Section Begin -->
    <section class="follow-instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Follow us on Instagram @kamarihotel</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Follow Instagram Section End -->

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