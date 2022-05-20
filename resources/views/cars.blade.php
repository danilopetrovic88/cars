@extends('layouts.app')

@section('title')
all cars
@endsection

@section('content')
<h1>All cars</h1>


<div class="container">
    <div class="row">
        <div class="col-8">
            @foreach($cars as $car)
            <div class="card">
                <div class="card-header">
                    <h3>{{ $car->title }}</h3>
                </div>
                <div class="card-footer">
                    <a href="/cars/{{ $car->id }}" class="btn btn-primary btn-sm">Show car</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<a href="/" class="btn btn-primary m-4">Back to home page</a>
@endsection