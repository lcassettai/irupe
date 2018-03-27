var jsonfile = {
   "jsonarray": [{
      "name": "Joe",
      "age": 12
   }, {
      "name": "Tom",
      "age": 14
   }, {
      "name": "Ron",
      "age": 14
   }, {
      "name": "Jacqueline",
      "age": 20
   }, {
      "name": "Luciano",
      "age": 30
   }]
};

var labels = jsonfile.jsonarray.map(function(e) {
   return e.name;
});

var data = jsonfile.jsonarray.map(function(e) {
   return e.age;
});;

var ctx = document.getElementById("myChart").getContext('2d');
var config = {
   type: 'line',
   data: {
      labels: labels,
      datasets: [{
         label: 'Graph Line',
         data: data,
         backgroundColor: 'rgba(0, 119, 204, 0.3)'
      }]
   }
};

var chart = new Chart(ctx, config);

var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Rectorado", "Economicas", "Tu mina", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# Cantidad de votos',
            data: [20, 19, 3, 5, 2, 3],
            backgroundColor: [
                '#ffabbd',
                '#7dc1f0',
                '#fff5dd',
                '#dbf2f2',
                '#ebe0ff',
                '#ffecd9'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var ctx = document.getElementById("myChart3").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Rectorado", "Economicas", "Tu mina", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# Cantidad de votos',
            data: [20, 19, 3, 5, 2, 3],
            backgroundColor: [
                '#ffabbd',
                '#7dc1f0',
                '#fff5dd',
                '#dbf2f2',
                '#ebe0ff',
                '#ffecd9'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var ctx = document.getElementById("myChart4").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ["Rectorado", "Economicas", "Tu mina", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# Cantidad de votos',
            data: [20, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
