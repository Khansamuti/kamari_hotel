<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel | Login</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
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
    .contact-form {
        border: 2px solid #ae9548;
        padding-left: 60px;
        padding-top: 55px;
        padding-right: 68px;
        padding-bottom: 47px;
        margin-right: -300px;
        margin-left: 300px;
    }

    .contact-form h5 {
        font-size: 36px;
        font-weight: 400;
        color: #081624;
        line-height: 50px;
        margin-bottom: 20px;
    }

    .contact-form form p {
        font-size: 14px;
        color: #242424;
        line-height: 42px;
        letter-spacing: 0.4px;
        margin-left: 12px;
    }

    .contact-form form input {
        width: 100%;
        font-size: 14px;
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        color: #242424;
        letter-spacing: 1.2px;
        opacity: 0.5;
        position: relative;
        line-height: 42px;
        border: none;
    }

    .contact-form form input::-webkit-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form input::-moz-placeholder {
        text-transform: uppercase;
    }

    .contact-form form input:-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form input::-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form input::placeholder {
        text-transform: uppercase;
    }

    .contact-form form textarea {
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
    }

    .contact-form form textarea::-webkit-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form textarea::-moz-placeholder {
        text-transform: uppercase;
    }

    .contact-form form textarea:-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form textarea::-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form textarea::placeholder {
        text-transform: uppercase;
    }

    .contact-form form button {
        font-size: 18px;
        color: #081624;
        text-transform: uppercase;
        font-family: "Open Sans", sans-serif;
        font-weight: 700;
        background: transparent;
        border: none;
        cursor: pointer;
        position: relative;
        margin-top: 15px;
        margin-left: -5px;
    }

    .contact-form form button:hover { 
        color: #AE9548;
    }

    .contact-form form button i {
        line-height: 16px;
        margin-top: 20px;
        position: absolute;
        right: -35px;
        font-size: 31px;
        color: #AE9548;
    }

    .contact-form form button i:hover {
        color: #081624;
    }

    .contact-form form .input-group {
        position: relative;
        margin-bottom: 10px;
    }

    .contact-form form .input-group:after {
        position: absolute;
        left: 0;
        top: 48px;
        width: 100%;
        height: 1px;
        background: #000;
        content: "";
    }

    .contact-form form .input-group.phone-num img {
        top: 10px;
    }
    .contact-form {
        border: 2px solid #ae9548;
        padding-left: 60px;
        padding-top: 55px;
        padding-right: 68px;
        padding-bottom: 47px;
        margin-top: 50px;
        margin-bottom: -50px;
    }

    .contact-form h5 {
        font-size: 36px;
        font-weight: 400;
        color: #081624;
        line-height: 50px;
        margin-bottom: 20px;
    }

    .contact-form form p {
        font-size: 14px;
        color: #242424;
        line-height: 42px;
        letter-spacing: 0.4px;
        margin-left: 12px;
    }

    .contact-form form input {
        width: 100%;
        font-size: 14px;
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        color: #242424;
        letter-spacing: 1.2px;
        opacity: 0.5;
        position: relative;
        line-height: 42px;
        border: none;
    }

    .contact-form form input::-webkit-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form input::-moz-placeholder {
        text-transform: uppercase;
    }

    .contact-form form input:-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form input::-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form input::placeholder {
        text-transform: uppercase;
    }

    .contact-form form textarea {
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
    }

    .contact-form form textarea::-webkit-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form textarea::-moz-placeholder {
        text-transform: uppercase;
    }

    .contact-form form textarea:-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form textarea::-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact-form form textarea::placeholder {
        text-transform: uppercase;
    }

    .contact-form form button {
        font-size: 18px;
        color: #081624;
        text-transform: uppercase;
        font-family: "Open Sans", sans-serif;
        font-weight: 700;
        background: transparent;
        border: none;
        cursor: pointer;
        position: relative;
        margin-top: 10px;
        margin-left: -19px;
    }

    .contact-form form button i {
        line-height: 16px;
        margin-right: 10px;
        margin-bottom: 8px;
        position: absolute;
        right: -35px;
        font-size: 31px;
        color: #AE9548;
    }

    .contact-form form .input-group {
        position: relative;
        margin-bottom: 10px;
    }

    .contact-form form .input-group:after {
        position: absolute;
        left: 0;
        top: 48px;
        width: 100%;
        height: 1px;
        background: #000;
        content: "";
    }

    .contact-form form .input-group.phone-num img {
        top: 10px;
    }

    .contact1-form {
        border: 2px solid #ae9548;
        padding-left: 60px;
        padding-top: 55px;
        padding-right: 68px;
        padding-bottom: 47px;
        margin-right: -300px;
        margin-left: 300px;
        margin-bottom: -60px;
    }

    .contact1-form h5 {
        font-size: 36px;
        font-weight: 400;
        color: #081624;
        line-height: 50px;
        margin-bottom: 20px;
    }

    .contact1-form form p {
        font-size: 14px;
        color: #242424;
        line-height: 42px;
        letter-spacing: 0.4px;
        margin-left: 12px;
    }

    .contact1-form form input {
        width: 100%;
        font-size: 14px;
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        color: #242424;
        letter-spacing: 1.2px;
        opacity: 0.5;
        position: relative;
        line-height: 42px;
        border: none;
    }

    .contact1-form form input::-webkit-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form input::-moz-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form input:-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form input::-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form input::placeholder {
        text-transform: uppercase;
    }

    .contact1-form form textarea {
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
    }

    .contact1-form form textarea::-webkit-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form textarea::-moz-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form textarea:-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form textarea::-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form textarea::placeholder {
        text-transform: uppercase;
    }

    .contact1-form form button {
        font-size: 18px;
        color: #081624;
        text-transform: uppercase;
        font-family: "Open Sans", sans-serif;
        font-weight: 700;
        background: transparent;
        border: none;
        cursor: pointer;
        position: relative;
        margin-top: 15px;
        margin-left: -5px;
    }

    .contact1-form form button:hover {
        font-size: 18px;
        color: #AE9548;
    }

    .contact1-form form button i {
        line-height: 16px;
        margin-top: 20px;
        position: absolute;
        right: -35px;
        font-size: 31px;
        color: #AE9548;
    }

    .contact1-form form button i:hover {
        color: #081624;
    }

    .contact1-form form .input-group {
        position: relative;
        margin-bottom: 10px;
    }

    .contact1-form form .input-group:after {
        position: absolute;
        left: 0;
        top: 48px;
        width: 100%;
        height: 1px;
        background: #000;
        content: "";
    }

    .contact1-form form .input-group.phone-num img {
        top: 10px;
    }
    .contact1-form {
        border: 2px solid #ae9548;
        padding-left: 60px;
        padding-top: 55px;
        padding-right: 68px;
        padding-bottom: 47px;
        margin-top: 50px;
    }

    .contact1-form h5 {
        font-size: 36px;
        font-weight: 400;
        color: #081624;
        line-height: 50px;
        margin-bottom: 20px;
    }

    .contact1-form form p {
        font-size: 14px;
        color: #242424;
        line-height: 42px;
        letter-spacing: 0.4px;
        margin-left: 12px;
    }

    .contact1-form form input {
        width: 100%;
        font-size: 14px;
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        color: #242424;
        letter-spacing: 1.2px;
        opacity: 0.5;
        position: relative;
        line-height: 42px;
        border: none;
    }

    .contact1-form form input::-webkit-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form input::-moz-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form input:-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form input::-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form input::placeholder {
        text-transform: uppercase;
    }

    .contact1-form form textarea {
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
    }

    .contact1-form form textarea::-webkit-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form textarea::-moz-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form textarea:-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form textarea::-ms-input-placeholder {
        text-transform: uppercase;
    }

    .contact1-form form textarea::placeholder {
        text-transform: uppercase;
    }

    .contact1-form form button {
        font-size: 18px;
        color: #081624;
        text-transform: uppercase;
        font-family: "Open Sans", sans-serif;
        font-weight: 700;
        background: transparent;
        border: none;
        cursor: pointer;
        position: relative;
        margin-top: 15px;
        margin-left: -20px;
    }

    .contact1-form form button i {
        line-height: 16px;
        margin-right: 10px;
        margin-top: 5px;
        position: absolute;
        right: -35px;
        font-size: 31px;
        color: #AE9548;
    }

    .contact1-form form .input-group {
        position: relative;
        margin-bottom: 10px;
    }

    .contact1-form form .input-group:after {
        position: absolute;
        left: 0;
        top: 48px;
        width: 100%;
        height: 1px;
        background: #000;
        content: "";
    }

    .contact1-form form .input-group.phone-num img {
        top: 10px;
    }
    .switcher {
        display: flex;
        justify-content: center;
        margin-top: 40px;
        background-color: #f8f9fa;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .switcher button {
        flex: 1;
        padding: 15px 20px;
        font-size: 16px;
        font-weight: bold;
        color: #081624;
        background-color: transparent;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
    }

    .switcher button.active {
        background-color: #ae9548;
        color: white;
    }

    .switcher button:hover {
        background-color: #e2e2e2;
    }
    .hidden {
        display: none;
    }

    button {
        background-color: #ccc;
        border: none;
        padding: 10px 20px;
        margin: 0 5px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    button.active, button:hover {
        background-color: #616b75;
        color: white;
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
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/rooms">Rooms</a></li>
                            <li><a href="/contact">Contact</a></li>
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
    <script>        
        document.getElementById('loginBtn').addEventListener('click', function() {
            document.getElementById('loginContainer').classList.remove('hidden');
            document.getElementById('signupContainer').classList.add('hidden');
            this.classList.add('active');
            document.getElementById('signupBtn').classList.remove('active');
        });

        document.getElementById('signupBtn').addEventListener('click', function() {
            document.getElementById('signupContainer').classList.remove('hidden');
            document.getElementById('loginContainer').classList.add('hidden');
            this.classList.add('active');
            document.getElementById('loginBtn').classList.remove('active');
        });
    </script>
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