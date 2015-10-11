<!-- This takes from main layout -->
@extends('layouts.master')

<!-- the title of the page goes here -->
@section('title', 'Home')

<!-- This is the main heading displayed on the page -->
@section('page_title', 'Welcome to the Club')

<!-- put top content here -->
@section('top_content')
    <p>The Vacation House Exchange Club welcomes you to register for access to our club
       and enjoy the wonderful member benefits.
      
    </p> 

    <p><a class="btn btn-info btn-lg" href="./about" role="button">Learn more &raquo;</a></p>
    
    @if($user)

    <p><a class="btn btn-info btn-lg" href="./user_houses" role="button">Your Houses &raquo;</a></p>
    
	
	
	<p><a class="btn btn-info btn-lg" href="./ratings" role="button">Ratings &raquo;</a></p>
    
    
    @endif
    
@endsection


<!-- put bottom content here -->
@section('bottom_content')




	

 
<!-- Example row of columns 


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
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <input type="hidden" name="id" value="{{$house->id}}">
		  <input type="submit" value="View Details">
		  </form>
		 <!-- <a class="btn btn-info" href="./house/house_details" role="button">View details &raquo;</a>-->
		 
       <!-- </div>
        </div>
        </div>
		@endforeach
		</div>-->



@endsection
