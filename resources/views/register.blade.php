@extends('layouts.master')

@section('title', 'Register')

@section('page_title', 'Register User')

@section('top_content')
    <p>Register a new user here.</p>
    
@endsection

@section('bottom_content')
    <div style="width: 300px"> 
        <form class="form-signin" method="post">
            <h2 class="form-signin-heading">Please register below</h2>
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
     
            <label for="inputFirstName" class="sr-only">First Name</label>
            <input type="text" name="firstname" id="inputFirstName" class="form-control" placeholder="First Name"  autofocus>
            <br> 
            <label for="inputLastName" class="sr-only">Last Name</label>
            <input type="text" name="lastname" id="inputLastName" class="form-control" placeholder="Last Name" >
            <br> 
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
            <br> 
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <br> 
            <label for="inputStreetNum" class="sr-only">Email</label>
            <input type="text" name="streetnum" id="inputStreetNum" class="form-control" placeholder="Street Number" >
            <br> 
            <label for="inputStreetName" class="sr-only">Email</label>
            <input type="text" name="streetname" id="inputStreetName" class="form-control" placeholder="Street Name" >
            <br> 
            <label for="inputSuburb" class="sr-only">Email</label>
            <input type="text" name="suburb" id="inputSuburb" class="form-control" placeholder="Suburb" >
            <br> 
            <label for="inputPostcode" class="sr-only">Email</label>
            <input type="text" name="postcode" id="inputPostcode" class="form-control" placeholder="Postcode" >
            <br>
            <label for="inputPhone" class="sr-only">Email</label>
            <input type="text" name="phone" id="inputPhone" class="form-control" placeholder="Phone" >
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
    </div>
@endsection
