@extends('layouts.app')
@section('content')
    @forelse($restaurants as $restaurant)
        <div class="container">
            <h1> Ciao {{ Auth::user()->name }} ecco il tuo ristorante:</h1>
            <div class="card" style="width:20rem">
                @if ($restaurant->cover_image)
                    <div class="container">
                        <img src="{{ $restaurant->cover_path }}" alt="" class="rounded p-2 w-100">
                    </div>
                @else
                    <div class="container bg-card">
                        <img src="https://i.pinimg.com/originals/3c/0a/d4/3c0ad436c2dd0acb82bd529f863ea1f4.jpg" alt=""
                            class="rounded-img p-3">
                    </div>
                @endif

                <div class="card-body bg-card">
                    <h1>{{ $restaurant->restaurant_name }}</h1>
                    <p class="card-text">{{ $restaurant->description }}</p>
                    <p>{{ $restaurant->address }}</p>
                </div>
            </div>
        @empty
            -
    @endforelse
    </div>
@endsection
<style>
    img {
        max-width: 100%;
    }

    .rounded-img {
        border-radius: 20px
    }

    .bg-card {
        background-color: #F5F3F1
    }

    h1,
    p {
        color: #555;
    }
</style>
