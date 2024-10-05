@extends('layouts.staff')

@section('title', "Receptionist's Page | Hotel Name")

@section('content')

<!-- Contact Section Begin -->
<section class="contact-section spad display-flex text-center">
    <div class="container">
        <div class="row">
            <!-- Filter Bar -->
            <div class="row mb-4">
                <h1 class="col-md-12 ml-5">BOOKING ROOM</h1>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Search by room number">
                </div>
            </div>
            <!-- Table of Bookings -->
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Booking ID</th>
                        <th>Guest Name</th>
                        <th>Room Number</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Data for Booking -->
                    <tr id="booking1">
                        <td>1</td>
                        <td>John Doe</td>
                        <td id="room101">101</td>
                        <td id="checkin101">2024-09-15</td>
                        <td id="checkout101">2024-09-20</td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="openModal(1)">View</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteBooking('John Doe')">Delete</button>
                        </td>
                    </tr>
                    <tr id="booking2">
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td id="room102">102</td>
                        <td id="checkin102">2024-09-18</td>
                        <td id="checkout102">2024-09-22</td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="openModal(2)">View</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteBooking('Jane Smith')">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <form action="/receptionist">
                <div class="login-row">
                    <div class="col-lg-12">
                        <button><i class="lnr lnr-arrow-left"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Modal Section -->
<div id="editModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h4>Booking Details</h4>
            <span class="close" onclick="closeModal()">&times;</span>
        </div>
        
        <form id="editForm">
            <div class="form-group">
                <label for="modalGuestName">Guest Name:</label>
                <input type="text" id="modalGuestName" readonly>
            </div>

            <div class="form-group">
                <label for="modalRoomNumber">Room Number:</label>
                <input type="text" id="modalRoomNumber" readonly>
            </div>

            <div class="form-group">
                <label for="modalCheckIn">Check-In Date:</label>
                <input type="date" id="modalCheckIn" readonly>
            </div>

            <div class="form-group">
                <label for="modalCheckOut">Check-Out Date:</label>
                <input type="date" id="modalCheckOut" readonly>
            </div>

            <button type="button" class="save-btn" onclick="closeModal()">Close</button>
        </form>
    </div>
</div>

@endsection

@section('scripts')

<script>
let currentBooking = null;

// Function to open modal
function openModal(bookingId) {
    currentBooking = bookingId;

    // Get booking details from the table
    const guestName = document.querySelector(`#booking${bookingId} td:nth-child(2)`).innerText;
    const roomNumber = document.getElementById(`room10${bookingId}`).innerText;
    const checkIn = document.getElementById(`checkin10${bookingId}`).innerText;
    const checkOut = document.getElementById(`checkout10${bookingId}`).innerText;

    // Populate modal fields with current booking data
    document.getElementById('modalGuestName').value = guestName;
    document.getElementById('modalRoomNumber').value = roomNumber;
    document.getElementById('modalCheckIn').value = checkIn;
    document.getElementById('modalCheckOut').value = checkOut;

    // Display the modal
    document.getElementById('editModal').style.display = 'block';
}

// Function to close modal
function closeModal() {
    document.getElementById('editModal').style.display = 'none';
}

// Function to delete booking (mock)
function deleteBooking(name) {
    if(confirm("Are you sure you want to delete the booking for: " + name + "?")) {
        alert("Booking deleted for: " + name);
        // Add logic here to handle the deletion of the booking in the backend
    }
}
</script>

@endsection
