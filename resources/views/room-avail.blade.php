@extends('layouts.staff')

@section('title', 'Available Rooms | Hotel Name')

@section('content')
    <!-- Contact Section Begin -->
    <section class="contact-section spad display-flex text-center">
        <div class="container">
            <div class="row">
                <!-- Filter Bar -->
                <div class="row mb-4">
                    <h1 class="col-md-12">AVAILABLE ROOMS</h1>
                    <form action="{{ route('rooms.available') }}" method="GET" class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
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

                <!-- Table of Available Rooms -->
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Room Number</th>
                            <th>Room Type</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Facilities</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->room_id }}</td>
                            <td>{{ $room->room_type }}</td>
                            <td><span class="status-{{ strtolower($room->status) }}">{{ $room->status }}</span></td>
                            <td>${{ $room->price }}</td>
                            <td>{{ $room->facilities }}</td>
                            <td>
                                @if($room->status == 'Available')
                                    <button class="btn btn-success btn-book btn-sm">Book Room</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection

@section('scripts')
    <!-- You can add any JavaScript here if needed -->
@endsection