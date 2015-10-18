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
	   
	    <table>
		<tr>
		<td><strong>Let Id</strong>{{$house->id}}</td>
		<td><strong>house Id</strong>{{$house->houseId}}</td>
		<td><strong>Start date</strong>{{$house->startdate}}</td>
		<td><strong>End date</strong>{{$house->enddate}}</td>
		<td><strong>Minimum rating</strong>{{$house->minrate}}</td>
		<td><strong>City</strong>{{$house->city}}</td>
		<td><strong>Suburb</strong>{{$house->suburb}}</td>
		</tr>
		</table>
		<form method="post" action="./create_occupancy">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <input type="hidden" name="id" value="{{$house->id}}">
		  <input type="submit" value="Request Occupancy">
		</form>
			
			
		
		
		
	    <h2>Let Id: {{$house->id }} </h2>
          <p>
		  Start Date: {{$house->startdate }} 
		  Suburb: {{$house->suburb}}</p>
	   @endforeach
	   </div>
@endsection
