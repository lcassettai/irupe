<footer >
	<div class="text-center">
		<p>Sub Programa de Información <b>Area de Sistemas</b> - 2018</p>
	</div>
</footer>


<script src="<?php echo vendor_url();?>components/jquery/jquery.min.js"></script>
<script src="<?php echo vendor_url();?>twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
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
</script>
<script>
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
</script>

<script>
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
</script>

<script>
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
</script>
    </body>
</html>
