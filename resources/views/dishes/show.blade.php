@extends('layouts.app')
@section('content')
    <h1 class="text-center">Show</h1>

    <h1 class="text-center">{{ $dish->name }}</h1>
    <section>
        <div class="card mb-3 col-6 m-auto box-shadow ">
            @if ($dish->cover_image)
                <div class="container">
                    <img src="{{ $dish->cover_path }}" alt="">
                </div>
            @endif
            <div class="card-body">
                <div class="d-flex ">
                    <h3 class="card-title">{{ $dish->name }}</h3>
                    <h6 class="m-auto">TIPOLOGIA</h6>
                </div>
                <p class="card-text"><small>This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</small></p>
                <h4 class="card-text text-success">€14,99</h4>
                <div class="pt-2 d-flex">
                    <a class="btn btn-warning me-2 ps-3 pe-3" href="{{ route('dishes.edit', $dish) }}">EDIT</a>
                    <form action="{{ route('dishes.destroy', $dish) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="DELETE">
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

    .box-shadow:hover {
        transform: scale(1.05);
    }
</style>
