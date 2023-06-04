@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h1>Dettagli dell'ordine</h1>
        <h2>Informazioni sull'ordine</h2>
        <p><strong>ID ordine:</strong> {{ $order->id }}</p>
        <p><strong>Data:</strong> {{ $order->created_at->format('d/m/Y H:i:s') }}</p>
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
    tbody tr:nth-child(odd) {
        background-color: #878585;
        color: white
    }

    h1,
    h2,
    th {
        color: #555;
    }
</style>
