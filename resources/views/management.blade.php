@extends('layouts.staff')

@section('title', "Income Management | Hotel Name")

@section('content')

<!-- Contact Section Begin -->
<section class="contact-section spad display-flex text-center mr-5">
    <div class="container">
        <div class="row">
            <!-- Filter Bar -->
            <div class="row mb-4">
                <h1 class="col-md-12 ml-5">INCOME MANAGEMENT</h1>
            </div>
            <!-- Table of Income -->
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Booking ID</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Total Income</th>
                    </tr>
                </thead>
                <tbody id="incomeTable">
                    <!-- Example Data -->
                    <tr id="booking1">
                        <td>1</td>
                        <td class="amount" id="amount1">Rp 1.500.000</td>
                        <td>2024-09-15</td>
                        <td id="totalIncome1">Rp 1.500.000</td>
                    </tr>
                    <tr id="booking2">
                        <td>2</td>
                        <td class="amount" id="amount2">Rp 5.000.000</td>
                        <td>2024-09-16</td>
                        <td id="totalIncome2">Rp 6.500.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection

@section('scripts')

@endsection