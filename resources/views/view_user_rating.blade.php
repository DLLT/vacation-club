	@extends('layouts.master')

@section('title', 'Requests Details')

@section('page_title', 'Requests Details')

@section('top_content')
    <p>Request Details</p>
@endsection

@section('bottom_content')

<h1>All returned</h1>

   <div class="row">
<h2>User Ratings</h2>
	   @foreach ($renters as $renter)
	   
	   
	   <div class="col-md-4">
        <div class="thumbnail">
        
        <div class="caption">
          <h2> {{$renter->id}} {{$renter->userId}} {{$renter->email }} {{$renter->firstname}}</h2>
          <p>Distance to the city:  {{$renter->lastname }}
		  </p>
		  <form method="post" action="./rate_user">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <input type="hidden" name="id" value="{{$renter->id}}">
		  <input type="hidden" name="userId" value="{{$renter->userId}}">
		  <input type="submit" value="Rate House">
		  </form>
		  </div>
        </div>
        </div>
		
	    
			
			
		
		
		
	   @endforeach
	   </div>
	   @endsection