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
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 
    <nav class="navbar transparent navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
              <span class="icon-bar"><a href="/logout">Log-out</a></span>  
            </div>
          @else
            <!-- Register Button -->
            <form class="navbar-form navbar-right" action="./register">
              <button action="register" type="submit" class="btn btn-info">Register new user</button>
            </form>
            
            <!-- Sign in stuff -->
            <form class="navbar-form navbar-right" action="/login" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control" name="email">
              </div>

              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control" name="password">
              </div>
            
              <button type="submit" value="submit" class="btn btn-info">Sign in</button>
            </form>
          @endif
          </div><!--/.navbar-collapse -->
        </div>

        <div id="navbar" class="collapse navbar-collapse"> 
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/house">Our Homes</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul> 
        </div>
     </nav>
    <!-- Content -->
    <div class="container"> 
    <div class="jumbotron myBackground">
    <h1 class="whitney">

    <div class="container" style="padding-top: 50px;">

        <h1>
            <!-- Page title -->
            @yield('page_title')
        </h1>

        <!-- Top Content -->
        @section('top_content')
        
        @show
    </div>

    </h1>
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
