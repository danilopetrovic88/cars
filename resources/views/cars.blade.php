@extends('layouts.app')

@section('title')
all cars
@endsection

@section('content')
<h1>All cars</h1>

<div>
    @foreach($cars as $car)
    <h3>{{ $car->title }}</h3>
    <a href="/cars/{{ $car->id }}" class="btn btn-primary">Show car</a>
    @endforeach
</div>
@endsection