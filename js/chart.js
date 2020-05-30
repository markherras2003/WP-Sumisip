$(document).ready(function ($) {
  //confirmed
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May'],
      datasets: [
        {
          label: '',
          data: [0, 0, 0, 0, 0],
          backgroundColor: ['transparent'],
          borderColor: 'white',
          borderWidth: 3,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      global: {
        fontFamily: "'Poppins'",
        defaultFontFamily: "'Poppins",
        fontSize: 12,
      },

      layout: {
        padding: {
          // Any unspecified dimensions are assumed to be 0
          left: 4,
          top: 4,
          right: 4,
        },
      },

      scaleShowLabels: {
        display: false,
      },

      legend: {
        display: false,
      },

      tooltips: {
        borderWidth: 2,
        backgroundColor: '#FFF',
        bodyFontColor: '#000',
        displayColors: false,
        titleAlign: 'center',
        bodyAlign: 'center',

        callbacks: {
          title: function (tooltipItem, data) {
            return;
          },
        },
      },

      scales: {
        xAxes: [
          {
            gridLines: {
              display: false,
              drawOnChartArea: false,
              drawBorder: false,
            },

            ticks: {
              display: true, //this will remove only the label
              fontColor: 'rgba(255, 255, 255, 0.4)',
              fontSize: 12,
              fontFamily: "'Poppins'",
              beginAtZero: true,
              min: 0,
              max: 0,
            },
            border: false,
          },
        ],
        yAxes: [
          {
            gridLines: {
              display: false,
              drawOnChartArea: false,
              drawBorder: false,
            },
            ticks: {
              display: false, //this will remove only the label
              fontColor: 'rgba(255, 255, 255, 0.04)',
              fontSize: 12,
              fontFamily: "'Poppins'",
              beginAtZero: true,
              min: 0,
              max: 50,
            },
          },
        ],
      },

      plugins: {
        datalabels: {
          formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map((data) => {
              sum += data;
            });
            let percentage = ((value * 100) / sum).toFixed(2) + '%';
            return percentage;
          },
        },
      },
    },
  });

  //active
  var ctx = document.getElementById('myChart2').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May'],
      datasets: [
        {
          label: '',
          data: [0, 0, 0, 0, 0],
          backgroundColor: ['transparent'],
          borderColor: 'white',
          borderWidth: 3,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      global: {
        fontFamily: "'Poppins'",
        defaultFontFamily: "'Poppins",
        fontSize: 12,
      },

      layout: {
        padding: {
          // Any unspecified dimensions are assumed to be 0
          left: 4,
          top: 4,
          right: 4,
        },
      },

      scaleShowLabels: {
        display: false,
      },

      legend: {
        display: false,
      },

      tooltips: {
        borderWidth: 2,
        backgroundColor: '#FFF',
        bodyFontColor: '#000',
        displayColors: false,
        titleAlign: 'center',
        bodyAlign: 'center',

        callbacks: {
          title: function (tooltipItem, data) {
            return;
          },
        },
      },

      scales: {
        xAxes: [
          {
            gridLines: {
              display: false,
              drawOnChartArea: false,
              drawBorder: false,
            },

            ticks: {
              display: true, //this will remove only the label
              fontColor: 'rgba(255, 255, 255, 0.4)',
              fontSize: 12,
              fontFamily: "'Poppins'",
              beginAtZero: true,
              min: 0,
              max: 0,
            },
            border: false,
          },
        ],
        yAxes: [
          {
            gridLines: {
              display: false,
              drawOnChartArea: false,
              drawBorder: false,
            },
            ticks: {
              display: false, //this will remove only the label
              fontColor: 'rgba(255, 255, 255, 0.04)',
              fontSize: 12,
              fontFamily: "'Poppins'",
              beginAtZero: true,
              min: 0,
              max: 50,
            },
          },
        ],
      },
      plugins: {
        datalabels: {
          formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map((data) => {
              sum += data;
            });
            let percentage = ((value * 100) / sum).toFixed(2) + '%';
            return percentage;
          },
        },
      },
    },
  });

  //PUM
  var ctx = document.getElementById('myChart3').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May'],
      datasets: [
        {
          label: '',
          data: [0, 0, 40, 4, 2],
          backgroundColor: ['transparent'],
          borderColor: 'white',
          borderWidth: 3,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      global: {
        fontFamily: "'Poppins'",
        defaultFontFamily: "'Poppins",
        fontSize: 12,
      },

      layout: {
        padding: {
          // Any unspecified dimensions are assumed to be 0
          left: 4,
          top: 4,
          right: 4,
        },
      },

      scaleShowLabels: {
        display: false,
      },

      legend: {
        display: false,
      },

      tooltips: {
        borderWidth: 2,
        backgroundColor: '#FFF',
        bodyFontColor: '#000',
        displayColors: false,
        titleAlign: 'center',
        bodyAlign: 'center',

        callbacks: {
          title: function (tooltipItem, data) {
            return;
          },
        },
      },

      scales: {
        xAxes: [
          {
            gridLines: {
              display: false,
              drawOnChartArea: false,
              drawBorder: false,
            },

            ticks: {
              display: true, //this will remove only the label
              fontColor: 'rgba(255, 255, 255, 0.4)',
              fontSize: 12,
              fontFamily: "'Poppins'",
              beginAtZero: true,
              min: 0,
              max: 0,
            },
            border: false,
          },
        ],
        yAxes: [
          {
            gridLines: {
              display: false,
              drawOnChartArea: false,
              drawBorder: false,
            },
            ticks: {
              display: false, //this will remove only the label
              fontColor: 'rgba(255, 255, 255, 0.04)',
              fontSize: 12,
              fontFamily: "'Poppins'",
              beginAtZero: true,
              min: 0,
              max: 50,
            },
          },
        ],
      },

      plugins: {
        datalabels: {
          formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map((data) => {
              sum += data;
            });
            let percentage = ((value * 100) / sum).toFixed(2) + '%';
            return percentage;
          },
        },
      },
    },
  });

  //PUI
  var ctx = document.getElementById('myChart4').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May'],
      datasets: [
        {
          label: '',
          data: [0, 0, 3, 1, 0],
          backgroundColor: ['transparent'],
          borderColor: 'white',
          borderWidth: 3,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      global: {
        fontFamily: "'Poppins'",
        defaultFontFamily: "'Poppins",
        fontSize: 12,
      },

      layout: {
        padding: {
          // Any unspecified dimensions are assumed to be 0
          left: 4,
          top: 4,
          right: 4,
        },
      },

      scaleShowLabels: {
        display: false,
      },

      legend: {
        display: false,
      },

      tooltips: {
        borderWidth: 2,
        backgroundColor: '#FFF',
        bodyFontColor: '#000',
        displayColors: false,
        titleAlign: 'center',
        bodyAlign: 'center',
        fontFamily: '"Poppins"',

        callbacks: {
          title: function (tooltipItem, data) {
            return;
          },
        },
      },

      scales: {
        xAxes: [
          {
            gridLines: {
              display: false,
              drawOnChartArea: false,
              drawBorder: false,
            },

            ticks: {
              display: true, //this will remove only the label
              fontColor: 'rgba(255, 255, 255, 0.4)',
              fontSize: 12,
              fontFamily: "'Poppins'",
              beginAtZero: true,
              min: 0,
              max: 0,
            },
            border: false,
          },
        ],
        yAxes: [
          {
            gridLines: {
              display: false,
              drawOnChartArea: false,
              drawBorder: false,
            },
            ticks: {
              display: false, //this will remove only the label
              fontColor: 'rgba(255, 255, 255, 0.04)',
              fontSize: 12,
              fontFamily: "'Poppins'",
              beginAtZero: true,
              min: 0,
              max: 50,
            },
          },
        ],
      },

      plugins: {
        datalabels: {
          formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map((data) => {
              sum += data;
            });
            let percentage = ((value * 100) / sum).toFixed(2) + '%';
            return percentage;
          },
        },
      },
    },
  });

  var url_link =
    'https://coronavirus-19-api.herokuapp.com/countries/Philippines';

  jQuery.ajax({
    type: 'GET',
    url: url_link,
    dataType: 'text',
    success: function (result) {
      var obj = jQuery.parseJSON(result);

      var _country = obj.country;
      var _cases = obj.cases;
      var _newconfirmed = obj.todayCases;
      var _newdeaths = obj.todayDeaths;
      var _deaths = obj.deaths;

      var today = new Date();
      var date =
        today.getFullYear() +
        '-' +
        (today.getMonth() + 1) +
        '-' +
        today.getDate();
      var time =
        today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds();
      var dateTime = date + ' ' + time;

      $('#newconfirmed').html(_newconfirmed);
      $('#cases').html(_cases);
      $('#newdeaths').html(_newdeaths);
      $('#deaths').html(_deaths);
      $('#covidlatest').html(formatDate(dateTime));
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(thrownError);
    },
  });

  function formatDate(date) {
    var d = new Date(date);
    var hh = d.getHours();
    var m = d.getMinutes();
    var s = d.getSeconds();
    var dd = 'AM';
    var h = hh;
    if (h >= 12) {
      h = hh - 12;
      dd = 'PM';
    }
    if (h == 0) {
      h = 12;
    }
    m = m < 10 ? '0' + m : m;

    s = s < 10 ? '0' + s : s;

    h = h < 10 ? '0' + h : h;

    var pattern = new RegExp('0?' + hh + ':' + m + ':' + s);
    return date.replace(pattern, h + ':' + m + ':' + s + ' ' + dd);
  }
});
