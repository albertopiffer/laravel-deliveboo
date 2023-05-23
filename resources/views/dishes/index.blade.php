@extends('layouts.app')
@section('content')
    <h1>Index</h1>

    @forelse ($dishes as $dish)
    <p>{{$dish->name}}</p>
    @empty
        <p> Nessun piatto trovato </P>
    @endforelse
@endsection
