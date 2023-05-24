@extends('layouts.app')
@section('content')
    <h1>Create-restaurant</h1>
    @forelse($restaurants as $restaurant)
        <p>{{ $restaurant->restaurant_name }}</p>
    @empty
        -
    @endforelse
@endsection
