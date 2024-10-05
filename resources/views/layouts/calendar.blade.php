<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel | Staff</title>

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
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    


    
</head>

<style>
    .slider-item .single-slider-item {
        height: 938px;
        padding-top: 395px;
    }

    .slider-item .single-slider-item h1 {
        font-size: 96px;
        color: #ffffff;
        line-height: 96px;
    }

    .slider-nav {
        position: absolute;
        right: 0;
        top: 0;
    }

    .slider-nav .single-slider-nav {
        display: inline-block;
        margin-right: 26px;
    }

    .slider-nav .single-slider-nav.last {
        margin-right: 0;
    }

    .slider-nav .single-slider-nav:hover .nav-text {
        background: #ffffff;
        border: 1px solid #ae9548;
        border-top: 0;
    }

    .slider-nav .single-slider-nav:hover .nav-text p {
        color: #081624;
    }

    .slider-nav .single-slider-nav .nav-text {
        background: #353535;
        padding: 8px 15px;
        position: relative;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        border: 1px solid #353535;
        border-top: 0;
    }

    .slider-nav .single-slider-nav .nav-text p {
        color: #ffffff;
        font-size: 16px;
        font-family: "Open Sans", sans-serif;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 0;
    }

    .slider-nav .single-slider-nav .nav-text p i {
        position: absolute;
        right: 15px;
        top: 11px;
        font-size: 20px;
        color: #ae9548;
    }
    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f4f4f4;
    }

    .header-section {
        background-color: #081624;
        padding: 20px 0;
    }

    .header-section .logo img {
        max-width: 150px;
    }

    .contact-form {
        border: 2px solid #ae9548;
        padding: 55px 68px 47px 60px;
        margin: 50px auto;
        max-width: 600px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-form h5 {
        font-size: 36px;
        font-weight: 400;
        color: #081624;
        line-height: 50px;
        margin-bottom: 20px;
    }

    .contact-form p {
        font-size: 14px;
        color: #242424;
        line-height: 42px;
        letter-spacing: 0.4px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        font-size: 14px;
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        color: #242424;
        letter-spacing: 1.2px;
        opacity: 0.8;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 20px;
    }

    .contact-form input::placeholder,
    .contact-form textarea::placeholder {
        text-transform: uppercase;
        opacity: 0.5;
    }

    .contact-form button {
        font-size: 18px;
        color: #081624;
        text-transform: uppercase;
        font-weight: 700;
        background: #ae9548;
        border: none;
        border-radius: 4px;
        padding: 12px 20px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .contact-form button:hover {
        background: #c69f55;
    }

    .switcher {
        display: flex;
        justify-content: center;
        margin-top: 40px;
        background-color: #f8f9fa;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: none;
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

    .calendar-view form {
        visibility: hidden;
    }

    .fc-col-header-cell {
        background-color: #081624; /* Mengubah latar belakang menjadi hitam */
        color: white;            /* Mengubah teks menjadi putih */
    }


    .table-view .filter {
        visibility: hidden;
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
                    <a href="/"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="container">
                    <nav class="main-menu mobile-menu">
                        <ul>
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
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    @yield('scripts')
</body>
</html>