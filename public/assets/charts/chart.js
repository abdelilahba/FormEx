"use strict";
var KTGeneralApexCharts = {
    init: function() {
        var element = document.getElementById('kt_apexcharts_1');
        

        var height = parseInt(KTUtil.css(element, 'height'));
        var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
        var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
        var baseColor = KTUtil.getCssVariableValue('--bs-primary');
        var secondaryColor = KTUtil.getCssVariableValue('--bs-gray-300');        
        if (!element) {
            return;
        }

        var options = {
            series: [{
                name: 'Net Profit',
                data: [76, 85, 58, 98, 87, 105]
            }, {
                name: 'Revenue',
                data: [76, 85, 45, 98, 87, 105]
            }, {
                name: 'Others ',
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
                    columnWidth: ['30%'],
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
                        return '$' + val + ' thousands'
                    }
                }
            },
            colors: [baseColor, secondaryColor, KTUtil.getCssVariableValue("--bs-danger")],
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
        chart.render()
        ,
        function() {
            
            var element = document.getElementById('kt_apexcharts_2');

            var height = parseInt(KTUtil.css(element, 'height'));
            var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
            var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
            var baseColor = KTUtil.getCssVariableValue('--bs-warning');
            var secondaryColor = KTUtil.getCssVariableValue('--bs-gray-300');
        
           

             
             

            if (!element) {
                return;
            }

            var options = {
                series: [{
                    name: 'Net Profit',
                    data:[76, 85, 101, 98, 87, 105]
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
                        horizontal: true,
                        columnWidth: ['30%'],
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
                            return '$' + val + ' thousands'
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
                
        }(),
        function() {
            var element = document.getElementById('kt_apexcharts_3');

            var height = parseInt(KTUtil.css(element, 'height'));
            var options = {
                series: [44, 55, 41, 17, 15],
                labels: ['Apple', 'Mango', 'Orange', 'Watermelon', 'Grape'],
                chart: {
                type: 'donut',
            },
              tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function (val) {
                        return val + ' Tickets'
                    }
                }
            },
              plotOptions: {
                pie: {
                  expandOnClick: false
                }
            },
            /*
            dataLabels: {
                enabled: true,
                formatter: function (val) {
                  return val + "%"
                },
              },*/
              responsive: [{
                breakpoint: 480,
                options: {
                  chart: {
                    width: 200
                  },
                  legend: {
                    position: 'bottom'
                  }
                }
              }]
              };
      
              var chart = new ApexCharts(element, options);
              chart.render();
        }(),
        function() {
            var e = document.getElementById("kt_charts_widget_3");
            if (e) {
                var t = parseInt(KTUtil.css(e, "height")),
                    a = KTUtil.getCssVariableValue("--bs-gray-500"),
                    r = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                    i = KTUtil.getCssVariableValue("--bs-success"),
                    o = KTUtil.getCssVariableValue("--bs-success"),
                    s = new ApexCharts(e, {
                        series: [{
                            name: "Sales",
                            data: [18, 18, 20, 20, 18, 18, 22, 22, 20, 20, 18, 18, 20, 20, 18, 18, 20, 20, 22]
                            
                        }],
                        chart: {
                            fontFamily: "inherit",
                            type: "area",
                            height: t,
                            toolbar: {
                                show: !1
                            }
                        },
                        plotOptions: {},
                        legend: {
                            show: !1
                        },
                        dataLabels: {
                            enabled: !1
                        },
                        fill: {
                            type: "gradient",
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: .4,
                                opacityTo: 0,
                                stops: [0, 80, 100]
                            }
                        },
                        stroke: {
                            curve: "smooth",
                            show: !0,
                            width: 3,
                            colors: [i]
                        },
                        xaxis: {
                            categories: ["", "Apr 02", "Apr 03", "Apr 04", "Apr 05", "Apr 06", "Apr 07", "Apr 08", "Apr 09", "Apr 10", "Apr 11", "Apr 12", "Apr 13", "Apr 14", "Apr 15", "Apr 16", "Apr 17", "Apr 18", ""],
                            axisBorder: {
                                show: !1
                            },
                            axisTicks: {
                                show: !1
                            },
                            tickAmount: 6,
                            labels: {
                                rotate: 0,
                                rotateAlways: !0,
                                style: {
                                    colors: a,
                                    fontSize: "12px"
                                }
                            },
                            crosshairs: {
                                position: "front",
                                stroke: {
                                    color: i,
                                    width: 1,
                                    dashArray: 3
                                }
                            },
                            tooltip: {
                                enabled: !0,
                                formatter: void 0,
                                offsetY: 0,
                                style: {
                                    fontSize: "12px"
                                }
                            }
                        },
                        yaxis: {
                            tickAmount: 4,
                            max: 24,
                            min: 10,
                            labels: {
                                style: {
                                    colors: a,
                                    fontSize: "12px"
                                },
                                formatter: function(e) {
                                    return "$" + Number(e / 10).toFixed(1) + "K"
                                }
                            }
                        },
                        states: {
                            normal: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            hover: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            active: {
                                allowMultipleDataPointsSelection: !1,
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            }
                        },
                        tooltip: {
                            style: {
                                fontSize: "12px"
                            },
                            y: {
                                formatter: function(e) {
                                    return "$" + e + "K"
                                }
                            }
                        },
                        colors: [o],
                        grid: {
                            borderColor: r,
                            strokeDashArray: 4,
                            yaxis: {
                                lines: {
                                    show: !0
                                }
                            }
                        },
                        markers: {
                            strokeColor: i,
                            strokeWidth: 3
                        }
                    });
                setTimeout((function() {
                    s.render()
                }), 200)
            }
        }(),
        function() {
            var e = document.getElementById("kt_apexcharts_4");
            if (e) {
                var t = parseInt(KTUtil.css(e, "height")),
                    a = KTUtil.getCssVariableValue("--bs-gray-500"),
                    r = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                    i = KTUtil.getCssVariableValue("--bs-success"),
                    o = KTUtil.getCssVariableValue("--bs-success"),
                    s = new ApexCharts(e, {
                        series: [{
                            name: "Sales",
                            data: [18, 18, 20, 20, 18, 18, 22, 22, 20, 20, 18, 18, 20, 20, 18, 18, 20, 20, 22]
                        }],
                        chart: {
                            fontFamily: "inherit",
                            type: "area",
                            height: t,
                            toolbar: {
                                show: !1
                            }
                        },
                        plotOptions: {},
                        legend: {
                            show: !1
                        },
                        dataLabels: {
                            enabled: !1
                        },
                        fill: {
                            type: "gradient",
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: .4,
                                opacityTo: 0,
                                stops: [0, 80, 100]
                            }
                        },
                        stroke: {
                            curve: "smooth",
                            show: !0,
                            width: 3,
                            colors: [i]
                        },
                        xaxis: {
                            categories: ["", "Apr 02", "Apr 03", "Apr 04", "Apr 05", "Apr 06", "Apr 07", "Apr 08", "Apr 09", "Apr 10", "Apr 11", "Apr 12", "Apr 13", "Apr 14", "Apr 15", "Apr 16", "Apr 17", "Apr 18", ""],
                            axisBorder: {
                                show: !1
                            },
                            axisTicks: {
                                show: !1
                            },
                            tickAmount: 6,
                            labels: {
                                rotate: 0,
                                rotateAlways: !0,
                                style: {
                                    colors: a,
                                    fontSize: "12px"
                                }
                            },
                            crosshairs: {
                                position: "front",
                                stroke: {
                                    color: i,
                                    width: 1,
                                    dashArray: 3
                                }
                            },
                            tooltip: {
                                enabled: !0,
                                formatter: void 0,
                                offsetY: 0,
                                style: {
                                    fontSize: "12px"
                                }
                            }
                        },
                        yaxis: {
                            tickAmount: 4,
                            max: 24,
                            min: 10,
                            labels: {
                                style: {
                                    colors: a,
                                    fontSize: "12px"
                                },
                                formatter: function(e) {
                                    return "$" + Number(e / 10).toFixed(1) + "K"
                                }
                            }
                        },
                        states: {
                            normal: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            hover: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            active: {
                                allowMultipleDataPointsSelection: !1,
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            }
                        },
                        tooltip: {
                            style: {
                                fontSize: "12px"
                            },
                            y: {
                                formatter: function(e) {
                                    return "$" + e + "K"
                                }
                            }
                        },
                        colors: [o],
                        grid: {
                            borderColor: r,
                            strokeDashArray: 4,
                            yaxis: {
                                lines: {
                                    show: !0
                                }
                            }
                        },
                        markers: {
                            strokeColor: i,
                            strokeWidth: 3
                        }
                    });
                setTimeout((function() {
                    s.render()
                }), 200)
            }
        }()
    }
};
KTUtil.onDOMContentLoaded((function() {
    KTGeneralApexCharts.init()
}));