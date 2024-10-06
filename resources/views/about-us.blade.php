@extends('layouts.index')

@section('title', 'About Us | Hotel Name')

@section('content')
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="img/about-us-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>About</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="/" class="left-nav"><i class="lnr lnr-arrow-left"></i> Home</a>
                    <a href="/rooms" class="right-nav">Rooms <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Room Section Begin -->
    <div class="about-us-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h2>“Kamari Hotel”</h2>
                </div>
            </div>
            <div class="about-para">
                <div class="row">
                    <!-- <div class="col-lg-6">
                        <p>Blabla</p>
                    </div> -->
                    <div class="col-lg-12" style="text-align: center;">
                        <p>Located in the heart of eastern Surabaya, Kamari Hotel offers a serene atmosphere of private residence in the middle of a bustling city.</p>
                        <p>Stay with me, feels like Home.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Room Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-text">
                        <h2>Hotel Gallery</h2>
                        <p>Introducing Kamari Hotel</p>
                        <a href="#" class="primary-btn">View Gallery <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="img/gallery/gallery-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="img/gallery/gallery-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="img/gallery/gallery-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="img/gallery/gallery-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Staff Section End -->
    <section class="staff-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Staff</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-staff-item">
                        <div class="staff-img">
                            <img src="img/staff/staff-1.jpg" alt="">
                        </div>
                        <div class="staff-text">
                            <h5>Khansa Mutiara</h5>
                            <span>162112133110</span>
                            <a href="#"><i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-staff-item">
                        <div class="staff-img">
                            <img src="img/staff/staff-2.jpg" alt="">
                        </div>
                        <div class="staff-text">
                            <h5>Intan Nurul Laily</h5>
                            <span>164221060</span>
                            <a href="#"><i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-staff-item">
                        <div class="staff-img">
                            <img src="img/staff/staff-3.jpg" alt="">
                        </div>
                        <div class="staff-text">
                            <h5>Rexwald Kamasean</h5>
                            <span>164221073</span>
                            <a href="#"><i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-staff-item">
                        <div class="staff-img">
                            <img src="img/staff/staff-1.jpg" alt="">
                        </div>
                        <div class="staff-text">
                            <h5>Shiba Salsabilla</h5>
                            <span>164221078</span>
                            <a href="#"><i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Staff Section End -->
@endsection

@section('scripts')

@endsection