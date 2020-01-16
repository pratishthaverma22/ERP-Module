<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
											<script>
		function change_value(x)
		{
			var value = document.getElementById(x).value;
			var query = "UPDATE data SET status = '"+value+"' WHERE title = '"+x+"'";
			var httprequest = new XMLHttpRequest();
			httprequest.onreadystatechange = function()
			{
				if (this.readyState == 4 && this.status == 200) 
				{
				document.getElementById("try").innerHTML = this.responseText;
				}
			};
			httprequest.open("GET", "statuschange.php?q="+query, true);
			httprequest.send();
			}
		</script>
	</head>
	<body>
		<?php	
			session_start();
			$count=0;
			$user = 'root';
			$pass = '';
			$dbs = 'phpmyadmin';
			$sap_id = $_SESSION['sapid'];
			$db = mysqli_connect('localhost',$user,$pass,$dbs) or die("Unable to connect");
		?>
		<h3 style = "color:red">*Pending List of Publications</h3>
		<?php
			$query = "SELECT * FROM data WHERE status = \"Pending\""; 
			$result = mysqli_query($db,$query);
			$count = 0;
			if(!$result)
			{
				die("Unable to connect");
			}
			if(mysqli_num_rows($result)>0)
			{
		?>	
		<table style = "border:none">
			<tr>
				<th>S.NO.</th>
				<th>TITLE</th>
				<th>AUTHORS</th>
				<th>MONTH</th>
				<th>YEAR</th>
				<th></th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result))
				{
					$count++;
					$title = $row['title'];
					echo "<tr>";
						echo "<td width = \"5%\" align = \"center\">".$count."</td>";
						echo "<td width = \"35%\">".$title."</td>";
						echo "<td width = \"20%\">".$row['authors']."</td>";
						echo "<td width = \"10%\" align = \"center\">".$row['month']."</td>";
						echo "<td width = \"10%\" align = \"center\">".$row['year']."</td>";
						echo "<td width = \"10%\"><a href=\"details.php?title=$title\" target = \"_blank\">view details</a></td>";
						echo "<td width = \"10%\"><select name=\"status\" id=\"$title\" onchange=\"change_value(this.id)\">
													<option value=\"Pending\" select=\"selected\">Pending</option>
													<option value=\"Completed\">Completed</option></select>";?>
				
			
		<?php
					echo "</tr>";
				}
			?>
		</table>
		<?php
			}
			else
			{
				echo "<h4 style = \"color:blue\">You don't have any publication in this category!</h4>";
			}
		?>
		<div id="try">
		</div>
		
	</body>
</html>