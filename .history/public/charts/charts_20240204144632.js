var ctx = document.getElementById('kt_chartjs_1');

// Define colors
var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
var successColor = KTUtil.getCssVariableValue('--kt-success');

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

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);