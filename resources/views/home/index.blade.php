@extends('layouts.app-master')

@section('content')
        <h1>Homepage</h1>
        @guest
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
        @foreach($users as $user)
        <p>The list of Users:</p>
                        {{ $user->username }}   
                        @auth   
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning">To user page</a>
                        @endauth              
        @endforeach
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
            <a href="{{ route('users.edit', Auth::user()->id) }}" class="btn btn-warning">Edit My profile</a>
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', Auth::user()->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete My Profile', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}  
        </div>
        @endauth


    </div>
    <hr>
    <div>
    @include('auth.partials.copy')  
    </div>
@endsection