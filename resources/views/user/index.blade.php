@extends('layouts.app')
@section('content')
     <h1 style ="width : 100%, background-color : red;" >MY ACCOUNT</h1>
    
    <button class="nav-button" style="font-size: 12px; padding : 20px;" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
    LOGOUT
    </button>
    <form method="POST" action="{{route('logout')}}" id="logout-form" style="display: none;">
        @csrf
    </form>
@endsection