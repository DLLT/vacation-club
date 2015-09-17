@section('user_nav')
               
    @if( $user )
        <p>Logged in with email: {{ $user->email }} {{ $user->password }}</p>
        <a href="/logout">Logout</a>
    @else    
        <a href="/register">Register</a>
    <a href="/login">Login</a>
    @endif

