@extends('layouts.master')

@section('title', 'Home')

@section('main_nav')
    <h1>Vacation Hotel Exchange Club</h1>
    <p>Navigation bar main</p>


    @if ( $user ) 
        <p>You are logged in with email:{{ $user->email }}</p>
        <a href="./logout">Logout</a>

    @else 
        <a href="./register">Register</a>    
        <a href="./login">Login</a>
    @endif 
    

@endsection

@section('content')
    <p>This is my body content.</p>
@endsection



