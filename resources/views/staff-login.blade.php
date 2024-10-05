@extends('layouts.staff-login')

@section('title', 'Our Services | Hotel Name')

@section('content')
 <!-- Contact Section Begin -->
 <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="loginContainer" class="contact-form">
                        <h5>Login</h5>
                        <form action="/restaurant">
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
                </div>
            </div>
        </div>
    </section>    
    <!-- Contact Section End -->

@endsection

@section('scripts')

@endsection