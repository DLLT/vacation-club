@extends('layouts.master')

@section('title', 'Requests Details')

@section('page_title', 'Requests Details')

@section('top_content')
    <p>Request Details</p>
@endsection

@section('bottom_content')

<h1>All returned</h1>


<div class="row">
	   @foreach ($occupants as $occupant)
	   
	    <table>
		<tr>
		<td>{{$occupant->created_at}}</td>
		<td>{{$occupant->houseId}}</td>
		<td>{{$occupant->userId}}</td>

		</tr>
		</table>
		<form method="post" action="./confirm_occupancy">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <input type="hidden" name="letId" value="{{ $occupant->letId }}">
		  
		  <input type="submit" value="Confirm Occupancy">
		</form>
			
			
		
		
		
	   @endforeach
	   </div>
@endsection