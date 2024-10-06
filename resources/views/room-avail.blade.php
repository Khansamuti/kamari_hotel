@extends('layouts.calendar')

@section('title', 'Available Rooms | Hotel Name')

@section('content')
    <!-- Contact Section Begin -->
    <section class="contact-section spad display-flex text-center">
        <div class="container">
            <div class="switcher mb-4">
                <button id="tableViewBtn" class="active">Day</button>
                <button id="calendarViewBtn">Month</button>
            </div>

            <div class="row">
                <!-- Table View Container -->
                <div id="tableContainer" class="table-view">
                    <div class="row mb-4">
                        <h1 class="col-md-12">AVAILABLE ROOMS</h1>
                        <form action="{{ route('rooms.availability') }}" method="GET" class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="date" name="date" class="form-control" value="{{ request('date', now()->format('Y-m-d')) }}">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                                <div class="filter col-md-3">
                                    <select name="room_type" class="form-control">
                                        <option value="">Filter by room type</option>
                                        <option value="single" {{ request('room_type') == 'standard' ? 'selected' : '' }}>Standard</option>
                                        <option value="double" {{ request('room_type') == 'elite' ? 'selected' : '' }}>Elite</option>
                                        <option value="suite" {{ request('room_type') == 'deluxe' ? 'selected' : '' }}>Deluxe</option>
                                    </select>
                                </div>
                                <div class="filter col-md-3">
                                    <select name="status" class="form-control">
                                        <option value="">Filter by status</option>
                                        <option value="available" {{ request('status') == 'available' ? 'selected' : '' }}>Available</option>
                                        <option value="booked" {{ request('status') == 'booked' ? 'selected' : '' }}>Booked</option>
                                        <option value="maintenance" {{ request('status') == 'maintenance' ? 'selected' : '' }}>Under Maintenance</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Room Number</th>
                                <th>Room Type</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Facilities</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                            <tr>
                                <td>{{ $room->room_id }}</td>
                                <td>{{ $room->room_type }}</td>
                                <td><span class="status-{{ strtolower($room->status) }}">{{ $room->status }}</span></td>
                                <td>{{ $room->price }}</td>
                                <td>{{ $room->facilities }}</td>
                                <td>
                                    @if(strtolower($room->status) == 'available')
                                        <a href="{{ route('book.room', ['room_id' => $room->room_id]) }}" class="btn btn-success btn-sm">Book Now</a>
                                    @else
                                        <button class="btn btn-secondary btn-sm" disabled>Unavailable</button>
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Calendar View Container -->
                <div id="calendarContainer" class="calendar-view">
                    <div class="row mb-4">
                        <h1 class="col-md-12">AVAILABLE ROOMS</h1>
                        <form action="{{ route('rooms.availability') }}" method="GET" class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" name="search" class="form-control" placeholder="Search by room number or type" value="{{ request('search') }}">
                                </div>
                                <div class="col-md-3">
                                    <select name="room_type" class="form-control">
                                        <option value="">Filter by room type</option>
                                        <option value="single" {{ request('room_type') == 'single' ? 'selected' : '' }}>Single</option>
                                        <option value="double" {{ request('room_type') == 'double' ? 'selected' : '' }}>Double</option>
                                        <option value="suite" {{ request('room_type') == 'suite' ? 'selected' : '' }}>Suite</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="status" class="form-control">
                                        <option value="">Filter by status</option>
                                        <option value="available" {{ request('status') == 'available' ? 'selected' : '' }}>Available</option>
                                        <option value="booked" {{ request('status') == 'booked' ? 'selected' : '' }}>Booked</option>
                                        <option value="maintenance" {{ request('status') == 'maintenance' ? 'selected' : '' }}>Under Maintenance</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id='calendar'></div>

                    <!-- Modal Section for Room Details -->
                    <div id="roomModal" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Room Availability for <span id="selectedDate"></span></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Standard Room: <span id="standardRoomCount"></span> rooms left</p>
                                    <p>Elite Room: <span id="eliteRoomCount"></span> rooms left</p>
                                    <p>Deluxe Room: <span id="deluxeRoomCount"></span> rooms left</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection

@section('scripts')
<script>
    // Switcher functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tableViewBtn = document.getElementById('tableViewBtn');
        const calendarViewBtn = document.getElementById('calendarViewBtn');
        const tableContainer = document.getElementById('tableContainer');
        const calendarContainer = document.getElementById('calendarContainer');

        // Button click events for switching views
        tableViewBtn.addEventListener('click', function() {
            tableContainer.style.display = 'block';
            calendarContainer.style.display = 'none';
            this.classList.add('active');
            calendarViewBtn.classList.remove('active');
        });

        calendarViewBtn.addEventListener('click', function() {
            tableContainer.style.display = 'none';
            calendarContainer.style.display = 'block';
            this.classList.add('active');
            tableViewBtn.classList.remove('active');
        });

        // Initialize FullCalendar
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: '{{ route("rooms.availability") }}',
            dateClick: function(info) {
                var selectedDate = info.dateStr;
                console.log('Date clicked:', selectedDate);  // Check if this logs correctly
                
                // Logic to show the modal
                document.getElementById('selectedDate').textContent = selectedDate;
                $('#roomModal').modal('show');  // Ensure jQuery and Bootstrap JS are loaded
            }
        });
    calendar.render(); // Render the calendar
    });

</script>
@endsection
