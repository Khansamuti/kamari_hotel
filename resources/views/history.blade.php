@extends('layouts.form')

@section('title', 'Our Services | Hotel Name')

@section('content')

<div class="history-section">
    <div class="container">
        <div class="col-lg-12 history-card">
            <h2 class="text-center">Booking History</h2>

            <!-- Ongoing Bookings Section -->
            <h3>Ongoing Bookings</h3>
            <div class="col-lg-12 booking-card ongoing-booking">
                <h5>Room 101 - Deluxe Suite</h5>
                <p><strong>Check-in Date:</strong> 20th September 2024</p>
                <p><strong>Check-out Date:</strong> 25th September 2024</p>
                <p><strong>Status:</strong> Ongoing</p>
                <button id="roomServiceBtn" class="room-service-btn">Room Cleaning Service</button>
                <form action="/foodorder" class="mt-2">
                    <button id="roomServiceBtn" class="room-service-btn">Food Order</button>
                </form>
                    <div class="total-payment">
                    <p><strong>Total:</strong> Rp 5.000.000</p>
                    <p><strong>Paid on:</strong> 18th September 2024</p>
                </div>
            </div>


            <!-- Completed Bookings Section -->
            <h3>Completed Bookings</h3>
            <div class="booking-card completed-booking">
                <h5>Room 205 - Standard Room</h5>
                <p><strong>Check-in Date:</strong> 10th August 2024</p>
                <p><strong>Check-out Date:</strong> 15th August 2024</p>
                <p><strong>Status:</strong> Completed</p>
                <div class="total-payment">
                    <p><strong>Total:</strong> Rp 2.700.000</p>
                    <p><strong>Paid on:</strong> 8th August 2024</p>
                </div>
            </div>
            <div class="booking-card completed-booking">
                <h5>Room 305 - Superior Room</h5>
                <p><strong>Check-in Date:</strong> 5th July 2024</p>
                <p><strong>Check-out Date:</strong> 10th July 2024</p>
                <p><strong>Status:</strong> Completed</p>
                <div class="total-payment">
                    <p><strong>Total:</strong> Rp 3.300.000</p>
                    <p><strong>Paid on:</strong> 3rd July 2024</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Pastikan tombol sudah di-load
        const roomServiceBtn = document.getElementById("roomServiceBtn");
        
        // Periksa apakah tombol ditemukan
        if (roomServiceBtn) {
            roomServiceBtn.addEventListener("click", function () {
                const now = new Date();
                const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                alert(`Room cleaning scheduled at ${timeString}`);
            });
        } else {
            console.error("Room Service Button not found!");
        }
    });
</script>
@endsection