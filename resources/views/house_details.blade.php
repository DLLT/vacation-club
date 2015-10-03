@extends('layouts.master')

@section('title', 'House Details')

@section('page_title', 'House Details')

@section('top_content')
    <p>House Details</p>
@endsection

@section('bottom_content')



<div class="row">
@foreach($houses as $house)

<table>
<tr><td><strong>City</strong></td>
<td><strong>suburb</strong></td>
<td><strong>Distance to the city</strong></td>
<td><strong>Available transport</strong></td>
<td><strong>Number of rooms</strong></td>
<td><strong>Airconditioning</strong></td>
<td><strong>Heating</strong></td>
<td><strong>Swimming pool?</strong></td>
<td><strong>Number of points needed</strong></td>
<td><strong>Discounts</strong></td><tr>
<tr>
<td>{{$house->city}}</td>
<td>{{$house->suburb}}</td>
<td>{{$house->distcity}}</td>
<td>{{$house->transport}}</td>
<td>{{$house->numrooms}}</td>
<td>{{$house->aircon}}</td>
<td>{{$house->heating}}</td>
<td>{{$house->swimmingpool}}</td>
<td>{{$house->points}}</td>
<td>{{$house->discount}}</td>
</tr>
</table>

@endforeach
	


</div>



@endsection