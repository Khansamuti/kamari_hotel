@extends('layouts.payment')

@section('title', 'Our Services | Hotel Name')

@section('content')
 <!-- Payment Section Begin -->
 <section class="payment-section-container">
        <!-- Bagian Kiri: Preview Kamar -->
        <div class="payment-room-preview">
            <img src="img/room/rooms-2.jpg" alt="Room Preview">
            <h2>{{$roomType->room_type}}</h2>
            <p>A comfortable room with a queen-sized bed, sea view, and modern amenities.</p>
            <p>Check-in: {{$checkInDate}} | Check-out:{{$checkOutDate}}</p>
            <p>Price per night: Rp {{$roomType->price}}</p>
        </div>

            <!-- Bagian Kanan: Rincian Pembayaran -->
        <div class="payment-details-container">
            <h4>Payment Details</h4>

            <!-- Harga Kamar -->
            <div class="payment-price-details">
                <p>Price per night<span>Rp {{$roomType->price}}</span></p> <!--ubah-->
                <p>Total Night<span>{{$totalNights}} nights</span></p>
                <!-- <p>Additional Fees<span>Rp 200.000</span></p> -->
                <p>Service & Charge<span>Rp {{$serviceCharge}}</span></p>
            </div>

            <!-- Total -->
            <div class="payment-total">
                <span>Total (IDR)</span>
                <span>Rp {{$totalAmount}}</span>
            </div>

            <!-- Pilih Bank -->
            <div class="payment-bank-selection">
                <label for="bank-select">Choose Bank:</label>
                <select id="bank-select" onchange="generateVirtualAccount()">
                    <option value="">-- Choose Bank --</option>
                    <option value="bank1">Bank BNI</option>
                    <option value="bank2">Bank BCA</option>
                    <option value="bank3">Bank Mandiri</option>
                    <option value="bank4">Bank BRI</option>
                </select>
            </div>

            <!-- Nomor Virtual Akun -->
            <div class="payment-virtual-account">
                <label for="virtual-account">Virtual Account Number:</label>
                <input type="text" id="virtual-account" placeholder="Choose Bank First" readonly />
            </div>

            <!-- Tombol Bayar -->
            <!-- <form action="/myroom"> -->
            <form action="{{ route('payments.store') }}" method="POST">
                @csrf
                <!-- Hidden Fields -->
                <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                <input type="hidden" name="total_amount" value="{{ $totalAmount }}">
                <input type="hidden" name="bank" id="hidden-bank" value="">
                <input type="hidden" name="virtual_account" id="hidden-virtual-account" value="">

                <button type="submit" class="payment-btn-block">Pay</button>
            </form>
        </div>

        <script>
        function generateVirtualAccount() {
            const bankSelect = document.getElementById('bank-select');
            const virtualAccountInput = document.getElementById('virtual-account');
            
            if (bankSelect.value) {
                // Generate a random 12-digit number
                const randomAccountNumber = Math.floor(100000000000 + Math.random() * 900000000000);
                virtualAccountInput.value = randomAccountNumber;
            } else {
                virtualAccountInput.value = ''; // Clear the input if no bank is selected
            }
        }
        </script>


    </section>
    <!-- Payment Section End -->
@endsection

@section('scripts')

@endsection