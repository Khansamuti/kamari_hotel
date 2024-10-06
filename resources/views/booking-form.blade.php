@extends('layouts.form')

@section('title', 'Our Services | Hotel Name')

@section('content')
<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="bookingContainer" class="contact-form">
                    <h5>Booking Form</h5>
                    
                    <!-- Form action should point to your booking store route -->
                    <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf <!-- Laravel's CSRF protection -->

                        <div class="row">
                            <!-- Name Field -->
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                </div>
                            </div>

                            <!-- Email Field -->
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <!-- Phone Field -->
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input type="tel" name="phone" placeholder="Phone Number (e.g., +628136009281)" pattern="^\+\d{1,4}\d{7,15}$" value="{{ old('phone') }}" required>
                                </div>
                            </div>

                            <!-- Check-in Date Field -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="text" id="checkin" name="check_in_date" placeholder="Check-in Date" value="{{ old('check_in_date') }}" required readonly>
                                </div>
                            </div>

                            <!-- Check-out Date Field -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="text" id="checkout" name="check_out_date" placeholder="Check-out Date" value="{{ old('check_out_date') }}" required readonly>
                                </div>
                            </div>

                            <!-- Adults Field -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="number" name="adults" placeholder="Adults" value="{{ old('adults') }}" min="1" required>
                                </div>
                            </div>

                            <!-- Kids Field -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="number" name="kids" placeholder="Kids" value="{{ old('kids') }}" min="0" required>
                                </div>
                            </div>

                            <!-- Number of Rooms Field -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="number" name="number_of_rooms" placeholder="Number of Rooms" value="{{ old('number_of_rooms') }}" min="1" required>
                                </div>
                            </div>

                            <!-- Room Type Dropdown (Dynamic) -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <select name="room_id" class="form-control" required>
                                        <option value="" disabled selected>Select Room Type</option>
                                        <option value="standard_room" {{ old('room_id') == 'standard_room' ? 'selected' : '' }}>Standard Room</option>
                                        <option value="elite_room" {{ old('room_id') == 'elite_room' ? 'selected' : '' }}>Elite Room</option>
                                        <option value="deluxe_room" {{ old('room_id') == 'deluxe_room' ? 'selected' : '' }}>Deluxe Room</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <!-- <a href="/payment" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a> -->
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Book Now <i class="lnr lnr-arrow-right"></i></button>
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
