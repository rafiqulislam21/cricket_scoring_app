<!DOCTYPE html>
<html>
<head>
	<title>Matches</title>
	<!-- css links -->
	@include('partials.css')
</head>
<body>
	@include('partials.headerUser')

	<div class="container">
  <div class="bg-light">
    <h3 class="text-center">Live Score</h3>
    <p class="text-center">BAN(122/3) vs ENG <br> <small class="text-muted">(Bangladesh won the toss and decided to bat)</small></p>
     <div class="sharethis-inline-share-buttons"></div>

     <div class="button-group mt-5 pl-3">
      <button class="btn btn-light border" onclick="score()"><img src="img/scoreboard.png"> <br>Score Board</button>
       <button class="btn btn-light border" onclick="showBar()"><img src="img/line-chart.png"> <br>Warm up</button>
       <button class="btn btn-light border"  onclick="showBar()"><img src="{{asset('img/bar-chart.png')}}"> <br>player vs player</button>
       <button class="btn btn-light border"  onclick="showLine()"> <img src="{{asset('img/charts.png')}}"> <br>Run rate</button>
         <button class="btn btn-light border"  onclick="showLine()"><img src="{{asset('img/bar-chart_hr.png')}}"> <br>type of run</button>
        <button class="btn btn-light border" onclick="showPie()"><img src="{{asset('img/pie-chart1.png')}}"> <br>Wicket pie</button>


     </div>
  </div>
  <div class="container" id="score" >
		<div>
				<h3 class="text-center">Batting Details</h3>
				<div class="container-fluid bg-light">
				<div class="row">
						<div class="table-responsive overflow-auto" style="height:300px;">
						<table class="table shadow-sm table-striped">
								<thead class="thead bg-info text-white">
								<tr>
								<th>Batsmen</th>
								<th>Bowler</th>
								<th>Runs</th>
								<th>Balls</th>
								<th>4's</th>
								<th>6's</th>
								<th>SR</th>

								</tr>
								</thead>
								<tbody>

						 <tr>
								<th>Mehedi hasan</th>
								<th>Not Out</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>

								</tr>
								<tr>
								<th>Ibrahim sarker</th>
								<th>Not Out</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>

								</tr>
								<tr>
								<th>Arif hossain</th>
								<th>Not Out</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>

								</tr>
								<tr>
								<th>pappu hasan</th>
								<th>Not Out</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>

								</tr>
								<tr>
								<th>Hasan</th>
								<th>Not Out</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>

								</tr>
								<tr>
								<th>Miraz</th>
								<th>Not Out</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>

								</tr>
								<tr>
								<th>Rubel rana</th>
								<th>Not Out</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>

								</tr>
								<tr>
								<th>Musfiq</th>
								<th>Not Out</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>

								</tr>
								<tr>
								<th>Shakib</th>
								<th>Not Out</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>

								</tr>
								<tr>
								<th>Mamun hasan</th>
								<th>Not Out</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>
								<th>0</th>

								</tr>

								<tr>
										<th>Extra</th>
										 <th>(w3)</th>
										 <th>0</th>
								</tr>

						</tbody>
			</table>
		</div>
				</div>

		 </div>

		</div>

    <!-- End batting -->

		<div class="row  shadow-sm font-weight-bold pl-3 mb-2">
			<div class="col-md-12 text-center"><h1>Tiger 11: 00/0 (0.0 over)</h1>
			<br><br>

			</div>

		</div>
		<h2 class="text-center">Bowling details</h2>
		<div class="table-responsive overflow-auto" style="height:300px;">
		<table class="table shadow-sm table-striped">
				<thead class="thead bg-info text-white">
				<tr>
				<th>Bowler</th>
				<th>Over</th>
				<th>Runs</th>
				<th>Maiden</th>
				<th>Wickets</th>
				<th>Wide</th>
				<th>No Ball</th>
				<th>Dots</th>

				</tr>
				</thead>
				<tbody>

		 <tr>
				<th>Bijoy</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>
		 <tr>
				<th>Sohel rana</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>
		 <tr>
				<th>Nahin hossain</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>
		 <tr>
				<th>pappu</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>
		 <tr>
				<th>Masud rana</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>
		 <tr>
				<th>Zisan hasan</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>
		 <tr>
				<th>Rahim</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>
		 <tr>
				<th>Nafis Adil</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>
		 <tr>
				<th>Mustasim khandakar</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>
		 <tr>
				<th>Rakibul islam</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>
		 <tr>
				<th>Arafat hossain</th>
				<th>0.0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
		 </tr>

		</tbody>
</table>
</div>
    <!-- End bowling -->
  </div>
      <canvas id="myChart" width="400" height="100" style="position: absolute;" ></canvas>
</div>


		<!-- js links-->
		@include('partials.js')

		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
		<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d3bd93a9b66a800129239e3&product='inline-share-buttons' async='async'></script>
		<script>
    function score(){

document.getElementById('score').style.display="block";


    }
  function showBar() {
    document.getElementById('score').style.display="none";

    var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
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
                    beginAtZero: true
                }
            }]
        }
    }
});
  }

function showPie() {
     document.getElementById('score').style.display="none";
    var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
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
                    beginAtZero: true
                }
            }]
        }
    }
});
  }

  function showLine() {
    document.getElementById('score').style.display="none";
    var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
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
                    beginAtZero: true
                }
            }]
        }
    }
});
  }

</script>
	</body>
	</html>
