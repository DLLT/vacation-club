@extends('layouts.master')

@section('title', 'Register House')
   
@section('page_title', 'Register your House')

@section('top_content')
    <p>Register a new House below.</p>
@endsection

@section('bottom_content')
<div style="width:450px;">
    <form class="form-signin" method="post">
        <h2> House Registration Form</h2>
 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <label for="inputName" class="sr-only">City</label> 
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Name of House" autofocus>
        <br>
        <label for="inputDescription" class="sr-only">City</label> 
        <input type="text" name="description" id="inputDescription" class="form-control" placeholder="Desciption of House" >
        <br>
        <label for="inputCity" class="sr-only">City</label> 
        <input type="text" name="city" id="inputCity" class="form-control" placeholder="City" >
        <br>
        <label for="inputSuburb" class="sr-only">Suburb</label> 
        <input type="text" name="suburb" id="inputSuburb" class="form-control" placeholder="Suburb" >
        <br>
        <label for="inputDistCity" class="sr-only">Distance to City(kilometers)</label> 
        <input type="text" name="distcity" id="inputCity" class="form-control" placeholder="Distance to City: in kilometers" >
        <br>
        <label for="inputTransport" class="sr-only">Avaliable Transport</label> 
        <input type="text" name="transport" id="inputTransport" class="form-control" placeholder="Avaliable Transport" >
        <br>
        <label for="inputNumRooms" class="sr-only">Number of Bedrooms</label> 
        <input type="text" name="numrooms" id="inputNumRooms" class="form-control" placeholder="Number of Bedrooms" >
        <br>
        <label for="inputAirCon" class="sr-only">Airconditioning</label> 
        <input type="text" name="aircon" id="inputAirCon" class="form-control" placeholder="Airconditioning: yes / no" >
        <br>
        <label for="inputHeating" class="sr-only">Heating</label> 
        <input type="text" name="heating" id="inputHeating" class="form-control" placeholder="Type of heating" >
        <br>
        <label for="inputSwimmingPool" class="sr-only">Swimming Pool</label> 
        <input type="text" name="swimmingpool" id="inputSwimmingPool" class="form-control" placeholder="Swimming Pool: yes / no" >
        <br>
        <label for="inputPoints" class="sr-only">Points required: for a week</label> 
        <input type="text" name="points" id="inputPoints" class="form-control" placeholder="Points Required: for one week" >
        <br>
        <label for="inputDiscount" class="sr-only">Discount for long stay: per week </label> 
        <input type="text" name="discount" id="inputDiscount" class="form-control" placeholder="Discount for longstay: per week" >
        <br>
        <label for="inputImage" class="sr-only">Image</label> 
        <input type="text" name="image" id="inputImage" class="form-control" placeholder="Image of house" >
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    </form>
</div>
@endsection
