<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			html,body {
				height: 100vh;
				overflow: auto;
			}
			* {
			  box-sizing: border-box;
			}

			.row::after {
			  content: "";
			  clear: both;
			  display: table;
			  border: solid black;
			}

			[class*="col-"] {
			  float: left;
			  padding: 10px;
			  border: solid black;
			}

			.col-1 {width: 8.33%;}
			.col-2 {width: 16.66%;}
			.col-3 {width: 25%;}
			.col-4 {width: 33.33%;}
			.col-5 {width: 41.66%;}
			.col-6 {width: 50%;}
			.col-7 {width: 58.33%;}
			.col-8 {width: 66.66%;}
			.col-9 {width: 75%;}
			.col-10 {width: 83.33%;
					}
			.col-11 {width: 91.66%;}
			.col-12 {width: 100%;}

			/*html {
			  font-family: "Lucida Sans", sans-serif;
			}*/

			.header {
			  background-color: #022251;
			  color: #ffffff;
			  padding: 15px;
			}

			.menu ul {
			  list-style-type: none;
			  margin: 0;
			  padding: 0;
			  disply:inline;
			}

			.menu li {
			  padding: 8px;
			  margin-bottom: 7px;
			  background-color: #33b5e5;
			  color: #ffffff;
			  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			}
			a:hover{
				background-color: #0099cc;
			}

			.menu li:hover {
			  background-color: #0099cc;
			}
			a{
				background-color: #33b5e5;
			}
			li a{

				display: block;
				color: white;
				text-align: center;
				padding: 16px;
				text-decoration: none;
			}
			object{
				width:100%;
				height:100%;
			}
			#frame{height:100vh;}
			a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
		</style>
		<script>
			function load_view(){
				document.getElementById("frame").innerHTML='<object data="view.php" ></object>';
			}
			function load_edit(){
				document.getElementById("frame").innerHTML='<object data="edit.php" ></object>';
			}
			function load_report(){
				document.getElementById("frame").innerHTML='<object data="report.php?tab=r" ></object>';
			}
			function load_manager_report(){
				document.getElementById("frame").innerHTML='<object data="report.php?tab=tr"></object>';
			}
			function load_admin_status(){
				document.getElementById("frame").innerHTML='<object data="status.php?tab=ad"></object>';
			}
			function load_admin_report(){
				document.getElementById("frame").innerHTML='<object data="adreport.php?tab=ad"></object>';
			}
		</script>
	</head>
	<body onload="load_view()">
		<?php
			session_start();
			$desig = $_SESSION['desig'];
		?>
		<div class="header">
			<img src="./img/UPES_Logo.png" alt="www.upes.ac.in" width="20%" height="24%">
		</div>
		<div class="row menu">
			<div class="col-12">
				<ul>
					<li style="float:left;color:white"><?php echo $_SESSION['sapid'] ?></li>
					<a style = "float:right; color:white;  margin-bottom: 7px; padding: 8px" href="login.php" class="button">Logout</a>
				</ul>
			</div>
		</div>
		<div class="row menu">
			<div class="col-2">
			<ul>
					<li><a href="#" onclick="load_view()">View</a></li>
					<li><a href="#" onclick="load_edit()">Edit</a></li>
					<li><a href="#" onclick="load_report()">Report</a></li>
					<?php
					if($desig=="Manager")
					{
					?>
					<li><a href="#" onclick="load_manager_report()">Team Report</a></li>
					<?php
					}
					if($desig=="Administrator")
					{
					?>
					<li><a href="#" onclick="load_admin_status()">Status Review</a></li>
					<li><a href="#" onclick="load_admin_report()">Overall Report</a></li>
					<?php
					}
					?>
			</ul>
			</div>
			<div class="col-10" id="frame" src="view.php">

			</div>
		</div>
	</body>
</html>
