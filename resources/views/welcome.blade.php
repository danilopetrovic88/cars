@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')

<body class="antialiased">
    <nav class="navbar navbar-expand navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/cars" class="btn btn-primary">All cars</a>
            </li>
        </ul>
    </nav>
    <h1>Welcome {{ $name }}</h1>
    <h2>I'm {{ $age }} years old</h2>

    @endsection