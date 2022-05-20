@extends('layouts.app')

@section('title')
{{ $car->title }}
@endsection

@section('content')
<h1>Single Car</h1>

<ul>
    <li>
        Title: {{ $car->title }}
    </li>
    <li>
        Producer: {{ $car->producer }}
    </li>
    <li>
        Number of dors: {{ $car->number_of_doors }}
    </li>
</ul>
@endsection