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
        margin-left: -8px;
    }

    .contact-form form button i {
        line-height: 16px;
        margin-right: 0px;
        margin-bottom: 0px;
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
    .room-check {
        margin-top: 70px;
    }
    .history-section {
        padding: 100px;
        margin-top: 0px;
    }

    .history-card {
        margin-top: 40px;
    }
    .booking-card {
        border: 2px solid #ae9548;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 0px;
        position: relative;
    }
    .booking-card h5 {
        font-size: 24px;
        margin-bottom: 10px;
    }
    .booking-card p {
        margin-bottom: 5px;
    }
    .ongoing-booking {
        background-color: #f9f9f9;
    }
    .completed-booking {
        background-color: #f9f9f9;
    }
    .room-service-btn {
        background-color: #ae9548;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .history-section h2 {
        margin-bottom: 20px;
        margin-top: 40px;
        color: #ae9548;
    }

    .history-section h3 {
        margin-top: 40px;
    }

    .total-payment {
        position: absolute;
        right: 20px;
        top: 20px;
        text-align: right;
    }
    .total-payment strong {
        font-size: 18px;
    }
    .food-category {
        width: 60px;
        height: 60px;
        background-color: #dfa974;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-bottom: 15px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .food-category:hover {
        background-color: #19191a;
    }
    .btn-primary {
        background-color: #dfa974;
        border-color: #dfa974;
    }
    .btn-primary:hover {
        background-color: #19191a;
        border-color: #19191a;
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
                            <li><a href="/receptionist">Home</a></li>
                            <li><a href="/availablerooms">Room Available</a></li>
                            <li><a href="/">Logout</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    @yield('content')

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