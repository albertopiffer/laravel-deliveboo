@extends('layouts.app')
@section('content')
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h1>Elenco Ordini</h1>

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Indirizzo</th>
                            <th>Numero di Telefono</th>
                            <th>Totale</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td class="p-2">
                                    <a class="id-hover" href="{{ route('orders.show', $order->id) }}">{{ $order->id }}</a>
                                </td>
                                <td class="p-2">{{ $order->name }}</td>
                                <td class="p-2">{{ $order->address }}</td>
                                <td class="text-center p-2">{{ $order->phone_number }}</td>
                                <td class="p-2">{{ $order->total }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 col-12">
                <h1>Grafico</h1>
                @php
                    // Recupera l'anno selezionato dalla richiesta
$selectedYear = request('selected_year', date('Y'));

// Filtra gli ordini in base all'anno selezionato
                    $specificYearOrders = App\Models\Order::whereYear('created_at', $selectedYear)->get();
                    
                    // Calcola il numero totale di ordini nell'anno selezionato
                    $totalSpecificYearOrders = $specificYearOrders->count();
                @endphp

                <div>

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
                            <select name="selected_year" id="selected_year" class="select-year">
                                @for ($year = 2020; $year <= date('Y'); $year++)
                                    <option value="{{ $year }}" {{ $year == $selectedYear ? 'selected' : '' }}>
                                        {{ $year }}
                                    </option>
                                @endfor
                            </select>
                            <button type="submit" class="create-button">Visualizza</button>
                        </form>

                        <!-- Mostra il numero totale di ordini nell'anno selezionato -->
                        {{-- Total Orders in {{ $selectedYear }}: {{ $totalSpecificYearOrders }} --}}

                    </div>
                </div>

                <select id="chartType" class="total-order">
                    <option value="orders">Ordini totali</option>
                    <option value="earnings">Guadagni totali</option>
                </select>

                <div class="row mb-5">
                    <div class="col-12 col-sm-6">


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
                                        <td>{{ number_format($earningsPerMonth[$month], 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div id="chartContainer1">
                            <canvas id="ordersChart" style="max-width: 300px; max-height: 300px;"></canvas>
                            <canvas id="earningsChart" style="max-width: 300px; max-height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
                {{-- TABELLA ANNO CON GRAFICO SOTTO --}}
                @php
                    // Calcola il totale degli ordini per ogni anno
                    $ordersPerYear = App\Models\Order::selectRaw('YEAR(created_at) as year, count(*) as total_orders, sum(total) as total_earnings')
                        ->groupBy('year')
                        ->orderBy('year')
                        ->get();
                @endphp
                <div class="row">
                    <div class="col-12 col-sm-6">
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
                    </div>
                    <div class="col-12 col-sm-6">
                        <div id="chartContainer2">
                            <canvas id="ordersPieChart" style="max-width: 300px; max-height: 300px;"></canvas>
                            <canvas id="earningsPieChart" style="max-width: 300px; max-height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        </div>
        {{-- DISPLAY BLOCK NONE --}}
        <script>
            var chartTypeSelect = document.getElementById('chartType');
            var chartContainer1 = document.getElementById('chartContainer1');
            var chartContainer2 = document.getElementById('chartContainer2');
            var ordersChart = document.getElementById('ordersChart').getContext('2d');
            var earningsChart = document.getElementById('earningsChart').getContext('2d');
            var ordersPieChart = document.getElementById('ordersPieChart').getContext('2d');
            var earningsPieChart = document.getElementById('earningsPieChart').getContext('2d');

            // Set initial visibility of the charts
            ordersChart.canvas.style.display = 'block';
            earningsChart.canvas.style.display = 'none';
            ordersPieChart.canvas.style.display = 'block';
            earningsPieChart.canvas.style.display = 'none';

            chartTypeSelect.addEventListener('change', function() {
                var selectedChart = chartTypeSelect.value;

                if (selectedChart === 'orders') {
                    ordersChart.canvas.style.display = 'block';
                    earningsChart.canvas.style.display = 'none';
                    ordersPieChart.canvas.style.display = 'block';
                    earningsPieChart.canvas.style.display = 'none';
                } else if (selectedChart === 'earnings') {
                    ordersChart.canvas.style.display = 'none';
                    earningsChart.canvas.style.display = 'block';
                    ordersPieChart.canvas.style.display = 'none';
                    earningsPieChart.canvas.style.display = 'block';
                }
            });
        </script>

        {{-- LOGICA GRAFIFCI MESI --}}
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
                            '#FF5A5F',
                            '#FFB85C',
                            '#FFED4D',
                            '#C0D725',
                            '#72CCAF',
                            '#5BB3FF',
                            '#A278FF',
                            '#FF73AB',
                            '#FF8E7F',
                            '#FFD08D',
                            '#D1F2A5',
                            '#BFF0FF'
                        ],
                        hoverBackgroundColor: [
                            '#FF5A5F',
                            '#FFB85C',
                            '#FFED4D',
                            '#C0D725',
                            '#72CCAF',
                            '#5BB3FF',
                            '#A278FF',
                            '#FF73AB',
                            '#FF8E7F',
                            '#FFD08D',
                            '#D1F2A5',
                            '#BFF0FF'
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
                            '#FF5A5F',
                            '#FFB85C',
                            '#FFED4D',
                            '#C0D725',
                            '#72CCAF',
                            '#5BB3FF',
                            '#A278FF',
                            '#FF73AB',
                            '#FF8E7F',
                            '#FFD08D',
                            '#D1F2A5',
                            '#BFF0FF'
                        ],
                        hoverBackgroundColor: [
                            '#FF5A5F',
                            '#FFB85C',
                            '#FFED4D',
                            '#C0D725',
                            '#72CCAF',
                            '#5BB3FF',
                            '#A278FF',
                            '#FF73AB',
                            '#FF8E7F',
                            '#FFD08D',
                            '#D1F2A5',
                            '#BFF0FF'
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
                        '#FF5A5F',
                        '#FFB85C',
                        '#FFED4D',
                        '#C0D725',
                        '#72CCAF',
                        '#5BB3FF',
                        '#A278FF',
                        '#FF73AB',
                        '#FF8E7F',
                        '#FFD08D',
                        '#D1F2A5',
                        '#BFF0FF'
                    ]
                }]
            };

            var ordersOptions = {
                responsive: true,
                animation: {
                    animateRotate: true,
                    animateScale: true
                }
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
                        '#FF5A5F',
                        '#FFB85C',
                        '#FFED4D',
                        '#C0D725',
                        '#72CCAF',
                        '#5BB3FF',
                        '#A278FF',
                        '#FF73AB',
                        '#FF8E7F',
                        '#FFD08D',
                        '#D1F2A5',
                        '#BFF0FF'
                    ]
                }]
            };

            var earningsOptions = {
                responsive: true,
                animation: {
                    animateRotate: true,
                    animateScale: true
                }
            };

            var earningsPieChart = new Chart(earningsCtx, {
                type: 'pie',
                data: earningsData,
                options: earningsOptions
            });
        </script>

        {{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

    </div>
    </div>
@endsection

<style>
    .select-year {
        border-radius: 8px;
        padding: 5px;

    }

    .id-hover:hover {
        color: currentColor;
        text-decoration: underline
    }

    tbody tr:nth-child(odd) {
        background-color: #878585;
        color: white
    }

    h1,
    th {
        color: #555
    }

    .create-button,
    .total-order {
        border: 1px solid black;
        border-radius: 8px;
        background-color: white;
        padding: 5px;
        width: 10%;

    }
</style>
