@extends('master1')

@section('title', "Parcelle")
@push('additional_styles')
@section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/css/bootstrap-select-country.min.css
" rel="stylesheet">
<style>
    body, h1, h2, h3, h4, h5, h6, p, div {
        direction: ltr !important; /* Force LTR */
    }
 </style>
@endsection
@section('content')
<div class="row">
    <div class="col-6">
    <canvas id="kt_chartjs_1" class="mh-400px"></canvas>
    </div>
    <div class="col-6">
    <canvas id="kt_chartjs_4" class="mh-400px"></canvas>
    </div>

</div>

<canvas id="kt_chartjs_3" class="mh-400px"></canvas>



@endsection
@push('scripts')
<script>
(function() {
    var ctx = document.getElementById('kt_chartjs_1');

    var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
    var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
    var successColor = KTUtil.getCssVariableValue('--kt-success'); 

    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

    const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    const data = {
        labels: labels,
        datasets: [{
            label: 'Sales',
            data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120],
            backgroundColor: primaryColor,
        }, {
            label: 'Expenses',
            data: [5, 15, 25, 35, 45, 55, 65, 75, 85, 95, 105, 115],
            backgroundColor: dangerColor,
        }, {
            label: 'Profit',
            data: [5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
            backgroundColor: successColor,
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            plugins: {
                title: {
                    display: false,
                }
            },
            responsive: true,
            interaction: {
                intersect: false,
            },
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true
                }
            }
        },
        defaults:{
            global: {
                defaultFont: fontFamily
            }
        }
    };

    new Chart(ctx, config);
})();
</script>

<script>
(function() {
    var ctx = document.getElementById('kt_chartjs_3');

    var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
    var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
    var successColor = KTUtil.getCssVariableValue('--kt-success');
    var warningColor = KTUtil.getCssVariableValue('--kt-warning');
    var infoColor = KTUtil.getCssVariableValue('--kt-info');

    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

    const labels = ['January', 'February', 'March', 'April', 'May'];

    const data = {
        labels: labels,
        datasets: [{
            label: 'Sales',
            data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120],
            backgroundColor: primaryColor,
        }, {
            label: 'Expenses',
            data: [5, 15, 25, 35, 45, 55, 65, 75, 85, 95, 105, 115],
            backgroundColor: dangerColor,
        }, {
            label: 'Profit',
            data: [5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
            backgroundColor: successColor,
        }]
    };

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

    new Chart(ctx, config);

})();
</script>
<script>
    (function() {
        var ctx = document.getElementById('kt_chartjs_4');

// Define colors
var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
var dangerLightColor = KTUtil.getCssVariableValue('--kt-danger-light');

// Define fonts
var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

// Chart labels
const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// Chart data
const data = {
    labels: labels,
    datasets: [
        {
            label: 'Sales',
            data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120],
            backgroundColor: primaryColor,
        }, {
            label: 'Expenses',
            data: [5, 15, 25, 35, 45, 55, 65, 75, 85, 95, 105, 115],
            backgroundColor: dangerColor,
        }, {
            label: 'Profit',
            data: [5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5],
            backgroundColor: dangerLightColor,
        }
    ]
};

// Chart config
const config = {
    type: 'line',
    data: data,
    options: {
        plugins: {
            title: {
                display: false,
            },
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 15,
                        family: fontFamily
                    }
                }
            }
        },
        responsive: true,
        interaction: {
            intersect: false,
        },
        scales: {
            y: {
                stacked: true
            }
        }
    },
    defaults:{
        global: {
            defaultFont: fontFamily
        }
    }
};

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);
})();
</script>
</script>

@endpush
