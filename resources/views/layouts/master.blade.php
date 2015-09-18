<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Vacation House Exchange Club</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!--check if user logged in and display bar accordingly -->
          @if ( $user )
            <div class="navbar-header navbar-right" style="color: white">
              <h4>Logged in as: {{ $user->email }}</h4>
            </div>
          @else
            <form class="navbar-form navbar-right" action="/register">
              <button action="/register" type="submit" class="btn btn-success">Register</button>
            </form>
   
            <form class="navbar-form navbar-right" action="/login" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control" name="email">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control" name="password">
              </div>
              <button type="submit" value="submit" class="btn btn-success">Sign in</button>
            </form>
          @endif
          </div><!--/.navbar-collapse -->
        </div>
        
        <div class="nav nav-justified"> 
            <ul class="nav nav-justified">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/view">View Houses</a></li>
                <li><a href="/register_house">Register Houses</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul> 
        </div>
    </nav>

    <!-- Content -->
    <div class="jumbotron">
      <div class="container">
        <h1>
            <!-- Page title -->
            @yield('page_title')
        </h1>
        <!-- Top Content -->
        @section('top_content')
        
        @show
      </div>
    </div>

    <div class="container">
    
      @section('bottom_content')
      
      @show

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
 </body>
</html>

