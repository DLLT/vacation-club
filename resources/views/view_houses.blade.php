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
		<td>{{$house->letId}}</td>
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
		  <input type="hidden" name="id" value="{{$house->letId}}">
		  <input type="submit" value="Request Occupancy">
		</form>
			
			
		
		
		
	   @endforeach
	   </div>
@endsection