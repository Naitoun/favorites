@extends('layouts.app')
@section('content')
    <h1>Welcome to favorites</h1>
    <h3>Just login or register to get started!</h3>
    <p>A website where you can store and share your favorites links!</p>
    <a href="{{ route('login') }}" class="btn btn-outline-dark">Login</a>
    <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
@endsection
