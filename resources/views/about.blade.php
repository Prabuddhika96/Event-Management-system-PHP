@extends('layout')

@section('title')
    About Us
@endsection

@section('content')
    @include('components.title', ['pageName' => 'About'])
    <h1>ABOUT US</h1>

    <p>this is about us page</p>
@endsection
