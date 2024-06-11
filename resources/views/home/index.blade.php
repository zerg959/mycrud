@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>{{ Auth::user()->username }}'s Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <ul>
            <li class="lead">Username: {{ Auth::user()->username }}</li>
            <li class="lead">Name: {{ Auth::user()->name }}</li>
            <li class="lead">Email: {{ Auth::user()->email }}</li>
        </ul>
        <div>
            <a href="#" class="btn btn-warning">Edit User</a>
            <a href="#" class="btn btn-danger">Delete User</a>    
        </div>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
    <hr>
    <div>
    @include('auth.partials.copy')  
    </div>
@endsection