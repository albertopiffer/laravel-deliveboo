@extends('layouts.app')
@section('content')
    <section class="m-3">
        <div class="card m-3 col-6 m-auto box-shadow  @if ($dish->visible === 0) opacity-50 @endif"
            style="width: 24rem;">
            <div class="container">
                <img src="{{ $dish->cover_path }}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">

                <h3 class="card-title">{{ $dish->name }}</h3>
                <p class="m-auto badge rounded-pill text-bg-primary">{{ $dish->tipology }}</p>

                <p class="card-text">{{ $dish->visible ? 'Disponibile' : 'Non disponibile' }}</p>
                <h4 class="card-text text-success">€ {{ $dish->price }}</h4>
                <p class="card-text">{{ $dish->description }}</p>
                <div class=" d-flex align-items-center gap-3 p-3">
                    <a href="{{ route('dishes.edit', $dish) }}" class="btn btn-primary">
                        <i class="fas fa-pen"></i>
                    </a>
                    <form action="{{ route('dishes.destroy', $dish) }}" method="POST" class="mb-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .box-shadow {
        transition: transform .2s;
        box-shadow: 0px 0px 14px 5px rgba(0, 0, 0, 0.44);
    }
</style>
