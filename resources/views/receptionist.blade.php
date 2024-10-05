@extends('layouts.staff')

@section('title', "Receptionist's Page| Hotel Name")

@section('content')

<!-- Contact Section Begin -->
<section class="contact-section spad display-flex text-center">
    <div class="container">
        <div class="row">
            <h1>Hi, Welcome to Receptionist, {namastaff}</h1>
            <!-- Booking Page Container -->
            <div class="col-lg-6">
                <div id="loginContainer" class="contact-form">
                    <h5>BOOKING PAGE</h5>
                    <form action="/bookingtable">
                        <div class="login row">
                            <div class="col-lg-12">
                                <button href=/bookingtabel><i class="lnr lnr-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Available Room Container -->
            <div class="col-lg-6">
                <div id="loginContainer" class="contact-form">
                    <h5>AVAILABLE ROOM</h5>
                    <form action="/availablerooms">
                        <div class="login row">
                            <div class="col-lg-12">
                                <button><i class="lnr lnr-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>     
<!-- Contact Section End -->
@endsection

@section('scripts')

@endsection