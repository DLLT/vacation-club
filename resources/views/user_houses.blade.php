<!-- This takes from main layout -->
@extends('layouts.master')

<!-- the title of the page goes here -->
@section('title', 'Home')

<!-- This is the main heading displayed on the page -->
@section('page_title', 'Welcome to the Club')

<!-- put top content here -->
@section('top_content')
@endsection
@section('bottom_content')
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
		  <input type="submit" value="Let House">
		  </form>
		  </div>
        </div>
        </div>
		@endforeach
		</div>
		
		
	@endsection