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
$selectedYearOrders = App\Models\Order::whereYear('created_at', $selectedYear)
    ->orderBy('created_at', 'asc')
    ->get();

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

    {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

    <canvas id="ordersChart" style="max-width: 300px; max-height: 300px;"></canvas>
    <canvas id="earningsChart" style="max-width: 300px; max-height: 300px;"></canvas>

    <script>
        // Ottieni i dati dei mesi e dei totali ordini dalla tabella
        var monthsOrders = {!! json_encode(array_keys($ordersPerMonth)) !!};
        var totalOrders = {!! json_encode(array_values($ordersPerMonth)) !!};

        // Crea il grafico a torta per gli ordini utilizzando Chart.js
        var ctxOrders = document.getElementById('ordersChart').getContext('2d');
        var ordersChart = new Chart(ctxOrders, {
            type: 'pie',
            data: {
                labels: monthsOrders.map(function(month) {
                    return new Date(Date.parse(month + " 1, 2000")).toLocaleString('default', {
                        month: 'long'
                    });
                }),
                datasets: [{
                    data: totalOrders,
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 159, 64, 0.7)'
                    ],
                    hoverBackgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ]
                }]
            },
            options: {
                animation: {
                    animateRotate: true,
                    animateScale: true
                }
            }
        });

        // Ottieni i dati dei mesi e dei totali guadagni dalla tabella
        var monthsEarnings = {!! json_encode(array_keys($earningsPerMonth)) !!};
        var totalEarnings = {!! json_encode(array_values($earningsPerMonth)) !!};

        // Crea il grafico a torta per i guadagni utilizzando Chart.js
        var ctxEarnings = document.getElementById('earningsChart').getContext('2d');
        var earningsChart = new Chart(ctxEarnings, {
            type: 'pie',
            data: {
                labels: monthsEarnings.map(function(month) {
                    return new Date(Date.parse(month + " 1, 2000")).toLocaleString('default', {
                        month: 'long'
                    });
                }),
                datasets: [{
                    data: totalEarnings,
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 159, 64, 0.7)'
                    ],
                    hoverBackgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ]
                }]
            },
            options: {
                animation: {
                    animateRotate: true,
                    animateScale: true
                }
            }
        });
    </script>

    {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

    <canvas id="ordersPieChart" style="max-width: 300px; max-height: 300px;"></canvas>
    <canvas id="earningsPieChart" style="max-width: 300px; max-height: 300px;"></canvas>

    @php
        $labels = [];
        $totalOrders = [];
        $totalEarnings = [];
        
        foreach ($ordersPerYear as $yearData) {
            $labels[] = $yearData->year;
            $totalOrders[] = $yearData->total_orders;
            $totalEarnings[] = $yearData->total_earnings;
        }
    @endphp

    <script>
        var ordersCtx = document.getElementById('ordersPieChart').getContext('2d');
        var ordersData = {
            labels: [
                @foreach ($labels as $label)
                    '{{ $label }}',
                @endforeach
            ],
            datasets: [{
                data: [
                    @foreach ($totalOrders as $order)
                        {{ $order }},
                    @endforeach
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(255, 159, 64, 0.7)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        };

        var ordersOptions = {
            responsive: true
        };

        var ordersPieChart = new Chart(ordersCtx, {
            type: 'pie',
            data: ordersData,
            options: ordersOptions
        });

        var earningsCtx = document.getElementById('earningsPieChart').getContext('2d');
        var earningsData = {
            labels: [
                @foreach ($labels as $label)
                    '{{ $label }}',
                @endforeach
            ],
            datasets: [{
                data: [
                    @foreach ($totalEarnings as $earnings)
                        {{ $earnings }},
                    @endforeach
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(255, 159, 64, 0.7)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        };

        var earningsOptions = {
            responsive: true
        };

        var earningsPieChart = new Chart(earningsCtx, {
            type: 'pie',
            data: earningsData,
            options: earningsOptions
        });
    </script>

    {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}


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
</style>
