@extends('layouts.master')

@section('title', 'Requests Details')

@section('page_title', 'Requests Details')

@section('top_content')
    <p>Request Details</p>
@endsection

@section('bottom_content')

<h1>All returned</h1>


<div class="row">
<h2>House Ratings</h2>
	   @foreach ($occupants as $occupant)
	   
	   
	   <div class="col-md-4">
        <div class="thumbnail">
        
        <div class="caption">
          <h2>{{$occupant->city }} {{$occupant->suburb}}</h2>
          <p>Distance to the city:  {{$occupant->distcity }}
		  Available Transport: {{$occupant->transport}} 
		  Number of rooms: {{$occupant->numrooms}}</p>
		  <form method="post" action="./rate_house">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <input type="hidden" name="id" value="{{$occupant->id}}">
		  <input type="hidden" name="houseId" value="{{$occupant->houseId}}">
		  <input type="submit" value="Rate House">
		  </form>
		  </div>
        </div>
        </div>
		
	
		@endforeach
		
<h2>User Ratings</h2>
		 @foreach ($renters as $renter)
	   
	   
	   <div class="col-md-4">
        <div class="thumbnail">
        
        <div class="caption">
          <h2>{{$renter->firstname }} {{$renter->lastname}}</h2>
          <p>email address: {{$renter->email }} 
		   occupant id : {{$renter->id }}
		   user id: {{$renter->userId}}</p>
		   
		   <form method="post" action="./rate_user">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <input type="hidden" name="id" value="{{$renter->id}}">
		  <input type="hidden" name="userId" value="{{$renter->userId}}">
		  <input type="submit" value="Rate user">
		  </form>
		  </div>
        </div>
        </div>
		
	    
			
			
		
		
		
	   @endforeach
	   </div>
	   

@endsection
