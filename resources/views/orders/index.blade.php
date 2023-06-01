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
                {{-- <th>Azioni</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->phone_number }}</td>
                    <td>{{ $order->total }}</td>
                    {{-- <td>
                        <a href="{{ route('orders.show', $order->id) }}">Visualizza</a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

<style>
    .box-shadow {
        transition: transform .2s;
        box-shadow: 0px 0px 14px 5px rgba(0, 0, 0, 0.44);
    }
</style>
