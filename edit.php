<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<script>
			function load_blank_form(){
				document.getElementById("form").style.display="block";
				document.getElementById("form").innerHTML='<object data="form.php?title=""" ></object>';
			}
			function load_form(title){
				document.getElementById("form").style.display="block";
				document.getElementById("form").innerHTML='<object data='+"form.php?title="+title+x+'></object>';
			}
		</script>
	</head>
	<body>
		<?php	
			session_start();
			$user = 'root';
			$pass = '';
			$dbs = 'phpmyadmin';
			$db = mysqli_connect('localhost',$user,$pass,$dbs) or die("Unable to connect");
			$sap_id = $_SESSION['sapid'];
			$query = "SELECT title FROM data WHERE sap_id = $sap_id AND status=\"Pending\"";
			$result = mysqli_query($db,$query);
			if(!$result)
			{
				die("Unable to connect");
			}
				
		?>

		<table width = "100%">
			<tr>
				<th width = "75%">Edit following articles</th>
				<th width = "25%" align = "left"></th>
			</tr>
			<?php
				while($rows = mysqli_fetch_assoc($result))
				{
					
					 echo "<tr>";
						echo "<td>".$rows["title"]."</td>";
						$title = $rows["title"];
					    echo "<td><input type=\"button\" value = \"edit\" onclick=\"location.href='form1.php?title=$title'\">";
					echo "</tr>";
				}
				
			?>
		</table>
		<input type="button" value="Insert New Record" onclick="location.href='form.php'" name='insert'>
		<div id="form" style="height:85vh display:hidden">
			
			<!--<iframe name="editrorm" src="form.php" width="100%" height="100%"></iframe>-->
		</div>
	</body>
</html>