@extends('layouts.master')

@section('title', 'Homes')
   
@section('page_title', 'Our Homes')

@section('top_content')
    <p>View our wonderful range of homes or register your home.</p>

    <p><a style="color: black;" href="./house/house_register">Register a new home here</a></p>    

@endsection

@section('bottom_content')

@if($user)

	<div class="row">
	 <form method="post" action="./search_houses">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		  Start Date: <input type="text" name="startDate" />
		  End Date: <input type="text" name="endDate" />
		  <input type="submit" value="View Details"/>
		  </form>
		      </div>

@else

<div class="row">
	   @foreach ($houses as $house)
	   
        <div class="col-md-4">
        <div class="thumbnail">
        <img src="{{$house->image}}" alt="Sample Image">
        <div class="caption">
          <h2>{{$house->city }} {{$house->suburb}}</h2>
          <p>Distance to the city:  {{$house->distcity }}
		  Available Transport: {{$house->transport}} 
		  Number of rooms: {{$house->numrooms}}</p>
		  
		  
          <form method="post">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		  <input type="hidden" name="id" value="{{$house->id}}"/>
		  <input type="submit" value="View Details"/>
		  </form>
		      </div>
        </div>
        </div>
		@endforeach
		</div>

	@endif	  
     
  
 @endsection
