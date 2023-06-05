@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @forelse ($dishes as $dish)
                <div class="col-lg-3 col-sm-6 col-12 mb-5">
                    <div class="card bg-white border border-secondary rounded border-3 d-flex">
                        @if ($dish->cover_image)
                            <div class="container ratio ratio-1x1 object-fit-cover">
                                <img src="{{ $dish->cover_path }}" alt=""
                                    class="me-3 w-100 border-bottom border-secondary border-3">
                            </div>
                        @else
                            <img src="https://cdn-icons-png.flaticon.com/512/99/99260.png?w=1380&t=st=1684940767~exp=1684941367~hmac=cfe18c0c4335e6eeee2de726f896ca84348d5f2f926de78cb5681b9f3442198b"
                                alt="">
                        @endif
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <a class="text-dark fs-5" href="{{ route('dishes.show', $dish) }}">{{ $dish->name }}</a>
                                <span class="badge rounded-pill dish-tipology fs-6">{{ $dish->typology }}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0">{{ $dish->visible == 1 ? 'Disponibile' : 'Non disponibile' }}</p>
                                <div class="pink dish-price">€{{ $dish->price }}</div>
                                <a href="{{ route('dishes.edit', $dish) }}" class="btn edit-btn-dishes"><i
                                        class="fa-solid fa-pen"></i></a>
                                <form action="{{ route('dishes.destroy', $dish) }}" method="POST" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <div>
                                        {{-- <i class="fa-solid fa-trash text-white"></i>
                                        <input type="submit" class="btn btn-sm btn-danger ps-0" value="Elimina"> --}}
                                        <button type="submit" class="btn btn-danger" title="delete"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
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
    a {
        text-decoration: none !important;
    }

    .input-with-icon {
        position: relative;
        background-color: #dc3545;
    }

    .input-with-icon input {
        padding-left: 30px;
    }

    .input-with-icon .fa-input {
        position: absolute;
        left: 5px;
        top: 5px;
    }

    .dish-price {
        font-weight: bold;
        color: black;
        font-size: 20px;
    }

    .dish-tipology {
        background-color: #FE715E;
    }

    .edit-btn-dishes {
        border-color: #FE715E !important;
        color: #FE715E !important;
    }

    .edit-btn-dishes:hover {
        background-color: #FE715E !important;
        color: white !important;

    }
</style>
