@extends('layouts.staff')

@section('title', 'Welcome to Your Room | Hotel Name')

@section('content')
<section class="maintenance-section">
        <h2 class="text-center">Maintenance Requests</h2>

        <table>
            <thead>
                <tr>
                    <th>Room Number</th>
                    <th>Details</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Staff ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>305</td>
                    <td>Air conditioning repair needed</td>
                    <td>22nd September 2024</td>
                    <td>14:00</td>
                    <td id="status305">Pending</td>
                    <td id="staff305">ST1234</td>
                    <td><button class="edit-btn" onclick="openModal('305')">Edit</button></td>
                </tr>
                <tr>
                    <td>101</td>
                    <td>Plumbing issues in the bathroom</td>
                    <td>23rd September 2024</td>
                    <td>10:00</td>
                    <td id="status101">Completed</td>
                    <td id="staff101">ST5678</td>
                    <td><button class="edit-btn" onclick="openModal('101')">Edit</button></td>
                </tr>
            </tbody>
        </table>
        <div class="contact-section">
        <form action="/">
            <div class="login-row">
                <div class="col-lg-12">
                    <button><i class="lnr lnr-arrow-left"></i></button>
                </div>
            </div>
        </form>
    </div>
    </section>

    <!-- The Modal -->
    <div id="editModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h4>Edit Maintenance Info</h4>
                <span class="close" onclick="closeModal()">&times;</span>
            </div>
            
            <form id="editForm">
                <div class="form-group">
                    <label for="modalStaffID">Staff ID:</label>
                    <input type="text" id="modalStaffID">
                </div>

                <div class="form-group">
                    <label for="modalStatus">Status:</label>
                    <select id="modalStatus">
                        <option value="Pending">Pending</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="modalDate">Completion Date:</label>
                    <input type="date" id="modalDate">
                </div>

                <div class="form-group">
                    <label for="modalTime">Completion Time:</label>
                    <input type="time" id="modalTime">
                </div>

                <button type="button" class="save-btn" onclick="saveChanges()">Save Changes</button>
            </form>
        </div>

    </div>
@endsection

@section('scripts')

<script>
        let currentRoom = '';

        // Function to open modal
        function openModal(roomNumber) {
            currentRoom = roomNumber;

            // Populate modal fields with current row data
            const staffID = document.getElementById(`staff${roomNumber}`).innerText;
            const status = document.getElementById(`status${roomNumber}`).innerText;

            document.getElementById('modalStaffID').value = staffID;
            document.getElementById('modalStatus').value = status;

            document.getElementById('editModal').style.display = 'block';
        }

        // Function to close modal
        function closeModal() {
            document.getElementById('editModal').style.display = 'none';
        }

        // Function to save changes
        function saveChanges() {
            const staffID = document.getElementById('modalStaffID').value;
            const status = document.getElementById('modalStatus').value;
            const date = document.getElementById('modalDate').value;
            const time = document.getElementById('modalTime').value;

            // Update the row with new values
            document.getElementById(`staff${currentRoom}`).innerText = staffID;
            document.getElementById(`status${currentRoom}`).innerText = status;

            // Close the modal
            closeModal();
        }
    </script>

@endsection

