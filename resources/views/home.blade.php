<!-- This takes from main layout -->
@extends('layouts.master')

<!-- the title of the page goes here -->
@section('title', 'Home')

<!-- This is the main heading displayed on the page -->
@section('page_title', 'Welcome to the Club')

<!-- put top content here -->
@section('top_content')
    <p>The Vacation House Exchange Club welcomes you to register for access to our club
       and enjoy the wonderful member benefits.
      
    </p> 
    {{ $name[0] }} 

    <p><a class="btn btn-primary btn-lg" href="/about" role="button">Learn more &raquo;</a></p>
@endsection


<!-- put bottom content here -->
@section('bottom_content')

<!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>House 1</h2>
          <p>Lets put description and image of house from database here!</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>House 2</h2>
          <p>Lets put description and image of house from database here!</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Lets put description and image of house from database here!</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>

@endsection



