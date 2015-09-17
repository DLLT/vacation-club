@extends('layouts.master')

@section('title', 'Register')
@endsection

@section('page_head')
    New User Registraion
@endsection

@section('content')
    
    <form method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            First Name:<br>
        <input type="text" name="firstname">
            <br>
            <br>
            Last Name:<br>
        <input type="text" name="lastname">
            <br>
            <br>
            Email:<br>
        <input type="text" name="email">
            <br>
            <br>
            Password:<br>
        <input type="password" name="password">
            <br>
            <br>
            Street Number:<br>
        <input type="text" name="streetnum">
            <br>
            <br>
            Street Name:<br>
        <input type="text" name="streetname">
            <br>
            <br>
            Suburb: <br>
        <input type="text" name="suburb"> 
            <br>
            <br>
            Postcode:<br>
        <input type="text" name="postcode">
            <br>
            <br>
            Phone:<br>
        <input type="text" name="phone"> 
            <br>
            <br>
        <input type="submit" value="submit">
    </form>

@endsection
