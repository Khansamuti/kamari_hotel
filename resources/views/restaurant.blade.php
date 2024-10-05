@extends('layouts.staff')

@section('title', "Available Rooms | Hotel Name")

@section('content')



    <!-- Contact Section Begin -->
    <section class="contact-section spad display-flex text-center">
        <div class="container">
            <div class="row">
                <h1>Hi, Welcome to Restaurant, {namastaff}</h1>
                <!-- Booking Page Container -->
                <div class="col-lg-6">
                    <div id="loginContainer" class="contact-form">
                        <h5>PANTRY</h5>
                        <form action="/pantry">
                            <div class="login row">
                                <div class="col-lg-12">
                                    <button><i class="lnr lnr-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    
                <!-- Available Room Container -->
                <div class="col-lg-6">
                    <div id="loginContainer" class="contact-form">
                        <h5>FOOD ORDERS</h5>
                        <form action="/incomingorders">
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
       
@endsection

@section('scripts')

@endsection