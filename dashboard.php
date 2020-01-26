<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
		<script src="charts.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet", type="text/css", href="./css/dashboard.css">
		<script>
			function load_page(page){
				$('#frame').css("display","block");
				$('#chart').css("display","none");
			$('#frame').load(page);
			}
			function load_chart(page)
			{
				$('#frame').css("display","none");
				$('#chart').css("display","block");
				$.ajax({
					url:page,
					complete: function (response) {
						var result = JSON.parse(response.responseText);
						for (var i in result.data) {
						color.push(dynamicColors());
						}
						var ctx = document.getElementById("myChart");
						var myChart = new Chart(ctx, {
							type: 'pie',
							data: {
								labels: result.labels,
								datasets: [{
									backgroundColor: color,
									data: result.data
								}]
							},
							options: options

						});
					},
					error: function () {
					 $('#myChart').html('Bummer: there was an error!');
				 },
				});
			}
		</script>
	</head>
	<body onload="load_page('view.php')">
		<?php
			session_start();
			$desig = $_SESSION['desig'];
		?>
		<div class="menu">
			<div class="col-1">
				<ul>
					<a style="float:left;color:white; margin-bottom: 7px; padding: 8px"><?php echo $_SESSION['sapid'] ?></a>
					<img src="./img/UPES_Logo.png" alt="www.upes.ac.in" width="160vh" height="50vh" style="margin-left:80vh;">
					<a style = "float:right; color:white;  margin-bottom: 7px; padding: 8px" href="login.php" class="button">Logout</a>
				</ul>
			</div>
		</div>
		<div class="menu">
			<div class="col-2">
			<ul>
					<li><a href="#" onclick="load_page('view.php')">View</a></li>
					<li><a href="#" onclick="load_page('edit.php')">Edit</a></li>
					<li><a href="#" onclick="load_chart('chart.php?tab=r')">Report</a></li>
					<?php
					if($desig=="HOD")
					{
					?>
					<li><a href="#" onclick="load_chart('chart.php?tab=tr')">Department Report</a></li>
					<?php
					}
					if($desig=="Assistant Dean")
					{
					?>
					<li><a href="#" onclick="load_page('status.php?tab=ad')">Status Review</a></li>
					<li><a href="#" onclick="load_chart('chart.php?tab=d')">Overall Report</a></li>
					<?php
					}
					if($desig=="Dean")
					{
					?>
					<li><a href="#" onclick="load_chart('chart.php?tab=d')">Overall Report</a></li>
					<?php
					}
					?>
			</ul>
			</div>
		</div>
		<div class="col-3" id="frame">
		</div>
		<div class="col-3" id="chart">
			<div class="chart">
				<canvas id='myChart' width='20px'></canvas>
			</div>
		</div>
	</body>
</html>
