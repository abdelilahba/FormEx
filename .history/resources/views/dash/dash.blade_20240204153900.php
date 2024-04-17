@extends('master1')

@section('title', "Parcelle")

@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css
" rel="stylesheet">

 
@endsection
@section('content')
<canvas id="kt_chartjs_1" class="mh-400px"></canvas>
<canvas id="kt_chartjs_3" class="mh-400px"></canvas>

@endsection
@push('scripts')
<script src="{{asset('charts/charts.js')}}"></script>
<script >var ctx = document.getElementById('kt_chartjs_3');

// Define colors
var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
var successColor = KTUtil.getCssVariableValue('--kt-success');
var warningColor = KTUtil.getCssVariableValue('--kt-warning');
var infoColor = KTUtil.getCssVariableValue('--kt-info');

// Define fonts
var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

// Chart labels

// Chart data
const data = {
    labels: labels,
    datasets: [
        {
            label: 'Sales',
            data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120], // Example data
            backgroundColor: primaryColor,
        },
        {
            label: 'Expenses',
            data: [5, 15, 25, 35, 45, 55, 65, 75, 85, 95, 105, 115], // Example data
            backgroundColor: dangerColor,
        },
        {
            label: 'Profit',
            data: [5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5], // Simplified data for demonstration
            backgroundColor: successColor,
        }
    ]
};

// Chart config
const config = {
    type: 'pie',
    data: data,
    options: {
        plugins: {
            title: {
                display: false,
            }
        },
        responsive: true,
    },
    defaults:{
        global: {
            defaultFont: fontFamily
        }
    }
};

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);</script>
@endpush