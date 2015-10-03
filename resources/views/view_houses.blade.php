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
	   
	    <h2>{{$house->id }} </h2>
          <p>
		  Available Transport: {{$house->startDate }} 
		  Number of rooms: {{$house->suburb}}</p>
	   @endforeach
	   </div>
@endsection