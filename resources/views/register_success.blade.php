@extends('layouts.master')

@section('title', 'Register Success')

@section('page_title', 'Registation Successful.')

@section('top_content')
    <p>The user has been registered successfully with the following details:</p>
            @if ( $user )
              <h3>  Name: {{ $user->email }} </h3>
            @endif                
        </li>
    </ul>


    <a href="./login">Procced to Login Page here</a>
    
@endsection

@section('bottom_content')
    
@endsection
