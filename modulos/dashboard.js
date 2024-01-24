/* globals Chart:false */


(() => {
  'use strict'

  // Graphs

  const ctx = document.getElementById('myChart')

  // eslint-disable-next-line no-unused-vars
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Lunes',
        'Martes',
        'Miercoles',
        'Jueves',
        'Viernes',
        'Sabado',
        'Domingo'
      ],
      datasets: [{
        data: [
          100,
          90,
          80,
          70,
          60,
          50,
          40,
          30,
          20,
          10,
          0,
          -10,
          -20
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          boxPadding: 3
        }
      }
    }
  })
})()
