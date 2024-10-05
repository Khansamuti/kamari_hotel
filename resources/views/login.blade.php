@extends('layouts.login')

@section('title', 'Login | Hotel Name')

@section('content')

<!-- Contact Section Begin -->
<section class="contact-section spad">
        <div class="switcher">
            <button id="loginBtn" class="active">Login</button>
            <button id="signupBtn">Signup</button>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="loginContainer" class="contact-form">
                        <h5>Login</h5>
                        <form action="/guestmain">
                            <div class="login row">
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="text" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit">Submit <i class="lnr lnr-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="signupContainer" class="contact1-form hidden">
                        <h5>Signup</h5>
                        <form action="/guestmain">
                            <div class="signup row">
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="text" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="text" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit">Create Account <i class="lnr lnr-arrow-right"></i></button>
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
        document.getElementById('loginBtn').addEventListener('click', function() {
            document.getElementById('loginContainer').classList.remove('hidden');
            document.getElementById('signupContainer').classList.add('hidden');
            this.classList.add('active');
            document.getElementById('signupBtn').classList.remove('active');
        });

        document.getElementById('signupBtn').addEventListener('click', function() {
            document.getElementById('signupContainer').classList.remove('hidden');
            document.getElementById('loginContainer').classList.add('hidden');
            this.classList.add('active');
            document.getElementById('loginBtn').classList.remove('active');
        });
    </script>

@endsection