@extends('layout')

@section('title')
    My Events
@endsection

@section('content')
    @include('components.title', ['pageName' => 'My Events'])

    @include('event.eventgrid', ['events' => $events])
@endsection
