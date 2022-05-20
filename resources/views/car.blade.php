@extends('layouts.app')

@section('title')
{{ $car->title }}
@endsection

@section('content')
<h1>Single Car</h1>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $car->title }}</h3>
                </div>
                <div class="car-body">
                    <h3>{{ $car->producer }}</h3>
                    <p class="p-2">
                        Dors: {{ $car->number_of_doors }}
                    </p>
                </div>
                <div class="card-footer">
                    <a href="/cars" class="btn btn-primary btn-sm">back to cars</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection