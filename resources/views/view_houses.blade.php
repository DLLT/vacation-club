@extends('layouts.master')

@section('title', 'House Details')

@section('page_title', 'House Details')

@section('top_content')
    <p>House Details</p>
@endsection

@section('bottom_content')

<h1>All returned</h1>


<div class="row">
	   @foreach ($houses as $house)
	   
<<<<<<< HEAD
	    <table>
		<tr>
		<td>{{$house->id}}</td>
=======
<<<<<<< HEAD
	    <table>
		<tr>
		<td>{{$house->letId}}</td>
>>>>>>> origin/master
		<td>{{$house->houseId}}</td>
		<td>{{$house->startdate}}</td>
		<td>{{$house->enddate}}</td>
		<td>{{$house->minrate}}</td>
		<td>{{$house->city}}</td>
		<td>{{$house->suburb}}</td>
		</tr>
		</table>
		<form method="post" action="./create_occupancy">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<<<<<<< HEAD
		  <input type="hidden" name="id" value="{{$house->id}}">
=======
		  <input type="hidden" name="id" value="{{$house->letId}}">
>>>>>>> origin/master
		  <input type="submit" value="Request Occupancy">
		</form>
			
			
		
		
		
<<<<<<< HEAD
=======
=======
	    <h2>{{$house->id }} </h2>
          <p>
		  Available Transport: {{$house->startDate }} 
		  Number of rooms: {{$house->suburb}}</p>
>>>>>>> origin/master
>>>>>>> origin/master
	   @endforeach
	   </div>
@endsection