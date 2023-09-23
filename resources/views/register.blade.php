@extends('layout')

@section('title')
    Register
@endsection

@section('content')
    <section class="vh-100">
        <div class="container-fluid h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <h1>Register</h1>
                    <form action="" method="">
                        {{-- name --}}
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input type="name" id="name" class="form-control form-control-lg"
                                placeholder="Enter your name" />
                        </div>

                        {{-- district --}}
                        <div class="form-outline mb-4">
                            <label class="form-label" for="district">District</label>
                            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                                <option selected disabled>Select your district</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        {{-- mobile --}}
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Mobile</label>
                            <input type="mobile" id="mobile" class="form-control form-control-lg"
                                placeholder="Enter your mobile number" />
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg"
                                placeholder="Enter password" />
                        </div>

                        <!-- Confirm password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="confirm_password">Confirm Password</label>
                            <input type="confirm_password" id="confirm_password" class="form-control form-control-lg"
                                placeholder="Enter password again" />
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn btn-warning btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" id="custom-button">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="/login"
                                    class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
