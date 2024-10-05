@extends('layouts.staff')

@section('title', 'Available Rooms | Hotel Name')

@section('content')

     <!-- Pantry Section Begin -->
     <section class="contact-section spad display-flex text-center">
        <div class="container">
            <div class="row">
                <!-- Filter Bar -->
                <div class="row mb-4">
                    <h1 class=col-md-12>PANTRY</h1>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Search by item name">
                    </div>
                    <div class="col-md-4">
                        <select class="form-control">
                            <option value="">Filter by category</option>
                            <option value="food">Food</option>
                            <option value="drinks">Drinks</option>
                            <option value="dessert">Dessert</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control">
                            <option value="">Filter by stock status</option>
                            <option value="in-stock">In Stock</option>
                            <option value="low-stock">Low Stock</option>
                            <option value="out-of-stock">Out of Stock</option>
                        </select>
                    </div>
                </div>

                <!-- Table of Pantry Items -->
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Item Name</th>
                            <th>Category</th>
                            <th>Stock Status</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Apple</td>
                            <td>Food</td>
                            <td><span class="status-available">In Stock</span></td>
                            <td>50</td>
                            <td>$1.00</td>
                            <td>
                                <button class="btn btn-success btn-sm">Restock</button>
                                <button class="btn btn-primary btn-sm">Add Item</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Orange Juice</td>
                            <td>Drinks</td>
                            <td><span class="status-low-stock">Low Stock</span></td>
                            <td>10</td>
                            <td>$2.50</td>
                            <td>
                                <button class="btn btn-success btn-sm">Restock</button>
                                <button class="btn btn-primary btn-sm">Add Item</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chocolate Cake</td>
                            <td>Dessert</td>
                            <td><span class="status-out-of-stock">Out of Stock</span></td>
                            <td>0</td>
                            <td>$5.00</td>
                            <td>
                                <button class="btn btn-success btn-sm">Restock</button>
                                <button class="btn btn-primary btn-sm">Add Item</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <form action="/restaurant">
                    <div class="login-row">
                        <div class="col-lg-12">
                            <button><i class="lnr lnr-arrow-left"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection