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

    <p><a class="btn btn-info btn-lg" href="/about" role="button">Learn more &raquo;</a></p>
@endsection


<!-- put bottom content here -->
@section('bottom_content')

<!-- Example row of columns -->
       <div class="row">
        <div class="col-md-4">
        <div class="thumbnail">
        <img src="/img/01.jpg" alt="Sample Image">
        <div class="caption">
          <h2>House 1</h2>
          <p>Lets put description and image of house from database here!</p>
          <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
        </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="thumbnail">
        <img src="/img/15.jpg" alt="Sample Image">
        <div class="caption">
          <h2>House 2</h2>
          <p>Lets put description and image of house from database here!</p>
          <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
       </div>
       </div>
       </div>
        <div class="col-md-4">
        <div class="thumbnail">
        <img src="/img/22.jpg" alt="Sample Image">
        <div class="caption">
          <h2>House 3</h2>
          <p>Lets put description and image of house from database here!</p>
          <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
        </div>
        </div>
        </div>
        </div>

@endsection



