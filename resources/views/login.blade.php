@extends('layouts.master')

@section('title', 'Login')
@endsection

@section('page_head')
    User Login 
@endsection

@section('content')
	<form action="./login" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
	Email:<br>
	<input type="text" name="email">
	<br>
	Password:<br>
	<input type="password" name="password">
	<br>
	<input type="submit" value="submit" value="Submit">
	</form>

@endsection
