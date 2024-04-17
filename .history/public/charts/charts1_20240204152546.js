function renderChart() {
    var element = document.getElementById('kt_apexcharts_1');

    // Check if the element exists
    if (!element) {
        console.log('Element not found, exiting function');
        return; // Exiting the function if the element is not found
    }

    var height = parseInt(KTUtil.css(element, 'height'));
    var labelColor = KTUtil.getCssVariableValue('--kt-danger-500');
    var borderColor = KTUtil.getCssVariableValue('--kt-gray-200');
    var baseColor = KTUtil.getCssVariableValue('--kt-primary');
    var secondaryColor = KTUtil.getCssVariableValue('--kt-gray-300');

    // Define the options object inside the function
    var options = {
        series: [{
            name: 'Net Profit',
            data: [44, 55, 57, 56, 61, 58]
        }, {
            name: 'Revenue',
            data: [76, 85, 101, 98, 87, 105]
        }],
        chart: {
            fontFamily: 'inherit',
            type: 'bar',
            height: height,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '30%',
                endingShape: 'rounded'
            },
        },
        legend: {
            show: false
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    colors: labelColor,
                    fontSize: '12px'
                }
            }
        },
        yaxis: {
            labels: {
                style: {
                    colors: labelColor,
                    fontSize: '12px'
                }
            }
        },
        fill: {
            opacity: 1
        },
        states: {
            normal: {
                filter: {
                    type: 'none',
                    value: 0
                }
            },
            hover: {
                filter: {
                    type: 'none',
                    value: 0
                }
            },
            active: {
                allowMultipleDataPointsSelection: false,
                filter: {
                    type: 'none',
                    value: 0
                }
            }
        },
        tooltip: {
            style: {
                fontSize: '12px'
            },
            y: {
                formatter: function (val) {
                    return '$' + val + ' thousands';
                }
            }
        },
        colors: [baseColor, secondaryColor],
        grid: {
            borderColor: borderColor,
            strokeDashArray: 4,
            yaxis: {
                lines: {
                    show: true
                }
            }
        }
    };

    var chart = new ApexCharts(element, options);
    chart.render();
}

// Call the function to render the chart
renderChart();
