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
@endsection


<!-- put bottom content here -->
@section('bottom_content')




	

 
<!-- Example row of columns -->

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
          <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
        </div>
        </div>
        </div>
		@endforeach


@endsection



