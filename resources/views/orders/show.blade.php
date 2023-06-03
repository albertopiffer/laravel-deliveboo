@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Dettagli dell'ordine</h1>
        <h2>Informazioni sull'ordine</h2>
        <p><strong>ID ordine:</strong> {{ $order->id }}</p>
        <p><strong>Data:</strong> {{ $order->created_at }}</p>
        <!-- Aggiungi altre informazioni sull'ordine -->

        <h2>Piatti ordinati</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome piatto</th>
                    <th>Quantità</th>
                    <th>Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->dishes as $dish)
                    @php
                        $pivot = $dish->pivot;
                        // var_dump($pivot->quantity);
                    @endphp
                    <tr>
                        <td>{{ $dish->name }}</td>
                        <td>{{ $pivot->quantity }}</td>
                        <td>{{ $dish->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<style>
    .box-shadow {
        transition: transform .2s;
        box-shadow: 0px 0px 14px 5px rgba(0, 0, 0, 0.44);
    }
</style>
