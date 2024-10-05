@extends('layouts.staff')

@section('title', 'Available Rooms | Hotel Name')

@section('content')
    <section class="contact-section spad display-flex text-center">
        <div class="container">
            <div class="row">
                <h1 class=col-md-12>INCOMING ORDERS</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Room Number</th>
                            <th>Food Items</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Staff ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td>5</td>
                            <td>Chocolate Soufflé</td>
                            <td>2</td>
                            <td id="status101">Pending</td>
                            <td id="staff101">ST1234</td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>3</td>
                            <td>Crème Brûlée</td>
                            <td>1</td>
                            <td id="status102">In Progress</td>
                            <td id="staff102">ST5678</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="contact-section">
        <form action="/restaurant">
            <div class="login-row">
                <div class="col-lg-12">
                    <button><i class="lnr lnr-arrow-left"></i></button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        let currentOrder = '';

        // Function to open modal
        function openModal(orderNumber) {
            currentOrder = orderNumber;

            // Populate modal fields with current row data
            const staffID = document.getElementById(`staff${orderNumber}`).innerText;
            const status = document.getElementById(`status${orderNumber}`).innerText;

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

            // Update the row with new values
            document.getElementById(`staff${currentOrder}`).innerText = staffID;
            document.getElementById(`status${currentOrder}`).innerText = status;

            // Close the modal
            closeModal();
        }
    </script>
@endsection
