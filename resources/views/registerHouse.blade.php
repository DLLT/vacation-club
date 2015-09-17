@extends('layouts.master')

@section('title', 'register House')

@section('top_content')
    <p>Register a new House here.</p>
    
@endsection
	
	@section('bottom_content')
    <h1> House Registration</h1>
	
	<form method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            City:<br>
        <input type="text" name="city">
            <br>
            <br>
            Suburb:<br>
        <input type="text" name="suburb">
            <br>
            <br>
            Distance to City:<br>
        <input type="text" name="distToCity">
            <br>
            <br>
            Available Transport:<br>
        <input type="text" name="availTrans">
            <br>
            <br>
            Number of Rooms:<br>
        <input type="text" name="noRooms">
            <br>
            <br>
            Airconditioning/Heating:<br>
        <input type="text" name="airCon">
            <br>
            <br>
            Swimming Pool: <br>
        <input type="text" name="swimming"> 
            <br>
            <br>
            Points Needed:<br>
        <input type="text" name="pointsNeeded">
            <br>
            <br>
            discounts:<br>
        <input type="text" name="discounts"> 
            <br>
            <br>
        <input type="submit" value="submit">
    </form>

@endsction