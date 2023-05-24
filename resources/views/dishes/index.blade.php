@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @forelse ($dishes as $dish)
                <div class="col-lg-3 col-sm-6 col-12 mb-5">
                    <div class="card bg-white border border-danger rounded border-3 d-flex">
                        @if ($dish->cover_image)
                            <div class="container">
                                <img src="{{ $dish->cover_path }}" alt=""
                                    class="me-3 w-100 border-bottom border-danger border-3">
                            </div>
                        @else
                            <img src="https://cdn-icons-png.flaticon.com/512/99/99260.png?w=1380&t=st=1684940767~exp=1684941367~hmac=cfe18c0c4335e6eeee2de726f896ca84348d5f2f926de78cb5681b9f3442198b"
                                alt="">
                        @endif
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <a class="text-dark fs-5" href="{{ route('dishes.show', $dish) }}">{{ $dish->name }}</a>
                                <div class="text-dark">{{ $dish->tipology }}</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="pink">{{ $dish->price }}$</div>
                                <a href="{{ route('dishes.edit', $dish) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('dishes.destroy', $dish) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <p> Nessun piatto trovato </P>
            @endforelse
        </div>
    </div>
@endsection

<style scoped>
    .price {}
</style>
