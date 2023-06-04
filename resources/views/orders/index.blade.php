@extends('layouts.app')
@section('content')
    @php
        // Recupera l'anno selezionato dalla richiesta
$selectedYear = request('selected_year', date('Y'));

// Filtra gli ordini in base all'anno selezionato
        $specificYearOrders = App\Models\Order::whereYear('created_at', $selectedYear)->get();
        
        // Calcola il numero totale di ordini nell'anno selezionato
        $totalSpecificYearOrders = $specificYearOrders->count();
    @endphp

    <div class="card">

        @php
            // Array per memorizzare il totale degli ordini per ogni mese
            $ordersPerMonth = [];
            
            // Array per memorizzare la somma dei totali guadagnati per ogni mese
            $earningsPerMonth = [];
            
            // Recupera tutti gli ordini dell'anno selezionato
$selectedYearOrders = App\Models\Order::whereYear('created_at', $selectedYear)->get();

// Calcola il totale degli ordini e la somma dei totali guadagnati per ogni mese
foreach ($selectedYearOrders as $order) {
    $month = $order->created_at->format('m');
                $ordersPerMonth[$month] = isset($ordersPerMonth[$month]) ? $ordersPerMonth[$month] + 1 : 1;
                $earningsPerMonth[$month] = isset($earningsPerMonth[$month]) ? $earningsPerMonth[$month] + $order->total : $order->total;
            }
        @endphp

        <div class="card-body">
            <!-- Mostra la select per selezionare l'anno -->
            <form action="{{ url('/orders') }}" method="GET">
                <label for="selected_year">Seleziona l'anno:</label>
                <select name="selected_year" id="selected_year">
                    @for ($year = 2020; $year <= date('Y'); $year++)
                        <option value="{{ $year }}" {{ $year == $selectedYear ? 'selected' : '' }}>
                            {{ $year }}
                        </option>
                    @endfor
                </select>
                <button type="submit">Visualizza</button>
            </form>

            <!-- Mostra il numero totale di ordini nell'anno selezionato -->
            Total Orders in {{ $selectedYear }}: {{ $totalSpecificYearOrders }}

        </div>
    </div>

    <h1>Totali Ordini per Mese</h1>

    <table>
        <thead>
            <tr>
                <th>Mese</th>
                <th>Totale Ordini</th>
                <th>Totale Guadagni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ordersPerMonth as $month => $totalOrders)
                <tr>
                    <td>{{ date('F', mktime(0, 0, 0, $month, 1)) }}</td>
                    <td>{{ $totalOrders }}</td>
                    <td>{{ $earningsPerMonth[$month] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @php
        // Calcola il totale degli ordini per ogni anno
        $ordersPerYear = App\Models\Order::selectRaw('YEAR(created_at) as year, count(*) as total_orders, sum(total) as total_earnings')
            ->groupBy('year')
            ->orderBy('year')
            ->get();
    @endphp

    <h1>Totali Ordini per Anno</h1>

    <table>
        <thead>
            <tr>
                <th>Anno</th>
                <th>Totale Ordini</th>
                <th>Totale Guadagni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ordersPerYear as $yearData)
                <tr>
                    <td>{{ $yearData->year }}</td>
                    <td>{{ $yearData->total_orders }}</td>
                    <td>{{ $yearData->total_earnings }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->phone_number }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}">Visualizza</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


<style scoped lang="sccss">
    .box-shadow {
        transition: transform .2s;
        box-shadow: 0px 0px 14px 5px rgba(0, 0, 0, 0.44);
    }

    * {
        color: black !important;
    }

    td {
        border: 1px solid black !important;
        padding: 1rem !important;
    }



    .chart {
        position: relative;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
    }

    .slice {
        position: absolute;
        width: 50%;
        height: 100%;
        border-radius: 100% 0 0 100%;
        transform-origin: 100% 50%;
    }

    #slice1 {
        transform: rotate(0deg);
        background-color: red;
    }

    #slice2 {
        transform: rotate(60deg);
        background-color: blue;
    }

    #slice3 {
        transform: rotate(120deg);
        background-color: green;
    }

    .inner-circle {
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
        height: 50%;
        background-color: white;
        border-radius: 50%;
    }
</style>
