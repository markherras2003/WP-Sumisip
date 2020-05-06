
$(document).ready( function($){

//confirmed
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May'],
                    datasets: [{
                        label: '',
                        data: [0, 2, 10, 5, 20],
                        backgroundColor: [
                            'transparent'
                        ],
                        borderColor: [
                            'white',
                            'white',
                            'white',
                            'white',
                            'white'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scaleShowLabels:{
                        display: false
                    },

                    legend: {
                        display: false
                    },

                    tooltips: {
                        borderWidth: 2,
                        backgroundColor: '#FFF',
                        bodyFontColor: '#000',
                        displayColors: false,
                        titleAlign: 'center',
                        bodyAlign: 'center',

                        callbacks:{
                            label: function (tooltipItems, data) {
                                return  tooltipItems.yLabel + " %";
                           },

                              title: function(tooltipItem, data) {
                                return;
                              }
                        },
                        
                    },

                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                                drawOnChartArea: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false //this will remove only the label
                            },
                            border: false
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                                drawOnChartArea: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false //this will remove only the label
                            }
                        }]
                    },

                    plugins: {
                        datalabels: {
                            formatter: (value, ctx) => {
                                let sum = 0;
                                let dataArr = ctx.chart.data.datasets[0].data;
                                dataArr.map(data => {
                                    sum += data;
                                });
                                let percentage = (value*100 / sum).toFixed(2)+"%";
                                return percentage;
                            },
                            
                        }
                    }
                }
            });
//active
            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May'],
                    datasets: [{
                        label: '',
                        data: [0, 5, 100, 300, 200],
                        backgroundColor: [
                            'transparent'
                        ],
                        borderColor: [
                            'white',
                            'white',
                            'white',
                            'white',
                            'white'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scaleShowLabels:{
                        display: false
                    },

                    legend: {
                        display: false
                    },

                    tooltips: {
                        borderWidth: 2,
                        backgroundColor: '#FFF',
                        bodyFontColor: '#000',
                        displayColors: false,
                        titleAlign: 'center',
                        bodyAlign: 'center',

                        callbacks:{
                            label: function (tooltipItems, data) {
                                return  tooltipItems.yLabel + " %";
                           },

                              title: function(tooltipItem, data) {
                                return;
                              }
                        },
                        
                    },

                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                                drawOnChartArea: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false //this will remove only the label
                            },
                            border: false
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                                drawOnChartArea: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false //this will remove only the label
                            }
                        }]
                    },

                    plugins: {
                        datalabels: {
                            formatter: (value, ctx) => {
                                let sum = 0;
                                let dataArr = ctx.chart.data.datasets[0].data;
                                dataArr.map(data => {
                                    sum += data;
                                });
                                let percentage = (value*100 / sum).toFixed(2)+"%";
                                return percentage;
                            },
                            
                        }
                    }
                }
            });
//Recovered
            var ctx = document.getElementById('myChart3').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May'],
                    datasets: [{
                        label: '',
                        data: [0, 5, 10, 50, 100],
                        backgroundColor: [
                            'transparent'
                        ],
                        borderColor: [
                            'white',
                            'white',
                            'white',
                            'white',
                            'white'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scaleShowLabels:{
                        display: false
                    },

                    legend: {
                        display: false
                    },

                    tooltips: {
                        borderWidth: 2,
                        backgroundColor: '#FFF',
                        bodyFontColor: '#000',
                        displayColors: false,
                        titleAlign: 'center',
                        bodyAlign: 'center',

                        callbacks:{
                            label: function (tooltipItems, data) {
                                return  tooltipItems.yLabel + " %";
                           },

                              title: function(tooltipItem, data) {
                                return;
                              }
                        },
                        
                    },

                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                                drawOnChartArea: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false //this will remove only the label
                            },
                            border: false
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                                drawOnChartArea: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false //this will remove only the label
                            }
                        }]
                    },

                    plugins: {
                        datalabels: {
                            formatter: (value, ctx) => {
                                let sum = 0;
                                let dataArr = ctx.chart.data.datasets[0].data;
                                dataArr.map(data => {
                                    sum += data;
                                });
                                let percentage = (value*100 / sum).toFixed(2)+"%";
                                return percentage;
                            },
                            
                        }
                    }
                }
            });
//Death
            var ctx = document.getElementById('myChart4').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May'],
                    datasets: [{
                        label: '',
                        data: [0, 5, 100, 300, 200],
                        backgroundColor: [
                            'transparent'
                        ],
                        borderColor: [
                            'white',
                            'white',
                            'white',
                            'white',
                            'white'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scaleShowLabels:{
                        display: false
                    },

                    legend: {
                        display: false
                    },

                    tooltips: {
                        borderWidth: 2,
                        backgroundColor: '#FFF',
                        bodyFontColor: '#000',
                        displayColors: false,
                        titleAlign: 'center',
                        bodyAlign: 'center',

                        callbacks:{
                            label: function (tooltipItems, data) {
                                return  tooltipItems.yLabel + " %";
                           },

                              title: function(tooltipItem, data) {
                                return;
                              }
                        },
                        
                    },

                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                                drawOnChartArea: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false //this will remove only the label
                            },
                            border: false
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                                drawOnChartArea: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false //this will remove only the label
                            }
                        }]
                    },

                    plugins: {
                        datalabels: {
                            formatter: (value, ctx) => {
                                let sum = 0;
                                let dataArr = ctx.chart.data.datasets[0].data;
                                dataArr.map(data => {
                                    sum += data;
                                });
                                let percentage = (value*100 / sum).toFixed(2)+"%";
                                return percentage;
                            },
                            
                        }
                    }
                }
            });

});