@extends('layouts.master')

@section('title', 'rating Details')

@section('page_title', 'rate Details')

@section('top_content')
    <p>Rate Details</p>
@endsection

@section('bottom_content')

<div class="row">
@foreach($occupants as $occupant)

		  <form method="post" action="./create_user_rating">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		   <input type="hidden" name="id" value="{{$occupant->id}}">
		   
		   <input type="hidden" name="userId" value="{{$occupant->userId}}">
		   
		  City:<input type="text" name="email" id="inputEmail"value="{{$occupant->email}}" readonly> <br />
		  Suburb:<input type="text" name="firstname" id="inputfirstname" value="{{$occupant->firstname}}" readonly><br />
		 Distance to city: <input type="text" name="lastname" id="inputLastname" value="{{$occupant->lastname}}" readonly><br />
		  
		
		  House Rating: <input type="text" name="houseRating"  id="inputHouseRating" placeholder="-10 - 10"><br />

		  
		  <input type="submit" value="Rate House">
		  </form>
		  </div>
@endforeach

@endsection