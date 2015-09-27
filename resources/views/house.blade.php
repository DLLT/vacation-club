@extends('layouts.master')

@section('title', 'Homes')
   
@section('page_title', 'Our Homes')

@section('top_content')
    <p>View our wonderful range of homes or register your home.</p>

    <p><a style="color: white;" href="/house/house_register">Register a new home here</a></p>    

@endsection

@section('bottom_content')

      <div class="row">
          <div class="col-md-4">
              <div class="thumbnail">
                  <img src="/img/01.jpg" alt="Sample Image">
                  <div class="caption">
                  <h2>Summer Breeze</h2>
                  <p>Enjoy the summer breeze.</p>
                  <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
              </div>
         </div>
      </div>
      <div class="col-md-4">
          <div class="thumbnail">
              <img src="/img/15.jpg" alt="Sample Image">
              <div class="caption">
                  <h2>Laylow Lagoon</h2>
                  <p>Lay low get loose.</p>
                  <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
             </div>
         </div>
     </div>
          <div class="col-md-4">
              <div class="thumbnail">
                  <img src="/img/22.jpg" alt="Sample Image">
                 <div class="caption">
                      <h2>Oasis Heaven</h2>
                      <p>Nice play with massive pool.</p>
                      <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
                  </div>
              </div>
          </div>
     </div>
  
 @endsection
