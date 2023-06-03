@extends('layouts.app')
@section('content')
    <h1>Elenco Ordini</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Indirizzo</th>
                <th>Numero di Telefono</th>
                <th>Totale</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>

                    <td class="p-2">{{ $order->id }}</td>
                    <td class="p-2">{{ $order->name }}</td>
                    <td class="p-2">{{ $order->address }}</td>
                    <td class="text-center p-2">{{ $order->phone_number }}</td>
                    <td class="p-2">{{ $order->total }}</td>
                    <td>

                        <a href="{{ route('orders.show', $order->id) }}">Visualizza</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

<style>
    tbody tr:nth-child(odd) {
        background-color: #555;
        color: white
    }

    h1,
    th {
        color: #555
    }
</style>
