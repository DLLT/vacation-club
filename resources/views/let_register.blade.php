@extends('layouts.master')

@section('title', 'House Details')

@section('page_title', 'House Details')

@section('top_content')
    <p>House Details</p>
@endsection

@section('bottom_content')

<div class="row">
@foreach($houses as $house)

		  <form method="post" action="./create_let">
		  
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		   <input type="hidden" name="id" value="{{$house->id}}">
		  City:<input type="text" name="city" id="inputCity"value="{{$house->city}}" readonly> <br />
		  Suburb:<input type="text" name="suburb" id="inputSuburb" value="{{$house->suburb}}" readonly><br />
		 Distance to city: <input type="text" name="distcity" id="inputCity" value="{{$house->distcity}}" readonly><br />
		  Available Transport:<input type="text" name="transport" id="inputTransport" value="{{$house->transport}}" readonly><br />
		  Number of Rooms: <input type="text" name="numrooms" id="inputNumRooms" value="{{$house->numrooms}}" readonly><br />
		  Airconditioning:<input type="text" name="aircon" id="inputAirCon" value="{{$house->aircon}}" readonly><br />
		  Heating: <input type="text" name="heating" id="inputHeating" value="{{$house->heating}}" readonly><br />
		  Swimming pool:<input type="text" name="swimmingpool" id="inputSwimmingPool" value="{{$house->swimmingpool}}" readonly><br />
		 Points: <input type="text" name="points" id="inputPoints"value="{{$house->points}}" readonly><br />
		  Discount: <input type="text" name="discount" id="inputDiscount" value="{{$house->discount}}" readonly><br />
		  Start Date: <input type="text" name="startDate"  id="inputStartDate" placeholder="dd/mm/yyyy"><br />
		  End Date: <input type="text" name="endDate"  id="inputEndDate" placeholder="dd/mm/yyyy"><br />
		  Minimal Rate<input type="text" name="minRate"  id="inputMinRate" placeholder="Minimal Rating"><br />
		  
		  <input type="submit" value="Let House">
		  </form>
		  </div>
@endforeach

@endsection