@extends('layouts.app')
@section('content')
    @forelse($restaurants as $restaurant)
        <h1> Ciao {{ Auth::user()->name }} ecco il tuo ristorante:</h1>
        <div class="card" style="width:25rem">
            @if ($restaurant->cover_image)
                <div class="container">
                    <img src="{{ $restaurant->cover_path }}" alt="">
                </div>
            @else
                <div class="container">
                    <img src="https://cwdaust.com.au/wpress/wp-content/uploads/2015/04/placeholder-restaurant-300x300.png"
                        alt="">
                </div>
            @endif

            <div class="card-body">
                <h1>{{ $restaurant->restaurant_name }}</h1>
                <p class="card-text">{{ $restaurant->description }}</p>
            </div>
        </div>
    @empty
        -
    @endforelse
@endsection
