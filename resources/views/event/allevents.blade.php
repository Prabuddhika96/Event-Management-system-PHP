@extends('layout')

@section('title')
    All Events
@endsection

@section('content')
    @include('components.title', ['pageName' => 'All Events'])

    @include('home.eventgrid')
@endsection
