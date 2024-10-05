@extends('layouts.payment')

@section('title', 'Our Services | Hotel Name')

@section('content')
 <!-- Payment Section Begin -->
 <section class="payment-section-container">
        <!-- Bagian Kiri: Preview Kamar -->
        <div class="payment-room-preview">
            <img src="img/room/rooms-2.jpg" alt="Room Preview">
            <h2>Junior Suite</h2>
            <p>A comfortable room with a queen-sized bed, sea view, and modern amenities.</p>
            <p>Check-in: 20th September | Check-out: 23rd September</p>
            <p>Price per night: Rp 1.500.000</p>
        </div>

            <!-- Bagian Kanan: Rincian Pembayaran -->
        <div class="payment-details-container">
            <h4>Payment Details</h4>

            <!-- Harga Kamar -->
            <div class="payment-price-details">
                <p>Price per night<span>Rp 1.500.000</span></p>
                <p>Total Night<span>3 nights</span></p>
                <p>Additional Fees<span>Rp 200.000</span></p>
                <p>Service & Charge<span>Rp 300.000</span></p>
            </div>

            <!-- Total -->
            <div class="payment-total">
                <span>Total (IDR)</span>
                <span>Rp 5.000.000</span>
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
            <form action="/myroom">
                <button class="payment-btn-block">Pay</button>
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