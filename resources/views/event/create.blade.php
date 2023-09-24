@extends('layout')

@section('title')
    Contact Us
@endsection

@section('content')
    @include('components.title', ['pageName' => 'Create Event'])

    <section class="section single-speaker">

        <div class="container">
            <div class="block">
                <div class="row">
                    <div class="col-lg-5 col-md-6 align-self-md-center">
                        <div class="image-block">
                            <img src="images/speakers/single-speaker.jpg" class="img-fluid" alt="speaker">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 align-self-center">
                        <div class="content-block">
                            <div class="name">
                                <h3>Jonathan Franco</h3>
                            </div>
                            <div class="profession">
                                <p>Web Developer</p>
                            </div>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt
                                    ut labore dolore magna aliqua enim ad minim veniam quis nostrud.laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse.
                                    <br>
                                </p>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    <br>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
                                </p>
                            </div>
                            <div class="social-profiles">
                                <h5>Social Profiles</h5>
                                <ul class="list-inline social-list">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- pricing Section -->

    <section class="section pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Get <span class="alternate">ticket</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor incididunt ut labore
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Item -->
                    <div class="pricing-item">
                        <div class="pricing-heading">
                            <!-- Title -->
                            <div class="title">
                                <h6>Starter</h6>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <h2>39.00<span>$</span></h2>
                                <p>/Person</p>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <!-- Feature List -->
                            <ul class="feature-list m-0 p-0">
                                <li>
                                    <p><span class="fa fa-check-circle available"></span>1 Comfortable Seats</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-check-circle available"></span>Free Lunch and Coffee</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-times-circle unavailable"></span>Certificate</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-times-circle unavailable"></span>Easy Access</p>
                                </li>
                            </ul>
                        </div>
                        <div class="pricing-footer text-center">
                            <a href="#" class="btn btn-transparent-md">Buy a ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Item -->
                    <div class="pricing-item featured">
                        <div class="pricing-heading">
                            <!-- Title -->
                            <div class="title">
                                <h6>Standard</h6>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <h2>49.00<span>$</span></h2>
                                <p>/Person</p>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <!-- Feature List -->
                            <ul class="feature-list m-0 p-0">
                                <li>
                                    <p><span class="fa fa-check-circle available"></span>1 Comfortable Seats</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-check-circle available"></span>Free Lunch and Coffee</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-check-circle available"></span>Certificate</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-times-circle unavailable"></span>Easy Access</p>
                                </li>
                            </ul>
                        </div>
                        <div class="pricing-footer text-center">
                            <a href="#" class="btn btn-main-md">Buy a ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-auto">
                    <!-- Pricing Item -->
                    <div class="pricing-item">
                        <div class="pricing-heading">
                            <!-- Title -->
                            <div class="title">
                                <h6>Platinum</h6>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <h2>99.00<span>$</span></h2>
                                <p>/Person</p>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <!-- Feature List -->
                            <ul class="feature-list m-0 p-0">
                                <li>
                                    <p><span class="fa fa-check-circle available"></span>1 Comfortable Seats</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-check-circle available"></span>Free Lunch and Coffee</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-check-circle available"></span>Certificate</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-check-circle available"></span>Easy Access</p>
                                </li>
                            </ul>
                        </div>
                        <div class="pricing-footer text-center">
                            <a href="#" class="btn btn-transparent-md">Buy a ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
