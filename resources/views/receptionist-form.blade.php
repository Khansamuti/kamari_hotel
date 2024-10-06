@extends('layouts.receptionist-form')

@section('title', 'Our Services | Hotel Name')

@section('content')
<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="bookingContainer" class="contact-form">
                    <h5>Booking Form</h5>

                    @if ($room)
                        <h3>Room Details</h3>
                        <p>Room ID: {{ $room->room_id }}</p>
                        <p>Room Type: {{ $room->room_type }}</p>

                        <input type="hidden" name="room_type" value="{{ $room->room_type }}">
                    @endif

                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        <input type="text" name="firstname" required placeholder="First Name">
                        <input type="text" name="lastname" required placeholder="Last Name">
                        <input type="email" name="email" required placeholder="Email">
                        <input type="text" name="phone" required placeholder="Phone">
                        
                        <!-- Check-in and Check-out Dates -->
                        <label for="checkin">Check-in Date</label>
                        <input type="date" id="checkin" name="check_in_date" required>
                        
                        <label for="checkout">Check-out Date</label>
                        <input type="date" id="checkout" name="check_out_date" required>

                        <!-- Number of Adults, Kids, and Rooms -->
                        <input type="number" name="adults" required min="1" value="1" placeholder="Number of Adults">
                        <input type="number" name="kids" min="0" value="0" placeholder="Number of Kids">
                        <input type="number" name="number_of_rooms" required min="1" value="1" placeholder="Number of Rooms">

                        <input type="hidden" id="room_id" name="room_id" value="{{ $room->room_id }}">
                        
                        <!-- Price Field -->
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="Rp 0" readonly>
                        </div>

                        <button type="submit">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Get today's date in 'YYYY-MM-DD' format
        var today = new Date().toISOString().split('T')[0];

        // Set the min attribute for check-in and check-out dates to today
        $('#checkin').attr('min', today);
        $('#checkout').attr('min', today);

        // Optionally, you can automatically set the checkout date to one day after check-in
        $('#checkin').on('change', function() {
            var checkInDate = new Date($(this).val());
            checkInDate.setDate(checkInDate.getDate() + 1);
            var checkOutMinDate = checkInDate.toISOString().split('T')[0];
            $('#checkout').attr('min', checkOutMinDate);
        });
    });

    $(document).ready(function() {
        // Room prices based on room ID
        var roomPrices = {
            '201' : 400000, // Standard Room
            '202' : 400000,
            '203' : 400000, // Standard Room
            '204' : 400000,
            '205' : 400000, // Standard Room
            '206' : 400000,
            '207' : 400000, // Standard Room
            '208' : 400000,
            '209' : 400000, // Standard Room
            '210' : 400000,
            '211' : 400000, // Standard Room
            '212' : 400000,
            '213' : 400000, // Standard Room
            '214' : 400000,
            '215' : 400000,
            // Add all other room IDs in the same format
            '301' : 700000, // Elite Room
            '302' : 700000,
            '303' : 700000, // Elite Room
            '304' : 700000,
            '305' : 700000, // Elite Room
            '306' : 700000,
            '307' : 700000, // Elite Room
            '308' : 700000,
            '309' : 700000, // Elite Room
            '310' : 700000,
            // Add other room IDs for Elite rooms
            '401' : 1000000, // Deluxe Room
            '402' : 1000000,
            '403' : 1000000, // Deluxe Room
            '404' : 1000000,
            '405' : 1000000, // Deluxe Room
            '406' : 1000000,
            '407' : 1000000, // Deluxe Room
            '408' : 1000000
        };

        // Function to calculate the total price
        function calculateTotalPrice() {
            var roomId = $('#room_id').val();
            console.log('Room ID Field:', roomId); // Debug room ID

            // Cek jika room ID ada di objek roomPrices
            if (!roomPrices.hasOwnProperty(roomId)) {
                console.error('Invalid room ID: ' + roomId);
                $('#price').val('Room not available');
                return;
            }

            var pricePerNight = roomPrices[roomId];
            console.log('Price per night:', pricePerNight); // Debug price per night

            var checkInDate = new Date($('#checkin').val());
            var checkOutDate = new Date($('#checkout').val());

            // Debug check-in dan check-out dates
            console.log('Check-in Date:', checkInDate);
            console.log('Check-out Date:', checkOutDate);

            // Pastikan tanggal valid
            if (isNaN(checkInDate.getTime()) || isNaN(checkOutDate.getTime())) {
                $('#price').val('Invalid Date'); // Set an error message in the price field
                return;
            }

            // Pastikan check-out setelah check-in
            if (checkInDate >= checkOutDate) {
                $('#price').val('Invalid date range'); // Set an error for invalid date range
                return;
            }

            // Hitung jumlah malam
            var timeDiff = Math.abs(checkOutDate.getTime() - checkInDate.getTime());
            var numberOfNights = Math.ceil(timeDiff / (1000 * 3600 * 24)); // Convert time difference to days

            console.log('Number of nights:', numberOfNights); // Debug number of nights

            // Ambil jumlah kamar
            var numberOfRooms = parseInt($('#number_of_rooms').val()) || 1; // Default ke 1 jika invalid
            console.log('Number of Rooms:', numberOfRooms); // Debug number of rooms

            // Hitung total harga
            var totalPrice = pricePerNight * numberOfNights * numberOfRooms;

            // Update field harga
            $('#price').val(totalPrice.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' }));
            console.log('Total price:', totalPrice); // Debug total price
        }

        // Trigger kalkulasi saat input berubah
        $('#checkin, #checkout, #number_of_rooms').on('change keyup', function() {
            if ($('#checkin').val() && $('#checkout').val()) {
                calculateTotalPrice(); // Hanya trigger jika kedua tanggal telah diisi
            }
        });

        // Inisialisasi harga saat halaman load jika tanggal sudah diisi
        if ($('#checkin').val() && $('#checkout').val()) {
            calculateTotalPrice();
        }
    });
</script>
@endsection
