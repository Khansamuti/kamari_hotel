@extends('layouts.index')

@section('title', 'Our Services | Hotel Name')

@section('content')

<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="img/rooms-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Rooms</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="/about" class="left-nav"><i class="lnr lnr-arrow-left"></i> About</a>
                    <a href="/contact" class="right-nav"> Contact<i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

 <!-- Rooms Section Begin -->
 <section class="room-section spad">
        <div class="container">
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="img/room/rooms-1.jpg" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="img/room/rooms-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Single Room</h2>
                                <div class="room-price">
                                    <span>From</span>
                                    <h5>1.720.000 IDR</h5>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Experience unparalleled luxury in our Single Room, featuring a plush king-size bed with premium linens. The elegantly designed space includes a spacious work desk, high-speed Wi-Fi, and a minibar stocked with gourmet treats. Indulge in the opulent bathroom, complete with a soaking tub and high-end toiletries. Enjoy stunning views from large windows and 24-hour room service for the ultimate stay. Perfect for discerning travelers seeking comfort and sophistication.</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <!-- <a href="#">Book Now <i class="lnr lnr-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="img/room/rooms-3.jpg" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="img/room/rooms-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Double Room</h2>
                                <div class="room-price">
                                    <span>From</span>
                                    <h5>1.292.000 IDR</h5>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Discover refined elegance in our Luxury Double Room, featuring two plush queen-size beds adorned with premium linens. The spacious layout offers a cozy seating area, a large work desk, and complimentary high-speed Wi-Fi. Unwind in the lavish bathroom with a soaking tub and luxurious toiletries. Enjoy breathtaking views from the expansive windows and indulge in 24-hour room service. Perfect for couples or friends seeking a sophisticated retreat in ultimate comfort.</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <!-- <a href="#">Book Now <i class="lnr lnr-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="img/room/rooms-4.jpg" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="img/room/rooms-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Junior Suite</h2>
                                <div class="room-price">
                                    <span>From</span>
                                    <h5>2.520.000 IDR</h5>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Elevate your stay in our Luxury Junior Suite, a spacious haven of comfort and style. Featuring a king-size bed with exquisite linens, this suite includes a separate living area with a plush sofa and modern amenities. Enjoy high-speed Wi-Fi, a flat-screen TV, and a fully stocked minibar. The elegant bathroom boasts a soaking tub and upscale toiletries for your indulgence. With stunning views and personalized service, this suite is perfect for those seeking a luxurious escape.</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <!-- <a href="#">Book Now <i class="lnr lnr-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="img/room/rooms-5.jpg" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="img/room/rooms-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Standard Room</h2>
                                <div class="room-price">
                                    <span>From</span>
                                    <h5>900.000 IDR</h5>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Experience comfort and convenience in our Standard Room, featuring a cozy queen-size bed and essential amenities. Designed with a welcoming ambiance, this room includes a work desk, complimentary Wi-Fi, and a flat-screen TV. The en-suite bathroom offers modern fixtures and complimentary toiletries. Ideal for budget-conscious travelers, our Standard Room provides a relaxing and practical retreat for your stay.</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <!-- <a href="#">Book Now <i class="lnr lnr-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->
@endsection

@section('scripts')

@endsection