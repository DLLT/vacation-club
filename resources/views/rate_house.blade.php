@extends('layouts.master')

@section('title', 'rating Details')

@section('page_title', 'rate Details')

@section('top_content')
    <p>Rate Details</p>
@endsection

@section('bottom_content')

<div class="row">
@foreach($occupants as $occupant)

		  <form method="post" action="./create_rating">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		   <input type="hidden" name="id" value="{{$occupant->id}}">
		   
		  City:<input type="text" name="city" id="inputCity"value="{{$occupant->city}}" readonly> <br />
		  Suburb:<input type="text" name="suburb" id="inputSuburb" value="{{$occupant->suburb}}" readonly><br />
		 Distance to city: <input type="text" name="distcity" id="inputCity" value="{{$occupant->distcity}}" readonly><br />
		  Available Transport:<input type="text" name="transport" id="inputTransport" value="{{$occupant->transport}}" readonly><br />
		  Number of Rooms: <input type="text" name="numrooms" id="inputNumRooms" value="{{$occupant->numrooms}}" readonly><br />
		  Airconditioning:<input type="text" name="aircon" id="inputAirCon" value="{{$occupant->aircon}}" readonly><br />
		  Heating: <input type="text" name="heating" id="inputHeating" value="{{$occupant->heating}}" readonly><br />
		  Swimming pool:<input type="text" name="swimmingpool" id="inputSwimmingPool" value="{{$occupant->swimmingpool}}" readonly><br />
		
		  House Rating: <input type="text" name="houseRating"  id="inputHouseRating" placeholder="-10 - 10"><br />

		  
		  <input type="submit" value="Rate House">
		  </form>
		  </div>
@endforeach

@endsection