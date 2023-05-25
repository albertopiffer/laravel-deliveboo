@extends('layouts.app')
@section('content')
    <h1>IL TUO RISTORANTE :</h1>
    @forelse($restaurants as $restaurant)
        <h1>{{ $restaurant->restaurant_name }}</h1>

        <h2>{{ $restaurant->address }}</h2>

        <p>{{ $restaurant->description }}</p>

    @empty
        -
    @endforelse
@endsection
