@extends('layouts.app')

@section('title', 'Welcome to Your Room | Hotel Name')

@section('content')
<!-- Welcome Section Begin -->
<section class="welcome-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Welcome to Your Room</h1>
                <p class="lead">Please, enjoy your stay!</p>
            </div>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Your Stay Information</h2>
                        <p class="card-text">You are booked until: <strong id="checkoutDate">27 Sept 2024</strong></p>
                        <p class="card-text">Room Number: <strong id="roomNumber">512</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Request Services</h2>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <button class="btn btn-primary" id="roomServiceBtn">Request Room Cleaning</button>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ url('/foodorder') }}" class="btn btn-primary">Order Food</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Section End -->
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Handle room cleaning request
        document.getElementById("roomServiceBtn").addEventListener("click", function () {
            const now = new Date();
            const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            alert(`Room cleaning scheduled at ${timeString}`);
        });
    });
</script>
@endsection