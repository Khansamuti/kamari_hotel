@extends('layouts.form')

@section('title', 'Welcome, Our Dear Guests| Hotel Name')

@section('content')
<div class="hero-slider">
    <div class="slider-item">
        <div class="single-slider-item set-bg" data-setbg="img/slider-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>We hope you’ll enjoy <br />your stay.</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-nav">
                            <!-- <a href="#" class="single-slider-nav">
                                <img src="img/nav-1.jpg" alt="">
                                <div class="nav-text active">
                                    <p>Pool<i class="lnr lnr-arrow-right"></i></p>
                                </div>
                            </a> -->
                            <a href="/bookingroom" class="single-slider-nav">
                                <img src="img/nav-2.jpg" alt="">
                                <div class="nav-text">
                                    <p>Room Service<i class="lnr lnr-arrow-right"></i></p>
                                </div>
                            </a>
                            <a href="/foodorder" class="single-slider-nav last">
                                <img src="img/nav-3.jpg" alt="">
                                <div class="nav-text">
                                    <p>Restaurant<i class="lnr lnr-arrow-right"></i></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Hero Slider End -->
<!-- Room Availability Section Begin -->
<section class="room-availability spad">
        <div class="container">
            <div class="room-check">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-item">
                            <div class="room-pic-slider room-pic-item owl-carousel">
                                <div class="room-pic">
                                    <img src="img/room-slider/room-1.jpg" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="img/room-slider/room-2.jpg" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="img/room-slider/room-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="room-text">
                                <div class="room-title">
                                    <h2>Junior Suite</h2>
                                    <div class="room-price">
                                        <span>From</span>
                                        <h5>2.520.000 IDR</h5>
                                    </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="check-form">
                            <h2>Check Availability</h2>
                            <form action="#">
                                <div class="datepicker">
                                    <div class="date-select">
                                        <p>From</p>
                                        <!-- <input type="text" class="datepicker-1" value="dd / mm / yyyy"> -->
                                        <input type="text" id="checkin" name="check_in_date" placeholder="Check-in Date" value="{{ old('check_in_date') }}" required readonly>
                                        <img src="img/calendar.png" alt="">
                                    </div>
                                    <div class="date-select to">
                                        <p>To</p>
                                        <!-- <input type="text" class="datepicker-2" value="dd / mm / yyyy"> -->
                                        <input type="text" id="checkout" name="check_out_date" placeholder="Check-out Date" value="{{ old('check_out_date') }}" required readonly>
                                        <img src="img/calendar.png" alt="">
                                    </div>
                                </div>
                                <div class="room-quantity">
                                    <div class="single-quantity">
                                        <p>Adults</p>
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </div>
                                    <div class="single-quantity">
                                        <p>Children</p>
                                        <div class="pro-qty"><input type="text" value="0"></div>
                                    </div>
                                    <div class="single-quantity last">
                                        <p>Rooms</p>
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </div>
                                </div>
                                <div class="room-selector">
                                    <p>Room</p>
                                    <select class="suit-select">
                                        <option value="">Master suite</option>
                                        <option value="">Double Room</option>
                                        <option value="">Single Room</option>
                                        <option value="">Special Room</option>
                                    </select>
                                </div>
                                <a href="/bookingroom">
                                    <button type="button">Check Availability <i class="lnr lnr-arrow-right"></i></button>
                                </a>                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-room">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h2>“Customers may forget what you said  but they will never forget how you made themfeel”.</h2>
                    </div>
                </div>
                <div class="about-para">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Creating meaningful experiences for customers goes beyond what we offer; it’s about how we make them feel valued and understood.
                                Every interaction should carry a personal touch that leaves a lasting impression.</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Customer experience starts with listening, understanding their needs, and going the extra mile to deliver service that exceeds expectations. When we create memorable moments, we build stronger and longer-lasting relationships with our customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Availability Section End -->

    <!-- Facilities Section Begin -->
    <div class="facilities-section spad">
        <div class="container">
            <div class="facilities-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h1>Facilities</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="facilities-img set-bg" data-setbg="img/services/services-6.jpg"></div>
                    </div>
                    <div class="col-lg-6 p-0 ">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Room Service</h2>
                                <p>Experience the luxury of dining in the comfort of your own room. Our room service is available 24/7, offering a wide selection of gourmet dishes, snacks, and beverages to satisfy any craving. Whether it’s a hearty breakfast, a delightful lunch, or a late-night snack, our culinary team is here to serve you.</p>
                                <a href="#" class="primary-btn fac-btn">Call Service <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-1 order-2">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Restaurant</h2>
                                <p>Welcome to our hotel restaurant, where we invite you to embark on a delightful culinary journey. Our chefs are dedicated to crafting exquisite dishes using the finest local ingredients, ensuring a memorable dining experience.</p>
                                <a href="#" class="primary-btn fac-btn">Order Menu <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-2 order-1">
                        <div class="facilities-img set-bg" data-setbg="img/nav-3.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Section End -->

@endsection

@section('scripts')
<script>
    // Initialize Datepicker
    $(function () {
        $("#checkin, #checkout").datepicker({
            dateFormat: "dd-mm-yy",
            minDate: 0,
            onSelect: function (selectedDate) {
                var option = this.id == "checkin" ? "minDate" : "maxDate",
                    instance = $(this).data("datepicker"),
                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                if (this.id == "checkin") {
                    $("#checkout").datepicker("option", "minDate", date);
                } else {
                    $("#checkin").datepicker("option", "maxDate", date);
                }
            }
        });
    });
</script>
@endsection

@section('scripts')

@endsection