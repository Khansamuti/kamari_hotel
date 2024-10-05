@extends('layouts.form')

@section('title', 'Our Services | Hotel Name')

@section('content')

    <!-- Food Ordering Section Begin -->
    <section class="welcome-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    <h1>Food Ordering</h1>
                    <p class="lead">Enjoy our delicious cuisine!</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="food-category" data-category="food">
                            <i class="fa fa-utensils"></i>
                        </div>
                        <div class="food-category" data-category="drinks">
                            <i class="fa fa-glass-martini"></i>
                        </div>
                        <div class="food-category" data-category="desserts">
                            <i class="fa fa-ice-cream"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">Featured Item</h2>
                            <div class="d-flex">
                                <img src="img\gourmetburger.webp" alt="Featured item" class="img-fluid rounded mr-3" style="width: 150px; height: 150px; object-fit: cover;">
                                <div>
                                    <h3>Gourmet Burger</h3>
                                    <p>Prime beef patty with truffle aioli and aged cheddar</p>
                                    <p class="text-primary h4">Rp 120.000</p>
                                    <button class="btn btn-primary">Add to Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menuItems" class="row">
                        <!-- Menu items will be dynamically added here -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Your Order</h2>
                            <div id="orderSummary">
                                <!-- Order items will be dynamically added here -->
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <strong>Total</strong>
                                <strong id="totalPrice">Rp 0</strong>
                            </div>
                            <button class="btn btn-primary btn-block mt-3">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Food Ordering Section End -->

@endsection

@section('scripts')
    
    <script>
        const menuData = {
            food: [
                { id: 1, name: 'Filet Mignon', price: 150000, description: 'Prime cut with red wine reduction' },
                { id: 2, name: 'Lobster Thermidor', price: 220000, description: 'Succulent lobster in creamy sauce' },
                { id: 3, name: 'Truffle Risotto', price: 85000, description: 'Arborio rice with black truffle' },
                { id: 4, name: 'Wagyu Beef Carpaccio', price: 240000, description: 'Thinly sliced A5 Wagyu beef' },
            ],
            drinks: [
                { id: 5, name: 'Vintage Champagne', price: 20000, description: 'Dom Pérignon, 2010' },
                { id: 6, name: 'Aged Whisky', price: 180000, description: '25-year-old Macallan' },
            ],
            desserts: [
                { id: 7, name: 'Crème Brûlée', price: 70000, description: 'Classic French custard dessert' },
                { id: 8, name: 'Chocolate Soufflé', price: 55000, description: 'Light and airy chocolate delight' },
            ]
        };

        let currentCategory = 'food';
        let order = [];

        function displayMenu(category) {
            const menuContainer = document.getElementById('menuItems');
            menuContainer.innerHTML = '';
            menuData[category].forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.className = 'col-md-6 mb-4';
                itemElement.innerHTML = `
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">${item.name}</h5>
                            <p class="card-text">${item.description}</p>
                            <p class="text-primary">Rp${item.price}</p>
                            <button class="btn btn-primary btn-sm add-to-order" data-id="${item.id}">Add to Order</button>
                        </div>
                    </div>
                `;
                menuContainer.appendChild(itemElement);
            });
        }

        function updateOrderSummary() {
            const orderSummary = document.getElementById('orderSummary');
            orderSummary.innerHTML = '';
            let total = 0;
            order.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.className = 'd-flex justify-content-between align-items-center mb-2';
                itemElement.innerHTML = `
                    <div>
                        <p class="mb-0">${item.name}</p>
                        <button class="btn btn-sm btn-link text-danger p-0 remove-item" data-id="${item.id}">Remove</button>
                    </div>
                    <p class="mb-0">Rp${item.price}</p>
                `;
                orderSummary.appendChild(itemElement);
                total += item.price;
            });
            document.getElementById('totalPrice').textContent = `Rp${total}`;
        }

        document.addEventListener('DOMContentLoaded', function () {
            displayMenu('food');

            document.querySelectorAll('.food-category').forEach((button) => {
                button.addEventListener('click', function () {
                    currentCategory = this.getAttribute('data-category');
                    displayMenu(currentCategory);
                });
            });

            document.getElementById('menuItems').addEventListener('click', function (e) {
                if (e.target.classList.contains('add-to-order')) {
                    const itemId = parseInt(e.target.getAttribute('data-id'));
                    const item = menuData[currentCategory].find(i => i.id === itemId);
                order.push(item);
                updateOrderSummary();
            }
        });

        document.getElementById('orderSummary').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-item')) {
                const itemId = parseInt(e.target.getAttribute('data-id'));
                order = order.filter(item => item.id !== itemId);
                updateOrderSummary();
            }
        });
    });
    </script>
@endsection