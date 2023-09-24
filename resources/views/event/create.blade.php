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
                    <h1 class="d-flex justify-content-center align-items-center">Create Event</h1>
                    <form action="event" method="POST">
                        {{-- basic information --}}
                        <div class="row">
                            <h2>Basic Information</h2>
                            <div class="col-lg-5 col-md-6 align-self-md-center">
                                {{-- <div class="image-block">
                                <img src="images/speakers/single-speaker.jpg" class="img-fluid" alt="speaker">
                            </div> --}}
                                {{-- event name --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="event-name">Event Name</label>
                                    <input type="text" id="event-name" name="event-name"
                                        class="form-control form-control-lg" placeholder="Enter your event name"
                                        value="{{ old('event-name') }}" />
                                    <div class="text-danger pl-2">
                                        {{ $errors->first('event-name') }}
                                    </div>
                                </div>

                                {{-- category --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="category">Category</label>
                                    <select class="form-select form-select-lg mb-3" name="category"
                                        aria-label="Large select example" value="{{ old('category') }}">
                                        <option selected disabled>Select your category</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="text-danger pl-2">
                                        {{ $errors->first('category') }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                {{-- date --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="date">Event Date</label>
                                    <input type="date" id="date" name="date" class="form-control form-control-lg"
                                        value="{{ old('date') }}" />
                                    <div class="text-danger pl-2">
                                        {{ $errors->first('date') }}
                                    </div>
                                </div>

                                <!-- time -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="time">Event Time</label>
                                    <input type="time" id="time" name="time" class="form-control form-control-lg"
                                        value="{{ old('time') }}" />
                                    <div class="text-danger pl-2">
                                        {{ $errors->first('time') }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- description --}}
                        <div class="row">
                            <h2>Description</h2>
                            {{-- event name --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="event-description">Event Description</label>
                                <textarea class="form-control form-control-lg" placeholder="Enter your event description" name="event-description"></textarea>
                                <div class="text-danger pl-2">
                                    {{ $errors->first('event-description') }}
                                </div>
                            </div>
                        </div>

                        {{-- ticket price --}}
                        <h2 class="d-flex justify-content-center align-items-center">Ticket Prices</h2>
                        <div class="row">
                            {{-- ticket 1 --}}
                            <div class="row">
                                <h2>Ticket 1</h2>
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="ticket-1">Ticket 1 Name</label>
                                        <input type="text" id="ticket-1" name="ticket-1"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 1 name"
                                            value="{{ old('ticket-1') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('ticket-1') }}
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-md-6 align-self-md-center">
                                    {{-- ticket 1 price --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="ticket-1-price">Ticket 1 Price</label>
                                        <input type="text" id="ticket-1-price" name="ticket-1-price"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 1 price"
                                            value="{{ old('ticket-1-price') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('ticket-1-price') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                    {{-- ticket 1 count --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="ticket-1-count">Ticket 1 Count</label>
                                        <input type="number" id="ticket-1-count" name="ticket-1-count"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 1 count"
                                            value="{{ old('ticket-1-count') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('ticket-1-count') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ticket 2 --}}
                            <div class="row">
                                <h2>Ticket 2</h2>
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="ticket-2">Ticket 2 Name</label>
                                        <input type="text" id="ticket-2" name="ticket-2"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 2 name"
                                            value="{{ old('ticket-2') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('ticket-2') }}
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-md-6 align-self-md-center">
                                    {{-- ticket 1 price --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="ticket-2-price">Ticket 2 Price</label>
                                        <input type="text" id="ticket-2-price" name="ticket-2-price"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 2 price"
                                            value="{{ old('ticket-2-price') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('ticket-2-price') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                    {{-- ticket 1 count --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="ticket-2-count">Ticket 2 Count</label>
                                        <input type="number" id="ticket-2-count" name="ticket-2-count"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 2 count"
                                            value="{{ old('ticket-2-count') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('ticket-2-count') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ticket 3 --}}
                            <div class="row">
                                <h2>Ticket 3</h2>
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="ticket-3">Ticket 3 Name</label>
                                        <input type="text" id="ticket-3" name="ticket-3"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 3 name"
                                            value="{{ old('ticket-3') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('ticket-3') }}
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-md-6 align-self-md-center">
                                    {{-- ticket 1 price --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="ticket-3-price">Ticket 3 Price</label>
                                        <input type="text" id="ticket-3-price" name="ticket-3-price"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 3 price"
                                            value="{{ old('ticket-3-price') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('ticket-3-price') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                    {{-- ticket 1 count --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="ticket-3-count">Ticket 3 Count</label>
                                        <input type="number" id="ticket-3-count" name="ticket-3-count"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 3 count"
                                            value="{{ old('ticket-3-count') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('ticket-3-count') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        {{-- submit button --}}
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-main-md btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Create Event</button>

                        </div>

                        @csrf
                    </form>
                </div>
            </div>
    </section>
@endsection
