@extends('layouts.master')

@section('title', 'Register Success')

@section('page_title', 'Registation Successful.')

@section('top_content')
    <p>The user has been registered successfully.</p>
            @if ( $user )
              <h3>  Name: {{ $user->email }} </h3>
            @endif                
        </li>
    </ul>


    
@endsection

@section('bottom_content')
    
@endsection
