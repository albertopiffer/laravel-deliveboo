@extends('layouts.app')
@section('content')
    <h1>Index</h1>

    <div class="container">
        <div class="row">
            @forelse ($dishes as $dish)
                <div class="col-4 mb-5">
                    <div class=" bg-white border border-secondary rounded p-2">
                        <div class="d-flex">
                            <img class="me-3" src="https://picsum.photos/100/100" alt="">
                            <div>
                                <p>{{$dish->name}}</p>
                                <p>{{$dish->description}}</p>
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
